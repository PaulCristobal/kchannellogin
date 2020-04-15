@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <img class="img-logo" src="/img/kchannellogo.png" alt="KChannel" height="250" width="auto"/>
        <br/><br/>
        <h1><b> {{$title}} </b></h1>
        <p> <a class="btn btn-primary btn-lg" href="/kchannellogin/public/login" role="button">Login </a>
            <a class="btn btn-primary btn-lg" href="/kchannellogin/public/register" role="button"> Register </a></p> 
    </div>
@endsection
 