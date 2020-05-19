<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //nampilin data user
        $id_user   = Auth::id();
        $user = user::all()->where('id_user', $id_user);
        return view('pelanggan.home')->with('user', $user);

    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_user)
    {
        $user = user::find($id_user);
        return view('pelanggan.homedit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_user)
    {
        $this->validate($request,[
            'username'     => 'required',
            'Nama_Lengkap' => 'required',
            'Alamat'       => 'required',
        ]);

        $user = user::find($id_user);
        $user->username     = $request->username;
        $user->Nama_Lengkap = $request->Nama_Lengkap;
        $user->Alamat       = $request->Alamat;
        $user->save();
        return redirect('/home');

        //return view('pelanggan.homedit', ['user' => $user]);
    }
    
    
}

