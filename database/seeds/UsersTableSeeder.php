<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'email' => 'admin@mail.com',
            'login' => 'Admin',
            'password' => bcrypt('123456')
        ]);
    }
}
