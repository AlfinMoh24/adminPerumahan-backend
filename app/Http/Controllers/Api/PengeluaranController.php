<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PengeluaranController extends Controller
{
    public function index()
    {
        $pengeluaran = Pengeluaran::orderBy('tanggal', 'ASC')->get();


        return response()->json([
            'status' => true,
            'message' => 'Data Pengeluaran Ditemukan',
            'data' => $pengeluaran,
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'deskripsi' => 'required|string',
            'jumlah' => 'required|numeric|min:0',
            'tanggal' => 'required|date_format:Y-m-d',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validasi gagal',
                'errors' => $validator->errors(),
            ], 422);
        }

        // Simpan data pemasukan
        $pemasukan = Pengeluaran::create([
            'deskripsi' => $request->deskripsi,
            'jumlah' => $request->jumlah,
            'tanggal' => $request->tanggal,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Pemasukan berhasil ditambahkan',
            'data' => $pemasukan,
        ], 201);
    }

    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
