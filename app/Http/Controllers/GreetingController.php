<?php

namespace App\Http\Controllers;

class GreetingController extends Controller
{
    public function create()
    {
        $person = [
            'firstName' => request('person.firstName', 'super cool'),
            'lastName' => request('person.lastName', 'anonymoose'),
            'title' => request('person.title', 'can\'t be bothered to type'),
            'suffix' => request('person.suffix', 'the worst')
        ];

        return view('greeting')->with('person', $person);
    }
}
