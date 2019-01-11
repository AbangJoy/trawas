<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Wisata;
use Illuminate\Support\Facades\Storage;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }

    public function index()
    {
        $wisata = Wisata::all();
        return view('wisata.index', compact('wisata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wisata.create');
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
            'wisata' => 'image|mimes:jpeg,png'
        ]);

        $wisata = $user->wisata()->create($request->except('foto'));

        $wisata->update([
            'foto' => $wisata->id . '.' . $request->file('foto')->getClientOriginalExtension()
        ]);

        $request->file('foto')->storeAs('public/img/wisata', $wisata->foto);

        return redirect()->route('wisata.index')->with('success_msg', 'Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Wisata::find($id);

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
        $wisata = Wisata::find($id);
        return view('wisata.edit', compact('wisata', 'id'));
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
        $wisata = Wisata::find($id);
        $wisata->update($request->except('foto'));

        if ($request->hasFile('foto')) {
            Storage::delete('public/img/wisata/' . $wisata->foto);

            $wisata->update([
                'foto' => $wisata->id . '.' . $request->file('foto')->getClientOriginalExtension()
            ]);

            $request->file('foto')->storeAs('public/img/wisata', $wisata->foto);
        }

        return redirect()->route('wisata.index')->with('success_msg', 'Data wisata Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wisata = Wisata::find($id);

        Storage::delete('public/img/wisata/' . $wisata->foto);

        $wisata->delete();

        return redirect()->route('wisata.index')->with('success_msg', 'wisata Berhasil Dihapus');
    }
}
