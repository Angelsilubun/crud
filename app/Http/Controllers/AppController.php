<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Models\CompanyPic;
use Faker\Provider\ar_EG\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function dashboard()
    {
        return view("superadmin.dashboard");
    }

    public function profile()
    {
        return view("superadmin.profile");
    }

    public function home()
    {
        return view("superadmin.home.home");
    }

    public function setting()
    {
        return view("superadmin.setting");
    }

    public function vendor()
    {
        return view("superadmin.data_vendor");
    }

    public function trans()
    {
        return view("superadmin.data_trans");
    }

    public function data_pick_up()
    {
        return view("superadmin.data_pick_up");
    }

    public function order()
    {
        return view("superadmin.order");
    }

    public function bangunan()
    {
        return view("superadmin.bangunan");
    }

    public function barang()
    {
        return view("superadmin.barang");
    }

    public function pickup()
    {
        return view("superadmin.pickup");
    }

    public function payment()
    {
        return view("superadmin.payment");
    }

    public function pengaturan_user()
    {
        return view("superadmin.pengaturan_user");
    }

}
