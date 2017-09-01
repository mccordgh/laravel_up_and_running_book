@extends('layout')

@section('title', 'ABOOT')

@section('content')
    <h1>I AM GRATE. KILLER IN FACT.</h1>
    @if($number)
        <h2>GRATE x{{ $number }}</h2>
    @endif
@endsection
