<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pemasukan;
use App\Models\penghuni;
use App\Models\rumah;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $pembayaran = Pembayaran::with('penghuni', 'rumah') // Pastikan relasi telah didefinisikan di model
            ->orderBy('tanggal', 'desc')  // Menyortir berdasarkan tanggal pembayaran (terbaru di atas)
            ->get();

        // Mengembalikan response dalam format JSON
        return response()->json([
            'status' => true,
            'message' => 'Data Pembayaran Ditemukan',
            'data' => $pembayaran
        ], 200);
    }


    public function show($id)
    {
        // Mencari data pembayaran berdasarkan ID pembayaran
        $pembayaran = Pembayaran::with('penghuni', 'rumah')->find($id);

        if (!$pembayaran) {
            return response()->json([
                'status' => false,
                'message' => 'Pembayaran tidak ditemukan',
            ], 404);
        }

        return response()->json([
            'status' => true,
            'message' => 'Pembayaran ditemukan',
            'data' => $pembayaran
        ], 200);
    }

    public function showByRumah($id_rumah)
    {
        // Mencari semua pembayaran berdasarkan ID rumah
        $pembayaran = Pembayaran::where('id_rumah', $id_rumah)
            ->with('penghuni', 'rumah') // Memuat relasi dengan penghuni dan rumah
            ->get();

        if ($pembayaran->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => 'Tidak ada pembayaran untuk rumah ini',
            ], 404);
        }

        return response()->json([
            'status' => true,
            'message' => 'Pembayaran ditemukan',
            'data' => $pembayaran
        ], 200);
    }

    public function create(Request $request)
    {
        // Validasi input
        $rules = [
            'id_penghuni' => 'required',
            'jenis_pembayaran' => 'required|in:Satpam,Kebersihan',
            'periode_pembayaran' => 'required|in:Bulanan,Tahunan',
            'jumlah' => 'required|numeric',
            'status_pembayaran' => 'required|in:Lunas,Belum Dibayar',
            'tanggal' => 'required|date_format:Y-m-d',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validasi Gagal',
                'errors' => $validator->errors(),
            ], 422);
        }

        // Mencari penghuni berdasarkan id_penghuni
        $penghuni = Penghuni::find($request->id_penghuni);

        if (!$penghuni) {
            return response()->json([
                'status' => false,
                'message' => 'Penghuni tidak ditemukan',
            ], 404);
        }

        // Mencari rumah yang dihuni oleh penghuni
        $rumah = Rumah::where('id_penghuni', $penghuni->id)->first();

        if (!$rumah) {
            return response()->json([
                'status' => false,
                'message' => 'Penghuni ini belum menempati rumah. Tidak dapat melakukan pembayaran',
            ], 404);
        }

        // Menyimpan data pembayaran
        $pembayaran = Pembayaran::create([
            'id_penghuni' => $request->id_penghuni,
            'id_rumah' => $rumah->id, // Ambil id_rumah langsung dari data rumah
            'jenis_pembayaran' => $request->jenis_pembayaran,
            'periode_pembayaran' => $request->periode_pembayaran,
            'jumlah' => $request->jumlah,
            'status_pembayaran' => $request->status_pembayaran,
            'tanggal' => $request->tanggal,
        ]);

        // Jika pembayaran lunas, tambahkan ke pemasukan
        if ($request->status_pembayaran === 'Lunas') {
            Pemasukan::create([
                'jenis_pemasukan' => "Iuran " . $request->jenis_pembayaran,
                'jumlah' => $request->jumlah,
                'tanggal' => $request->tanggal,
            ]);
        }

        return response()->json([
            'status' => true,
            'message' => 'Pembayaran berhasil dicatat' . ($request->status_pembayaran === 'Lunas' ? ' dan pemasukan ditambahkan' : ''),
            'data' => $pembayaran,
        ], 201);
    }


    public function update(Request $request, $id)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'status_pembayaran' => 'required|in:Lunas,Belum Dibayar',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validasi gagal',
                'errors' => $validator->errors(),
            ], 422);
        }

        // Cari data pembayaran
        $pembayaran = Pembayaran::find($id);
        if (!$pembayaran) {
            return response()->json([
                'status' => false,
                'message' => 'Pembayaran tidak ditemukan',
            ], 404);
        }

        // Cek apakah status sebelumnya bukan "Lunas" dan sekarang diubah ke "Lunas"
        if ($pembayaran->status_pembayaran !== 'Lunas' && $request->status_pembayaran === 'Lunas') {
            // Tambahkan pemasukan jika belum ada
            Pemasukan::create([
                'jenis_pemasukan' => "Iuran " . $pembayaran->jenis_pembayaran,
                'jumlah' => $pembayaran->jumlah,
                'tanggal' => $pembayaran->tanggal,
            ]);
        }

        // Perbarui status pembayaran
        $pembayaran->update([
            'status_pembayaran' => $request->status_pembayaran,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Status pembayaran berhasil diperbarui',
            'data' => $pembayaran,
        ], 200);
    }

    public function destroy(string $id)
    {
        //
    }
}
