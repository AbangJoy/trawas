<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class SettingController extends Controller
{
    //
    public function editMenu(Request $request)
    {
        Setting::first()->update([
            'menu' => $request->except('_token')
        ]);
        return redirect()->route('menu')->with('success_msg', 'Berhasil disimpan');
    }

    public function editMenu5(Request $request)
    {
        Setting::first()->update([
            'menu5' => $request->except('_token')
        ]);
        return redirect()->route('desa.index')->with('success_msg', 'Berhasil disimpan');
    }

    public function editMenu4(Request $request)
    {
        Setting::first()->update([
            'menu4' => $request->except('_token')
        ]);
        return redirect()->route('staf.index')->with('success_msg', 'Berhasil disimpan');
    }

    public function editMenu2(Request $request)
    {
        Setting::first()->update([
            'menu2' => $request->except('_token')
        ]);
        return redirect()->route('profil.index')->with('success_msg', 'Berhasil disimpan');
    }

    public function editMenu3(Request $request)
    {
        Setting::first()->update([
            'menu3' => $request->except('_token')
        ]);
        return redirect()->route('informasi.index')->with('success_msg', 'Berhasil disimpan');
    }

    public function editMenu6(Request $request)
    {
        Setting::first()->update([
            'menu6' => $request->except('_token')
        ]);
        return redirect()->route('wisata.index')->with('success_msg', 'Berhasil disimpan');
    }

    public function editMenu7(Request $request)
    {
        Setting::first()->update([
            'menu7' => $request->except('_token')
        ]);
        return redirect()->route('produk.index')->with('success_msg', 'Berhasil disimpan');
    }

    public function editMenu8(Request $request)
    {
        Setting::first()->update([
            'menu8' => $request->except('_token')
        ]);
        return redirect()->route('galeri.index')->with('success_msg', 'Berhasil disimpan');
    }

    public function editMenu9(Request $request)
    {
        Setting::first()->update([
            'menu9' => $request->except('_token')
        ]);
        return redirect()->route('berita.index')->with('success_msg', 'Berhasil disimpan');
    }

    public function editMenu10(Request $request)
    {
        Setting::first()->update([
            'menu10' => $request->except('_token')
        ]);
        return redirect()->route('kontak.index')->with('success_msg', 'Berhasil disimpan');
    }
}
