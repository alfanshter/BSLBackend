<?php

namespace App\Http\Controllers;

use App\Models\prettyCast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
                        return basename($prettyCast->file); // Ambil hanya nama file
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
        $validatedData = $request->validate([
            'file' => 'required|file|mimes:docx,xls,xlsx,pdf,doc|max:51200',
            'tanggal' => 'required|date', // Validasi tanggal
        ]);

        $data = $request->all();
        Log::info("tester", $data);

        if (Auth::check()) {
            // Proses file
            $newFileName = null;
            if ($request->hasFile('file')) {
                $file = $request->file('file');

                // Ambil nama file asli tanpa ekstensi
                $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);

                // Tambahkan timestamp ke nama file
                $timestamp = now()->format('Ymd_His');

                // Gabungkan nama file dengan timestamp dan ekstensi
                $newFileName = "{$originalName}({$timestamp}).{$file->getClientOriginalExtension()}";

                // Simpan file ke direktori storage/app/public/prettyCast
                $file->storeAs('public/prettyCast', $newFileName);
            }

            // Simpan data ke database
            $prettyCast = prettyCast::create([
                'file' => $newFileName,
                'user_id' => Auth::id(),
                'tanggal' => $request->tanggal, // Simpan tanggal (YYYY-MM-DD)
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return response()->json([
                'message' => 'File uploaded successfully.',
                'data' => $prettyCast,
                'status' => 1,
                'file_url' => asset('storage/prettyCast/' . $newFileName), // URL publik ke file
            ]);
        }

        return response()->json(['message' => 'You are not allowed to access.'], 201);
    }
    public function edit(Request $request)
    {
        // Validasi data
        $request->validate([
            'id' => 'required|exists:pretty_casts,id', // Pastikan ID ada di database
            'file' => 'required|file|mimes:pdf,doc,docx,xls,xlsx|max:2048', // Validasi file baru
        ]);

        // Temukan data berdasarkan ID
        $data = prettyCast::findOrFail($request->id);

        // Hapus file lama jika ada
        $oldFilePath = storage_path('app/public/prettycast/' . $data->file);
        if (file_exists($oldFilePath)) {
            unlink($oldFilePath); // Hapus file lama dari storage
        }

        // Simpan file baru
        $filename = pathinfo($request->file('file')->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $request->file('file')->getClientOriginalExtension();
        $newFileName = $filename . '(' . now()->format('dmY-H_i') . ').' . $extension;

        // Simpan file ke storage
        $request->file('file')->storeAs('public/prettycast', $newFileName);

        // Update nama file di database
        $data->file = $newFileName;
        $data->save();

        return response()->json(['message' => 'File berhasil diperbarui', 'status' => 1], 200);
    }

    public function delete($id)
    {
        $prettyCast = prettyCast::find($id);
        if (!$prettyCast) {
            return response()->json(['message' => 'Data not found.'], 404);
        }

        // Hapus file dari direktori storage/app/prettyCast
        if ($prettyCast->file && file_exists(storage_path('app/public/prettycast/' . $prettyCast->file))) {
            unlink(storage_path('app/public/prettyCast/' . $prettyCast->file)); // Hapus file
        }

        // Hapus data dari database
        $prettyCast->delete();

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
