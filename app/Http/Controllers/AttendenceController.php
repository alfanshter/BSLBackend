<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Report;
use App\Models\UserGroup;
use Illuminate\Http\Request;
use App\Exports\ReportExport;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;
use Intervention\Image\ImageManagerStatic as Image;


class AttendenceController extends Controller
{
    public function index()
    {
        if (Auth::check()) {

            $report = DB::table('reports')
                ->join('users', 'users.id', '=', 'reports.id_user')
                ->join('groupusers', 'groupusers.id', '=', 'users.grup_id')
                ->orderBy('date', 'desc')
                ->select('reports.*', 'users.name', 'groupusers.nama_grup')->paginate(10);
            $overtime = Report::sum('overtime');

            $id_user = null;
            $starts_at = null;
            $ends_at = null;

            $data = [
                'attendence' => $report,
                'grup' => User::all(),
                'id_user' => $id_user,
                'overtime' => $overtime,
                'starts_at' => $starts_at,
                'ends_at' => $ends_at
            ];

            return view('attendence.index', $data);
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }


    public function filter(Request $request)
    {
        $starts_at = $request->input('starts_at');
        $ends_at = $request->input('ends_at');
        $id_user = $request->input('user_id');
        if ($id_user != "") {
            $report = Report::with('user:id,name,email')
                ->where('id_user', $id_user)
                ->whereBetween('date', [$starts_at, $ends_at])
                ->paginate(10);

            $overtime = Report::where('id_user', $id_user)
                ->whereBetween('date', [$starts_at, $ends_at])
                ->sum('overtime');
        } else {

            $report = Report::with('user:id,name,email')
                ->whereBetween('date', [$starts_at, $ends_at])
                ->paginate(10);

            $overtime = Report::whereBetween('date', [$starts_at, $ends_at])
                ->sum('overtime');
        }

        return view('attendence.index', [
            'attendence' => $report,
            'grup' => User::all(),
            'starts_at' => $starts_at,
            'ends_at' => $ends_at,
            'id_user' => $id_user,
            'overtime' => $overtime,

        ]);
    }



    public function checkin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_user' => 'required',
            'address_in' => 'required',
            'picture_in' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'latitude_in' => 'nullable|numeric',
            'longitude_in' => 'nullable|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        // Cek apakah user sudah check-in hari ini
        $existing = Report::where('id_user', $request->id_user)
            ->where('date', date('Y-m-d'))
            ->first();

        if ($existing) {
            return response()->json([
                'message' => 'Anda sudah melakukan check-in hari ini.',
                'sukses' => 0,
                'data' => null
            ], Response::HTTP_CREATED);
        }

        // Handle picture_in
        $fotoName = null;
        if ($request->hasFile('picture_in')) {
            $foto = $request->file('picture_in');
            $fotoName = time() . '.' . $foto->getClientOriginalExtension();

            $img = Image::make($foto->path());
            $img->resize(null, 200, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            $destinationPath = public_path('/storage/foto/' . $fotoName);
            $img->save($destinationPath);
        }

        // Proses check-in
        date_default_timezone_set('Asia/Jakarta');

        $data = [
            'id_user' => $request->id_user,
            'check_in' => date('Y-m-d H:i:s'),
            'date' => date('Y-m-d'),
            'picture_in' => $fotoName ? 'foto/' . $fotoName : null,
            'latitude_in' => $request->latitude_in,
            'longitude_in' => $request->longitude_in,
            'address_in' => $request->address_in,
        ];

        $report = Report::create($data);

        return response()->json([
            'message' => 'Check-in berhasil.',
            'sukses' => 1,
            'data' => $report
        ], Response::HTTP_CREATED);
    }

    public function checkout(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_user' => 'required',
            'picture_out' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'latitude_out' => 'nullable|numeric',
            'longitude_out' => 'nullable|numeric',
        ]);
    
        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
    
        $cekabsen = Report::where('id_user', $request->id_user)
            ->where('date', date('Y-m-d', time()))
            ->first();
    
