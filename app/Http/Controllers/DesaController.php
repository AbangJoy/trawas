<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Desa;
use Illuminate\Support\Facades\Storage;

class DesaController extends Controller
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
        $desa = Desa::all();
        return view('desa.index', compact('desa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('desa.create');
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
            'foto' => 'image|mimes:jpeg,png'
        ]);

        $desa = $user->desa()->create($request->except('foto'));

        $desa->update([
            'foto' => $desa->id . '.' . $request->file('foto')->getClientOriginalExtension()
        ]);

        $request->file('foto')->storeAs('public/img/desa', $desa->foto);

        return redirect()->route('desa.index')->with('success_msg', 'Berhasil Disimpan');
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
        $desa = Desa::find($id);
        return view('desa.edit', compact('desa', 'id'));
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
        $desa = Desa::find($id);
        $desa->update($request->except('foto'));

        if ($request->hasFile('foto')) {
            Storage::delete('public/img/desa/' . $desa->foto);

            $desa->update([
                'foto' => $desa->id . '.' . $request->file('foto')->getClientOriginalExtension()
            ]);

            $request->file('foto')->storeAs('public/img/desa', $desa->foto);
        }

        return redirect()->route('desa.index')->with('success_msg', 'Data desa Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $desa = Desa::find($id);

        Storage::delete('public/img/desa/' . $desa->foto);

        $desa->delete();

        return redirect()->route('desa.index')->with('success_msg', 'desa Berhasil Dihapus');
    }
}
