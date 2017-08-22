@extends('layout')

@section('title', 'HOOOME')

@section('content')
    <h1>welcome to your new HOME. here is link:</h1><br>
    <a href="about">ABOUT</a><br>
    <a href="contact">CONTACT</a><br>

    <h1>Get a greeting, my friend:</h1>
    <form method="post" action="/greeting">
        {{ csrf_field() }}
        <label for="title">Title:</label>
        <input id="title" type="text" name="person[title]" />
        <br><br>
        <label for="first-name">First Name:</label>
        <input id="first-name" type="text" name="person[firstName]" />
        <br><br>
        <label for="last-name">Last Name:</label>
        <input id="last-name" type="text" name="person[lastName]" />
        <br><br>
        <label for="suffix">Suffix:</label>
        <input id="suffix" type="text" name="person[suffix]" />
        <br><br>
        <input type="submit" />
    </form>
@endsection
