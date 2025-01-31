<?php

use App\Http\Controllers\Api\PenghuniController;
use App\Http\Controllers\Api\RumahController;
use App\Http\Controllers\Api\RiwayatPenghuniRumahController;
use App\Http\Controllers\Api\PembayaranController;
use App\Http\Controllers\Api\PengeluaranController;
use App\Http\Controllers\Api\PemasukanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('penghuni', [PenghuniController::class,'index']);
Route::get('penghuni/{id}', [PenghuniController::class,'show']);
Route::post('penghuni', [PenghuniController::class,'store']);
Route::put('penghuni/{id}', [PenghuniController::class,'update']);
Route::delete('penghuni/{id}', [PenghuniController::class,'destroy']);

Route::get('rumah', [RumahController::class, 'index']);
Route::get('rumah/{id}', [RumahController::class, 'show']);
Route::post('rumah/', [RumahController::class, 'store']);
Route::post('rumah/{id}/tambah-penghuni', [RumahController::class, 'tambahPenghuni']);
Route::put('/rumah/{id}/edit-penghuni', [RumahController::class, 'updatePenghuniRumah']);
Route::delete('rumah/{id}/hapus-penghuni', [RumahController::class, 'hapusPenghuni']);
Route::put('rumah/{id}', [RumahController::class, 'updateKodeRumah']);
Route::delete('rumah/{id}', [RumahController::class, 'destroy']);
Route::get('riwayat/{id_rumah}', [RiwayatPenghuniRumahController::class, 'show']);

Route::get('pembayaran', [PembayaranController::class, 'index']);
Route::get('pembayaran/{id}', [PembayaranController::class, 'show']);
Route::get('pembayaran/rumah/{id_rumah}', [PembayaranController::class, 'showByRumah']);
Route::post('pembayaran', [PembayaranController::class, 'create']);
Route::put('pembayaran/{id}', [PembayaranController::class, 'update']);

Route::get('pengeluaran', [PengeluaranController::class, 'index']);
Route::post('pengeluaran', [PengeluaranController::class, 'store']);

Route::get('pemasukan', [PemasukanController::class, 'index']);
Route::post('pemasukan', [PemasukanController::class, 'store']);




