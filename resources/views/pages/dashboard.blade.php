@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        @if(count($dashboard) > 1)
            @foreach($dashboard as $dashboard)
                <div class="well">
                    <h3>{{$dasboard->title}} </h3>
                </div>
            @endforeach
        @else
            <p> Empty dashboard </p>
        @endif
    </div>
@endsection