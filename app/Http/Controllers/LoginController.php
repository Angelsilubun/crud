<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Provinsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function post_login(Request $request)
    {
        $req = $this->validate($request, [
            "email" => "required",
            "password" => "required"
        ]);

        $user = User::where("email", $request->email)->first();

        if ($user) {
            Auth::attempt($req);
            if ($user->id_role == 1) {
                return redirect()->intended("/superadmin/dashboard");
            } else if ($user->id_role == 5) {
                return redirect("/admin/dashboard_admin");
            } else if ($user->id_role == 3) {
                return redirect("/finance/dashboard_finance");
            } else if ($user->id_role == 4) {
                return redirect("/vendor/dashboard_vendor");
            } else if ($user->id_role == 2) {
                return redirect("/user/home");
            }
        } else {
            return back();
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect("/login");
    }

    public function register()
    {
        $data = [
            "data_provinsi" => Provinsi::get()
        ];
        
        return view("auth.register", $data);
    }

    public function post_register(Request $request)
    {
        // dd($request->all());

        if($request->password != $request->password) {
            return back();
        } else {
            User::create([
                "name" => $request->name,
                "tgl_lahir" => $request->tgl_lahir,
                "email" => $request->email,
                "password" => bcrypt($request->password),
                "alamat" => $request->alamat,
                "desa" => $request->desa,
                "kecamatan" => $request->kecamatan,
                "kota_kabupaten" => $request->kota_kabupaten,
                "id_kodepos" => $request->id_kodepos,
                "id_provinsi" => $request->id_provinsi,
                "no_telp" => $request->no_telp,
                "id_role" => 2,
            ]);

            return redirect("/login");
        }
    }
}
