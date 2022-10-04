<?php

namespace Database\Seeders;

use App\Models\DetailSublayanan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailSublayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetailSublayanan::create([
            "kategori_id" => "1",
            "layanan_id" => "1",
            "nama_vendor" => "wijaya",
            "harga" => "40.000",
            "status1" => "tersedia",
            "alamat" => "banguntapan",
            "deskripsi" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem necessitatibus totam, provident rerum aliquam impedit animi pariatur nulla.",
        ]);
    }
}
