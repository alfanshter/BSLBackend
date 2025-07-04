<?php

namespace App\Http\Controllers;

use App\Models\prettyCast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class prettyCastController extends Controller
{
    public function index(Request $request): mixed
    {
        if (Auth::check()) {
            if ($request->ajax()) {
                $data = prettyCast::with('user')->get();
                return DataTables::of($data)
                    ->addColumn('user_id', function ($prettyCast) {
                        return $prettyCast->user->name; // Ambil nama user dari relasi
                    })
                    ->addColumn('action', function ($prettyCast) {
                        return view('prettycast.action', compact('prettyCast'))->render();
                    })
                    ->addColumn('file', function ($prettyCast) {
                        return basename($prettyCast->nama_file); // Ambil hanya nama file
                    })
                    ->addColumn('tanggal', function ($prettyCast) {
                        return $prettyCast->tanggal;
                    })
                    ->addColumn('created_at', function ($prettyCast) {
                        return $prettyCast->created_at->format('d-m-Y H:i:s'); // Format tanggal
                    })
                    ->make(true);
            }

            return view('prettycast.pretty'); // Tampilkan view utama
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }



    public function filterByTime(Request $request)
    {
        $startTime = $request->input('start_time');
        $endTime = $request->input('end_time');

        // Jika tidak ada filter, ambil semua data
        $query = prettyCast::with('user'); // Pastikan relasi user di-load

        // Jika ada filter, terapkan
        if ($startTime && $endTime) {
            $query->whereDate('tanggal', '>=', $startTime)
                ->whereDate('tanggal', '<=', $endTime);
        }

        $data = $query->get();

        // Format data sesuai dengan DataTables
        $formattedData = $data->map(function ($prettyCast) {
            return [
                'action' => view('prettycast.action', compact('prettyCast'))->render(),
                'file' => basename($prettyCast->file),
                'user_id' => $prettyCast->user ? $prettyCast->user->name : 'N/A', // Handle jika user tidak ada
                'tanggal' => $prettyCast->tanggal,
                'created_at' => $prettyCast->created_at->format('d-m-Y H:i:s'),
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

            // Nama file asli dari user
            $originalFileName = $file->getClientOriginalName();

            // Buat nama file baru dari timestamp saja
            $timestamp = now()->format('Ymd_His');
            $extension = $file->getClientOriginalExtension();
            $newFileName = "{$timestamp}.{$extension}";

            // Simpan ke storage/app/public/prettyCast
            $file->storeAs('public/prettyCast', $newFileName);
        }

        // Simpan ke database
        $prettyCast = PrettyCast::create([
            'file' => $newFileName,
            'nama_file' => $originalFileName, // Pastikan kolom ini ada di tabel
            'user_id' => Auth::id(),
            'tanggal' => $request->tanggal,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json([
            'message' => 'File uploaded successfully.',
            'data' => $prettyCast,
            'status' => 1,
            'file_url' => asset('storage/prettyCast/' . $newFileName),
        ]);
    }
    public function edit(Request $request)
    {
        // Validasi input
        $request->validate([
            'id' => 'required|exists:pretty_casts,id',
            'file' => 'required|file|mimes:pdf,doc,docx,xls,xlsx|max:51200',
        ]);
    
        // Ambil data berdasarkan ID
        $data = PrettyCast::findOrFail($request->id);
    
        // Hapus file lama dari storage jika ada
        if ($data->file && Storage::disk('public')->exists('prettyCast/' . $data->file)) {
            Storage::disk('public')->delete('prettyCast/' . $data->file);
        }
    
        // Simpan file baru
        $file = $request->file('file');
        $timestamp = now()->format('Ymd_His');
        $extension = $file->getClientOriginalExtension();
        $newFileName = "{$timestamp}.{$extension}";
        $originalFileName = $file->getClientOriginalName();
    
        // Simpan ke folder storage/app/public/prettyCast
        $file->storeAs('public/prettyCast', $newFileName);
    
        // Update data di database
        $data->file = $newFileName;
        $data->nama_file = $originalFileName;
        $data->updated_at = now();
        $data->save();
    
        return response()->json([
            'message' => 'File berhasil diperbarui',
            'status' => 1,
            'data' => $data,
            'file_url' => asset('storage/prettyCast/' . $newFileName),
        ], 200);
    }

    public function delete($id)
{
    $prettyCast = PrettyCast::find($id);

    if (!$prettyCast) {
        return response()->json(['message' => 'Data not found.'], 404);
    }

    // Hapus file dari storage/app/public/prettyCast
    if ($prettyCast->file && Storage::disk('public')->exists('prettyCast/' . $prettyCast->file)) {
        Storage::disk('public')->delete('prettyCast/' . $prettyCast->file);
    }

    // Hapus data dari database
    $prettyCast->delete();

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
        $grup = prettyCast::updateOrCreate(
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
        $data = prettyCast::select('id', 'file', 'created_at')->get();

        // Mengembalikan data dalam bentuk JSON untuk digunakan di DataTables
        return response()->json(['data' => $data]);
    }
}
