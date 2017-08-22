<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Request $request, $number = null)
    {
        return view('about')->with([
            'request' => $request,
            'number' => $number
        ]);
    }
}
