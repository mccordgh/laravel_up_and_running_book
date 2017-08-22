@extends('layout')

@section('title', 'HOOOME')

@section('content')
    <h1>
        Welcome to your new HOME. here is links:
        <a href="about">ABOUT</a>
        <a href="contact">CONTACT</a>
    </h1>

    <div style="border:solid 1px grey;">
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
    </div>
    <br><br>

    <div style="border:solid 1px grey;">
        <h1>upload a picture!</h1>
        <form method="post" action="picture" enctype="multipart/form-data">
            {{ csrf_field() }}
            <label for="pic-title">Pic Title:</label>
            <input id="pic-title" type="text" name="title" />
            <br><br>
            <label for="picture">Picture:</label>
            <input id="picture" type="file" name="picture" />
            <br><br>
            <input type="submit">
        </form>
    </div>
    <br><br>

    <div style="border:solid 1px grey;">
        <h1>Error validation. Mess this up! Break the rules!</h1>
        <form method="post" action="errors">
            {{ csrf_field() }}
            <label for="first-name-name">first name:</label>
            <input id="first-name-name" type="text" name="firstName" value="{{ old('firstName') }}">
            <br><br>
            <label for="enter-number">enter a number between 1 and 100:</label>
            <input id="enter-number" type="text" name="number" value="{{ old('number') }}">
            <br><br>
            <input type="submit">
        </form>
    </div>
    <br><br>
@endsection
