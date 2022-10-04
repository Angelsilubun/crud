<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function dashboard_ven()
    {
        return view("vendor.vendor.dashboard_vendor");
    }
}
