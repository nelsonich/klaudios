<?php

use Illuminate\Database\Seeder;

class UserRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_roles')->delete();
        
        \DB::table('user_roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role' => 'admin',
                'created_at' => '2020-03-05 21:24:18',
                'updated_at' => '2020-03-05 21:24:18',
            ),
            1 => 
            array (
                'id' => 2,
                'role' => 'user',
                'created_at' => '2020-03-05 21:24:18',
                'updated_at' => '2020-03-05 21:24:18',
            ),
        ));
        
        
    }
}