@extends('layouts.layout')

<h1 class="shop_title">RESE</h1>

@section('shop_menu')
    <div class="detail_container">
        <div class="shop_reserve">
            <table class="back_icon">
                <td><a href="{{ route('shops.index') }}"><button>＜</button></a></td>
                <td>
                    <h2 class="shop_menu">{{ $shops->shop_name }}</h2>
                </td>
            </table>
            <img class="shop_image" src="{{ asset('storage/images/' . $shops->image) }}">

            <p>#{{ $areas->area }}#{{ $genres->genre }}</p>
            <p>{{ $shops->store_overview }}</p>
        </div>

        <div class="reserve">
            <h2>予約</h2>
            <form action="{{ route('reserve.create') }}" method="POST">
                @csrf
                <ul>
                    <li><input type="date" value="{{ $reserves->date_start }}" name="date_start"></li>
                    <li><input type="time" value="{{ $reserves->time_start }}" name="time_start" style="width:90%; height:4%; margin-top:3%"></li>
                    <li><select name="sum_people" value="{{$reserves->sum_people}}">
                            <option value="1">1人</option>
                            <option value="2">2人</option>
                            <option value="3">3人</option>
                            <option value="4">4人</option>
                        </select></li>
                </ul>
                <table class="reserve_information">
                    <tr>
                        <th>Shop</th>
                        <td>{{ $shops->shop_name }}</td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td>{{ $reserves->date_start }}</td>
                    </tr>
                    <tr>
                        <th>Time</th>
                        <td>{{ $reserves->time_start }}</td>
                    </tr>
                    <tr>
                        <th>Number</th>
                        <td>{{ $reserves->sum_people }}</td>
                    </tr>
                </table>
                <button class="reserve_start">
                    <p>予約する</p>
                </button>
            </form>
        </div>
    </div>
@endsection
