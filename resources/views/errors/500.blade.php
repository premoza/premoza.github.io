@extends('layouts.app')

@section('pageTitle', 'Internal Server Error')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center 
                align-items-center">
        <div class="col-md-12 text-center">
            <h1>500</h1>
            <h2>Internal Server Error</h2>
            <p>
                Sorry, the server encountered an unexpected 
                condition that prevented it from fulfilling your request.
            </p>
        </div>
    </div>
</div>
@endsection