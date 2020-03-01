<?php

use App\Models\UserRole;
use Illuminate\Database\Seeder;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserRole::create([
            "role" => "admin"
        ]);

        UserRole::create([
            "role" => "user"
        ]);
    }
}
