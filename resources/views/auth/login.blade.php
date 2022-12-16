@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: blue; color:white; height:55px; font-size:20px;">
                        {{ __('Login') }}</div>

                    <div class="card-body" style=" box-shadow: 5px 5px 5px rgb(196, 195, 195);">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end"><i
                                        class="fa-solid fa-envelope"
                                        style="font-size:25px;"></i></label>

                                <div class="col-md-6" style="border-bottom: solid 0.5px black; ">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        style="border: none; background:white;" name="email" placeholder="Email" value="{{ old('email') }}"
                                        required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end"><i
                                        class="fa-solid fa-lock"
                                        style="font-size:25px;"></i></label>

                                <div class="col-md-6" style="border-bottom: solid 0.5px black; width:60%;">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        style="border: none; background:white;" name="password" placeholder="Password" required
                                        autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4" style="width: 100%">
                                    <button type="submit" class="btn btn-primary" style="margin-left:40%;">
                                        {{ __('ログイン') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
