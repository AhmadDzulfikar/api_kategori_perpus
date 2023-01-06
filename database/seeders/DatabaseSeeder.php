<?php

namespace Database\Seeders;

use App\Models\Buku;
use App\Models\Identitas;
use App\Models\Kategori;
use App\Models\Pemberitahuan;
use App\Models\Peminjaman;
use App\Models\Penerbit;
use App\Models\Pesan;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'kode' => 'Admin1',
            'fullname' => 'Admin Satu',
            'username' => 'Admin1',
            'password' => Hash::make('Admin123'),
            'role' => 'admin',
            'foto' => ''
        ]);
        User::create([
            'kode' => 'AA01',
            'nis' => '112233',
            'fullname' => 'Aldy Revigustian',
            'username' => 'Aldy',
            'password' => Hash::make('Aldy123'),
            'kelas' => 'XII RPL',
            'alamat' => 'Bukdur',
            'role' => 'user',
            'join_date' => '2022-12-01',
            'foto' => ''
        ]);
        User::create([
            'kode' => 'BB01',
            'nis' => '445566',
            'fullname' => 'Revigustian Aldy',
            'username' => 'Revigustian',
            'password' => Hash::make('Revi123'),
            'kelas' => 'XII RPL',
            'alamat' => 'Bukdur',
            'role' => 'user',
            'join_date' => '2022-12-01',
            'foto' => ''
        ]);

        Kategori::create([
            'kode' => 'umum',
            'nama' => 'Umum'
        ]);
        Kategori::create([
            'kode' => 'sains',
            'nama' => 'Sains'
        ]);
        Kategori::create([
            'kode' => 'sejarah',
            'nama' => 'Sejarah'
        ]);

        Penerbit::create([
            'kode' => 'erlangga',
            'nama' => 'Erlangga'
        ]);
        Penerbit::create([
            'kode' => 'bukunesia',
            'nama' => 'Bukunesia'
        ]);
        Penerbit::create([
            'kode' => 'gramedia',
            'nama' => 'Gramedia'
        ]);


        Buku::create([
            'judul' => 'Cara meminum Ramune',
            'kategori_id' => 1,
            'penerbit_id' => 1,
            'pengarang' => 'Aldy',
            'tahun_terbit' => '2022',
            'isbn' => '112233',
            'j_buku_baik' => 10,
            'j_buku_rusak' => 0,
            'foto' => ''
        ]);
        Buku::create([
            'judul' => 'Penelitian Meganthropus Anylotus',
            'kategori_id' => 2,
            'penerbit_id' => 2,
            'pengarang' => 'Aldy BudiAsih',
            'tahun_terbit' => '2022',
            'isbn' => '223344',
            'j_buku_baik' => 20,
            'j_buku_rusak' => 5,
            'foto' => ''
        ]);
        Buku::create([
            'judul' => 'Sejarah terbentuknya PKI',
            'kategori_id' => 3,
            'penerbit_id' => 3,
            'pengarang' => 'Aldy YGY',
            'tahun_terbit' => '2022',
            'isbn' => '556677',
            'j_buku_baik' => 10,
            'j_buku_rusak' => 0,
            'foto' => ''
        ]);

        Peminjaman::create([
            'user_id' => 2,
            'buku_id' => 1,
            'tanggal_peminjaman' => '2023-01-01',
            'tanggal_pengembalian' => '2023-01-10',
            'kondisi_buku_saat_dipinjam' => 'baik',
            'kondisi_buku_saat_dikembalikan' => 'baik',
            'denda' => 0,
        ]);

        Peminjaman::create([
            'user_id' => 3,
            'buku_id' => 2,
            'tanggal_peminjaman' => '2023-01-01',
            'kondisi_buku_saat_dipinjam' => 'baik',
        ]);

        Peminjaman::create([
            'user_id' => 2,
            'buku_id' => 3,
            'tanggal_peminjaman' => '2023-01-01',
            'tanggal_pengembalian' => '2023-02-10',
            'kondisi_buku_saat_dipinjam' => 'baik',
            'kondisi_buku_saat_dikembalikan' => 'baik',
            'denda' => 10000,
        ]);

        Pemberitahuan::create([
            'isi' => 'Sedang ada perbaikan server',
            'status' => 'nonaktif',
        ]);

        Pemberitahuan::create([
            'isi' => 'Sedang ada penambahan data di database',
            'status' => 'aktif',
        ]);

        Pesan::create([
            'pengirim_id' => 1,
            'penerima_id' => 2,
            'judul' => 'Balikin WOY',
            'isi' => 'Balikin Buku WOYY',
            'status' => 'terkirim',
            'tanggal_kirim' => '2022-12-01',
        ]);
        Pesan::create([
            'pengirim_id' => 1,
            'penerima_id' => 3,
            'judul' => 'Balikin Kak',
            'isi' => 'Balikin plis bang',
            'status' => 'terbaca',
            'tanggal_kirim' => '2022-12-01',
        ]);

        Identitas::create([
            'nama_app' => 'E-Perpus SMKN 10',
            'alamat_app' => 'Jalan Jalan Sendiri :)',
            'email_app' => 'smkn10@perpus.com',
            'nomor_hp' => '081219019667',
            'foto' => ''
        ]);
    }
}
