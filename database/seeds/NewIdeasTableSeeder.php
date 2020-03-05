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
                'created_at' => '2020-03-04 09:43:59',
                'updated_at' => '2020-03-05 19:09:08',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => '3',
                'is_game' => 1,
                'created_at' => '2020-03-04 09:43:59',
                'updated_at' => '2020-03-05 16:29:49',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => '4',
                'is_game' => 0,
                'created_at' => '2020-03-04 09:43:59',
                'updated_at' => '2020-03-04 09:43:59',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => '5',
                'is_game' => 0,
                'created_at' => '2020-03-04 09:43:59',
                'updated_at' => '2020-03-04 09:43:59',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => '6',
                'is_game' => 0,
                'created_at' => '2020-03-04 09:43:59',
                'updated_at' => '2020-03-04 09:43:59',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => '7',
                'is_game' => 0,
                'created_at' => '2020-03-04 09:43:59',
                'updated_at' => '2020-03-04 09:43:59',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => '8',
                'is_game' => 0,
                'created_at' => '2020-03-04 09:43:59',
                'updated_at' => '2020-03-04 09:43:59',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => '9',
                'is_game' => 0,
                'created_at' => '2020-03-04 09:43:59',
                'updated_at' => '2020-03-04 09:43:59',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => '10',
                'is_game' => 1,
                'created_at' => '2020-03-04 09:43:59',
                'updated_at' => '2020-03-05 11:18:19',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => '11',
                'is_game' => 0,
                'created_at' => '2020-03-04 09:43:59',
                'updated_at' => '2020-03-04 09:43:59',
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => '12',
                'is_game' => 0,
                'created_at' => '2020-03-04 09:43:59',
                'updated_at' => '2020-03-04 09:43:59',
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => '13',
                'is_game' => 0,
                'created_at' => '2020-03-04 09:43:59',
                'updated_at' => '2020-03-04 09:43:59',
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => '16',
                'is_game' => 1,
                'created_at' => '2020-03-05 17:24:49',
                'updated_at' => '2020-03-05 17:25:32',
            ),
        ));
        
        
    }
}