<?php

use Illuminate\Database\Seeder;

class UserStatusesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_statuses')->delete();
        
        
        
    }
}