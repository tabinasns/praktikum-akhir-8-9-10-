<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Laravel</title>
    @vite('resources/sass/app.scss')
</head>
<body class="bg-primary">
    <div class="container">
        {{-- <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div> --}}

                    <div class="container-sm mt-5">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row justify-content-center">
                                <div class="p-5 rounded-3 border col-4 bg-white">
                                    <div class="text-center">
                                        <div class="mb-3 text center">
                                            <i class="bi-hexagon-fill text-primary fs-1 pb"></i>
                                            <h4 class="pb-4">Employee Data Master</h4>
                                        </div>
                                    </div>
                                    <hr>
                                    {{-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> --}}

                                    <div>
                                        <div class=" mb-3">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Your Email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Your Password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row mb-0 mt-5">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary "><i class="bi bi-box-arrow-in-right me-2"></i>
                                                {{ __('Login') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
{{-- @extends('layouts.app')

@section('content')

@endsection --}}
