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
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-15 14:33:44',
            ),
            1 => 
            array (
                'id' => 2,
                'game_id' => '2',
                'answer_id' => '6',
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-05 17:13:41',
            ),
            2 => 
            array (
                'id' => 3,
                'game_id' => '3',
                'answer_id' => '11',
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-04 10:43:59',
            ),
            3 => 
            array (
                'id' => 4,
                'game_id' => '4',
                'answer_id' => '13',
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-04 10:43:59',
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
                'created_at' => '2020-03-05 17:47:15',
                'updated_at' => '2020-03-05 17:47:15',
            ),
            6 => 
            array (
                'id' => 8,
                'game_id' => '7',
                'answer_id' => '24',
                'created_at' => '2020-03-05 18:05:24',
                'updated_at' => '2020-03-05 18:05:24',
            ),
            7 => 
            array (
                'id' => 9,
                'game_id' => '8',
                'answer_id' => '27',
                'created_at' => '2020-03-05 18:47:47',
                'updated_at' => '2020-03-05 18:47:47',
            ),
            8 => 
            array (
                'id' => 10,
                'game_id' => '9',
                'answer_id' => '30',
                'created_at' => '2020-03-05 18:47:52',
                'updated_at' => '2020-03-05 18:47:52',
            ),
            9 => 
            array (
                'id' => 11,
                'game_id' => '10',
                'answer_id' => '33',
                'created_at' => '2020-03-05 18:57:33',
                'updated_at' => '2020-03-05 19:38:10',
            ),
            10 => 
            array (
                'id' => 12,
                'game_id' => '11',
                'answer_id' => '38',
                'created_at' => '2020-03-05 19:12:38',
                'updated_at' => '2020-03-05 19:12:38',
            ),
            11 => 
            array (
                'id' => 13,
                'game_id' => '13',
                'answer_id' => '41',
                'created_at' => '2020-03-05 19:14:44',
                'updated_at' => '2020-03-05 19:14:44',
            ),
            12 => 
            array (
                'id' => 14,
                'game_id' => '14',
                'answer_id' => '44',
                'created_at' => '2020-03-05 19:17:01',
                'updated_at' => '2020-03-05 19:17:01',
            ),
            13 => 
            array (
                'id' => 15,
                'game_id' => '15',
                'answer_id' => '51',
                'created_at' => '2020-03-05 19:19:15',
                'updated_at' => '2020-03-05 19:19:15',
            ),
            14 => 
            array (
                'id' => 16,
                'game_id' => '16',
                'answer_id' => '52',
                'created_at' => '2020-03-05 19:36:24',
                'updated_at' => '2020-03-05 19:36:24',
            ),
            15 => 
            array (
                'id' => 17,
                'game_id' => '17',
                'answer_id' => '57',
                'created_at' => '2020-03-05 19:46:17',
                'updated_at' => '2020-03-05 19:46:17',
            ),
            16 => 
            array (
                'id' => 18,
                'game_id' => '18',
                'answer_id' => '61',
                'created_at' => '2020-03-05 19:48:38',
                'updated_at' => '2020-03-05 19:48:38',
            ),
            17 => 
            array (
                'id' => 19,
                'game_id' => '19',
                'answer_id' => '65',
                'created_at' => '2020-03-05 19:51:29',
                'updated_at' => '2020-03-05 19:51:29',
            ),
            18 => 
            array (
                'id' => 20,
                'game_id' => '20',
                'answer_id' => '70',
                'created_at' => '2020-03-05 19:53:53',
                'updated_at' => '2020-03-05 19:53:53',
            ),
            19 => 
            array (
                'id' => 21,
                'game_id' => '21',
                'answer_id' => '71',
                'created_at' => '2020-03-05 19:55:48',
                'updated_at' => '2020-03-05 19:55:48',
            ),
            20 => 
            array (
                'id' => 22,
                'game_id' => '22',
                'answer_id' => '75',
                'created_at' => '2020-03-06 11:09:12',
                'updated_at' => '2020-03-06 11:09:12',
            ),
            21 => 
            array (
                'id' => 23,
                'game_id' => '23',
                'answer_id' => '79',
                'created_at' => '2020-03-06 11:14:37',
                'updated_at' => '2020-03-06 11:14:37',
            ),
            22 => 
            array (
                'id' => 24,
                'game_id' => '24',
                'answer_id' => '87',
                'created_at' => '2020-03-06 11:56:26',
                'updated_at' => '2020-03-06 20:56:05',
            ),
            23 => 
            array (
                'id' => 25,
                'game_id' => '25',
                'answer_id' => '92',
                'created_at' => '2020-03-06 12:04:12',
                'updated_at' => '2020-03-06 12:04:12',
            ),
            24 => 
            array (
                'id' => 26,
                'game_id' => '26',
                'answer_id' => '95',
                'created_at' => '2020-03-06 12:24:14',
                'updated_at' => '2020-03-06 12:24:14',
            ),
            25 => 
            array (
                'id' => 27,
                'game_id' => '27',
                'answer_id' => '99',
                'created_at' => '2020-03-06 12:39:59',
                'updated_at' => '2020-03-06 12:39:59',
            ),
            26 => 
            array (
                'id' => 28,
                'game_id' => '28',
                'answer_id' => '104',
                'created_at' => '2020-03-06 12:47:28',
                'updated_at' => '2020-03-06 12:47:28',
            ),
            27 => 
            array (
                'id' => 29,
                'game_id' => '29',
                'answer_id' => '110',
                'created_at' => '2020-03-06 12:55:55',
                'updated_at' => '2020-03-06 12:55:55',
            ),
            28 => 
            array (
                'id' => 30,
                'game_id' => '30',
                'answer_id' => '114',
                'created_at' => '2020-03-06 13:05:35',
                'updated_at' => '2020-03-06 13:05:35',
            ),
            29 => 
            array (
                'id' => 31,
                'game_id' => '31',
                'answer_id' => '116',
                'created_at' => '2020-03-06 13:08:23',
                'updated_at' => '2020-03-06 13:08:23',
            ),
            30 => 
            array (
                'id' => 32,
                'game_id' => '32',
                'answer_id' => '122',
                'created_at' => '2020-03-06 13:52:24',
                'updated_at' => '2020-03-06 13:52:27',
            ),
            31 => 
            array (
                'id' => 33,
                'game_id' => '33',
                'answer_id' => '124',
                'created_at' => '2020-03-06 13:56:12',
                'updated_at' => '2020-03-06 14:26:13',
            ),
            32 => 
            array (
                'id' => 34,
                'game_id' => '34',
                'answer_id' => '126',
                'created_at' => '2020-03-07 17:49:07',
                'updated_at' => '2020-03-07 17:49:07',
            ),
            33 => 
            array (
                'id' => 35,
                'game_id' => '35',
                'answer_id' => '131',
                'created_at' => '2020-03-07 17:51:02',
                'updated_at' => '2020-03-07 17:51:02',
            ),
            34 => 
            array (
                'id' => 36,
                'game_id' => '36',
                'answer_id' => '133',
                'created_at' => '2020-03-07 18:07:37',
                'updated_at' => '2020-03-07 18:07:37',
            ),
            35 => 
            array (
                'id' => 37,
                'game_id' => '37',
                'answer_id' => '136',
                'created_at' => '2020-03-07 18:19:51',
                'updated_at' => '2020-03-07 18:19:51',
            ),
            36 => 
            array (
                'id' => 38,
                'game_id' => '38',
                'answer_id' => '139',
                'created_at' => '2020-03-07 18:48:22',
                'updated_at' => '2020-03-07 18:48:22',
            ),
            37 => 
            array (
                'id' => 39,
                'game_id' => '39',
                'answer_id' => '141',
                'created_at' => '2020-03-07 18:54:21',
                'updated_at' => '2020-03-07 18:54:21',
            ),
            38 => 
            array (
                'id' => 40,
                'game_id' => '40',
                'answer_id' => '145',
                'created_at' => '2020-03-07 19:00:08',
                'updated_at' => '2020-03-07 19:00:08',
            ),
            39 => 
            array (
                'id' => 41,
                'game_id' => '41',
                'answer_id' => '150',
                'created_at' => '2020-03-09 15:57:27',
                'updated_at' => '2020-03-09 15:57:27',
            ),
            40 => 
            array (
                'id' => 42,
                'game_id' => '42',
                'answer_id' => '155',
                'created_at' => '2020-03-09 16:01:11',
                'updated_at' => '2020-03-09 16:01:14',
            ),
            41 => 
            array (
                'id' => 43,
                'game_id' => '43',
                'answer_id' => '158',
                'created_at' => '2020-03-09 16:03:40',
                'updated_at' => '2020-03-09 16:03:40',
            ),
            42 => 
            array (
                'id' => 44,
                'game_id' => '44',
                'answer_id' => '162',
                'created_at' => '2020-03-09 16:06:13',
                'updated_at' => '2020-03-09 16:06:13',
            ),
            43 => 
            array (
                'id' => 45,
                'game_id' => '45',
                'answer_id' => '166',
                'created_at' => '2020-03-09 17:19:41',
                'updated_at' => '2020-03-09 17:19:41',
            ),
            44 => 
            array (
                'id' => 46,
                'game_id' => '46',
                'answer_id' => '171',
                'created_at' => '2020-03-09 17:27:46',
                'updated_at' => '2020-03-09 17:27:46',
            ),
            45 => 
            array (
                'id' => 47,
                'game_id' => '47',
                'answer_id' => '175',
                'created_at' => '2020-03-09 17:46:02',
                'updated_at' => '2020-03-09 17:46:02',
            ),
            46 => 
            array (
                'id' => 48,
                'game_id' => '48',
                'answer_id' => '176',
                'created_at' => '2020-03-09 18:09:12',
                'updated_at' => '2020-03-09 18:09:12',
            ),
            47 => 
            array (
                'id' => 49,
                'game_id' => '49',
                'answer_id' => '183',
                'created_at' => '2020-03-10 12:04:29',
                'updated_at' => '2020-03-10 12:04:29',
            ),
            48 => 
            array (
                'id' => 50,
                'game_id' => '50',
                'answer_id' => '184',
                'created_at' => '2020-03-10 12:22:10',
                'updated_at' => '2020-03-10 12:22:10',
            ),
            49 => 
            array (
                'id' => 51,
                'game_id' => '51',
                'answer_id' => '191',
                'created_at' => '2020-03-10 20:03:21',
                'updated_at' => '2020-03-10 20:03:21',
            ),
            50 => 
            array (
                'id' => 52,
                'game_id' => '52',
                'answer_id' => '193',
                'created_at' => '2020-03-10 20:08:14',
                'updated_at' => '2020-03-10 20:08:14',
            ),
            51 => 
            array (
                'id' => 53,
                'game_id' => '53',
                'answer_id' => '198',
                'created_at' => '2020-03-12 07:02:52',
                'updated_at' => '2020-03-12 07:02:52',
            ),
            52 => 
            array (
                'id' => 54,
                'game_id' => '54',
                'answer_id' => '201',
                'created_at' => '2020-03-12 07:23:11',
                'updated_at' => '2020-03-12 07:23:11',
            ),
            53 => 
            array (
                'id' => 55,
                'game_id' => '55',
                'answer_id' => '205',
                'created_at' => '2020-03-12 07:39:07',
                'updated_at' => '2020-03-12 07:39:07',
            ),
            54 => 
            array (
                'id' => 56,
                'game_id' => '56',
                'answer_id' => '211',
                'created_at' => '2020-03-12 07:45:34',
                'updated_at' => '2020-03-12 07:45:34',
            ),
            55 => 
            array (
                'id' => 57,
                'game_id' => '57',
                'answer_id' => '214',
                'created_at' => '2020-03-12 07:49:45',
                'updated_at' => '2020-03-12 07:49:45',
            ),
            56 => 
            array (
                'id' => 58,
                'game_id' => '58',
                'answer_id' => '218',
                'created_at' => '2020-03-12 07:56:38',
                'updated_at' => '2020-03-12 07:56:38',
            ),
            57 => 
            array (
                'id' => 59,
                'game_id' => '59',
                'answer_id' => '222',
                'created_at' => '2020-03-12 08:12:30',
                'updated_at' => '2020-03-12 08:12:30',
            ),
            58 => 
            array (
                'id' => 60,
                'game_id' => '60',
                'answer_id' => '225',
                'created_at' => '2020-03-12 08:14:38',
                'updated_at' => '2020-03-12 08:14:38',
            ),
            59 => 
            array (
                'id' => 61,
                'game_id' => '61',
                'answer_id' => '230',
                'created_at' => '2020-03-12 11:13:55',
                'updated_at' => '2020-03-12 11:13:55',
            ),
            60 => 
            array (
                'id' => 62,
                'game_id' => '62',
                'answer_id' => '235',
                'created_at' => '2020-03-12 11:18:08',
                'updated_at' => '2020-03-12 11:18:08',
            ),
            61 => 
            array (
                'id' => 63,
                'game_id' => '63',
                'answer_id' => '238',
                'created_at' => '2020-03-14 09:11:14',
                'updated_at' => '2020-03-14 09:11:14',
            ),
        ));
        
        
    }
}