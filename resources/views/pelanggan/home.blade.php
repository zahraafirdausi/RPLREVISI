@extends('layouts.master')

@section('content')
<div class="d-flex">
    <div class="item w-75  table-responsive">
        <div class="d-flex pb-2 mb-3 border-bottom">
            <h1 class="h3" style="">Profile</h1>
        </div>
        <table class="table mt-3">
            <tr>
              <th scope="col">Username</th>
              <th scope="col">Nama Lengkap</th>
              <th scope="col">Alamat</th>
              <th scope="col">No. Telepon</th>
            </tr> <br>
    
        @foreach($user as $users)
        <tr>
            <td> {{ $users -> username}} </td>
            <td> {{ $users -> Nama_Lengkap}} </td>
            <td> {{ $users -> Alamat  }} </td>
            <td> {{ $users -> no_telepon }}</td>
            <td>
            </table>
        <form action="/home/edit/{{$users->id_user}}" method="GET">
        <button type="submit" class="btn btn-primary">Edit</button>
        </form>
        </td>
        @endforeach
    </div>
    <div class="item w-25">
        <div class="d-flex pb-2 mb-3 border-bottom">
            <h1 class="h3" style="">E-Wallet</h1>
        </div>
    </div>
</div>

@endsection