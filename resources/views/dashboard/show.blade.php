@extends('layout.app')

@section('content')
    <a href="/dashboard" class="btn btn-default"> Back </a>
    <h1> {{$dashboard->title}} </h1>
    <small> Published on {{$dashboard->created_at}} </small>
    <div class="jumbotron text-center">
        {{$dashboard->body}}
    </div>
@endsection