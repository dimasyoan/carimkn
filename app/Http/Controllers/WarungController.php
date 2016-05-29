<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\Warung;



class WarungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //Warung::all();
        $warung = Warung::orderBy('id', 'asc')->get();

        return view('warung', ['warung' => $warung]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('home');
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
        /*$warung = new Warung;
        $warung->namawarung = $request->namawarung;
        $warung->waktubuka = $request->waktubuka;
        $warung->kategori = $request->kategori;
        $warung->alamat = $request->alamat;
        $warung->save();*/

        $inputs = $request -> all();
        $warung = Warung::create($inputs);

        return redirect()->route('warung.index');
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
        //
        $warung = Warung::find($id);

        return view('edit', compact('warung', $warung));

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
        $warung = Warung::find($id);

        $warung->namawarung = $request->namawarung;
        $warung->waktubuka = $request->waktubuka;
        $warung->kategori = $request->kategori;
        $warung->alamat = $request->alamat;
        $warung->save();

        return redirect()->route('warung.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $warung = Warung::find($id)->delete();
        return redirect('warung');
    }
}
