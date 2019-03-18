@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    @if(count($services) > 0)
        <ul class="list-group list-group-flush">
            @foreach ($services as $item)
                <li class="list-group-item text-dark"
                 style="background-color: rgb(216, 151, 247)">
                     {{$item}}
                </li>
            @endforeach
        </ul>
        <hr>
    @endif
@endsection