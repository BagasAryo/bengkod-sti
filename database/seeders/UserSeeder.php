<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'nama' => 'dr. Bram',
                'alamat' => 'Semarang',
                'no_hp' => '0812345678',
                'email' => 'buditabudi.dokter@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'dokter',
            ],
            [
                'nama' => 'Isna',
                'alamat' => 'Semarang',
                'no_hp' => '0888790934',
                'email' => 'isna.pasien@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'pasien',
            ],
            [
                'nama' => 'dr. Yasmeen',
                'alamat' => 'Tangerang Selatan',
                'no_hp' => '0812348778',
                'email' => 'yasmeen.dokter@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'dokter',
            ],
            [
                'nama' => 'dr. Feitan',
                'alamat' => 'Semarang',
                'no_hp' => '0812342998',
                'email' => 'feitan.dokter@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'dokter',
            ],
        ]);
    }
}
