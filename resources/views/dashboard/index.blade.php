@extends('layout.app')

@section('content')
    <h1> Dashboard </h1>
    @if(count($dashboard) > 1)
    <div class="well">
        <h3>{{$dashboard->title}} </h3>
        <small> Written on {{$dashboard->created_at}} </small>
    </div>
    @else
        <p> Empty Dashboard </p>
    @endif
@endsection