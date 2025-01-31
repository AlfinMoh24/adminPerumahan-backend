<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\RiwayatPenghuniRumah;
use App\Models\rumah;
use App\Models\penghuni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RumahController extends Controller
{

    public function index()
    {
        $data = Rumah::with('penghuni')->orderBy('kode_rumah', 'ASC')->get();

        return response()->json([
            'status' => true,
            'message' => 'Data Rumah Ditemukan',
            'data' => $data
        ], 200);
    }


    public function store(Request $request)
    {
        $rules = [
            'kode_rumah' => 'required|string|unique:rumah,kode_rumah',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Kode rumah sudah ada',
                'errors' => $validator->errors()
            ], 422);
        }

        $rumah = Rumah::create([
            'kode_rumah' => $request->kode_rumah,
            'status_rumah' => 'Tidak Dihuni', // Default
            'id_penghuni' => null,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Rumah Berhasil Ditambahkan',
            'data' => $rumah
        ], 201);
    }

    public function tambahPenghuni(Request $request, $id_rumah)
    {
        $rumah = Rumah::findOrFail($id_rumah);
        $penghuni = Penghuni::findOrFail($request->id_penghuni);

        $riwayatPenghuni = RiwayatPenghuniRumah::where('id_penghuni', $penghuni->id)
            ->whereNull('tanggal_keluar') // Belum keluar dari rumah sebelumnya
            ->first();

        if ($riwayatPenghuni) {
            return response()->json([
                'status' => false,
                'message' => 'Penghuni ini sudah menghuni rumah lain.',
            ], 400);
        }
        if ($rumah->id_penghuni) {
            return response()->json([
                'status' => false,
                'message' => 'Rumah ini sudah dihuni.',
            ], 400);
        }

        RiwayatPenghuniRumah::create([
            'id_rumah' => $rumah->id,
            'id_penghuni' => $penghuni->id,
            'tanggal_masuk' => now(),
            'tanggal_keluar' => null
        ]);

        // Update rumah dengan penghuni baru
        $rumah->update(['id_penghuni' => $penghuni->id]);

        return response()->json([
            'status' => true,
            'message' => 'Penghuni berhasil ditambahkan',
        ]);
    }


    public function show(string $id)
    {
        $data = Rumah::with('penghuni')->find($id);

        if (!$data) {
            return response()->json([
                'status' => false,
                'message' => 'Data Rumah Tidak Ditemukan'
            ], 404);
        }

        return response()->json([
            'status' => true,
            'message' => 'Data Rumah Ditemukan',
            'data' => $data
        ], 200);
    }

    public function updateKodeRumah(Request $request, $id)
    {
        // Validasi input
        $rules = [
            'kode_rumah' => 'required|string|unique:rumah,kode_rumah,' . $id,
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Kode rumah sudah digunakan',
                'errors' => $validator->errors(),
            ], 422);
        }

        // Cari rumah berdasarkan ID
        $rumah = Rumah::find($id);

        if (!$rumah) {
            return response()->json([
                'status' => false,
                'message' => 'Rumah Tidak Ditemukan',
            ], 404);
        }

        // Update kode rumah
        $rumah->update([
            'kode_rumah' => $request->kode_rumah,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Kode rumah berhasil diperbarui',
            'data' => $rumah,
        ], 200);
    }


    public function updatePenghuniRumah(Request $request, $id)
    {
        // Validasi input
        $rules = [
            'id_penghuni' => 'nullable|exists:penghuni,id',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validasi Gagal',
                'errors' => $validator->errors(),
            ], 422);
        }

        // Cari rumah berdasarkan ID
        $rumah = Rumah::find($id);

        if (!$rumah) {
            return response()->json([
                'status' => false,
                'message' => 'Rumah Tidak Ditemukan',
            ], 404);
        }

        // Cek apakah penghuni tetap sama, jika ya, langsung return tanpa update
        if ($rumah->id_penghuni == $request->id_penghuni) {
            return response()->json([
                'status' => true,
                'message' => 'Tidak ada perubahan pada penghuni rumah.',
                'data' => $rumah,
            ], 200);
        }

        // Jika rumah memiliki penghuni sebelumnya, catat tanggal keluar di riwayat
        if ($rumah->id_penghuni && $rumah->id_penghuni !== $request->id_penghuni) {
            $riwayat = RiwayatPenghuniRumah::where('id_rumah', $rumah->id)
                ->whereNull('tanggal_keluar')
                ->first();

            if ($riwayat) {
                $riwayat->update(['tanggal_keluar' => now()]);
            }
        }

        // Cek apakah penghuni baru sudah menghuni rumah lain
        if ($request->id_penghuni) {
            $existingPenghuni = Rumah::where('id_penghuni', $request->id_penghuni)->first();
            if ($existingPenghuni && $existingPenghuni->id != $id) {
                return response()->json([
                    'status' => false,
                    'message' => 'Penghuni ini sudah menghuni rumah lain.',
                ], 400);
            }
        }

        // Update data penghuni dan status rumah
        $rumah->update([
            'id_penghuni' => $request->id_penghuni,
            'status_rumah' => $request->id_penghuni ? 'Dihuni' : 'Tidak Dihuni'
        ]);

        // Jika ada penghuni baru, tambahkan ke riwayat
        if ($request->id_penghuni) {
            RiwayatPenghuniRumah::create([
                'id_rumah' => $rumah->id,
                'id_penghuni' => $request->id_penghuni,
                'tanggal_masuk' => now(),
                'tanggal_keluar' => null
            ]);
        }

        return response()->json([
            'status' => true,
            'message' => 'Penghuni rumah berhasil diperbarui',
            'data' => $rumah,
        ], 200);
    }



    public function hapusPenghuni($id_rumah)
    {
        $rumah = Rumah::findOrFail($id_rumah);

        if (!$rumah->id_penghuni) {
            return response()->json([
                'status' => false,
                'message' => 'Rumah ini sudah kosong'
            ], 400);
        }

        // Update tanggal_keluar di riwayat
        RiwayatPenghuniRumah::where('id_rumah', $rumah->id)
            ->whereNull('tanggal_keluar')
            ->update(['tanggal_keluar' => now()]);

        // Kosongkan rumah
        $rumah->update(['id_penghuni' => null]);

        return response()->json([
            'status' => true,
            'message' => 'Penghuni berhasil dihapus dari rumah'
        ]);
    }

    public function destroy($id)
    {
        // Cari rumah berdasarkan ID
        $rumah = Rumah::find($id);
        

        // Jika rumah tidak ditemukan, kembalikan pesan error
        if (!$rumah) {
            return response()->json([
                'status' => false,
                'message' => 'Data rumah tidak ditemukan'
            ], 404);
        }

        // Hapus rumah
        $rumah->delete();

        return response()->json([
            'status' => true,
            'message' => 'Rumah berhasil dihapus'
        ], 200);
    }
}
