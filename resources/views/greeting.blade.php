@extends('layout')

@section('title', '1337 GREETZ')

@section('content')
    <h1>WELCOME!</h1>
    <h1>{{ $person['title'] }}
        {{ $person['firstName'] }}
        {{ $person['lastName'] }}
        {{ $person['suffix'] }}</h1>

    <hr/>
@endsection
