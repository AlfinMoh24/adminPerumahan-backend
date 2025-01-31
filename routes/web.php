<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/storage/ktp/{filename}', function ($filename) {
    // Path ke file yang ada di storage/app/public/
    $path = storage_path("app/public/ktp/{$filename}");

    // Cek apakah file ada
    if (file_exists($path)) {
        // Mengembalikan file dengan header yang sesuai
        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => mime_content_type($path),
            'Content-Disposition' => 'inline; filename="' . $filename . '"',
        ]);
    }

    // Jika file tidak ditemukan
    abort(404);
});
