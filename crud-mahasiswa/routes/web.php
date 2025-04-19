<?php

use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return redirect('/mahasiswa'); // arahkan langsung ke halaman mahasiswa
});

Route::resource('mahasiswa', MahasiswaController::class);

