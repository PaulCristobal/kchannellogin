@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2&display=swap" rel="stylesheet">
    <div class="jumbotron text-center">
        <h1> {{$title}} </h1>
        <p> This is the homepage. </p>
        <p> <a class="btn btn-primary btn-lg" href="/kchannellogin/public/login" role="button">Login </a>
            <a class="btn btn-primary btn-lg" href="/kchannellogin/public/register" role="button"> Register </a></p> 
    </div>
@endsection
 