        if ($cekabsen != null) {
            if ($cekabsen->check_out != null) {
                return response()->json([
                    'message' => 'Anda sudah melakukan check-out hari ini.',
                    'sukses' => 2,
                    'data' => null
                ], Response::HTTP_CREATED);
            } else {
                $data = $request->all();
    
                // Tambahkan data lokasi
                $data['latitude_out'] = $request->latitude_out;
                $data['longitude_out'] = $request->longitude_out;
    
                if ($request->overtime) {
                    $data['overtime'] = (int) $request->overtime;
                }
    
                if ($request->file('picture_out')) {
                    $foto = $request->file('picture_out');
                    $fotoName = time() . '.' . $foto->getClientOriginalExtension();
    
                    $img = Image::make($foto->path());
                    $img->resize(null, 200, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    });
    
                    $destinationPath = public_path('/storage/foto/' . $fotoName);
                    $img->save($destinationPath);
    
                    $data['picture_out'] = 'foto/' . $fotoName;
                }
    
                date_default_timezone_set('Asia/Jakarta');
                $data['check_out'] = date('Y-m-d H:i:s', time());
    
                Report::where('id', $cekabsen->id)->update($data);
    
                return response()->json([
                    'message' => 'Check-out berhasil.',
                    'sukses' => 1,
                    'data' => $data
                ], Response::HTTP_CREATED);
            }
        } else {
            return response()->json([
                'message' => 'Anda belum melakukan check-in hari ini.',
                'sukses' => 0,
                'data' => null
            ], Response::HTTP_CREATED);
        }
    }
    
    public function attendenceApi(Request $request)
    {
        $data = Report::where('id_user', $request->input('id_user'))
        ->with('user')
        ->get();
        $response = [
            'message' => 'success',
            'sukses' => 1,
            'data' => $data
        ];

        return response()->json($response, Response::HTTP_CREATED);
    }

    public function print_attendence(Request $request)
    {
        $name = 'attendence' . date('Ymd') . '.pdf';
        $overtime = 0;

        // Query dasar
        $query = Report::with('user:id,name,email');

        // Filter berdasarkan id_user jika ada
        if ($request->id_user) {
            $query->where('id_user', $request->id_user);
        }

        // Filter berdasarkan tanggal jika ada
        if ($request->starts_at && $request->ends_at) {
            $query->whereBetween('date', [$request->starts_at, $request->ends_at]);
        }

        // Ambil data
        $report = $query->orderBy('date', 'desc')->get();

        // Hitung overtime
        $overtime = $query->sum('overtime');

        // Load view PDF dengan data
        $pdf = Pdf::loadview('attendence.print', [
            'attendence' => $report,
            'starts_at' => $request->starts_at,
            'ends_at' => $request->ends_at,
            'overtime' => $overtime,
        ]);

        $pdf->setPaper('A4', 'portrait');
        return $pdf->stream();
    }

    public function export(Request $request)
    {
        $name = 'attendence' . date('Ymd') . '.xlsx';
        return (new ReportExport($request->grup_id, $request->starts_at, $request->ends_at))->download($name);
    }
    public function overtime(Request $request)
{
    $validator = Validator::make($request->all(), [
        'id_user' => 'required',
        'id_tl' => 'required',
        'overtime_reason' => 'required|string',
        'overtime' => 'required|numeric|max:24',
        'latitude_lembur' => 'required|numeric',
        'longitude_lembur' => 'required|numeric',
        'address_lembur' => 'required|string',
    ]);

    if ($validator->fails()) {
        return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
    }

    $cekabsen = Report::where('id_user', $request->id_user)
        ->where('date', date('Y-m-d'))
        ->first();

    if (!$cekabsen) {
        return response()->json([
            'message' => 'Anda belum melakukan check-in hari ini.',
            'sukses' => 0,
            'data' => null
        ], Response::HTTP_CREATED);
    }

    if ($cekabsen->overtime) {
        return response()->json([
            'message' => 'Anda sudah absen lembur.',
            'sukses' => 0,
            'data' => null
        ], Response::HTTP_CREATED);
    }

    if (is_null($cekabsen->check_in) || is_null($cekabsen->check_out)) {
        return response()->json([
            'message' => 'Anda harus check-in dan check-out terlebih dahulu.',
            'sukses' => 0,
            'data' => null
        ], Response::HTTP_CREATED);
    }

    // Simpan data lembur
    $data = [
        'overtime_reason'   => $request->overtime_reason,
        'id_tl'             => $request->id_tl,
        'overtime'          => (float) $request->overtime,
        'latitude_lembur'   => $request->latitude_lembur,
        'longitude_lembur'  => $request->longitude_lembur,
        'address_lembur'    => $request->address_lembur,
    ];

    $cekabsen->update($data);

    return response()->json([
        'message' => 'Data lembur berhasil disimpan.',
        'sukses' => 1,
        'data' => $data
    ], Response::HTTP_CREATED);
}

    
}
