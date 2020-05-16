<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelanggan;
use Illuminate\Support\Facades\Auth;

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

    public function tampilin()
    {
        return view('pelanggan.riwayat');
    }

    public function reward()
    {
        return view('pelanggan.reward');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // buat ngecek apakah masuk atau tidak
       //return $request->all();

        $this->validate($request, [
            'tanggal_transaksi'     => 'required',
            'alamat'                => 'required',
            'no_telepon'            => 'required',
            'pilihan_paket_laundry' => 'required',
            'berat'                 => 'required',
            'diskon_reward'         => 'required',
            'status_pembayaran'     => 'required',
            'total_bayar'           => 'required',
        ]);

        $pelanggan = new pelanggan;
            $pelanggan->user_id               = Auth::id();
            $pelanggan->tanggal_transaksi     = $request->tanggal_transaksi;
            $pelanggan->alamat                = $request->alamat;
            $pelanggan->no_telepon            = $request->no_telepon;
            $pelanggan->pilihan_paket_laundry = $request->pilihan_paket_laundry;
            $pelanggan->berat                 = $request->berat;
            $pelanggan->diskon_reward         = $request->diskon_reward;
            $pelanggan->status_pembayaran     = $request->status_pembayaran;
            $pelanggan->total_bayar           = $request->total_bayar;
        $pelanggan->save();
        return $pelanggan;
        //return redirect()->route('pelanggan.home')->with('success', 'Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
