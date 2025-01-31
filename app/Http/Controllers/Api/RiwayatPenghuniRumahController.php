<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RiwayatPenghuniRumah;
use App\Models\Rumah;

class RiwayatPenghuniRumahController extends Controller
{
    public function show($id_rumah)
    {
        // Cek apakah rumah dengan ID tersebut ada
        $rumah = Rumah::find($id_rumah);

        if (!$rumah) {
            return response()->json([
                'status' => false,
                'message' => 'Rumah tidak ditemukan',
            ], 404);
        }

        // Ambil riwayat penghuni rumah berdasarkan id_rumah
        $riwayat = RiwayatPenghuniRumah::where('id_rumah', $id_rumah)
            ->with('penghuni') // Mengambil data penghuni terkait
            ->orderBy('tanggal_masuk', 'DESC')
            ->get();

        // Jika riwayat kosong
        if ($riwayat->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => 'Belum ada riwayat penghuni untuk rumah ini',
                'data' => [],
            ], 200);
        }

        return response()->json([
            'status' => true,
            'message' => 'Riwayat penghuni rumah ditemukan',
            'data' => $riwayat
        ], 200);
    }
}
