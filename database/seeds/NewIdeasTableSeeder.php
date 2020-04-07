<?php

use Illuminate\Database\Seeder;

class NewIdeasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('new_ideas')->delete();
        
        \DB::table('new_ideas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => '2',
                'is_game' => 1,
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-08 15:55:03',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => '3',
                'is_game' => 1,
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-08 15:44:39',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => '4',
                'is_game' => 0,
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-04 10:43:59',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => '5',
                'is_game' => 0,
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-04 10:43:59',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => '6',
                'is_game' => 0,
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-04 10:43:59',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => '7',
                'is_game' => 0,
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-04 10:43:59',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => '8',
                'is_game' => 0,
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-04 10:43:59',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => '9',
                'is_game' => 1,
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-09 06:38:49',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => '10',
                'is_game' => 1,
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-08 17:17:18',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => '11',
                'is_game' => 0,
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-04 10:43:59',
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => '12',
                'is_game' => 0,
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-04 10:43:59',
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => '13',
                'is_game' => 0,
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-04 10:43:59',
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => '16',
                'is_game' => 0,
                'created_at' => '2020-03-05 18:24:49',
                'updated_at' => '2020-03-05 18:25:32',
            ),
            13 => 
            array (
                'id' => 14,
                'user_id' => '14',
                'is_game' => 1,
                'created_at' => '2020-03-05 21:35:52',
                'updated_at' => '2020-03-08 17:27:27',
            ),
            14 => 
            array (
                'id' => 15,
                'user_id' => '1',
                'is_game' => 1,
                'created_at' => NULL,
                'updated_at' => '2020-03-08 16:47:09',
            ),
            15 => 
            array (
                'id' => 16,
                'user_id' => '15',
                'is_game' => 1,
                'created_at' => '2020-03-10 13:05:58',
                'updated_at' => '2020-03-10 13:06:06',
            ),
        ));
        
        
    }
}