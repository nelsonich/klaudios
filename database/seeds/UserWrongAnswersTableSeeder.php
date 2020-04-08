<?php

use Illuminate\Database\Seeder;

class UserWrongAnswersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_wrong_answers')->delete();
        
        \DB::table('user_wrong_answers')->insert(array (
            0 => 
            array (
                'id' => 34,
                'user_id' => '1',
                'game_id' => '40',
                'answer_id' => '144',
                'created_at' => '2020-03-08 17:01:05',
                'updated_at' => '2020-03-08 17:01:05',
            ),
            1 => 
            array (
                'id' => 35,
                'user_id' => '10',
                'game_id' => '2',
                'answer_id' => '5',
                'created_at' => '2020-03-08 17:21:10',
                'updated_at' => '2020-03-08 17:21:10',
            ),
            2 => 
            array (
                'id' => 36,
                'user_id' => '10',
                'game_id' => '2',
                'answer_id' => '8',
                'created_at' => '2020-03-08 17:21:25',
                'updated_at' => '2020-03-08 17:21:25',
            ),
            3 => 
            array (
                'id' => 37,
                'user_id' => '14',
                'game_id' => '10',
                'answer_id' => '34',
                'created_at' => '2020-03-08 17:29:08',
                'updated_at' => '2020-03-08 17:29:08',
            ),
            4 => 
            array (
                'id' => 38,
                'user_id' => '14',
                'game_id' => '19',
                'answer_id' => '64',
                'created_at' => '2020-03-08 17:30:07',
                'updated_at' => '2020-03-08 17:30:07',
            ),
            5 => 
            array (
                'id' => 39,
                'user_id' => '14',
                'game_id' => '32',
                'answer_id' => '119',
                'created_at' => '2020-03-08 17:31:18',
                'updated_at' => '2020-03-08 17:31:18',
            ),
            6 => 
            array (
                'id' => 40,
                'user_id' => '14',
                'game_id' => '38',
                'answer_id' => '137',
                'created_at' => '2020-03-08 17:34:05',
                'updated_at' => '2020-03-08 17:34:05',
            ),
            7 => 
            array (
                'id' => 41,
                'user_id' => '14',
                'game_id' => '38',
                'answer_id' => '138',
                'created_at' => '2020-03-08 17:34:08',
                'updated_at' => '2020-03-08 17:34:08',
            ),
            8 => 
            array (
                'id' => 42,
                'user_id' => '14',
                'game_id' => '40',
                'answer_id' => '144',
                'created_at' => '2020-03-08 17:34:28',
                'updated_at' => '2020-03-08 17:34:28',
            ),
            9 => 
            array (
                'id' => 43,
                'user_id' => '9',
                'game_id' => '15',
                'answer_id' => '49',
                'created_at' => '2020-03-09 06:42:14',
                'updated_at' => '2020-03-09 06:42:14',
            ),
            10 => 
            array (
                'id' => 44,
                'user_id' => '9',
                'game_id' => '15',
                'answer_id' => '50',
                'created_at' => '2020-03-09 06:42:17',
                'updated_at' => '2020-03-09 06:42:17',
            ),
            11 => 
            array (
                'id' => 45,
                'user_id' => '9',
                'game_id' => '31',
                'answer_id' => '117',
                'created_at' => '2020-03-09 06:47:16',
                'updated_at' => '2020-03-09 06:47:16',
            ),
            12 => 
            array (
                'id' => 46,
                'user_id' => '3',
                'game_id' => '41',
                'answer_id' => '148',
                'created_at' => '2020-03-10 10:28:35',
                'updated_at' => '2020-03-10 10:28:35',
            ),
            13 => 
            array (
                'id' => 47,
                'user_id' => '3',
                'game_id' => '41',
                'answer_id' => '149',
                'created_at' => '2020-03-10 10:28:38',
                'updated_at' => '2020-03-10 10:28:38',
            ),
            14 => 
            array (
                'id' => 48,
                'user_id' => '3',
                'game_id' => '47',
                'answer_id' => '172',
                'created_at' => '2020-03-10 10:29:32',
                'updated_at' => '2020-03-10 10:29:32',
            ),
            15 => 
            array (
                'id' => 49,
                'user_id' => '3',
                'game_id' => '47',
                'answer_id' => '174',
                'created_at' => '2020-03-10 10:29:34',
                'updated_at' => '2020-03-10 10:29:34',
            ),
            16 => 
            array (
                'id' => 50,
                'user_id' => '15',
                'game_id' => '2',
                'answer_id' => '8',
                'created_at' => '2020-03-10 13:06:43',
                'updated_at' => '2020-03-10 13:06:43',
            ),
            17 => 
            array (
                'id' => 51,
                'user_id' => '15',
                'game_id' => '9',
                'answer_id' => '31',
                'created_at' => '2020-03-10 13:07:56',
                'updated_at' => '2020-03-10 13:07:56',
            ),
            18 => 
            array (
                'id' => 52,
                'user_id' => '15',
                'game_id' => '19',
                'answer_id' => '63',
                'created_at' => '2020-03-10 13:09:40',
                'updated_at' => '2020-03-10 13:09:40',
            ),
            19 => 
            array (
                'id' => 53,
                'user_id' => '15',
                'game_id' => '25',
                'answer_id' => '93',
                'created_at' => '2020-03-10 13:10:12',
                'updated_at' => '2020-03-10 13:10:12',
            ),
            20 => 
            array (
                'id' => 54,
                'user_id' => '15',
                'game_id' => '28',
                'answer_id' => '103',
                'created_at' => '2020-03-10 13:10:42',
                'updated_at' => '2020-03-10 13:10:42',
            ),
            21 => 
            array (
                'id' => 55,
                'user_id' => '15',
                'game_id' => '17',
                'answer_id' => '55',
                'created_at' => '2020-03-10 13:11:56',
                'updated_at' => '2020-03-10 13:11:56',
            ),
            22 => 
            array (
                'id' => 56,
                'user_id' => '15',
                'game_id' => '17',
                'answer_id' => '56',
                'created_at' => '2020-03-10 13:12:29',
                'updated_at' => '2020-03-10 13:12:29',
            ),
            23 => 
            array (
                'id' => 57,
                'user_id' => '15',
                'game_id' => '21',
                'answer_id' => '73',
                'created_at' => '2020-03-10 13:12:49',
                'updated_at' => '2020-03-10 13:12:49',
            ),
            24 => 
            array (
                'id' => 58,
                'user_id' => '15',
                'game_id' => '26',
                'answer_id' => '98',
                'created_at' => '2020-03-10 13:13:30',
                'updated_at' => '2020-03-10 13:13:30',
            ),
            25 => 
            array (
                'id' => 59,
                'user_id' => '15',
                'game_id' => '41',
                'answer_id' => '151',
                'created_at' => '2020-03-10 13:14:00',
                'updated_at' => '2020-03-10 13:14:00',
            ),
            26 => 
            array (
                'id' => 60,
                'user_id' => '15',
                'game_id' => '41',
                'answer_id' => '149',
                'created_at' => '2020-03-10 13:14:03',
                'updated_at' => '2020-03-10 13:14:03',
            ),
            27 => 
            array (
                'id' => 61,
                'user_id' => '15',
                'game_id' => '44',
                'answer_id' => '163',
                'created_at' => '2020-03-10 13:14:54',
                'updated_at' => '2020-03-10 13:14:54',
            ),
            28 => 
            array (
                'id' => 62,
                'user_id' => '15',
                'game_id' => '45',
                'answer_id' => '167',
                'created_at' => '2020-03-10 13:15:13',
                'updated_at' => '2020-03-10 13:15:13',
            ),
            29 => 
            array (
                'id' => 63,
                'user_id' => '15',
                'game_id' => '47',
                'answer_id' => '174',
                'created_at' => '2020-03-10 13:15:28',
                'updated_at' => '2020-03-10 13:15:28',
            ),
            30 => 
            array (
                'id' => 64,
                'user_id' => '15',
                'game_id' => '47',
                'answer_id' => '172',
                'created_at' => '2020-03-10 13:15:38',
                'updated_at' => '2020-03-10 13:15:38',
            ),
            31 => 
            array (
                'id' => 65,
                'user_id' => '15',
                'game_id' => '48',
                'answer_id' => '178',
                'created_at' => '2020-03-10 13:15:46',
                'updated_at' => '2020-03-10 13:15:46',
            ),
            32 => 
            array (
                'id' => 66,
                'user_id' => '15',
                'game_id' => '49',
                'answer_id' => '180',
                'created_at' => '2020-03-10 13:16:04',
                'updated_at' => '2020-03-10 13:16:04',
            ),
            33 => 
            array (
                'id' => 67,
                'user_id' => '15',
                'game_id' => '49',
                'answer_id' => '181',
                'created_at' => '2020-03-10 13:16:06',
                'updated_at' => '2020-03-10 13:16:06',
            ),
            34 => 
            array (
                'id' => 68,
                'user_id' => '15',
                'game_id' => '49',
                'answer_id' => '182',
                'created_at' => '2020-03-10 13:16:08',
                'updated_at' => '2020-03-10 13:16:08',
            ),
            35 => 
            array (
                'id' => 69,
                'user_id' => '15',
                'game_id' => '40',
                'answer_id' => '144',
                'created_at' => '2020-03-10 13:19:01',
                'updated_at' => '2020-03-10 13:19:01',
            ),
            36 => 
            array (
                'id' => 70,
                'user_id' => '1',
                'game_id' => '54',
                'answer_id' => '203',
                'created_at' => '2020-03-12 09:28:25',
                'updated_at' => '2020-03-12 09:28:25',
            ),
            37 => 
            array (
                'id' => 71,
                'user_id' => '1',
                'game_id' => '55',
                'answer_id' => '204',
                'created_at' => '2020-03-12 09:31:22',
                'updated_at' => '2020-03-12 09:31:22',
            ),
        ));
        
        
    }
}