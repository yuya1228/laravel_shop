@extends('layouts.layout')


@section('shop_header')
    <a class="navbar-brand" style="text-decoration: none" href="{{ url('/') }}">
        <h1 style="color: blue; font-weight:bold;">Rese</h1>
        @endsection

@section('shop_menu')
    <h2 class="information_title">予約状況</h2>

    <div class="information">
         @foreach($shop_users as $shop_user)
        <span><i class="fa-regular fa-clock" style="color: white; font-size:20px; margin-left: 10%;"></i></span>
        <h4>予約{{$shop_user->id}}</h4>
        <i class="fa-regular fa-circle-xmark" style="color: white; font-size:20px; margin-left: 50%;"></i>
        <table class="reserve_status">
            <tr>
                <th>Shop</th>
                <td>{{$shop_user->shop_id}}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{$shop_user->date_start}}</td>
            </tr>
            <tr>
                <th>Time</th>
                <td>{{$shop_user->time_start}}</td>
            </tr>
            <tr>
                <th>人数</th>
                <td>{{$shop_user->sum_people}}</td>
            </tr>
        </table>
        @endforeach
    </div>

    @if (Auth::check())
        <h2>{{ Auth::user()->name }}</h2>
    @endif

    <h3>お気に入り店舗</h3>
@foreach ($items as $item)
        <div class="shop_box">
            <img src="{{ asset('storage/images/' . $item->image) }}">
            <h3>{{ $item->shop_name }}</h3>
            <td>#{{ $item->area }}</td>
            <td>#{{ $item->genre }}</td>
            <div class="shop_button">
                <a href="{{ route('shops.detail', $item->id) }}"><button class="shop_detail">詳しく見る</button></a>

                <span class="like_button">
                    <form action="{{ route('unlike',['id =>$likes->id'])}}" method="POST">
                        @csrf
                        <input type="submit" name="shop_id" value="&#xf004;" class="fas btn btn-success"
                            style="color: gray; border:none; font-size:30px; background:white;">
                    </form>

                    <form action="{{ route('like',['id =>$likes->id'])}}" method="POST">
                        @csrf
                        <input type="submit" name="shop_id" value="&#xf004;" class="fas btn btn-danger"
                            style="color: red; border:none; font-size:30px; background:white;">
                    </form>
                </span>
            </div>
        </div>
    @endforeach
@endsection
