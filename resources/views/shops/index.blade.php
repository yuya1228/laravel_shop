@extends('layouts.layout')

@section('shop_header')
    <h1 class="shop_title">RESE</h1>

    <div class="shop_search">
        <nav>
            <ul>
                <li>
                    <select id="shop_id" name="prefectures">
                        <option hidden>All area</option>
                        @foreach ($shops as $shop)
                            {
                            @if ($loop->index == 1)
                                <option value="{{ $shop->shop_id }}">{{ $shop->prefectures }}</option>
                            @endif
                            @if ($loop->index == 2)
                                <option value="{{ $shop->shop_id }}">{{ $shop->prefectures }}</option>
                            @endif
                            @if ($loop->index == 3)
                                <option value="{{ $shop->shop_id }}">{{ $shop->prefectures }}</option>
                            @endif
                        @endforeach
                        }
                    </select>
                </li>

                <li>
                    <select id="food" name="food">
                        <option value="hidden">All genre</option>
                        <option value="1">寿司</option>
                        <option value="2">焼肉</option>
                        <option value="3">居酒屋</option>
                        <option value="4">イタリアン</option>
                        <option value="5">ラーメン</option>
                    </select>
                </li>
                <div class="search_box">
                    <li>
                        <input name="search" type="text" placeholder="Search..." />
                    </li>
                </div>
            </ul>
        </nav>
    </div>
@endsection

@section('shop_menu')
    @foreach ($shops as $shop)
        <div class="shop_box">
            <img src="{{asset('storage/images/'.$shop->image)}}">
            <h3>{{ $shop->shop_name }}</h3>
            <li>#{{ $shop->prefectures }}
                #{{ $shop->food }}</li>
            <p><button class="shop_detail">詳しく見る</button></p>
        </div>
    @endforeach
@endsection
