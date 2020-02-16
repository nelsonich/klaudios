<?php

use App\User;
use Illuminate\Support\Facades\Hash;
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
        User::create([
            'role' => "superadmin",
            'first_name' => "Klavdia",
            'last_name' => "Xachatryan",
            'user_name' => 'klaudios',
            'email' => "xachatryan_klavdia@mail.ru",
            'password' => Hash::make("00000000"),
        ]);

        User::create([
            'role' => "user",
            'first_name' => "Nelson",
            'last_name' => "Xachatryan",
            'user_name' => 'nelsonich',
            'email' => "xachatryan.nelsonich@gmail.com",
            'password' => Hash::make("00000000"),
        ]);
    }
}
