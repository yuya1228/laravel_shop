@extends('layouts.layout')

@section('shop_header')
 <a class="navbar-brand" style="text-decoration: none" href="{{ url('/') }}">
   <h1 style="color: blue; font-weight:bold;">Rese</h1>
</a>

    <div class="shop_search">
        <form action="{{ route('shops.index') }}" method="GET">
            @csrf
            <table>
                <tr>
                    <td>
                        <select class="area" name="areas">
                            <option value="">All area</option>
                            @foreach ($areas as $area)
                                <option value="{{ $area->area }}">{{ $area->area }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <select class="genre" name="genres">
                            <option value="">All genre</option>
                            @foreach ($genres as $genre)
                                <option value="{{ $genre->genre }}">{{ $genre->genre }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </td>
                    <td>
                        <input name="keyword" type="text" value="{{$keyword}}" placeholder="Search..." />
                    </td>
                </tr>
            </table>
        </form>
    </div>
@endsection

@section('shop_menu')
    @foreach ($items as $item)
        <div class="shop_box">
            <img src="{{ asset('storage/images/' . $item->image) }}">
            <h3>{{ $item->shop_name }}</h3>
            <td>#{{ $item->area }}</td>
            <td>#{{ $item->genre }}</td>
            <div class="shop_button">
                <a href="{{ route('shops.detail', $item->id) }}"><button class="shop_detail">詳しく見る</button></a>
                <span class="like_button"><input id="heart_chk" class="heart_chk" type="checkbox">
                    <label class="heart_label" for="heart_chk">
                        <i class="fa-solid fa-heart"></i> </label></span>
            </div>
        </div>
    @endforeach
@endsection
