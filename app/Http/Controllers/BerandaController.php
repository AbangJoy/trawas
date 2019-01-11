<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Beranda;
use Illuminate\Support\Facades\Storage;

class BerandaController extends Controller
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
        $beranda = Beranda::all();
        return view('beranda.index', compact('beranda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beranda.create');
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

        $beranda = $user->beranda()->create($request->except('foto'));

        $beranda->update([
            'foto' => $beranda->id . '.' . $request->file('foto')->getClientOriginalExtension()
        ]);

        $request->file('foto')->storeAs('public/img/beranda', $beranda->foto);

        return redirect()->route('beranda.index')->with('success_msg', 'Berhasil Disimpan');
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
        $beranda = Beranda::find($id);
        return view('beranda.edit', compact('beranda', 'id'));
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
        $request->validate([
            'foto' => 'image|mimes:jpeg,png'
        ]);

        $beranda = Beranda::find($id);

        Storage::delete('public/img/beranda/' . $beranda->foto);

        $beranda->update([
            'foto' => $beranda->id . '.' . $request->file('foto')->getClientOriginalExtension()
        ]);

        $request->file('foto')->storeAs('public/img/beranda', $beranda->foto);
        return redirect()->route('beranda.index')->with('success_msg', 'Berhasil Disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $beranda = Beranda::find($id);

        Storage::delete('public/img/beranda/' . $beranda->foto);

        $beranda->delete();

        return redirect()->route('beranda.index')->with('success_msg', 'Berhasil Dihapus');
    }
}
