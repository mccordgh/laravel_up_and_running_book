@extends('layout')

@section('title', 'THE LINEUP')

@section('content')
    <h1>Our patrons by status:</h1>
    @foreach($statuses as $status => $members)
        <div class="section">
            <h1>{{ $status }}</h1>
            @foreach($members as $infos)
                <li style="padding:10px 50px;display:block">
                    {{ $infos['first_name'] }} (<em>{{ $infos['name'] }}</em>) - <u><em>{{$infos['points']}}</em></u> points!
                </li>
            @endforeach
        </div>
    @endforeach
@endsection
