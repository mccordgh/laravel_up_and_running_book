<?php

use Illuminate\Database\Seeder;

class UserInfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->addUserInfo(['David', 'Sanchez', 'vip', 9001]);
        $this->addUserInfo(['Joey', 'Salads', 'none', 0]);
        $this->addUserInfo(['Amy', 'Pohler', 'vip', 2000]);
        $this->addUserInfo(['Ronald', 'Grips', 'member', 200]);
        $this->addUserInfo(['Amber', 'Stopid', 'none', 0]);
        $this->addUserInfo(['Sally', 'Struthers', 'member', 500]);
        $this->addUserInfo(['Bernie', 'Sanders', 'vip', 39999]);
    }

    private function addUserInfo($user) {
        DB::table('user_infos')->insert([
            'uid' => 1,
            'first_name' => $user[0],
            'last_name' => $user[1],
            'status' => $user[2],
            'points' => $user[3],
        ]);
    }
}
