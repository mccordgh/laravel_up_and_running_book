<?php

namespace LaravelUpAndRunning\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $food = $request->food;

        $usersAndFood = DB::table('users')
            ->select('name', 'food')
            ->orderBy('name', 'asc');

        $users = isset($food)
            ? $usersAndFood->where('food', $food)->get('name')
            : $usersAndFood->get();

        return view('home')->with(['users' => $users, 'food' => $food]);
    }
}
