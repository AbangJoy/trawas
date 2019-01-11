<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Informasi;
use Illuminate\Support\Facades\Storage;

class InformasiController extends Controller
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
        $informasi = Informasi::all();
        return view('informasi.index', compact('informasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('informasi.create');
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
        $informasi = $user->informasi()->create($request->all());

        return redirect()->route('informasi.index')->with('success_msg', 'Berhasil Disimpan');
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
        $informasi = Informasi::find($id);
        return view('informasi.edit', compact('informasi', 'id'));
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
        $informasi = Informasi::find($id);
        $informasi->update($request->except('foto'));

        if ($request->hasFile('foto')) {
            Storage::delete('public/img/informasi/' . $informasi->foto);

            $informasi->update([
                'foto' => $informasi->id . '.' . $request->file('foto')->getClientOriginalExtension()
            ]);

            $request->file('foto')->storeAs('public/img/informasi', $informasi->foto);
        }

        return redirect()->route('informasi.index')->with('success_msg', 'Data informasi Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $informasi = Informasi::find($id);

        Storage::delete('public/img/informasi/' . $informasi->foto);

        $informasi->delete();

        return redirect()->route('informasi.index')->with('success_msg', 'informasi Berhasil Dihapus');
    }
}
