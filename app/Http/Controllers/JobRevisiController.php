<?php

namespace App\Http\Controllers;

use App\DataTables\Filejsa;
use App\Models\Jsarev;
use App\Models\UserGroup;
use App\DataTables\UserGroupDataTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DataTables;

class JobRevisiController extends Controller
{

    // public function index(UserGroupDataTable $usergroupdatatable)
    // {
    //     return $usergroupdatatable->render('usergroup.index');
    //     // return view('usergroup.index');
    // }

    public function index(Request $request)
    {

        if (Auth::check()) {
            if ($request->ajax()) {
                $data = Jsarev::with('user')->select('id', 'file', 'user_id', 'created_at')->get();
                return DataTables::of($data)
                    ->addColumn('user_id', function ($jsarev) {
                        return $jsarev->user->name; // Mengambil nama user dari relasi
                    })
                    ->addColumn('action', function ($jsarev) {
                        return view('job.action', compact('jsarev'))->render();
                    })->addColumn('file', function ($jsarev) {
                        return basename($jsarev->file); // Ambil hanya nama file
                    })
                    ->addColumn('created_at', function ($jsarev) {
                        return $jsarev->created_at->format('d-m-Y H:i:s'); // Mengambil dan menampilkan created_at
                    })
                    ->make(true);
            }
            return view('job.rev');
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    // public function index(Request $request)
    // {
    //     if (Auth::check()) {
    //         if ($request->ajax()) {
    //             $data = Jsarev::all(); // Ambil semua data
    //             return FacadesDataTables::of($data)
    //                 ->addIndexColumn()
    //                 ->addColumn('action', 'jsarev.action') // Menambahkan kolom aksi
    //                 ->rawColumns(['action'])
    //                 ->make(true); // Mengembalikan data dalam format yang bisa dipahami DataTables
    //         }
    //         return view('job.rev'); // Jika bukan AJAX, kembalikan view biasa
    //     }
    //     return redirect("login")->withSuccess('You are not allowed to access');
    // }


    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'file' => 'required|file|mimes:docx,xls,xlsx,pdf,doc|max:51200', // File wajib diisi
        ]);

        if (Auth::check()) {
            // Proses file
            $newFileName = null;
            if ($request->hasFile('file')) {
                $file = $request->file('file');

                // Ambil nama file asli tanpa ekstensi
                $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);

                // Tambahkan timestamp ke nama file
                $timestamp = now()->format('Ymd_His'); // Format: TahunBulanTanggal_JamMenitDetik

                // Gabungkan nama file dengan timestamp dan ekstensi
                $newFileName = "{$originalName}({$timestamp}).{$file->getClientOriginalExtension()}";

                // Simpan file ke direktori storage/app/docs
                $file->storeAs('docs', $newFileName);
            }

            // Simpan data ke database
            $jsarev = Jsarev::create([
                'file' => $newFileName, // Simpan hanya nama file
                'user_id' => Auth::id(), // ID user yang sedang login
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return response()->json([
                'message' => 'File uploaded successfully.',
                'data' => $jsarev,
                'status' => 1,
                'file_url' => asset('storage/docs/' . $newFileName), // URL file
            ]);
        }

        return response()->json(['message' => 'You are not allowed to access.'], 403);
    }



    public function edit(Request $request)
    {
        // Validasi data
        $request->validate([
            'id' => 'required|exists:jsarevs,id', // Pastikan ID ada di database
            'file' => 'required|file|mimes:pdf,doc,docx,xls,xlsx|max:2048', // Validasi file baru
        ]);

        // Temukan data berdasarkan ID
        $data = Jsarev::findOrFail($request->id);

        // Hapus file lama jika ada
        $oldFilePath = storage_path('app/public/docs/' . $data->file);
        if (file_exists($oldFilePath)) {
            unlink($oldFilePath); // Hapus file lama dari storage
        }

        // Simpan file baru
        $filename = pathinfo($request->file('file')->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $request->file('file')->getClientOriginalExtension();
        $newFileName = $filename . '(' . now()->format('dmY-H_i') . ').' . $extension;

        // Simpan file ke storage
        $request->file('file')->storeAs('public/docs', $newFileName);

        // Update nama file di database
        $data->file = $newFileName;
        $data->save();

        return response()->json(['message' => 'File berhasil diperbarui','status' => 1], 200);
    }

    public function delete($id)
    {
        $jsarev = Jsarev::find($id);
        if (!$jsarev) {
            return response()->json(['message' => 'Data not found.'], 404);
        }

        // Hapus file dari direktori storage/app/docs
        if ($jsarev->file && file_exists(storage_path('app/docs/' . $jsarev->file))) {
            unlink(storage_path('app/docs/' . $jsarev->file)); // Hapus file
        }

        // Hapus data dari database
        $jsarev->delete();

        return response()->json(['message' => 'Data and associated file deleted successfully.']);
    }

    public function create_col(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'id' => 'nullable|integer',
            'file' => 'nullable|string',
        ]);

        // Buat atau perbarui data
        $grup = Jsarev::updateOrCreate(
            [
                'id' => $validatedData['id'] ?? null, // ID opsional
            ],
            [
                'file' => $validatedData['file'],         // Nama file
                'user_created' => "kdjfkdjf",            // Contoh user_created (hardcoded)
                'user_updated' => "gdhewhdj",            // Contoh user_updated (hardcoded)
            ]
        );

        // Return data dalam format JSON
        return response()->json([
            'message' => 'Data created/updated successfully.',
            'data' => $grup, // Data yang akan dikirim ke frontend
        ]);
    }

    public function getFileGroup()
    {
        // Ambil data dari database, misalnya tabel 'user_groups'
        $data = Jsarev::select('id', 'file', 'created_at')->get();

        // Mengembalikan data dalam bentuk JSON untuk digunakan di DataTables
        return response()->json(['data' => $data]);
    }
}
