<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Berita;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $berita = berita::all();
        return view('berita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'berita' => 'image|mimes:jpeg,png'
        ]);

        $berita = Berita::create($request->except('foto'));

        $berita->update([
            'foto' => $berita->id . '.' . $request->file('foto')->getClientOriginalExtension()
        ]);

        $request->file('foto')->storeAs('public/img/berita', $berita->foto);

        return redirect()->route('berita.index')->with('success_msg', 'Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = berita::find($id);
        return view('berita.edit', compact('berita', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $berita = berita::find($id);
        $berita->update($request->except('foto'));

        if ($request->hasFile('foto')) {
            Storage::delete('public/img/berita/' . $berita->foto);

            $berita->update([
                'foto' => $berita->id . '.' . $request->file('foto')->getClientOriginalExtension()
            ]);

            $request->file('foto')->storeAs('public/img/berita', $berita->foto);
        }

        return redirect()->route('berita.index')->with('success_msg', 'Data berita Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = berita::find($id);

        Storage::delete('public/img/beritaf/' . $berita->foto);

        $berita->delete();

        return redirect()->route('berita.index')->with('success_msg', 'berita Berhasil Dihapus');
    }
}
