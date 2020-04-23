@extends('layout.app')

@section('content')
    <h1> Dashboard </h1>
    <div class="jumbotron text-center">
        @if(count($dashboard) > 1)
            @foreach ($dashboard as $dashboard)
                <div class="well">
                    <h3><a href="/dashboard/{{$dashboard->id}}"> {{$dashboard->title}} </a></h3>
                    <small> Written on {{$dashboard->created_at}} </small>
                </div>
            @endforeach
            {{$dashboard->links()}}
        @else
            <p> Empty Dashboard </p>
        @endif
    </div>
@endsection