<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ErrorsController extends Controller
{
    public function create(Request $request)
    {
        $this->validate($request, [
            'firstName' => 'required|max:10',
            'number' => 'required|integer|min:1|max:100'
        ]);

        return view('errors')->with([
            'firstName' => $request->input('firstName'),
            'number' => $request->input('number')
        ]);
    }
}
