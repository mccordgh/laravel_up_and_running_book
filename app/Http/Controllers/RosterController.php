<?php

namespace LaravelUpAndRunning\Http\Controllers;

use LaravelUpAndRunning\User;
use LaravelUpAndRunning\UserInfo;

class RosterController extends Controller
{
    public function index()
    {
        $statuses = $this->getPatronsByStatus();

        return view('roster')->with(['statuses' => $statuses]);
    }

    private function getPatronsByStatus()
    {
        $patronsByStatus = [];
        $statusNames = ['vip', 'member', 'none'];

        foreach($statusNames as $name)
        {
            $thisStatus = UserInfo::status($name)->get()->toArray();

            foreach($thisStatus as $index => $status){
                $status['name'] = User::where('id', $status['uid'])->value('name');
                $thisStatus[$index] = $status;
            }

            $patronsByStatus[$name] = $thisStatus;
        }

        return $patronsByStatus;
    }
}
