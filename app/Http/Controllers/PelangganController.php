<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('pelanggan.index');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'tanggal_transaksi'     => 'required',
            'nama_lengkap'          => 'required',
            'alamat'                => 'required',
            'no_telepon'            => 'required',
            'pilihan_paket_laundry' => 'required',
            'berat'                 => 'required',
            'diskon'                => 'required',
            'total_bayar'           => 'required',
        ]);
        $pelanggans = new pelanggan([
            'tanggal_transaksi'     =>  $request->get('tanggal_transaksi'),
            'nama_lengkap'          =>  $request->get('nama_lengkap'),
            'alamat'                =>  $request->get('alamat'),
            'no_telepon'            =>  $request->get('no_telepon'),
            'pilihan_paket_laundry' =>  $request->get('pilihan_paket_laundry'),
            'berat'                 =>  $request->get('berat'),
            'diskon'                =>  $request->get('diskon'),
            'total_bayar'           =>  $request->get('total_bayar')
        ]);
        $pelanggans->save();
        return redirect()->route('pelanggan.create')->with('success', 'Data Added');

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
