@extends('layouts.master')

@section('content')
    @if($reward->count() > 0)
    <div class="d-flex justify-content-start">
        @foreach($reward as $rewards)
            <div class="item">
                <img class="card-img-top img-fluid" src="/img/reward.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $rewards -> judul_reward }}</h5>
                    <p class="card-text">{{ $rewards -> deskripsi }}</p>
                    <a href="#" class="btn btn-success float-right">Dapatkan</a>
                </div>
            </div>
        @endforeach
    </div>
    @else
    <div class="item">
        <div class="pb-2 mb-3 border-bottom w-100">
            <h1 class="h2" style="">Reward Kosong</h1>
        </div>
    </div>
    @endif
@endsection