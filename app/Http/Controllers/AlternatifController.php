<?php

namespace App\Http\Controllers;

use App\Models\alternatif;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dataalternatif', [
            'users' => alternatif::all(),
            'title' => 'Data alternatif'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adddataalternatif');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alternatif1 = $request->input('alternatif');
        $harga1 = $request->input('harga');
        $lokasi1 = $request->input('lokasi');
        $fasilitas1 = $request->input('fasilitas');
        $variasi1 = $request->input('variasi');
        $pelayanan1 = $request->input('pelayanan');
        $kebersihan1 = $request->input('kebersihan');

        $alternatif = new alternatif;
        $alternatif->alternatif    = $alternatif1;
        $alternatif->harga = $harga1;
        $alternatif->lokasi = $lokasi1;
        $alternatif->fasilitas = $fasilitas1;
        $alternatif->variasi = $variasi1;
        $alternatif->pelayanan = $pelayanan1;
        $alternatif->kebersihan = $kebersihan1;

        $alternatif->save();

        return redirect()->to('/alternatif');
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
        return view('editalternatif')->with([
            'users' => alternatif::find($id),
        ]);
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
        //
    }
}
