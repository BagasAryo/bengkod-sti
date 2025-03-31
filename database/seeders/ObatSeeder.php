<?php

namespace Database\Seeders;

use App\Models\Obat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Obat::insert([
            ['nama_obat' => 'paracetamol', 'kemasan' => 'Tablet', 'harga' => 5500], 
            ['nama_obat' => 'Amoxcillin', 'kemasan' => 'Kapsul', 'harga' => 9000],
            ['nama_obat' => 'Ibuprofen', 'kemasan' => 'Tablet', 'harga' => 8000]
        ]);
    }
}
