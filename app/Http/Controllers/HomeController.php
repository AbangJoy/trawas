<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function menu()
    {
        $setting = Setting::firstOrFail();
        return view('menu', compact('setting'));
    }

    public function editMenu(Request $request)
    {
        Setting::firstOrFail()->update([
            'menu' => $request->except('_token')
        ]);
        return redirect()->route('menu')->with('success_msg','Menu Berhasil Disimpan');
    }

    public function staf()
    {
        return view('staf.index');
    }

    public function editStaf()
    {
        return view('staf.edit');
    }

    public function createStaf()
    {
        return view('staf.create');
    }

    public function desa()
    {
        return view('desa.index');
    }
    public function editDesa()
    {
        return view('desa.edit');
    }
    public function createDesa()
    {
        return view('desa.create');
    }


    public function wisata()
    {
        return view('wisata.index');
    }
    public function editWisata()
    {
        return view('wisata.edit');
    }
    public function createWisata()
    {
        return view('wisata.create');
    }


    public function produk()
    {
        return view('produk.index');
    }
    public function editProduk()
    {
        return view('produk.edit');
    }
    public function createProduk()
    {
        return view('produk.create');
    }


    public function galeri()
    {
        return view('galeri.index');
    }
    public function editGaleri()
    {
        return view('galeri.edit');
    }
    public function createGaleri()
    {
        return view('galeri.create');
    }

    
    public function berita()
    {
        return view('berita.index');
    }
    public function editBerita()
    {
        return view('berita.edit');
    }
    public function createBerita()
    {
        return view('berita.create');
    }
}
