@extends('layouts.app')

@section('content')

<div class="thanks_message">
<h3>会員登録ありがとうございます。</h3>

<a href="{{url('/login')}} ">
    <button class="log_button">ログインする</button>
</a>
</div>
@endsection
