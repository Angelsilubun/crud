<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLandingpageController extends Controller
{
    public function home()
    {
        return view("user.landingpage.home");
    }

    public function kontak()
    {
        return view("user.landingpage.kontak");
    }

    public function tentang()
    {
        return view("user.landingpage.tentang");
    }

    public function layanan()
    {
        return view("user.layanan.layanan");
    }
    public function kendaraan()
    {
        return view("user.layanan.kendaraan");
    }
    // public function barang()
    // {
    //     return view("user.layanan.barang");
    // }
    // public function bangunan()
    // {
    //     return view("user.layanan.bangunan");
    // }
    public function d_kendaraan()
    {
        return view("user.layanan.detail_layanan.kendaraan");
    }
    // public function d_bangunan()
    // {
    //     return view("user.layanan.detail_layanan.bangunan");
    // }
    // public function d_barang()
    // {
    //     return view("user.layanan.detail_layanan.barang");
    // }

    public function i_pembayaran()
    {
        return view("user.pemesanan.info_pembayaran");
    }

    public function struk()
    {
        return view("user.pemesanan.struk");
    }

    public function o_progress()
    {
        return view("user.pemesanan.history.on_progress");
    }

    public function l_progress()
    {
        return view("user.pemesanan.history.last_progress");
    }

    
}
