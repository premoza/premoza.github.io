@extends('layouts.app')

@section('pageTitle', 'Join Premoza')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <img src="/assets/premoza/13399753_Work_7.jpg" class="img-fluid">
            <a class="text-muted" href="https://www.freepik.com/free-vector/business-woman-depressed-stressed-watching-decrease-graph-stock-financial-trade-market-diagram_13399738.htm#fromView=keyword&page=1&position=3&uuid=db50ea3a-7847-4444-8f64-6868808b7682">Image by jcomp on Freepik</a>
        </div>
        <div class="col-md-7 my-md-5">
            <h1 class="offset-md-2 mb-4">{{ __('Join Premoza') }}</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="row mb-3">
                    <div class="col-md-8 offset-md-2">
                        <label for="name" class="">{{ __('Name') }}</label>

                        <div class="input-group" id="name">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                            <input type="text" name="first_name" aria-label="First name" placeholder="Firstname" class="form-control @error('first_name') is-invalid @enderror" required autocomplete="given-name">
                            <input type="text" name="last_name" aria-label="Last name" placeholder="Lastname" class="form-control @error('last_name') is-invalid @enderror" required autocomplete="family-name">

                            @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-md-8 offset-md-2">
                        <label for="email" class="">{{ __('Your email') }}</label>

                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                            <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" aria-describedby="basic-addon1" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-8 offset-md-2">
                        <label for="password" class="">{{ __('Password') }}</label>

                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-lock"></i></span>
                            <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" aria-describedby="basic-addon2" value="{{ old('password') }}" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-8 offset-md-2">
                        <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>

                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon5"><i class="fa-solid fa-lock"></i></span>
                            <input id="password-confirm" name="password_confirmation" type="password" class="form-control @error('password') is-invalid @enderror" aria-describedby="basic-addon5" value="{{ old('password_confirmation') }}" required autocomplete="new-password">
                            @error('password_confirmation')
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
                            {{ __('Register') }} &nbsp; <i class="fa-solid fa-arrow-right-long"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection