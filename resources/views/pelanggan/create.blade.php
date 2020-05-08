@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h3 aling="center">Add Order</h3>
        @if(count($errors) > 0)
            <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
            </div>
        @endif

        @if(\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif

        <form method="post" action="{{url('pelanggan')}}">
            {{csrf_field()}}
            <div class="form-group">
                <label> Tanggal Transaksi</label>
                <input type="text" name="tanggal_transaksi" class="form-control" placeholder="Tanggal Transaksi" />
            </div>
            <div class="form-group">
                <label> Alamat </label>
                <input type="text" name="alamat" class="form-control" placeholder="Alamat" />
            </div>
            <div class="form-group">
                <label> No. Telepon </label>
                <input type="integer" name="no_telepon" class="form-control" placeholder="No.Telepon" />
            </div>
            <div class="form-group">
                <label> Pilih Paket Laundry </label><br>
                <!--<input type="text" name="pilihan_paket_laundry" class="form-control" placeholder="Pilih Paket Laundry" /> -->
                <input type="radio" name="pilihan_paket_laundry" value="dry_clean">Dry Clean (1 Day)
                <input type="radio" name="pilihan_paket_laundry" value="express">Express (2 Day)
                <input type="radio" name="pilihan_paket_laundry" value="premium">Premium (3 Day)
                <input type="radio" name="pilihan_paket_laundry" value="standart">Standart (5 Day)
            </div>
            <div class="form-group">
            <label> Berat </label>
            <input type="integer" name="berat" class="form-control" placeholder="0" />
            </div>
            <div class="form-group">
                <label> Diskon/Reward </label>
                <input type="integer" name="diskon_reward" class="form-control" placeholder="0" />
            </div>
            <div class="form-group">
                <label> Status Pembayaran </label><br>
                <input type="radio" name="status_pembayaran" value="cod">COD 
                <input type="radio" name="status_pembayaran" value="e-wallet">E-Wallet
             </div>
            <div class="form-group">
                <label> Total Bayar </label>
                <input type="integer" name="total_bayar" class="form-control" placeholder="0 " />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" />
            </div>
        </form>
    </div>
</div>
@endsection
