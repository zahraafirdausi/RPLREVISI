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

    @if(Session::has('success'))
        <div class="alert alert-success">
            <p>{{ Session::get('success') }}</p>
        </div>
    @endif
    <div class="item">
        <div class="d-flex pb-2 mb-3 border-bottom">
            <h1 class="h2" style="">Buat Pesanan</h1>
        </div>
        <form class="d-flex-column justify-content-around ml-5 mr-5" method="post" action="/order/store" id="orderForm">
            {{csrf_field()}}
            <div class="form-group">
                <label for="alamat"> Alamat </label>
                <input type="text" name="alamat" id="alamat" class="form-control" value="{{ Auth::user()->Alamat }}"/>
            </div>
            <div class="form-group">
                <label for="no_telepon"> No. Telepon </label>
                <input type="integer" name="no_telepon" id="no_telepon" class="form-control" placeholder="No.Telepon" />
            </div>
            <div class="form-group">
                <label for="pilihan_paket_laundry"> Paket Laundry </label>
                <select class="custom-select" id="pilihan_paket_laundry" name="pilihan_paket_laundry" onchange="calculateTotal()" required>
                    <option disabled selected value> -- pilih paket laundry -- </option>
                    <option name="pilihan_paket_laundry" value="Standart">Standart (5 Day) - Rp.8.000</option>
                    <option name="pilihan_paket_laundry" value="Premium">Premium (3 Day) - Rp.10.000</option>
                    <option name="pilihan_paket_laundry" value="Express">Express (2 Day) - Rp.12.000</option>
                    <option name="pilihan_paket_laundry" value="DryClean">Dry Clean (1 Day) - Rp.25.000</option>
                </select>
            </div>
            <div class="form-group">
            <label for="berat"> Berat </label>
                <input type="number" name="berat" id="berat"  class="form-control" placeholder="0" min="1" step="1" onblur="calculateTotal()" required/>
            </div>
            <div class="form-group">
                <label for="diskon_reward"> Diskon/Reward </label>
                <select class="custom-select" id="diskon_reward" name="diskon_reward">
                    <option disabled selected value> -- pilih kode reward -- </option>
                    @foreach($reward as $rewards)
                        <option name="diskon_reward" value="{{ $rewards -> kode_reward }}">{{ $rewards -> kode_reward }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="status_pembayaran"> Metode Pembayaran </label><br>
                <select class="custom-select" id="status_pembayaran" name="status_pembayaran" required>
                    <option name="status_pembayaran" value="e-wallet">E-Wallet</option>
                    <option name="status_pembayaran" value="cod">COD </option>
                </select>
             </div>
            <div class="form-group">
                <label for="totalPrice"> Total Bayar </label>
                <input type="integer" name="total_bayar" id="totalPrice" class="form-control" value="" readonly/>
            </div>
            <div class="form-group text-right mt-4">
                <input type="submit" class="btn btn-success w-25"/>
            </div>
        </form>
    </div>
@endsection
