@extends('layouts.app')

@section('pageTitle', 'Confirm Password')

@section('content')
<div class="container full-height d-flex justify-content-center align-items-center">
    <div class="row">
        <div class="col-md-5">
            <img src="/assets/premoza/13399753_Work_7.jpg" class="img-fluid">
            <a class="text-muted" href="https://www.freepik.com/free-vector/business-woman-depressed-stressed-watching-decrease-graph-stock-financial-trade-market-diagram_13399738.htm#fromView=keyword&page=1&position=3&uuid=db50ea3a-7847-4444-8f64-6868808b7682">Image by jcomp on Freepik</a>
        </div>
        <div class="col-md-7 my-md-5">
            <h1 class="offset-md-2 mb-4">{{ __('Confirm Password') }}</h1>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                {{ __('Please confirm your password before continuing.') }}

                <div class="row mb-3">
                    <div class="col-md-8 offset-md-2">
                        <label for="password" class="">{{ __('Password') }}</label>

                        <div class="input-group">
                            <input id="password" name="password" placeholder="********" type="password" class="form-control @error('password') is-invalid @enderror" aria-describedby="basic-addon1" value="{{ old('password') }}" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-4 offset-md-4">
                        <button type="submit" class="btn btn-gradient rounded-pill shadow-lg w-75 p-2 text-white">
                            {{ __('Submit') }} &nbsp; <i class="fa-solid fa-chevron-right"></i>
                        </button>
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection