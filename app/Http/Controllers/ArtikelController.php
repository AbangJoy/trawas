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
        $this->middleware('auth')->except('show');
    }

    public function index()
    {
        $artikel = Artikel::all();
        return view('artikel.index', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $user = auth()->user();
        $request->validate([
            'artikel' => 'image|mimes:jpeg,png'
        ]);

        $artikel = $user->artikel()->create($request->except('foto'));

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
        $data = Artikel::find($id);

        return view('show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = Artikel::find($id);
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
        $artikel = Artikel::find($id);
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
        $artikel = Artikel::find($id);

        Storage::delete('public/img/artikel/' . $artikel->foto);

        $artikel->delete();

        return redirect()->route('artikel.index')->with('success_msg', 'artikel Berhasil Dihapus');
    }
}
