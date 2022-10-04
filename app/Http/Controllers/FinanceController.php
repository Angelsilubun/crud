<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function dashboard_fin()
    {
        return view("finance.finance.dashboard_finance");
    }
}
