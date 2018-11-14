<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $artikel = artikel::all();
        return view('artikel.index', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'artikel' => 'image|mimes:jpeg,png'
        ]);

        $artikel = Artikel::create($request->except('foto'));

        $artikel->update([
            'foto' => $artikel->id . '.' . $request->file('foto')->getClientOriginalExtension()
        ]);

        $request->file('foto')->storeAs('public/img/artikel', $artikel->foto);

        return redirect()->route('artikel.index')->with('success_msg', 'Berhasil Disimpan');
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
        $artikel = artikel::find($id);
        return view('artikel.edit', compact('artikel', 'id'));
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
        $artikel = artikel::find($id);
        $artikel->update($request->except('foto'));

        if ($request->hasFile('foto')) {
            Storage::delete('public/img/artikel/' . $artikel->foto);

            $artikel->update([
                'foto' => $artikel->id . '.' . $request->file('foto')->getClientOriginalExtension()
            ]);

            $request->file('foto')->storeAs('public/img/artikel', $artikel->foto);
        }

        return redirect()->route('artikel.index')->with('success_msg', 'Data artikel Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = artikel::find($id);

        Storage::delete('public/img/artikelf/' . $artikel->foto);

        $artikel->delete();

        return redirect()->route('artikel.index')->with('success_msg', 'artikel Berhasil Dihapus');
    }
}
