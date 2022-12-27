@extends('layouts.layout')

@section('shop_menu')
<a class="navbar-brand" style="text-decoration: none" href="{{ url('/') }}">
        <h1 style="color: blue; font-weight:bold;">Rese</h1>
    </a>
<div class="register_message">
<h2>ご予約ありがとうございます。</h2>

<a href="{{route('shops.index')}} ">
    <button class="register_button">戻る</button>
</a>
</div>
@endsection
