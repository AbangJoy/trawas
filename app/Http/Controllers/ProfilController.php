<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profil;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
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
        $profil = Profil::all();
        return view('profil.index', compact('profil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profil.create');
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
        $profil = $user->profil()->create($request->all());

        return redirect()->route('profil.index')->with('success_msg', 'Berhasil Disimpan');
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
        $profil = Profil::find($id);
        return view('profil.edit', compact('profil', 'id'));
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
        $profil = Profil::find($id);
        $profil->update($request->except('foto'));

        if ($request->hasFile('foto')) {
            Storage::delete('public/img/profilf/' . $profil->foto);

            $profil->update([
                'foto' => $profil->id . '.' . $request->file('foto')->getClientOriginalExtension()
            ]);

            $request->file('foto')->storeAs('public/img/profil', $profil->foto);
        }

        return redirect()->route('profil.index')->with('success_msg', 'Data profil Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profil = Profil::find($id);

        Storage::delete('public/img/profil/' . $profil->foto);

        $profil->delete();

        return redirect()->route('profil.index')->with('success_msg', 'profil Berhasil Dihapus');
    }
}
