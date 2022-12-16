@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: blue; color:white; height:55px; font-size:20px;">
                        {{ __('Registration') }}</div>

                    <div class="card-body" style=" box-shadow: 5px 5px 5px rgb(196, 195, 195);">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end"><i
                                        class="fa-solid fa-user-large"
                                        style="font-size:25px"></i></label>

                                <div class="col-md-6" style="border-bottom: solid 0.5px black; width:60%;">
                                    <input id="name" type="text"
                                        class="form-control  @error('name') is-invalid @enderror"
                                        style="border: none; background:white;" name="name" placeholder="Username" value="{{ old('name') }}"
                                        required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end"><i
                                        class="fa-solid fa-envelope"
                                        style="font-size:25px;"></i></label>

                                <div class="col-md-6" style="border-bottom: solid 0.5px black; width: 60%;">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        style="border: none; background:white;" name="email" placeholder="Email" value="{{ old('email') }}"
                                        required autocomplete="email">

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
                                        style="font-size:25px"></i></label>

                                <div class="col-md-6" style="border-bottom: solid 0.5px black; width:60%;">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        style="border: none; background:white;" name="password" placeholder="Password" required
                                        autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4" style="width: 100%">
                                    <button type="submit" class="btn btn-primary" style="margin-left:45%;">
                                        {{ __('登録') }}
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
