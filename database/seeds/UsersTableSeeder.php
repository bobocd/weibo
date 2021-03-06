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
        $users = factory(User::class)->times(10)->make();
        User::insert($users->makeVisible(['password', 'remember_token'])->toArray());
//        $user = \App\Models\User::create(['name'=>'bobocd','email'=>'twocars@yeah.net','password'=>bcrypt('123123')]);
        $user = User::find(1);
        $user->name = 'bobocd';
        $user->email = 'twocars@yeah.net';
        $user->password=bcrypt('123123');
        $user->is_admin = true;
        $user->save();

    }
}
