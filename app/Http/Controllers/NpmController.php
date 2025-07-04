<?php

namespace App\Http\Controllers;

use App\Models\Npm;
use App\Models\NpmModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class NpmController extends Controller
{
    public function index(Request $request): mixed
    {
        if (Auth::check()) {
            if ($request->ajax()) {
                $data = NpmModel::with('user')->get();
                return DataTables::of($data)
                    ->addColumn('user_id', function ($npm) {
                        return $npm->user->name; // Ambil nama user dari relasi
                    })
                    ->addColumn('action', function ($npm) {
                        return view('npm.action', compact('npm'))->render();
                    })
                    ->addColumn('file', function ($npm) {
                        return basename($npm->nama_file); // Ambil hanya nama file
                    })
                    ->addColumn('tanggal', function ($npm) {
                        return $npm->tanggal;
                    })
                    ->addColumn('created_at', function ($npm) {
                        return $npm->created_at->format('d-m-Y H:i:s'); // Format tanggal
                    })
                    ->make(true);
            }

            return view('npm.npm'); // Tampilkan view utama
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }



    public function filterByTime(Request $request)
    {
        $startTime = $request->input('start_time');
        $endTime = $request->input('end_time');

        // Jika tidak ada filter, ambil semua data
        $query = NpmModel::with('user'); // Pastikan relasi user di-load

        // Jika ada filter, terapkan
        if ($startTime && $endTime) {
            $query->whereDate('tanggal', '>=', $startTime)
                ->whereDate('tanggal', '<=', $endTime);
        }

        $data = $query->get();

        // Format data sesuai dengan DataTables
        $formattedData = $data->map(function ($npm) {
            return [
                'action' => view('npm.action', compact('npm'))->render(),
                'file' => basename($npm->file),
                'user_id' => $npm->user ? $npm->user->name : 'N/A', // Handle jika user tidak ada
                'tanggal' => $npm->tanggal,
                'created_at' => $npm->created_at->format('d-m-Y H:i:s'),
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
    //             $data = prettyCast::all(); // Ambil semua data
    //             return FacadesDataTables::of($data)
    //                 ->addIndexColumn()
    //                 ->addColumn('action', 'prettycast.action') // Menambahkan kolom aksi
    //                 ->rawColumns(['action'])
    //                 ->make(true); // Mengembalikan data dalam format yang bisa dipahami DataTables
    //         }
    //         return view('prettyCast.pretty'); // Jika bukan AJAX, kembalikan view biasa
    //     }
    //     return redirect("login")->withSuccess('You are not allowed to access');
    // }


    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
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

            // Simpan nama asli file (termasuk ekstensi)
            $originalFileName = $file->getClientOriginalName();

            // Buat nama baru berdasarkan timestamp saja
            $timestamp = now()->format('Ymd_His');
            $extension = $file->getClientOriginalExtension();
            $newFileName = "{$timestamp}.{$extension}";

            // Simpan file ke storage/app/public/npm
            $file->storeAs('public/npm', $newFileName);
        }

        // Simpan ke database
        $npm = NpmModel::create([
            'file' => $newFileName,
            'nama_file' => $originalFileName,
            'user_id' => Auth::id(),
            'tanggal' => $request->tanggal,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json([
            'message' => 'File uploaded successfully.',
            'data' => $npm,
            'status' => 1,
            'file_url' => asset('storage/npm/' . $newFileName),
        ]);
    }

    public function edit(Request $request)
    {
        // Validasi input
        $request->validate([
            'id' => 'required|exists:npm_models,id',
            'file' => 'required|file|mimes:pdf,doc,docx,xls,xlsx|max:51200',
        ]);

        // Ambil data berdasarkan ID
        $data = NpmModel::findOrFail($request->id);

        // Hapus file lama jika ada
        if ($data->file && Storage::disk('public')->exists('npm/' . $data->file)) {
            Storage::disk('public')->delete('npm/' . $data->file);
        }

        // Simpan file baru
        $file = $request->file('file');
        $timestamp = now()->format('Ymd_His');
        $extension = $file->getClientOriginalExtension();
        $newFileName = "{$timestamp}.{$extension}";
        $originalName = $file->getClientOriginalName();

        // Simpan ke folder storage/app/public/npm
        $file->storeAs('public/npm', $newFileName);

        // Update data di database
        $data->file = $newFileName;
        $data->nama_file = $originalName;
        $data->updated_at = now();
        $data->save();

        return response()->json([
            'message' => 'File berhasil diperbarui',
            'status' => 1,
            'data' => $data,
            'file_url' => asset('storage/npm/' . $newFileName),
        ], 200);
    }
    public function delete($id)
    {
        $npm = NpmModel::find($id);

        if (!$npm) {
            return response()->json(['message' => 'Data not found.'], 404);
        }

        // Hapus file dari storage (disk 'public')
        if ($npm->file && Storage::disk('public')->exists('npm/' . $npm->file)) {
            Storage::disk('public')->delete('npm/' . $npm->file);
        }

        // Hapus data dari database
        $npm->delete();

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
        $grup = NpmModel::updateOrCreate(
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
        $data = NpmModel::select('id', 'file', 'created_at')->get();

        // Mengembalikan data dalam bentuk JSON untuk digunakan di DataTables
        return response()->json(['data' => $data]);
    }
}
