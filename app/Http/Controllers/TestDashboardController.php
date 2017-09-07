<?php
namespace LaravelUpAndRunning\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $food = $request->food;
        $usersAndFood = DB::table('users')
            ->select('name', 'food')
            ->orderBy('name', 'asc');
        $users = isset($food)
            ? $usersAndFood->where('food', $food)->get('name')
            : $usersAndFood->get();
        return view('test-dashboard')->with(['users' => $users, 'food' => $food]);
    }
}
