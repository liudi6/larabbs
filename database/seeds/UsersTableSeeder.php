<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class)->times(10)->create();
        $user = User::find(1);
        $user->name = "liudi";
        $user->email = 'l@jing.com';
        $user->avatar = 'http://larabbs.test/uploads/images/avatars/202011/01/4_1604243406_LrYMGknJQE.jpg';
        $user->save();
    }
}
