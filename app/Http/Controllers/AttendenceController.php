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
        // Cek absen apakah sudah ada
        $cekabsen = Report::where('id_user', $request->id_user)
            ->where('date', date('Y-m-d', time()))
            ->first();
        if ($cekabsen != null) {
            $response = [
                'message' => 'Anda sudah melakukan check-in hari ini.',
                'sukses' => 0,
                'data' => null
            ];
            return response()->json($response, Response::HTTP_CREATED);
        }

        // Validasi input
        $validator = Validator::make($request->all(), [
            'id_user' => 'required',
            'address_in' => 'nullable|string', // Alamat check-in
            'picture_in' => 'nullable|image|mimes:jpg,png,jpeg|max:5120', // Validasi format dan ukuran file
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $data = $request->all();

        // Proses upload dan kompresi gambar
        if ($request->file('picture_in')) {
            $foto = $request->file('picture_in');

            // Ambil nama asli file
            $originalName = $foto->getClientOriginalName(); // Nama file dengan ekstensi

            // Proses kompresi gambar
            $img = Image::make($foto->path());
            $img->resize(null, 200, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            // Simpan gambar ke folder public/storage/foto
            $destinationPath = public_path('/storage/foto/' . $originalName);
            $img->save($destinationPath);

            // Simpan path gambar ke database
            $data['picture_in'] = 'foto/' . $originalName;
        }

        // Set waktu dan tanggal
        date_default_timezone_set('Asia/Jakarta');
        $data['date'] = date('Y-m-d', time());
        $data['check_in'] = date('Y-m-d H:i:s', time());

        // Simpan data ke database
        $user = Report::create($data);

        $response = [
            'message' => 'Check-in berhasil.',
            'sukses' => 1,
            'data' => $data
        ];

        return response()->json($response, Response::HTTP_CREATED);
    }

    public function checkout(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_user' => 'required',
            'address_out' => 'nullable|string', // Alamat check-out
            'picture_out' => 'nullable|image|mimes:jpg,png,jpeg|max:2048', // Validasi untuk gambar check-out
            'overtime' => 'nullable|numeric', // Validasi overtime
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        // Cek apakah ada data check-in hari ini
        $cekabsen = Report::where('id_user', $request->id_user)
            ->where('date', date('Y-m-d', time()))
            ->first();

        if ($cekabsen != null) {
            // Jika sudah check-out sebelumnya
            if ($cekabsen->check_out != null) {
                $response = [
                    'message' => 'Anda sudah melakukan check-out hari ini.',
                    'sukses' => 2,
                    'data' => null
                ];
                return response()->json($response, Response::HTTP_CREATED);
            } else {
                // Proses check-out
                $data = $request->all();

                // Handle overtime
                if ($request->overtime) {
                    $data['overtime'] = (int)$request->overtime;
                }

                // Handle picture_out
                if ($request->file('picture_out')) {
                    $foto = $request->file('picture_out');
                    $fotoName = time() . '.' . $foto->getClientOriginalExtension(); // Nama file unik

                    // Kompresi gambar
                    $img = Image::make($foto->path());
                    $img->resize(null, 200, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    });

                    // Simpan gambar ke folder public/storage/foto
                    $destinationPath = public_path('/storage/foto/' . $fotoName);
                    $img->save($destinationPath);

                    // Simpan path gambar ke database
                    $data['picture_out'] = 'foto/' . $fotoName;
                }

                // Set waktu check-out
                date_default_timezone_set('Asia/Jakarta');
                $data['check_out'] = date('Y-m-d H:i:s', time());

                // Update data check-out ke record yang sama dengan check-in
                Report::where('id', $cekabsen->id)->update($data);

                $response = [
                    'message' => 'Check-out berhasil.',
                    'sukses' => 1,
                    'data' => $data
                ];

                return response()->json($response, Response::HTTP_CREATED);
            }
        } else {
            // Jika belum check-in sama sekali
            $response = [
                'message' => 'Anda belum melakukan check-in hari ini.',
                'sukses' => 0,
                'data' => null
            ];

            return response()->json($response, Response::HTTP_CREATED);
        }
    }
    public function attendenceApi(Request $request)
    {
        $data = Report::where('id_user', $request->input('id_user'))->get();
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
        if ($request->starts_at != null && $request->ends_at != null && $request->grup_id != null) {

            $report = Report::with('user:id,name,email')
                ->where('id_user', $request->id_user)
                ->whereBetween('date', [$request->starts_at, $request->ends_at])
                ->orderBy('date', 'desc')
                ->paginate(10);

            $overtime = Report::where('id_user', $request->id_user)
                ->whereBetween('date', [$request->starts_at, $request->ends_at])
                ->sum('overtime');

            $pdf = Pdf::loadview('attendence.print', [
                'attendence' => $report,
                'starts_at' => $request->starts_at,
                'ends_at' => $request->ends_at,
                'overtime' => $overtime,
            ]);
            $pdf->setPaper('A4', 'potrait');
            // return $pdf->download($name);
            return $pdf->stream();
        } else if ($request->starts_at != null && $request->ends_at != null) {

            $report = Report::with('user:id,name,email')
                ->where('id_user', $request->id_user)
                ->whereBetween('date', [$request->starts_at, $request->ends_at])
                ->orderBy('date', 'desc')
                ->paginate(10);

            $overtime = Report::where('id_user', $request->id_user)
                ->whereBetween('date', [$request->starts_at, $request->ends_at])
                ->sum('overtime');


            $pdf = Pdf::loadview('attendence.print', [
                'attendence' => $report,
                'starts_at' => $request->starts_at,
                'ends_at' => $request->ends_at,
                'overtime' => $overtime
            ]);
            $pdf->setPaper('A4', 'potrait');
            // return $pdf->download($name);
            return $pdf->stream();
        } else {


            $report = Report::with('user:id,name,email')
                ->where('id_user', $request->id_user)
                ->orderBy('date', 'desc')
                ->paginate(10);

            $overtime = Report::where('id_user', $request->id_user)
                ->sum('overtime');

            $pdf = Pdf::loadview('attendence.print', [
                'attendence' => $report,
                'starts_at' => null,
                'ends_at' => null,
                'overtime' => $overtime

            ]);
            $pdf->setPaper('A4', 'potrait');
            // return $pdf->download($name);
            return $pdf->stream();
        }
    }

    public function export(Request $request)
    {
        $name = 'attendence' . date('Ymd') . '.xlsx';
        return (new ReportExport($request->grup_id, $request->starts_at, $request->ends_at))->download($name);
    }
}
