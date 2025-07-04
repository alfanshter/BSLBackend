<?php

namespace App\Http\Controllers;

use App\Models\Sib;
use App\Models\Jsarev;
use Illuminate\Support\Str;
use App\Models\AarJobSafety;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\JobSafetyAnalysis;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class JobController extends Controller
{
    //
    public function index()
    {
        if (Auth::check()) {
            $sibs = Sib::all();
            return view('job.index', compact('sibs'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    public function rev()
    {
        if (Auth::check()) {
            $data = Jsarev::all(); // Akan tetap mengirimkan koleksi, meskipun kosong
            return view('job.rev', compact('data'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }


    public function jsapost(Request $request)
    {
        // Validasi input
        $request->validate([
            'file' => 'required|mimes:pdf,doc,docx,xls,xlsx|max:2048', // Maksimal 2MB
        ], [
            'file.required' => 'File wajib diunggah.',
            'file.mimes' => 'File harus dalam format PDF, Word (doc/docx), atau Excel (xls/xlsx).',
            'file.max' => 'Ukuran file maksimal adalah 2MB.',
        ]);

        // Simpan file
        $filename = pathinfo($request->file('file')->getClientOriginalName(), PATHINFO_FILENAME);

        // Ambil ekstensi file
        $extension = $request->file('file')->getClientOriginalExtension();

        // Format waktu sekarang
        $waktusekarang = now()->format('dmY-H_i'); // Ganti ":" dengan "_"

        // Gabungkan nama file, waktu, dan ekstensi
        $customFileName = $filename . '(' . $waktusekarang . ').' . $extension;

        // Simpan file dengan nama yang dihasilkan
        $filePath = $request->file('file')->storeAs('public/docs', $customFileName);

        // Simpan data ke database
        Jsarev::create([
            'file' => $customFileName, // Simpan nama file lengkap dengan ekstensi
            'user_id' => auth()->id(),
        ]);

        return back()->withSuccess('Upload file berhasl');
    }


    public function deleteRev($id)
    {
        $data = Jsarev::find($id);

        if (!$data) {
            return back()->withError('File tidak ditemukan.');
        }

        // Path file di storage dan public
        $filePaths = [
            storage_path('/app/public/docs/' . $data->file), // Path di storage
            public_path('storage/docs/' . $data->file)     // Path di public
        ];

        // Hapus file jika ada
        $deleted = false;
        foreach ($filePaths as $path) {
            if (file_exists($path)) {
                unlink($path); // Hapus file
                $deleted = true;
            }
        }

        if ($deleted) {
            // Hapus data dari database
            $data->delete();
            return back()->withSuccess('File berhasil dihapus.');
        } else {
            return back()->withError('File tidak ditemukan.');
        }
    }

    public function editRev(Request $request, $id)
    {
        // Validasi input jika file di-upload
        $request->validate([
            'file' => 'nullable|mimes:pdf,doc,docx,xls,xlsx|max:2048', // Maksimal 2MB
        ], [
            'file.required' => 'File wajib diunggah.',
            'file.mimes' => 'File harus dalam format PDF, Word (doc/docx), atau Excel (xls/xlsx).',
            'file.max' => 'Ukuran file maksimal adalah 2MB.',
        ]);

        // Temukan data berdasarkan ID
        $data = Jsarev::find($id);

        // Jika data tidak ditemukan
        if (!$data) {
            return back()->withError('Data dengan ID ' . $id . ' tidak ditemukan.');
        }

        // Jika tidak ada file yang di-upload, gunakan kondisi untuk menangani
        if ($request->hasFile('file')) {
            // Hapus file lama jika ada
            $oldFilePaths = [
                storage_path('app/public/docs/' . $data->file), // Path di storage
                public_path('storage/docs/' . $data->file)     // Path di public
            ];

            foreach ($oldFilePaths as $path) {
                if (file_exists($path)) {
                    unlink($path); // Hapus file lama
                }
            }

            // Simpan file baru
            $filename = pathinfo($request->file('file')->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $request->file('file')->getClientOriginalExtension();
            $waktusekarang = now()->format('dmY-H_i'); // Ganti ":" dengan "_"
            $newFileName = $filename . '(' . $waktusekarang . ').' . $extension;

            // Menyimpan file ke storage
            $request->file('file')->storeAs('public/docs', $newFileName);

            // Perbarui data di database dengan file baru
            $data->file = $newFileName;
            $data->save();
        }

        return redirect('/job-safety-analysis-rev')->withSuccess('File berhasil diperbarui.');
    }

    public function create(Request $request)
    {
        if (Auth::check()) {
            $val = Cookie::get('kode_aar');
            $data = AarJobSafety::where('kode', $val)->get();
            if ($request->ajax()) {
                return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', 'usergroup.action')
                    ->rawColumns(['action'])
                    ->make(true);
            }
            return view('job.create', [
                'kode' => $val
            ]);
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function storeAar(Request $request)
    {
        if (Auth::check()) {
            $aar = AarJobSafety::updateOrCreate(
                [
                    'id' => $request->id
                ],
                [
                    "date" => $request->date,
                    "sequence_of_job_step" => $request->sequence_of_job_step,
                    "potential_hazard" => $request->potential_hazard,
                    "reduce_potential" => $request->reduce_potential,
                    "pic" => $request->pic,
                    "kode" => $request->kode
                ]
            );
            return response()->json($aar);
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function store(Request $request)
    {
        if (Auth::check()) {
            $validatedData = $request->validate([
                'ref_id' => 'required|max:255',
                'job_title' => 'required|max:255',
                'team_work' => 'required|max:255',
                'work_location' => 'required|max:255',
                'number' => 'required|max:255',
            ]);
            $dataaar = DB::table('aar_job_safeties')->select('id')->where('kode', $request->kode)->get();
            $json = json_decode($dataaar, true);
            $output = implode(',', collect($json)->map(fn($item) => $item['id'])->all());
            JobSafetyAnalysis::create([
                'ref_id' => $request->ref_id,
                'job_title' => $request->job_title,
                'team_work' => $request->team_work,
                'work_location' => $request->work_location,
                'number_personal_working' => $request->number,
                'every_one_capable_to_work' => $request->cqfp,
                'potensi_tumpahan' => $request->cqpt,
                'work_case' => $request->cqwc,
                'id_aar' => $output,
                'ppe' => implode(',', $request->cb_ppe),
                'kode' => $request->kode,
                'user_created' => auth()->user()->name,
                'status' => '1'
            ]);
            Cookie::forget('kode_aar');
            return redirect('/job-safety-analysis')->with('success', 'Job Safety Analysis Created');
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }


    public function update(Request $request)
    {
        if (Auth::check()) {
            $dataaar = DB::table('aar_job_safeties')->select('id')->where('kode', $request->kode)->get();
            $json = json_decode($dataaar, true);
            $output = implode(',', collect($json)->map(fn($item) => $item['id'])->all());
            $user = JobSafetyAnalysis::where('id', $request->id)->update([
                'ref_id' => $request->ref_id,
                'job_title' => $request->job_title,
                'team_work' => $request->team_work,
                'work_location' => $request->work_location,
                'number_personal_working' => $request->number,
                'every_one_capable_to_work' => $request->cqfp,
                'potensi_tumpahan' => $request->cqpt,
                'work_case' => $request->cqwc,
                'ppe' => implode(',', $request->cb_ppe),
                'id_aar' => $output,
                'status' => '1'
            ]);

            return redirect('/job-safety-analysis')->with('success', 'Job Safety Analysis Updated');
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function downloadJSa($id)
    {
        $filePath = storage_path("app/public/docs/");

        // Cek apakah file ada
        if (file_exists($filePath)) {
            return response()->download($filePath);
        } else {
            return redirect()->back()->with('error', 'File tidak ditemukan.');
        }
    }

    //yang lama

    public function updateAar(Request $request)
    {
        if (Auth::check()) {
            $where = array('id' => $request->id);
            $company  = AarJobSafety::where($where)->first();
            return Response()->json($company);
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    public function destroy($id)
    {
        if (Auth::check()) {
            $sib = Sib::findOrFail($id);
            $sib->delete();
            notify()->success('Successfully added');

            return redirect()->route('suratijin');
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function destroyAar(Request $request)
    {
        if (Auth::check()) {
            $post = AarJobSafety::where('id', $request->id)->first();
            if ($post) {
                $post->delete();
                return response()->json($post);
            }
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function editAddAar(Request $request)
    {
        AarJobSafety::create([
            "date" => $request->date,
            "sequence_of_job_step" => $request->sequence_of_job_step,
            "potential_hazard" => $request->potential_hazard,
            "reduce_potential" => $request->reduce_potential,
            "pic" => $request->pic,
            "kode" => $request->kode
        ]);
        return redirect()->back()->withInput();
    }

    public function editupdateAar(Request $request)
    {
        if (Auth::check()) {
            $company  = AarJobSafety::where('id', $request->editid)->update([
                "date" => $request->editdate,
                "sequence_of_job_step" => $request->editsequence_of_job_step,
                "potential_hazard" => $request->editpotential_hazard,
                "reduce_potential" => $request->editreduce_potential,
                "pic" => $request->editpic,
                "kode" => $request->editkode
            ]);
            return redirect()->back()->withInput();
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function editdestroyAar($id)
    {
        if (Auth::check()) {
            AarJobSafety::destroy($id);
            return redirect()->back()->withInput();
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function export($id)
    {
        $job = JobSafetyAnalysis::find($id);
        dd($job);
        $aar = AarJobSafety::where('kode', $job->kode)->get();
        $paper = array(0, 0, 794, 1247);

        $pdf = Pdf::loadView('job.export', [
            'job' => $job,
            'ppe' => explode(',', $job->ppe),
            'aar' => $aar
        ])->setPaper($paper);
        return $pdf->download('Job-Safety-Analysis.pdf');
        // return view('job.export');
    }
}
