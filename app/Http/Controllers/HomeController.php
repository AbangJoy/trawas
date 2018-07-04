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
        return redirect()->route('menu')->with('success_msg', 'Menu Berhasil Disimpan');
    }
}
