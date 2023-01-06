<?php

namespace Database\Seeders;

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
            'kode' => 'AA01',
            'nis' => '112233',
            'fullname' => 'Aldy Revigustian',
            'username' => 'Aldy',
            'password' => Hash::make('Aldy123'),
            'kelas' => 'XII RPL',
            'alamat' => 'Bukdur',
            'role' => 'user',
            'join_date' => '2022-12-01',

        ]);
    }
}
