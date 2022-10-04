<?php

namespace Database\Seeders;

use App\Models\DetailGambarKecil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailGambarKecilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetailGambarKecil::create([
            "gambar" => "https://unsplash.com/t/history",
            "layanan_id" => 1
        ]);
    }
}
