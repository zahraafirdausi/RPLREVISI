@extends('layouts.master')

@section('content')
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
    <div class="item">
        <div class="d-flex pb-2 mb-3 border-bottom">
            <h1 class="h2" style="">Buat Pesanan</h1>
        </div>
        <form class="d-flex-column justify-content-around mr-2" method="post" action="/order/store">
            {{csrf_field()}}
            <div class="form-group">
                <label for="tanggal_transaksi"> Tanggal Transaksi</label>
                <input type="text" name="tanggal_transaksi" id="tanggal_transaksi" class="form-control" placeholder="Tanggal Transaksi" />
            </div>
            <div class="form-group">
                <label for="alamat"> Alamat </label>
                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat" />
            </div>
            <div class="form-group">
                <label for="no_telepon"> No. Telepon </label>
                <input type="integer" name="no_telepon" id="no_telepon" class="form-control" placeholder="No.Telepon" />
            </div>
            <div class="form-group">
                <label for="pilihan_paket_laundry"> Pilih Paket Laundry </label>
                <select class="custom-select" id="pilihan_paket_laundry" name="pilihan_paket_laundry" required>
                    <option name="pilihan_paket_laundry" value="Standart (5 Day)">Standart (5 Day)</option>
                    <option name="pilihan_paket_laundry" value="Premium (3 Day)">Premium (3 Day)</option>
                    <option name="pilihan_paket_laundry" value="Express (2 Day)">Express (2 Day)</option>
                    <option name="pilihan_paket_laundry" value="DryClean (1 Day)">Dry Clean (1 Day)</option>
                    </select>
            </div>
            <div class="form-group">
            <label for="berat"> Berat </label>
            <input type="integer" name="berat" id="berat" class="form-control" placeholder="0" />
            </div>
            <div class="form-group">
                <label for="diskon_reward"> Diskon/Reward </label>
                <input type="integer" name="diskon_reward" id="diskon_reward" class="form-control" placeholder="0" />
            </div>
            <div class="form-group">
                <label for="status_pembayaran"> Metode Pembayaran </label><br>
                <select class="custom-select" id="status_pembayaran" name="status_pembayaran" required>
                    <option name="status_pembayaran" value="e-wallet">E-Wallet</option>
                    <option name="status_pembayaran" value="cod">COD </option>
                </select>
             </div>
            <div class="form-group">
                <label for="total_bayar"> Total Bayar </label>
                <input type="integer" name="total_bayar" id="total_bayar" class="form-control" placeholder="0 " />
            </div>
            <div class="form-group text-right">
                <input type="submit" class="btn btn-primary" />
            </div>
        </form>
    </div>
@endsection
