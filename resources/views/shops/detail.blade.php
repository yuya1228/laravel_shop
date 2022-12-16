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
                    <li><input type="date" value="date" name="time_start"></li>
                    <li><select name="time_start">
                            <option value="{{ 'time_start' }}">時間</option>
                        </select></li>
                    <li><select name="sum_people">
                            <option value="{{ 'sum_people' }}">1人</option>
                        </select></li>
                </ul>
                <table class="reserve_information">
                    <tr>
                        <th>Shop</th>
                        <td>{{ $shops->shop_name }}</td>
                    </tr>
                    <tr>
                        <th>DATE</th>
                        <td>日付</td>
                    </tr>
                    <tr>
                        <th>TIME</th>
                        <td>時間</td>
                    </tr>
                    <tr>
                        <th>人数</th>
                        <td>人数</td>
                    </tr>
                </table>
                <button class="reserve_start">
                    <p>予約する</p>
                </button>
            </form>
        </div>
    </div>
@endsection
