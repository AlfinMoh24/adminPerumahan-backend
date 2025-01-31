<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pemasukan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PemasukanController extends Controller
{
    public function index()
    {
        $data = Pemasukan::orderBy('tanggal', 'DESC')->get();

        return response()->json([
            'status' => true,
            'message' => 'Data Pemasukan Ditemukan',
            'data' => $data
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'jenis_pemasukan' => 'required|string',
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
        $pemasukan = Pemasukan::create([
            'jenis_pemasukan' => $request->jenis_pemasukan,
            'jumlah' => $request->jumlah,
            'tanggal' => $request->tanggal,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Pemasukan berhasil ditambahkan',
            'data' => $pemasukan,
        ], 201);
    }

    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
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
