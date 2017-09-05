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
                $status['name'] = array_flatten(User::where('id', $status['uid'])->get(['name'])->toArray())[0];
                //->value('name')
                $thisStatus[$index] = $status;
            }

            $patronsByStatus[$name] = $thisStatus;
        }

        return $patronsByStatus;
    }
}
