<?php

namespace App\Http\Controllers\SliderLayanan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\SliderLayanan\SliderLayanan;
use Illuminate\Support\Facades\Storage;

class SliderLayananController extends Controller
{
    public function index()
    {
        $data = [
            "data_slider" => SliderLayanan::get()
        ];

        return view("superadmin.slider.slider_layanan.tambah", $data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => '',
            'deskripsi' => '',
            'image' => 'mimes:jpg,jpeg,png'
        ]);

        if($request->file("image")) {
            $data = $request->file("image")->store("slider");
        }

        SliderLayanan::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'image' => $data
        ]);
        return back()->with('berhasil', 'Layanan baru telah ditambahkan!');
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => SliderLayanan::where("id", $request->id)->first()
        ];

        return view("superadmin.slider.slider_layanan.edit", $data);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'judul' => '',
            'deskripsi' => '',
            'image' => 'mimes:jpg,jpeg,png'
        ]);

        if($request->file("image_new")) {
            if ($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }

            $data = $request->file("image_new")->store("slider");
        } else {
            $data = $request->gambarLama;
        }

        SliderLayanan::where("id", $request->id)->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'image' => $data
        ]);

        return back();
    }

    public function show(Request $request)
    {
        $data = [
            "detail" => SliderLayanan::where("id", $request->id)->first()
        ];

        return view("superadmin.slider.slider_layanan.detail", $data);
    }
    
    public function destroy(SliderLayanan $slider_layanan)
    {
        Storage::delete('slider_layanan'. $slider_layanan->image);

        $slider_layanan->delete();

        return back()->with('berhasil');
    }

    // public function destroy($id)
    // {
    //     SliderLayanan::where("id", $id)->delete();

    //     return back()->with('berhasil', 'Data berhasil di hapus');
    // }
}

