@extends('layout')

@section('title', 'HOOOME')

@section('content')
    <h1>
        Welcome to your new HOME. here is links:<br>
        <a href="about">ABOUT</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="roster"><em>OUR ROSTER!</em></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="contact">CONTACT</a>
    </h1>

    <div class="section">
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

    <div class="section">
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

    <div class="section">
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
    <br>
    <div style="width:100%;text-align:center;font-size:18px;">
        <h1>check out our users!</h1>
        @if(isset($food))
            <h2><a href="/">View all Users</a></h2>
        @else
            <h2>click on a food to see all users who love that food!</h2>
        @endif
        <ul>
            @if (count($users) === 1)
                <li style="padding:10px 50px;display: inline-block">
                    Only <em>{{$users[0]->name}}</em> likes <em>{{$food}}</em> :^(
                </li><br>
            @elseif (isset($food))
                <li style="padding:10px 50px;display: inline-block">
                    <em>{{count($users)}}</em> users like <em>{{$food}}</em> :^)
                </li><br>
            @endif
            @foreach($users as $user)
                <li style="padding:10px 30px;display: inline-block">
                    <em>
                        {{ $user->name }}
                    </em>
                    - Favorite Food:
                    <a href="home/{{$user->food}}">
                        <em>
                            {{ $user->food }}!
                        </em>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
