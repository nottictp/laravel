<?php

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
        $admin = new App\User;
        $admin->username = 'admin';
        $admin->password = bcrypt('adminpassword');
        $admin->name = 'Administrator';
        $admin->email = 'admin@example.com';
        $admin->access_level = 'administrator';
        $admin->is_enabled = true;
        $admin->save();
        factory(App\User::class, 50)->create();

    }
}
