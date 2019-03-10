<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
            $user->name = 'Samuel Jackson';
            $user->email = 'samueljackson@jackson.com';
            $user->password = bcrypt('samuel1234');
            $user->save();
            $user->roles()->attach(Role::where('name', 'user')->first());

            $admin = new User;
            $admin->name = 'Neo Ighodaro';
            $admin->email = 'neo@creativitykills.co';
            $admin->password = bcrypt('neo1234');
            $admin->save();
            $admin->roles()->attach(Role::where('name', 'admin')->first());
    }
}
