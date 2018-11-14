<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
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
        $galeri = galeri::all();
        return view('galeri.index', compact('galeri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galeri.create');
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
            'foto' => 'image|mimes:jpeg,png'
        ]);

        $galeri = Galeri::create($request->except('foto'));

        $galeri->update([
            'foto' => $galeri->id . '.' . $request->file('foto')->getClientOriginalExtension()
        ]);

        $request->file('foto')->storeAs('public/img/galeri', $galeri->foto);

        return redirect()->route('galeri.index')->with('success_msg', 'Berhasil Disimpan');
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
        $galeri = galeri::find($id);
        return view('galeri.edit', compact('galeri', 'id'));
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
        $galeri = galeri::find($id);
        $galeri->update($request->except('foto'));

        if ($request->hasFile('foto')) {
            Storage::delete('public/img/galeri/' . $galeri->foto);

            $galeri->update([
                'foto' => $galeri->id . '.' . $request->file('foto')->getClientOriginalExtension()
            ]);

            $request->file('foto')->storeAs('public/img/galeri', $galeri->foto);
        }

        return redirect()->route('galeri.index')->with('success_msg', 'Data galeri Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeri = galeri::find($id);

        Storage::delete('public/img/galerif/' . $galeri->foto);

        $galeri->delete();

        return redirect()->route('galeri.index')->with('success_msg', 'galeri Berhasil Dihapus');
    }
}
