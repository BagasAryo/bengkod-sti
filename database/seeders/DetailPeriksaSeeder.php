<?php

namespace Database\Seeders;

use App\Models\Detail_periksa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailPeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Detail_periksa::insert([
            ['id_periksa' => 1, 'id_obat' => 1],
            ['id_periksa' => 1, 'id_obat' => 2],
        ]);
    }
}
