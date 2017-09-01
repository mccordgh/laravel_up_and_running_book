<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->addUser(['DavidDude33', 'David@thedave.go', 'pizza']);
        $this->addUser(['SaladHeadz11', 'Joey@thejoe.go', 'pizza']);
        $this->addUser(['AmyFunny83', 'Amy@theamy.go', 'pizza']);
        $this->addUser(['RonaldJenkzz', 'Ronald@theron.go', 'steak']);
        $this->addUser(['AmberAlert777', 'Amber@theamb.go', 'steak']);
        $this->addUser(['PoorSoul88', 'Sally@thesal.go', 'leather']);
        $this->addUser(['SunBerntDude99', 'Bernie@feelthebern.go', 'freedom fries']);
    }

    private function addUser($user) {
        DB::table('users')->insert([
            'name' => $user[0],
            'email' => $user[1],
            'food' => $user[2],
            'password' => 'pass1234',
        ]);
    }
}
