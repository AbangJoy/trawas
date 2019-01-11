<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
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
        $produk = Produk::all();
        return view('produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produk.create');
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
            'produk' => 'image|mimes:jpeg,png'
        ]);

        $produk = $user->produk()->create($request->except('foto'));
        $produk->update([
            'foto' => $produk->id . '.' . $request->file('foto')->getClientOriginalExtension()
        ]);

        $request->file('foto')->storeAs('public/img/produk', $produk->foto);

        return redirect()->route('produk.index')->with('success_msg', 'Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Produk::find($id);

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
        $produk = Produk::find($id);
        return view('produk.edit', compact('produk', 'id'));
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
        $produk = Produk::find($id);
        $produk->update($request->except('foto'));

        if ($request->hasFile('foto')) {
            Storage::delete('public/img/produk/' . $produk->foto);

            $produk->update([
                'foto' => $produk->id . '.' . $request->file('foto')->getClientOriginalExtension()
            ]);

            $request->file('foto')->storeAs('public/img/produk', $produk->foto);
        }

        return redirect()->route('produk.index')->with('success_msg', 'Data produk Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::find($id);

        Storage::delete('public/img/produk/' . $produk->foto);

        $produk->delete();

        return redirect()->route('produk.index')->with('success_msg', 'produk Berhasil Dihapus');
    }
}
 