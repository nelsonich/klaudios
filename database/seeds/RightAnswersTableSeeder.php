<?php

use Illuminate\Database\Seeder;

class RightAnswersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('right_answers')->delete();
        
        \DB::table('right_answers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'game_id' => '1',
                'answer_id' => '3',
                'created_at' => '2020-03-04 09:43:59',
                'updated_at' => '2020-03-05 16:13:43',
            ),
            1 => 
            array (
                'id' => 2,
                'game_id' => '2',
                'answer_id' => '6',
                'created_at' => '2020-03-04 09:43:59',
                'updated_at' => '2020-03-05 16:13:41',
            ),
            2 => 
            array (
                'id' => 3,
                'game_id' => '3',
                'answer_id' => '11',
                'created_at' => '2020-03-04 09:43:59',
                'updated_at' => '2020-03-04 09:43:59',
            ),
            3 => 
            array (
                'id' => 4,
                'game_id' => '4',
                'answer_id' => '13',
                'created_at' => '2020-03-04 09:43:59',
                'updated_at' => '2020-03-04 09:43:59',
            ),
            4 => 
            array (
                'id' => 5,
                'game_id' => '5',
                'answer_id' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'game_id' => '6',
                'answer_id' => '21',
                'created_at' => '2020-03-05 16:47:15',
                'updated_at' => '2020-03-05 16:47:15',
            ),
            6 => 
            array (
                'id' => 8,
                'game_id' => '7',
                'answer_id' => '24',
                'created_at' => '2020-03-05 17:05:24',
                'updated_at' => '2020-03-05 17:05:24',
            ),
            7 => 
            array (
                'id' => 9,
                'game_id' => '8',
                'answer_id' => '27',
                'created_at' => '2020-03-05 17:47:47',
                'updated_at' => '2020-03-05 17:47:47',
            ),
            8 => 
            array (
                'id' => 10,
                'game_id' => '9',
                'answer_id' => '30',
                'created_at' => '2020-03-05 17:47:52',
                'updated_at' => '2020-03-05 17:47:52',
            ),
            9 => 
            array (
                'id' => 11,
                'game_id' => '10',
                'answer_id' => '33',
                'created_at' => '2020-03-05 17:57:33',
                'updated_at' => '2020-03-05 18:38:10',
            ),
            10 => 
            array (
                'id' => 12,
                'game_id' => '11',
                'answer_id' => '38',
                'created_at' => '2020-03-05 18:12:38',
                'updated_at' => '2020-03-05 18:12:38',
            ),
            11 => 
            array (
                'id' => 13,
                'game_id' => '13',
                'answer_id' => '41',
                'created_at' => '2020-03-05 18:14:44',
                'updated_at' => '2020-03-05 18:14:44',
            ),
            12 => 
            array (
                'id' => 14,
                'game_id' => '14',
                'answer_id' => '44',
                'created_at' => '2020-03-05 18:17:01',
                'updated_at' => '2020-03-05 18:17:01',
            ),
            13 => 
            array (
                'id' => 15,
                'game_id' => '15',
                'answer_id' => '51',
                'created_at' => '2020-03-05 18:19:15',
                'updated_at' => '2020-03-05 18:19:15',
            ),
            14 => 
            array (
                'id' => 16,
                'game_id' => '16',
                'answer_id' => '52',
                'created_at' => '2020-03-05 18:36:24',
                'updated_at' => '2020-03-05 18:36:24',
            ),
            15 => 
            array (
                'id' => 17,
                'game_id' => '17',
                'answer_id' => '57',
                'created_at' => '2020-03-05 18:46:17',
                'updated_at' => '2020-03-05 18:46:17',
            ),
            16 => 
            array (
                'id' => 18,
                'game_id' => '18',
                'answer_id' => '61',
                'created_at' => '2020-03-05 18:48:38',
                'updated_at' => '2020-03-05 18:48:38',
            ),
            17 => 
            array (
                'id' => 19,
                'game_id' => '19',
                'answer_id' => '65',
                'created_at' => '2020-03-05 18:51:29',
                'updated_at' => '2020-03-05 18:51:29',
            ),
            18 => 
            array (
                'id' => 20,
                'game_id' => '20',
                'answer_id' => '70',
                'created_at' => '2020-03-05 18:53:53',
                'updated_at' => '2020-03-05 18:53:53',
            ),
            19 => 
            array (
                'id' => 21,
                'game_id' => '21',
                'answer_id' => '71',
                'created_at' => '2020-03-05 18:55:48',
                'updated_at' => '2020-03-05 18:55:48',
            ),
        ));
        
        
    }
}