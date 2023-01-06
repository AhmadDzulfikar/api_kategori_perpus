<?php

use App\Models\Buku;
use App\Models\Pemberitahuan;
use App\Models\Peminjaman;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

Route::prefix('user')->group(function () {
    Route::get('/dashboard', function () {
        $pemberitahuans = Pemberitahuan::where('status', 'aktif')->get();
        $bukus = Buku::all();
        return view('user.dashboard', compact('pemberitahuans', 'bukus'));
    })->name('user.dashboard');
    Route::get('/peminjaman', function () {
        $peminjamans = Peminjaman::where('user_id', Auth::user()->id)->get();
        return view('user.peminjaman', compact('peminjamans'));
    })->name('user.peminjaman');
    Route::get('/peminjaman/form', function () {
        $peminjamans = Peminjaman::where('user_id', Auth::user()->id)->get();
        return view('user.form_peminjaman', compact('peminjamans'));
    })->name('user.form_peminjaman');
    Route::get('/pengembalian', function () {
        return view('user.pengembalian');
    })->name('user.pengembalian');
    Route::get('/pesan', function () {
        return view('user.pesan');
    })->name('user.pesan');
    Route::get('/profil', function () {
        return view('user.profil');
    })->name('user.profil');
});
