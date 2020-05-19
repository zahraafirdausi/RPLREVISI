@extends('layouts.master')
@section('profile')
    class="active"
@endsection
@section('content')
<div class="d-flex">
    <div class="item w-75">
        <div class="d-flex pb-2 mb-3 border-bottom">
            <h1 class="h3" style="">Profile</h1>
        </div>
        <form class="d-flex-column justify-content-around ml-5 mr-5" method="post" action="/home/update/{{$user->id_user}}">
            {{csrf_field()}}
            {{ method_field('PUT')}}
            <div class="form-group">
                <label for="username"> Username </label>
                <input type="text" name="username" id="username" class="form-control" placeholder="username" value="{{ $user->username }} " >

                @if($errors->has('username'))
                    <div class="text-danger">
                        {{$errors->first('username')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="Nama_Lengkap"> Nama Lengkap </label>
                <input type="text" name="Nama_Lengkap" id="Nama_Lengkap" class="form-control" placeholder="Nama_Lengkap" value="{{ $user->Nama_Lengkap }} " >

                @if($errors->has('Nama_Lengkap'))
                    <div class="text-danger">
                        {{$errors->first('Nama_Lengkap')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="Alamat"> Alamat </label>
                <input type="text" name="Alamat" id="Alamat" class="form-control" placeholder="Alamat" value="{{ $user->Alamat }}" >

                @if($errors->has('alamat'))
                    <div class="text-danger">
                        {{$errors->first('alamat')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="no_telepon"> No Telepon </label>
                <input type="text" name="no_telepon" id="no_telepon" class="form-control" placeholder="No. Telepon" value="{{ $user->no_telepon }}" >

                @if($errors->has('no_telepon'))
                    <div class="text-danger">
                        {{$errors->first('no_telepon')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Simpan">
            </div>
        </form>
        <br>
        <a href="/home" class="btn btn-primary ">Kembali</a>
    </div>
@endsection