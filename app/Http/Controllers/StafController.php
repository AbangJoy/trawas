<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staf;
use Illuminate\Support\Facades\Storage;

class StafController extends Controller
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
        $staf = Staf::all();
        return view('staf.index', compact('staf'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staf.create');
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
            'foto' => 'image|mimes:jpeg'
        ]);

        $staf = Staf::create($request->except('foto'));
        $staf_image = $staf->id . '.' . $request->file('foto')->getClientOriginalExtension();
        $staf->foto = $staf_image;

        $request->file('foto')->storeAs('public/img/staff/', $staf_image);
        $staf->save();

        return redirect()->route('staf.index')->with('success_msg', 'Staf Berhasil Disimpan');
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
        return view('staf.edit');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staf = Staf::find($id);

        Storage::delete('public/img/staff/' . $staf->image);

        $staf->delete();

        return redirect()->route('staf.index')->with('success_msg', 'Staf Berhasil Dihapus');
    }
}
