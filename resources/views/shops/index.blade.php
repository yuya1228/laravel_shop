@extends('layouts.layout')

@section('shop_header')
    <h1 class="shop_title">RESE</h1>

    <div class="shop_search">
        <nav>
            <ul>
                <li>
                    <select id="shop_id" name="prefectures">
                        <option hidden>All area</option>
                        @foreach ($areas->unique('area') as $area)
                            {
                                <option value="{{ $area->shop_id }}">{{ $area->area }}</option>
                        @endforeach
                        }
                    </select>
                </li>

                <li>
                    <select id="food" name="food">
                        <option value="hidden">All genre</option>
                        @foreach($genres->unique('genre') as $genre)
                        <option value="{{ $genre->shop_id }}">{{ $genre->genre}}</option>
                        @endforeach
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
            <li>#{{ $area->area }}
                #{{ $genre->genre }}</li>
            <p class="shop_button"><button class="shop_detail">詳しく見る</button></p>
            <p class="like_button"><i class="fa-duotone fa-heart"></i></p>
        </div>
    @endforeach
@endsection
