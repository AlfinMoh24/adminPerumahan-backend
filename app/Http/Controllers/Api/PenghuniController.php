<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\penghuni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\Rumah;

class PenghuniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = penghuni::orderBy('nama_lengkap', 'ASC')->get();
        return response()->json([
            'status' => true,
            'message' => 'Data Ditemukan',
            'data' => $data
        ], 200);
    }


    public function store(Request $request)
    {
        // Aturan validasi
        $rules = [
            'nama_lengkap' => 'required',
            'nomor_telepon' => 'required',
            'status_perkawinan' => 'required|in:Menikah,Belum Menikah',
            'status_penghuni' => 'required|in:Tetap,Kontrak',
            'foto_ktp' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ];
        $namaFile = time() . '.' . $request->file('foto_ktp')->extension();
        $fotoPath = $request->file('foto_ktp')->storeAs('ktp', $namaFile, 'public');


        // Validasi request
        $validator = Validator::make($request->all(), $rules);

        // Jika validasi gagal, kembalikan response dengan error
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validasi gagal',
                'errors' => $validator->errors()
            ], 422);
        }

        $data = Penghuni::create([
            'nama_lengkap' => $request->nama_lengkap,
            'nomor_telepon' => $request->nomor_telepon,
            'status_perkawinan' => $request->status_perkawinan,
            'status_penghuni' => $request->status_penghuni,
            'foto_ktp' => $fotoPath,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'data berhasil ditambahkan',
            'data' => $data
        ], 201);
    }


    public function show(string $id)
    {
        $data = penghuni::find($id);
        if ($data) {
            return response()->json([
                'status' => true,
                'message' => 'Data Ditemukan',
                'data' => $data
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => "Data tidak Ditemukan"
            ], 404);
        }
    }


    public function update(Request $request, $id)
    {
        // Cek apakah penghuni dengan ID tersebut ada
        $penghuni = Penghuni::find($id);

        if (!$penghuni) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        // Validasi input
        $rules = [
            'nama_lengkap' => 'sometimes|string|max:255',
            'nomor_telepon' => 'sometimes|', // Nomor HP Indonesia
            'status_perkawinan' => 'sometimes|in:Menikah,Belum Menikah',
            'status_penghuni' => 'sometimes|in:Tetap,Kontrak',
            'foto_ktp' => 'sometimes|image|mimes:jpg,jpeg,png|max:2048', // Max 2MB
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validasi gagal',
                'errors' => $validator->errors()
            ], 422);
        }

        // Simpan perubahan kecuali foto
        $penghuni->fill($request->except('foto_ktp'));

        // Jika ada file foto baru, hapus yang lama dan simpan yang baru
        if ($request->hasFile('foto_ktp')) {
            // Hapus foto lama jika ada
            if ($penghuni->foto_ktp) {
                Storage::delete('public/' . $penghuni->foto_ktp);
            }

            // Simpan foto baru
            $namaFile = time() . '.' . $request->file('foto_ktp')->extension();
            $fotoPath = $request->file('foto_ktp')->storeAs('ktp', $namaFile, 'public');
            $penghuni->foto_ktp = $fotoPath;
        }

        $penghuni->save();

        return response()->json([
            'status' => true,
            'message' => 'Data berhasil diperbarui',
            'data' => $penghuni
        ], 200);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Penghuni::find($id);

        // Jika penghuni tidak ditemukan, kembalikan response error
        if (!$data) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        // Cari rumah yang memiliki id_penghuni yang sama dengan penghuni yang akan dihapus

        $rumah = Rumah::where('id_penghuni', $data->id)->first();


        // Jika rumah ditemukan, ubah status_rumah dan set id_penghuni menjadi null
        if ($rumah) {
            $rumah->update([
                'status_rumah' => 'Tidak dihuni',
            ]);
        }

        // Hapus data penghuni
        $data->delete();

        return response()->json([
            'status' => true,
            'message' => 'Data berhasil dihapus'
        ], 200);
    }
}
