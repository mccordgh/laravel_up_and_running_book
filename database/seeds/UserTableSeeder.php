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
        $this->addUser(['David', 'David@thedave.go', 'pizza']);
        $this->addUser(['Joey', 'Joey@thejoe.go', 'pizza']);
        $this->addUser(['Amy', 'Amy@theamy.go', 'pizza']);
        $this->addUser(['Ronald', 'Ronald@theron.go', 'steak']);
        $this->addUser(['Amber', 'Amber@theamb.go', 'steak']);
        $this->addUser(['Sally', 'Sally@thesal.go', 'leather']);
        $this->addUser(['Bernie', 'Bernie@feelthebern.go', 'freedom fries']);
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
