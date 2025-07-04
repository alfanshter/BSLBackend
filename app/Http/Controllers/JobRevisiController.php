<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;
use App\Models\Jsarev;
use App\Models\UserGroup;
use App\DataTables\Filejsa;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\DataTables\UserGroupDataTable;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class JobRevisiController extends Controller
{

    // public function index(UserGroupDataTable $usergroupdatatable)
    // {
    //     return $usergroupdatatable->render('usergroup.index');
    //     // return view('usergroup.index');
    // }

    public function index(Request $request): mixed
    {
        if (Auth::check()) {
            if ($request->ajax()) {
                $data = Jsarev::with('user')->get();
                return DataTables::of($data)
                    ->addColumn('user_id', function ($jsarev) {
                        return $jsarev->user->name; // Ambil nama user dari relasi
                    })
                    ->addColumn('action', function ($jsarev) {
                        return view('job.action', compact('jsarev'))->render();
                    })
                    ->addColumn('file', function ($jsarev) {
                        return basename($jsarev->nama_file); // Ambil hanya nama file
                    })
                    ->addColumn('tanggal', function ($jsarev) {
                        return $jsarev->tanggal;
                    })
                    ->addColumn('created_at', function ($jsarev) {
                        return $jsarev->created_at->format('d-m-Y H:i:s'); // Format tanggal
                    })
                    ->make(true);
            }

            return view('job.rev'); // Tampilkan view utama
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }



    public function filterByTime(Request $request)
    {
        $startTime = $request->input('start_time');
        $endTime = $request->input('end_time');

        // Jika tidak ada filter, ambil semua data
        $query = Jsarev::with('user'); // Pastikan relasi user di-load

        // Jika ada filter, terapkan
        if ($startTime && $endTime) {
            $query->whereDate('tanggal', '>=', $startTime)
                ->whereDate('tanggal', '<=', $endTime);
        }

        $data = $query->get();

        // Format data sesuai dengan DataTables
        $formattedData = $data->map(function ($jsarev) {
            return [
                'action' => view('job.action', compact('jsarev'))->render(),
                'file' => basename($jsarev->file),
                'user_id' => $jsarev->user ? $jsarev->user->name : 'N/A', // Handle jika user tidak ada
                'tanggal' => $jsarev->tanggal,
                'created_at' => $jsarev->created_at->format('d-m-Y H:i:s'),
            ];
        });

        return response()->json([
            'message' => $data->isEmpty() ? 'No files found' : 'Files fetched successfully',
            'status' => $data->isEmpty() ? 404 : 200,
            'data' => $formattedData
        ]);
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
        $request->validate([
            'file' => 'required|file|mimes:docx,xls,xlsx,pdf,doc|max:51200',
            'tanggal' => 'required|date',
        ]);

        if (!Auth::check()) {
            return response()->json(['message' => 'You are not allowed to access.'], 403);
        }

        $newFileName = null;
        $originalFileName = null;

        if ($request->hasFile('file')) {
            $file = $request->file('file');

            // Nama asli file (dari user)
            $originalFileName = $file->getClientOriginalName();

            // Buat nama file baru berdasarkan timestamp
            $timestamp = now()->format('Ymd_His');
            $extension = $file->getClientOriginalExtension();
            $newFileName = "{$timestamp}.{$extension}";

            // Simpan ke folder storage/app/public/docs
            $file->storeAs('public/docs', $newFileName);
        }

        // Simpan ke database
        $jsarev = Jsarev::create([
            'file' => $newFileName,
            'nama_file' => $originalFileName,
            'user_id' => Auth::id(),
            'tanggal' => $request->tanggal,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json([
            'message' => 'File uploaded successfully.',
            'status' => 1,
            'file_url' => asset('storage/docs/' . $newFileName),
            'data' => $jsarev,
        ]);
    }
    public function edit(Request $request)
    {
        // Validasi data
        $request->validate([
            'id' => 'required|exists:jsarevs,id',
            'file' => 'required|file|mimes:pdf,doc,docx,xls,xlsx|max:51200',
        ]);

        // Temukan data berdasarkan ID
        $data = Jsarev::findOrFail($request->id);

        // Hapus file lama jika ada
        if ($data->file && Storage::disk('public')->exists('docs/' . $data->file)) {
            Storage::disk('public')->delete('docs/' . $data->file);
        }

        // Proses file baru
        $file = $request->file('file');
        $timestamp = now()->format('Ymd_His');
        $extension = $file->getClientOriginalExtension();
        $newFileName = "{$timestamp}.{$extension}";
        $originalFileName = $file->getClientOriginalName();

        // Simpan file ke storage/app/public/docs
        $file->storeAs('public/docs', $newFileName);

        // Update data di database
        $data->file = $newFileName;
        $data->nama_file = $originalFileName;
        $data->updated_at = now();
        $data->save();

        return response()->json([
            'message' => 'File berhasil diperbarui',
            'status' => 1,
            'data' => $data,
            'file_url' => asset('storage/docs/' . $newFileName),
        ]);
    }
    public function delete($id)
    {
        $jsarev = Jsarev::find($id);

        if (!$jsarev) {
            return response()->json(['message' => 'Data not found.'], 404);
        }

        // Hapus file dari storage jika ada
        if ($jsarev->file && Storage::disk('public')->exists('docs/' . $jsarev->file)) {
            Storage::disk('public')->delete('docs/' . $jsarev->file);
        }

        // Hapus data dari database
        $jsarev->delete();

        return response()->json([
            'message' => 'Data and associated file deleted successfully.',
            'status' => 1
        ]);
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
