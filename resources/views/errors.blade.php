@extends('layout')

@section('title', '1337 GREETZ')

@section('content')
    <h1>WELCOME, >>>{{ $firstName }}!<<<</h1>
    <h1>Thanks for following the rules</h1>
    <h1>Here is your cool number: <span style="color:red;font-weight:bold">{{ $number }}</span></h1>
    <hr/>
    <a href="/">GO HOME</a>
@endsection
