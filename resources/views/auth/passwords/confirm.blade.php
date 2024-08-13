@extends('layouts.app')

@section('pageTitle', 'Confirm Password')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <img src="/assets/main/port.png" class="img-fluid">
            <a class="text-muted" href="https://www.freepik.com/free-vector/port-concept-illustration_18493589.htm#fromView=search&page=1&position=0&uuid=51865418-4a1f-44d2-a031-3a5660de0b10">Image by storyset on Freepik</a>
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
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                            <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" aria-describedby="basic-addon1" value="{{ old('password') }}" required autocomplete="current-password">
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
                        <button type="submit" class="btn btn-primary rounded-pill shadow-lg w-75 p-2">
                            {{ __('Submit') }} &nbsp; <i class="fa-solid fa-arrow-right-long"></i>
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