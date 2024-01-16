@extends('layouts.app')

@section('content')
    <h1>Welcome to laravel</h1>

    <ul>
        @foreach ($trains as $train)
            <li>
                {{ $train->reference}} {{ $train->azienda}} {{ $train->giorno_partenza}}
            </li>
        @endforeach
    </ul>
@endsection