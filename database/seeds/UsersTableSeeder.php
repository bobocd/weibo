<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\Models\User::create(['name'=>'bobocd','email'=>'twocars@yeah.net','password'=>bcrypt('123123')]);
        $user = User::find(1);
        $user->is_admin = true;
        $user->save();

    }
}
