@extends('layouts.app')

@section('content')

<div class="register_message">
<h4>ご予約ありがとうございます</h4>

<a href="{{route('shops.index')}} ">
    <button class="register_button">戻る</button>
</a>
</div>
@endsection
