<?php

use Illuminate\Database\Seeder;

class UserGameStarsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_game_stars')->delete();
        
        \DB::table('user_game_stars')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => '3',
                'stars' => '165',
                'created_at' => '2020-03-08 15:44:39',
                'updated_at' => '2020-03-10 10:30:33',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => '2',
                'stars' => '233',
                'created_at' => '2020-03-08 15:55:03',
                'updated_at' => '2020-03-14 09:14:49',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => '1',
                'stars' => '214',
                'created_at' => '2020-03-08 16:47:09',
                'updated_at' => '2020-03-12 09:31:29',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => '10',
                'stars' => '6',
                'created_at' => '2020-03-08 17:17:18',
                'updated_at' => '2020-03-08 17:21:32',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => '14',
                'stars' => '135',
                'created_at' => '2020-03-08 17:27:27',
                'updated_at' => '2020-03-08 17:34:40',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => '9',
                'stars' => '138',
                'created_at' => '2020-03-09 06:38:49',
                'updated_at' => '2020-03-09 06:53:55',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => '15',
                'stars' => '161',
                'created_at' => '2020-03-10 13:06:06',
                'updated_at' => '2020-03-10 13:19:04',
            ),
        ));
        
        
    }
}