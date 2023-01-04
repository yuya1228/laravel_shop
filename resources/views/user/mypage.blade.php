@extends('layouts.layout')


@section('shop_header')
    <h1 style="color: blue; font-weight:bold; font-size:40px; margin-left:10%;">Rese</h1>
@endsection

@section('shop_menu')
    <h2 class="information_title">予約状況</h2>

    <div class="information">
        @foreach ($shop_users as $shop_user)
            <div class="reserve_container">
                <span><i class="fa-regular fa-clock" style="color: white; font-size:20px; margin-left: 10%;"></i></span>
                <h4>予約1</h4>
                <form action="{{ route('reserve.destroy', $shop_user->id) }}" method="POST">
                    @csrf
                    <button type="submit"
                        style="background-color:rgb(57, 57, 255); border: none; outline: none; margin-left:70%; bottom: 20%;">
                        <i class="fa-regular fa-circle-xmark" style="color:white; font-size:25px;"></i>
                    </button>
                </form>
            </div>

            <form action=" {{ route('update') }}" method="post">
                @csrf
                @method('PUT')
                <table class="reserve_status">
                    <tr>
                        <th>Shop</th>
                        <td>{{ $shop_user->shop_id }}</td>
                    </tr>
                    <tr>
                        <th><label>Date</label></th>
                        <td><input type="date" name="date_start" value="{{$shop_user->date_start}}"></td>
                    </tr>
                    <tr>
                        <th><label>Time</label></th>
                        <td><input type="time" name="time_start" value="{{$shop_user->time_start}}"></td>
                    </tr>
                    <tr>
                        <th><label>人数</label></th>
                        <td><input type="number" name="sum_people" value="{{$shop_user->sum_people}}"></td>
                    </tr>
                    <tr>
                        <th>予約日時変更</th>
                        <td><input type="submit" value="予約更新"></td>
                    </tr>
                </table>
            </form>
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
                    <form action="{{ route('unlike',$shops) }}" method="POST">
                        @csrf
                        <input type="submit" name="shop_id" value="&#xf004;" class="fas btn btn-success"
                            style="color: gray; border:none; font-size:30px; background:white;">
                    </form>
                    <form action="{{ route('like', $shops) }}" method="POST">
                        @csrf
                        <input type="submit" name="shop_id" value="&#xf004;" class="fas btn btn-danger"
                            style="color: red; border:none; font-size:30px; background:white;">
                    </form>
                </span>
            </div>
        </div>
    @endforeach
@endsection
