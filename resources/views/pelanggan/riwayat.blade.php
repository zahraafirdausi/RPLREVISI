@extends('layouts.master')
@section('riwayat')
  class="active"
@endsection
@section('content')
<!-- <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Lanjutkan untuk cancel</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/riwayat/destroy/" method="POST" id="deleteForm">
          
          {{ csrf_field() }}
          {{ method_field('DELETE') }} 
          

          <div class="modal-footer">
            <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Batalkan</button>
            <button type="submit" class="btn btn-danger">Lanjutkan</button>
          </div>
        </form>
      </div>
    </div></div> -->
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

  <div class="item table-responsive">
      <div class="d-flex pb-2 mb-3 border-bottom">
          <h1 class="h2" style="">Riwayat Pesanan</h1>
      </div>
      <div class="d-flex justify-content-between" id="riwayat">
        <a href="{{ url('riwayat/masuk') }}" type="submit" id="masuk" class="btn btn-danger">Masuk</a>
        <a href="{{ url('riwayat/proses') }}" type="submit" id="proses" class="btn btn-warning">Proses</a>
        <a href="{{ url('riwayat/selesai') }}" type="submit" id="selesai" class="btn btn-success">Selesai</a>
      </div>
      <table class="table mt-3">
          <thead class="thead-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Alamat</th>
              <th scope="col">Berat</th>
              <th scope="col">Paket</th>
              <th scope="col">Reward</th>
              <th scope="col">Total</th>
              <th scope="col">Status</th>
              <th scope="col">Handle</th>
            </tr>
          </thead>
          <tbody>
            @foreach($order as $orders)
              <tr>
                <th>{{ $orders -> id_order }}</th>
                <td>{{ $orders -> tanggal_transaksi }} </td>
                <td>{{ $orders -> alamat }} </td>
                <td>{{ $orders -> berat }} </td>
                <td>{{ $orders -> pilihan_paket_laundry }} </td>
                <td>{{ $orders -> diskon_reward }} </td>
                <td>{{ $orders -> total_bayar }} </td>
                @if($orders -> status_order =='Menunggu Kurir')  
                  <td><strong>{{ $orders -> status_order }}</strong></td>      
                  <td>
                    <form action="/riwayat/destroy/{{$orders->id_order}}" method="POST">
                    @csrf
                    @method('POST')
                      <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">CANCEL</button>
                      </form>
                  </td>                
                @elseif($orders -> status_order =='Proses')
                  <td><strong class="p-2 bg-warning" style="border-radius:24px; color:white;">{{ $orders -> status_order }}</strong></td> 
                  <td></td> 
                @else
                  <td><strong class="p-2 bg-success" style="border-radius:24px; color:white;">{{ $orders -> status_order }}</strong></td> 
                  <td></td>    
                @endif
              </tr>
            @endforeach
          </tbody>
      </table>
  </div>
  @endsection