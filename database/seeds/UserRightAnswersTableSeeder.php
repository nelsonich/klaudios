<?php

use Illuminate\Database\Seeder;

class UserRightAnswersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_right_answers')->delete();
        
        \DB::table('user_right_answers')->insert(array (
            0 => 
            array (
                'id' => 140,
                'user_id' => '3',
                'game_id' => '1',
                'answer_id' => '3',
                'created_at' => '2020-03-08 15:45:06',
                'updated_at' => '2020-03-15 14:33:44',
            ),
            1 => 
            array (
                'id' => 141,
                'user_id' => '3',
                'game_id' => '2',
                'answer_id' => '6',
                'created_at' => '2020-03-08 15:45:14',
                'updated_at' => '2020-03-08 15:45:14',
            ),
            2 => 
            array (
                'id' => 142,
                'user_id' => '3',
                'game_id' => '3',
                'answer_id' => '11',
                'created_at' => '2020-03-08 15:51:34',
                'updated_at' => '2020-03-08 15:51:34',
            ),
            3 => 
            array (
                'id' => 143,
                'user_id' => '2',
                'game_id' => '1',
                'answer_id' => '3',
                'created_at' => '2020-03-08 15:55:54',
                'updated_at' => '2020-03-15 14:33:44',
            ),
            4 => 
            array (
                'id' => 144,
                'user_id' => '2',
                'game_id' => '2',
                'answer_id' => '6',
                'created_at' => '2020-03-08 15:55:59',
                'updated_at' => '2020-03-08 15:55:59',
            ),
            5 => 
            array (
                'id' => 145,
                'user_id' => '2',
                'game_id' => '3',
                'answer_id' => '11',
                'created_at' => '2020-03-08 15:56:04',
                'updated_at' => '2020-03-08 15:56:04',
            ),
            6 => 
            array (
                'id' => 146,
                'user_id' => '2',
                'game_id' => '4',
                'answer_id' => '13',
                'created_at' => '2020-03-08 15:56:06',
                'updated_at' => '2020-03-08 15:56:06',
            ),
            7 => 
            array (
                'id' => 147,
                'user_id' => '2',
                'game_id' => '7',
                'answer_id' => '24',
                'created_at' => '2020-03-08 15:56:08',
                'updated_at' => '2020-03-08 15:56:08',
            ),
            8 => 
            array (
                'id' => 148,
                'user_id' => '2',
                'game_id' => '8',
                'answer_id' => '27',
                'created_at' => '2020-03-08 15:56:10',
                'updated_at' => '2020-03-08 15:56:10',
            ),
            9 => 
            array (
                'id' => 149,
                'user_id' => '2',
                'game_id' => '9',
                'answer_id' => '30',
                'created_at' => '2020-03-08 15:56:12',
                'updated_at' => '2020-03-08 15:56:12',
            ),
            10 => 
            array (
                'id' => 150,
                'user_id' => '2',
                'game_id' => '10',
                'answer_id' => '33',
                'created_at' => '2020-03-08 15:56:14',
                'updated_at' => '2020-03-08 15:56:14',
            ),
            11 => 
            array (
                'id' => 151,
                'user_id' => '2',
                'game_id' => '11',
                'answer_id' => '38',
                'created_at' => '2020-03-08 15:56:17',
                'updated_at' => '2020-03-08 15:56:17',
            ),
            12 => 
            array (
                'id' => 152,
                'user_id' => '2',
                'game_id' => '13',
                'answer_id' => '41',
                'created_at' => '2020-03-08 15:56:32',
                'updated_at' => '2020-03-08 15:56:32',
            ),
            13 => 
            array (
                'id' => 153,
                'user_id' => '2',
                'game_id' => '14',
                'answer_id' => '44',
                'created_at' => '2020-03-08 15:56:41',
                'updated_at' => '2020-03-08 15:56:41',
            ),
            14 => 
            array (
                'id' => 154,
                'user_id' => '2',
                'game_id' => '15',
                'answer_id' => '51',
                'created_at' => '2020-03-08 15:56:45',
                'updated_at' => '2020-03-08 15:56:45',
            ),
            15 => 
            array (
                'id' => 155,
                'user_id' => '2',
                'game_id' => '16',
                'answer_id' => '52',
                'created_at' => '2020-03-08 15:56:48',
                'updated_at' => '2020-03-08 15:56:48',
            ),
            16 => 
            array (
                'id' => 156,
                'user_id' => '2',
                'game_id' => '18',
                'answer_id' => '61',
                'created_at' => '2020-03-08 15:56:53',
                'updated_at' => '2020-03-08 15:56:53',
            ),
            17 => 
            array (
                'id' => 157,
                'user_id' => '2',
                'game_id' => '19',
                'answer_id' => '65',
                'created_at' => '2020-03-08 15:56:57',
                'updated_at' => '2020-03-08 15:56:57',
            ),
            18 => 
            array (
                'id' => 158,
                'user_id' => '2',
                'game_id' => '22',
                'answer_id' => '75',
                'created_at' => '2020-03-08 15:57:03',
                'updated_at' => '2020-03-08 15:57:03',
            ),
            19 => 
            array (
                'id' => 159,
                'user_id' => '2',
                'game_id' => '23',
                'answer_id' => '79',
                'created_at' => '2020-03-08 15:57:08',
                'updated_at' => '2020-03-08 15:57:08',
            ),
            20 => 
            array (
                'id' => 160,
                'user_id' => '2',
                'game_id' => '25',
                'answer_id' => '92',
                'created_at' => '2020-03-08 15:57:12',
                'updated_at' => '2020-03-08 15:57:12',
            ),
            21 => 
            array (
                'id' => 161,
                'user_id' => '2',
                'game_id' => '27',
                'answer_id' => '99',
                'created_at' => '2020-03-08 15:57:14',
                'updated_at' => '2020-03-08 15:57:14',
            ),
            22 => 
            array (
                'id' => 162,
                'user_id' => '2',
                'game_id' => '28',
                'answer_id' => '104',
                'created_at' => '2020-03-08 15:57:16',
                'updated_at' => '2020-03-08 15:57:16',
            ),
            23 => 
            array (
                'id' => 163,
                'user_id' => '2',
                'game_id' => '30',
                'answer_id' => '114',
                'created_at' => '2020-03-08 15:57:19',
                'updated_at' => '2020-03-08 15:57:19',
            ),
            24 => 
            array (
                'id' => 164,
                'user_id' => '2',
                'game_id' => '31',
                'answer_id' => '116',
                'created_at' => '2020-03-08 15:57:22',
                'updated_at' => '2020-03-08 15:57:22',
            ),
            25 => 
            array (
                'id' => 165,
                'user_id' => '2',
                'game_id' => '32',
                'answer_id' => '122',
                'created_at' => '2020-03-08 15:57:24',
                'updated_at' => '2020-03-08 15:57:24',
            ),
            26 => 
            array (
                'id' => 166,
                'user_id' => '2',
                'game_id' => '5',
                'answer_id' => '19',
                'created_at' => '2020-03-08 15:57:59',
                'updated_at' => '2020-03-08 15:57:59',
            ),
            27 => 
            array (
                'id' => 167,
                'user_id' => '2',
                'game_id' => '6',
                'answer_id' => '21',
                'created_at' => '2020-03-08 15:58:03',
                'updated_at' => '2020-03-08 15:58:03',
            ),
            28 => 
            array (
                'id' => 168,
                'user_id' => '2',
                'game_id' => '17',
                'answer_id' => '57',
                'created_at' => '2020-03-08 15:58:06',
                'updated_at' => '2020-03-08 15:58:06',
            ),
            29 => 
            array (
                'id' => 169,
                'user_id' => '2',
                'game_id' => '20',
                'answer_id' => '70',
                'created_at' => '2020-03-08 15:58:10',
                'updated_at' => '2020-03-08 15:58:10',
            ),
            30 => 
            array (
                'id' => 170,
                'user_id' => '2',
                'game_id' => '21',
                'answer_id' => '71',
                'created_at' => '2020-03-08 15:58:15',
                'updated_at' => '2020-03-08 15:58:15',
            ),
            31 => 
            array (
                'id' => 171,
                'user_id' => '2',
                'game_id' => '24',
                'answer_id' => '87',
                'created_at' => '2020-03-08 15:58:18',
                'updated_at' => '2020-03-08 15:58:18',
            ),
            32 => 
            array (
                'id' => 172,
                'user_id' => '2',
                'game_id' => '26',
                'answer_id' => '95',
                'created_at' => '2020-03-08 15:58:21',
                'updated_at' => '2020-03-08 15:58:21',
            ),
            33 => 
            array (
                'id' => 173,
                'user_id' => '2',
                'game_id' => '29',
                'answer_id' => '110',
                'created_at' => '2020-03-08 15:58:23',
                'updated_at' => '2020-03-08 15:58:23',
            ),
            34 => 
            array (
                'id' => 174,
                'user_id' => '2',
                'game_id' => '33',
                'answer_id' => '124',
                'created_at' => '2020-03-08 15:58:27',
                'updated_at' => '2020-03-08 15:58:27',
            ),
            35 => 
            array (
                'id' => 175,
                'user_id' => '2',
                'game_id' => '34',
                'answer_id' => '126',
                'created_at' => '2020-03-08 15:58:33',
                'updated_at' => '2020-03-08 15:58:33',
            ),
            36 => 
            array (
                'id' => 176,
                'user_id' => '2',
                'game_id' => '35',
                'answer_id' => '131',
                'created_at' => '2020-03-08 15:58:36',
                'updated_at' => '2020-03-08 15:58:36',
            ),
            37 => 
            array (
                'id' => 177,
                'user_id' => '2',
                'game_id' => '36',
                'answer_id' => '133',
                'created_at' => '2020-03-08 15:58:39',
                'updated_at' => '2020-03-08 15:58:39',
            ),
            38 => 
            array (
                'id' => 178,
                'user_id' => '2',
                'game_id' => '37',
                'answer_id' => '136',
                'created_at' => '2020-03-08 15:58:48',
                'updated_at' => '2020-03-08 15:58:48',
            ),
            39 => 
            array (
                'id' => 179,
                'user_id' => '2',
                'game_id' => '38',
                'answer_id' => '139',
                'created_at' => '2020-03-08 15:58:55',
                'updated_at' => '2020-03-08 15:58:55',
            ),
            40 => 
            array (
                'id' => 180,
                'user_id' => '2',
                'game_id' => '39',
                'answer_id' => '141',
                'created_at' => '2020-03-08 15:59:14',
                'updated_at' => '2020-03-08 15:59:14',
            ),
            41 => 
            array (
                'id' => 181,
                'user_id' => '2',
                'game_id' => '40',
                'answer_id' => '145',
                'created_at' => '2020-03-08 15:59:20',
                'updated_at' => '2020-03-08 15:59:20',
            ),
            42 => 
            array (
                'id' => 182,
                'user_id' => '1',
                'game_id' => '1',
                'answer_id' => '3',
                'created_at' => '2020-03-08 16:56:56',
                'updated_at' => '2020-03-15 14:33:44',
            ),
            43 => 
            array (
                'id' => 183,
                'user_id' => '1',
                'game_id' => '2',
                'answer_id' => '6',
                'created_at' => '2020-03-08 16:56:58',
                'updated_at' => '2020-03-08 16:56:58',
            ),
            44 => 
            array (
                'id' => 184,
                'user_id' => '1',
                'game_id' => '3',
                'answer_id' => '11',
                'created_at' => '2020-03-08 16:57:02',
                'updated_at' => '2020-03-08 16:57:02',
            ),
            45 => 
            array (
                'id' => 185,
                'user_id' => '1',
                'game_id' => '4',
                'answer_id' => '13',
                'created_at' => '2020-03-08 16:57:04',
                'updated_at' => '2020-03-08 16:57:04',
            ),
            46 => 
            array (
                'id' => 186,
                'user_id' => '1',
                'game_id' => '7',
                'answer_id' => '24',
                'created_at' => '2020-03-08 16:57:16',
                'updated_at' => '2020-03-08 16:57:16',
            ),
            47 => 
            array (
                'id' => 187,
                'user_id' => '1',
                'game_id' => '8',
                'answer_id' => '27',
                'created_at' => '2020-03-08 16:57:19',
                'updated_at' => '2020-03-08 16:57:19',
            ),
            48 => 
            array (
                'id' => 188,
                'user_id' => '1',
                'game_id' => '9',
                'answer_id' => '30',
                'created_at' => '2020-03-08 16:57:23',
                'updated_at' => '2020-03-08 16:57:23',
            ),
            49 => 
            array (
                'id' => 189,
                'user_id' => '1',
                'game_id' => '10',
                'answer_id' => '33',
                'created_at' => '2020-03-08 16:57:28',
                'updated_at' => '2020-03-08 16:57:28',
            ),
            50 => 
            array (
                'id' => 190,
                'user_id' => '1',
                'game_id' => '11',
                'answer_id' => '38',
                'created_at' => '2020-03-08 16:57:34',
                'updated_at' => '2020-03-08 16:57:34',
            ),
            51 => 
            array (
                'id' => 191,
                'user_id' => '1',
                'game_id' => '13',
                'answer_id' => '41',
                'created_at' => '2020-03-08 16:57:39',
                'updated_at' => '2020-03-08 16:57:39',
            ),
            52 => 
            array (
                'id' => 192,
                'user_id' => '1',
                'game_id' => '14',
                'answer_id' => '44',
                'created_at' => '2020-03-08 16:57:45',
                'updated_at' => '2020-03-08 16:57:45',
            ),
            53 => 
            array (
                'id' => 193,
                'user_id' => '1',
                'game_id' => '15',
                'answer_id' => '51',
                'created_at' => '2020-03-08 16:57:49',
                'updated_at' => '2020-03-08 16:57:49',
            ),
            54 => 
            array (
                'id' => 194,
                'user_id' => '1',
                'game_id' => '16',
                'answer_id' => '52',
                'created_at' => '2020-03-08 16:57:53',
                'updated_at' => '2020-03-08 16:57:53',
            ),
            55 => 
            array (
                'id' => 195,
                'user_id' => '1',
                'game_id' => '18',
                'answer_id' => '61',
                'created_at' => '2020-03-08 16:57:57',
                'updated_at' => '2020-03-08 16:57:57',
            ),
            56 => 
            array (
                'id' => 196,
                'user_id' => '1',
                'game_id' => '19',
                'answer_id' => '65',
                'created_at' => '2020-03-08 16:58:04',
                'updated_at' => '2020-03-08 16:58:04',
            ),
            57 => 
            array (
                'id' => 197,
                'user_id' => '1',
                'game_id' => '22',
                'answer_id' => '75',
                'created_at' => '2020-03-08 16:58:08',
                'updated_at' => '2020-03-08 16:58:08',
            ),
            58 => 
            array (
                'id' => 198,
                'user_id' => '1',
                'game_id' => '23',
                'answer_id' => '79',
                'created_at' => '2020-03-08 16:58:14',
                'updated_at' => '2020-03-08 16:58:14',
            ),
            59 => 
            array (
                'id' => 199,
                'user_id' => '1',
                'game_id' => '25',
                'answer_id' => '92',
                'created_at' => '2020-03-08 16:58:19',
                'updated_at' => '2020-03-08 16:58:19',
            ),
            60 => 
            array (
                'id' => 200,
                'user_id' => '1',
                'game_id' => '27',
                'answer_id' => '99',
                'created_at' => '2020-03-08 16:58:24',
                'updated_at' => '2020-03-08 16:58:24',
            ),
            61 => 
            array (
                'id' => 201,
                'user_id' => '1',
                'game_id' => '28',
                'answer_id' => '104',
                'created_at' => '2020-03-08 16:58:27',
                'updated_at' => '2020-03-08 16:58:27',
            ),
            62 => 
            array (
                'id' => 202,
                'user_id' => '1',
                'game_id' => '30',
                'answer_id' => '114',
                'created_at' => '2020-03-08 16:58:31',
                'updated_at' => '2020-03-08 16:58:31',
            ),
            63 => 
            array (
                'id' => 203,
                'user_id' => '1',
                'game_id' => '31',
                'answer_id' => '116',
                'created_at' => '2020-03-08 16:58:35',
                'updated_at' => '2020-03-08 16:58:35',
            ),
            64 => 
            array (
                'id' => 204,
                'user_id' => '1',
                'game_id' => '32',
                'answer_id' => '122',
                'created_at' => '2020-03-08 16:58:38',
                'updated_at' => '2020-03-08 16:58:38',
            ),
            65 => 
            array (
                'id' => 205,
                'user_id' => '1',
                'game_id' => '5',
                'answer_id' => '19',
                'created_at' => '2020-03-08 16:58:48',
                'updated_at' => '2020-03-08 16:58:48',
            ),
            66 => 
            array (
                'id' => 206,
                'user_id' => '1',
                'game_id' => '6',
                'answer_id' => '21',
                'created_at' => '2020-03-08 16:58:51',
                'updated_at' => '2020-03-08 16:58:51',
            ),
            67 => 
            array (
                'id' => 207,
                'user_id' => '1',
                'game_id' => '17',
                'answer_id' => '57',
                'created_at' => '2020-03-08 16:58:55',
                'updated_at' => '2020-03-08 16:58:55',
            ),
            68 => 
            array (
                'id' => 208,
                'user_id' => '1',
                'game_id' => '20',
                'answer_id' => '70',
                'created_at' => '2020-03-08 16:59:02',
                'updated_at' => '2020-03-08 16:59:02',
            ),
            69 => 
            array (
                'id' => 209,
                'user_id' => '1',
                'game_id' => '21',
                'answer_id' => '71',
                'created_at' => '2020-03-08 16:59:08',
                'updated_at' => '2020-03-08 16:59:08',
            ),
            70 => 
            array (
                'id' => 210,
                'user_id' => '1',
                'game_id' => '24',
                'answer_id' => '87',
                'created_at' => '2020-03-08 16:59:16',
                'updated_at' => '2020-03-08 16:59:16',
            ),
            71 => 
            array (
                'id' => 211,
                'user_id' => '1',
                'game_id' => '26',
                'answer_id' => '95',
                'created_at' => '2020-03-08 16:59:20',
                'updated_at' => '2020-03-08 16:59:20',
            ),
            72 => 
            array (
                'id' => 212,
                'user_id' => '1',
                'game_id' => '29',
                'answer_id' => '110',
                'created_at' => '2020-03-08 16:59:24',
                'updated_at' => '2020-03-08 16:59:24',
            ),
            73 => 
            array (
                'id' => 213,
                'user_id' => '1',
                'game_id' => '33',
                'answer_id' => '124',
                'created_at' => '2020-03-08 16:59:27',
                'updated_at' => '2020-03-08 16:59:27',
            ),
            74 => 
            array (
                'id' => 214,
                'user_id' => '1',
                'game_id' => '34',
                'answer_id' => '126',
                'created_at' => '2020-03-08 16:59:38',
                'updated_at' => '2020-03-08 16:59:38',
            ),
            75 => 
            array (
                'id' => 215,
                'user_id' => '1',
                'game_id' => '35',
                'answer_id' => '131',
                'created_at' => '2020-03-08 16:59:42',
                'updated_at' => '2020-03-08 16:59:42',
            ),
            76 => 
            array (
                'id' => 216,
                'user_id' => '1',
                'game_id' => '36',
                'answer_id' => '133',
                'created_at' => '2020-03-08 16:59:45',
                'updated_at' => '2020-03-08 16:59:45',
            ),
            77 => 
            array (
                'id' => 217,
                'user_id' => '1',
                'game_id' => '37',
                'answer_id' => '136',
                'created_at' => '2020-03-08 17:00:11',
                'updated_at' => '2020-03-08 17:00:11',
            ),
            78 => 
            array (
                'id' => 218,
                'user_id' => '1',
                'game_id' => '38',
                'answer_id' => '139',
                'created_at' => '2020-03-08 17:00:22',
                'updated_at' => '2020-03-08 17:00:22',
            ),
            79 => 
            array (
                'id' => 219,
                'user_id' => '1',
                'game_id' => '39',
                'answer_id' => '141',
                'created_at' => '2020-03-08 17:00:32',
                'updated_at' => '2020-03-08 17:00:32',
            ),
            80 => 
            array (
                'id' => 220,
                'user_id' => '1',
                'game_id' => '40',
                'answer_id' => '145',
                'created_at' => '2020-03-08 17:01:08',
                'updated_at' => '2020-03-08 17:01:08',
            ),
            81 => 
            array (
                'id' => 221,
                'user_id' => '10',
                'game_id' => '1',
                'answer_id' => '3',
                'created_at' => '2020-03-08 17:20:54',
                'updated_at' => '2020-03-15 14:33:44',
            ),
            82 => 
            array (
                'id' => 222,
                'user_id' => '10',
                'game_id' => '2',
                'answer_id' => '6',
                'created_at' => '2020-03-08 17:21:32',
                'updated_at' => '2020-03-08 17:21:32',
            ),
            83 => 
            array (
                'id' => 223,
                'user_id' => '14',
                'game_id' => '1',
                'answer_id' => '3',
                'created_at' => '2020-03-08 17:28:07',
                'updated_at' => '2020-03-15 14:33:44',
            ),
            84 => 
            array (
                'id' => 224,
                'user_id' => '14',
                'game_id' => '2',
                'answer_id' => '6',
                'created_at' => '2020-03-08 17:28:19',
                'updated_at' => '2020-03-08 17:28:19',
            ),
            85 => 
            array (
                'id' => 225,
                'user_id' => '14',
                'game_id' => '3',
                'answer_id' => '11',
                'created_at' => '2020-03-08 17:28:27',
                'updated_at' => '2020-03-08 17:28:27',
            ),
            86 => 
            array (
                'id' => 226,
                'user_id' => '14',
                'game_id' => '4',
                'answer_id' => '13',
                'created_at' => '2020-03-08 17:28:39',
                'updated_at' => '2020-03-08 17:28:39',
            ),
            87 => 
            array (
                'id' => 227,
                'user_id' => '14',
                'game_id' => '7',
                'answer_id' => '24',
                'created_at' => '2020-03-08 17:28:46',
                'updated_at' => '2020-03-08 17:28:46',
            ),
            88 => 
            array (
                'id' => 228,
                'user_id' => '14',
                'game_id' => '8',
                'answer_id' => '27',
                'created_at' => '2020-03-08 17:28:53',
                'updated_at' => '2020-03-08 17:28:53',
            ),
            89 => 
            array (
                'id' => 229,
                'user_id' => '14',
                'game_id' => '9',
                'answer_id' => '30',
                'created_at' => '2020-03-08 17:29:01',
                'updated_at' => '2020-03-08 17:29:01',
            ),
            90 => 
            array (
                'id' => 230,
                'user_id' => '14',
                'game_id' => '10',
                'answer_id' => '33',
                'created_at' => '2020-03-08 17:29:20',
                'updated_at' => '2020-03-08 17:29:20',
            ),
            91 => 
            array (
                'id' => 231,
                'user_id' => '14',
                'game_id' => '11',
                'answer_id' => '38',
                'created_at' => '2020-03-08 17:29:25',
                'updated_at' => '2020-03-08 17:29:25',
            ),
            92 => 
            array (
                'id' => 232,
                'user_id' => '14',
                'game_id' => '13',
                'answer_id' => '41',
                'created_at' => '2020-03-08 17:29:40',
                'updated_at' => '2020-03-08 17:29:40',
            ),
            93 => 
            array (
                'id' => 233,
                'user_id' => '14',
                'game_id' => '14',
                'answer_id' => '44',
                'created_at' => '2020-03-08 17:29:44',
                'updated_at' => '2020-03-08 17:29:44',
            ),
            94 => 
            array (
                'id' => 234,
                'user_id' => '14',
                'game_id' => '15',
                'answer_id' => '51',
                'created_at' => '2020-03-08 17:29:48',
                'updated_at' => '2020-03-08 17:29:48',
            ),
            95 => 
            array (
                'id' => 235,
                'user_id' => '14',
                'game_id' => '16',
                'answer_id' => '52',
                'created_at' => '2020-03-08 17:29:52',
                'updated_at' => '2020-03-08 17:29:52',
            ),
            96 => 
            array (
                'id' => 236,
                'user_id' => '14',
                'game_id' => '18',
                'answer_id' => '61',
                'created_at' => '2020-03-08 17:30:01',
                'updated_at' => '2020-03-08 17:30:01',
            ),
            97 => 
            array (
                'id' => 237,
                'user_id' => '14',
                'game_id' => '19',
                'answer_id' => '65',
                'created_at' => '2020-03-08 17:30:14',
                'updated_at' => '2020-03-08 17:30:14',
            ),
            98 => 
            array (
                'id' => 238,
                'user_id' => '14',
                'game_id' => '22',
                'answer_id' => '75',
                'created_at' => '2020-03-08 17:30:21',
                'updated_at' => '2020-03-08 17:30:21',
            ),
            99 => 
            array (
                'id' => 239,
                'user_id' => '14',
                'game_id' => '23',
                'answer_id' => '79',
                'created_at' => '2020-03-08 17:30:25',
                'updated_at' => '2020-03-08 17:30:25',
            ),
            100 => 
            array (
                'id' => 240,
                'user_id' => '14',
                'game_id' => '25',
                'answer_id' => '92',
                'created_at' => '2020-03-08 17:30:30',
                'updated_at' => '2020-03-08 17:30:30',
            ),
            101 => 
            array (
                'id' => 241,
                'user_id' => '14',
                'game_id' => '27',
                'answer_id' => '99',
                'created_at' => '2020-03-08 17:30:36',
                'updated_at' => '2020-03-08 17:30:36',
            ),
            102 => 
            array (
                'id' => 242,
                'user_id' => '14',
                'game_id' => '28',
                'answer_id' => '104',
                'created_at' => '2020-03-08 17:30:43',
                'updated_at' => '2020-03-08 17:30:43',
            ),
            103 => 
            array (
                'id' => 243,
                'user_id' => '14',
                'game_id' => '30',
                'answer_id' => '114',
                'created_at' => '2020-03-08 17:30:49',
                'updated_at' => '2020-03-08 17:30:49',
            ),
            104 => 
            array (
                'id' => 244,
                'user_id' => '14',
                'game_id' => '31',
                'answer_id' => '116',
                'created_at' => '2020-03-08 17:30:53',
                'updated_at' => '2020-03-08 17:30:53',
            ),
            105 => 
            array (
                'id' => 245,
                'user_id' => '14',
                'game_id' => '32',
                'answer_id' => '122',
                'created_at' => '2020-03-08 17:31:24',
                'updated_at' => '2020-03-08 17:31:24',
            ),
            106 => 
            array (
                'id' => 246,
                'user_id' => '14',
                'game_id' => '5',
                'answer_id' => '19',
                'created_at' => '2020-03-08 17:31:51',
                'updated_at' => '2020-03-08 17:31:51',
            ),
            107 => 
            array (
                'id' => 247,
                'user_id' => '14',
                'game_id' => '6',
                'answer_id' => '21',
                'created_at' => '2020-03-08 17:32:16',
                'updated_at' => '2020-03-08 17:32:16',
            ),
            108 => 
            array (
                'id' => 248,
                'user_id' => '14',
                'game_id' => '17',
                'answer_id' => '57',
                'created_at' => '2020-03-08 17:32:21',
                'updated_at' => '2020-03-08 17:32:21',
            ),
            109 => 
            array (
                'id' => 249,
                'user_id' => '14',
                'game_id' => '20',
                'answer_id' => '70',
                'created_at' => '2020-03-08 17:32:26',
                'updated_at' => '2020-03-08 17:32:26',
            ),
            110 => 
            array (
                'id' => 250,
                'user_id' => '14',
                'game_id' => '21',
                'answer_id' => '71',
                'created_at' => '2020-03-08 17:32:32',
                'updated_at' => '2020-03-08 17:32:32',
            ),
            111 => 
            array (
                'id' => 251,
                'user_id' => '14',
                'game_id' => '24',
                'answer_id' => '87',
                'created_at' => '2020-03-08 17:32:38',
                'updated_at' => '2020-03-08 17:32:38',
            ),
            112 => 
            array (
                'id' => 252,
                'user_id' => '14',
                'game_id' => '26',
                'answer_id' => '95',
                'created_at' => '2020-03-08 17:32:42',
                'updated_at' => '2020-03-08 17:32:42',
            ),
            113 => 
            array (
                'id' => 253,
                'user_id' => '14',
                'game_id' => '29',
                'answer_id' => '110',
                'created_at' => '2020-03-08 17:32:51',
                'updated_at' => '2020-03-08 17:32:51',
            ),
            114 => 
            array (
                'id' => 254,
                'user_id' => '14',
                'game_id' => '33',
                'answer_id' => '124',
                'created_at' => '2020-03-08 17:33:03',
                'updated_at' => '2020-03-08 17:33:03',
            ),
            115 => 
            array (
                'id' => 255,
                'user_id' => '14',
                'game_id' => '34',
                'answer_id' => '126',
                'created_at' => '2020-03-08 17:33:28',
                'updated_at' => '2020-03-08 17:33:28',
            ),
            116 => 
            array (
                'id' => 256,
                'user_id' => '14',
                'game_id' => '35',
                'answer_id' => '131',
                'created_at' => '2020-03-08 17:33:33',
                'updated_at' => '2020-03-08 17:33:33',
            ),
            117 => 
            array (
                'id' => 257,
                'user_id' => '14',
                'game_id' => '36',
                'answer_id' => '133',
                'created_at' => '2020-03-08 17:33:42',
                'updated_at' => '2020-03-08 17:33:42',
            ),
            118 => 
            array (
                'id' => 258,
                'user_id' => '14',
                'game_id' => '37',
                'answer_id' => '136',
                'created_at' => '2020-03-08 17:33:57',
                'updated_at' => '2020-03-08 17:33:57',
            ),
            119 => 
            array (
                'id' => 259,
                'user_id' => '14',
                'game_id' => '38',
                'answer_id' => '139',
                'created_at' => '2020-03-08 17:34:12',
                'updated_at' => '2020-03-08 17:34:12',
            ),
            120 => 
            array (
                'id' => 260,
                'user_id' => '14',
                'game_id' => '39',
                'answer_id' => '141',
                'created_at' => '2020-03-08 17:34:24',
                'updated_at' => '2020-03-08 17:34:24',
            ),
            121 => 
            array (
                'id' => 261,
                'user_id' => '14',
                'game_id' => '40',
                'answer_id' => '145',
                'created_at' => '2020-03-08 17:34:40',
                'updated_at' => '2020-03-08 17:34:40',
            ),
            122 => 
            array (
                'id' => 262,
                'user_id' => '3',
                'game_id' => '4',
                'answer_id' => '13',
                'created_at' => '2020-03-09 06:38:02',
                'updated_at' => '2020-03-09 06:38:02',
            ),
            123 => 
            array (
                'id' => 263,
                'user_id' => '9',
                'game_id' => '1',
                'answer_id' => '3',
                'created_at' => '2020-03-09 06:39:03',
                'updated_at' => '2020-03-15 14:33:44',
            ),
            124 => 
            array (
                'id' => 264,
                'user_id' => '9',
                'game_id' => '2',
                'answer_id' => '6',
                'created_at' => '2020-03-09 06:39:08',
                'updated_at' => '2020-03-09 06:39:08',
            ),
            125 => 
            array (
                'id' => 265,
                'user_id' => '9',
                'game_id' => '3',
                'answer_id' => '11',
                'created_at' => '2020-03-09 06:39:18',
                'updated_at' => '2020-03-09 06:39:18',
            ),
            126 => 
            array (
                'id' => 266,
                'user_id' => '9',
                'game_id' => '4',
                'answer_id' => '13',
                'created_at' => '2020-03-09 06:39:26',
                'updated_at' => '2020-03-09 06:39:26',
            ),
            127 => 
            array (
                'id' => 267,
                'user_id' => '9',
                'game_id' => '7',
                'answer_id' => '24',
                'created_at' => '2020-03-09 06:39:33',
                'updated_at' => '2020-03-09 06:39:33',
            ),
            128 => 
            array (
                'id' => 268,
                'user_id' => '9',
                'game_id' => '8',
                'answer_id' => '27',
                'created_at' => '2020-03-09 06:39:38',
                'updated_at' => '2020-03-09 06:39:38',
            ),
            129 => 
            array (
                'id' => 269,
                'user_id' => '9',
                'game_id' => '9',
                'answer_id' => '30',
                'created_at' => '2020-03-09 06:39:49',
                'updated_at' => '2020-03-09 06:39:49',
            ),
            130 => 
            array (
                'id' => 270,
                'user_id' => '9',
                'game_id' => '10',
                'answer_id' => '33',
                'created_at' => '2020-03-09 06:39:53',
                'updated_at' => '2020-03-09 06:39:53',
            ),
            131 => 
            array (
                'id' => 271,
                'user_id' => '9',
                'game_id' => '11',
                'answer_id' => '38',
                'created_at' => '2020-03-09 06:40:56',
                'updated_at' => '2020-03-09 06:40:56',
            ),
            132 => 
            array (
                'id' => 272,
                'user_id' => '9',
                'game_id' => '13',
                'answer_id' => '41',
                'created_at' => '2020-03-09 06:41:41',
                'updated_at' => '2020-03-09 06:41:41',
            ),
            133 => 
            array (
                'id' => 273,
                'user_id' => '9',
                'game_id' => '14',
                'answer_id' => '44',
                'created_at' => '2020-03-09 06:41:53',
                'updated_at' => '2020-03-09 06:41:53',
            ),
            134 => 
            array (
                'id' => 274,
                'user_id' => '9',
                'game_id' => '15',
                'answer_id' => '51',
                'created_at' => '2020-03-09 06:42:20',
                'updated_at' => '2020-03-09 06:42:20',
            ),
            135 => 
            array (
                'id' => 275,
                'user_id' => '9',
                'game_id' => '16',
                'answer_id' => '52',
                'created_at' => '2020-03-09 06:42:24',
                'updated_at' => '2020-03-09 06:42:24',
            ),
            136 => 
            array (
                'id' => 276,
                'user_id' => '9',
                'game_id' => '18',
                'answer_id' => '61',
                'created_at' => '2020-03-09 06:43:09',
                'updated_at' => '2020-03-09 06:43:09',
            ),
            137 => 
            array (
                'id' => 277,
                'user_id' => '9',
                'game_id' => '19',
                'answer_id' => '65',
                'created_at' => '2020-03-09 06:43:47',
                'updated_at' => '2020-03-09 06:43:47',
            ),
            138 => 
            array (
                'id' => 278,
                'user_id' => '9',
                'game_id' => '22',
                'answer_id' => '75',
                'created_at' => '2020-03-09 06:44:26',
                'updated_at' => '2020-03-09 06:44:26',
            ),
            139 => 
            array (
                'id' => 279,
                'user_id' => '9',
                'game_id' => '23',
                'answer_id' => '79',
                'created_at' => '2020-03-09 06:44:41',
                'updated_at' => '2020-03-09 06:44:41',
            ),
            140 => 
            array (
                'id' => 280,
                'user_id' => '9',
                'game_id' => '25',
                'answer_id' => '92',
                'created_at' => '2020-03-09 06:45:06',
                'updated_at' => '2020-03-09 06:45:06',
            ),
            141 => 
            array (
                'id' => 281,
                'user_id' => '9',
                'game_id' => '27',
                'answer_id' => '99',
                'created_at' => '2020-03-09 06:45:22',
                'updated_at' => '2020-03-09 06:45:22',
            ),
            142 => 
            array (
                'id' => 282,
                'user_id' => '9',
                'game_id' => '28',
                'answer_id' => '104',
                'created_at' => '2020-03-09 06:45:34',
                'updated_at' => '2020-03-09 06:45:34',
            ),
            143 => 
            array (
                'id' => 283,
                'user_id' => '9',
                'game_id' => '30',
                'answer_id' => '114',
                'created_at' => '2020-03-09 06:46:35',
                'updated_at' => '2020-03-09 06:46:35',
            ),
            144 => 
            array (
                'id' => 284,
                'user_id' => '9',
                'game_id' => '31',
                'answer_id' => '116',
                'created_at' => '2020-03-09 06:47:56',
                'updated_at' => '2020-03-09 06:47:56',
            ),
            145 => 
            array (
                'id' => 285,
                'user_id' => '9',
                'game_id' => '32',
                'answer_id' => '122',
                'created_at' => '2020-03-09 06:48:01',
                'updated_at' => '2020-03-09 06:48:01',
            ),
            146 => 
            array (
                'id' => 286,
                'user_id' => '9',
                'game_id' => '5',
                'answer_id' => '19',
                'created_at' => '2020-03-09 06:48:18',
                'updated_at' => '2020-03-09 06:48:18',
            ),
            147 => 
            array (
                'id' => 287,
                'user_id' => '9',
                'game_id' => '6',
                'answer_id' => '21',
                'created_at' => '2020-03-09 06:48:28',
                'updated_at' => '2020-03-09 06:48:28',
            ),
            148 => 
            array (
                'id' => 288,
                'user_id' => '9',
                'game_id' => '17',
                'answer_id' => '57',
                'created_at' => '2020-03-09 06:48:56',
                'updated_at' => '2020-03-09 06:48:56',
            ),
            149 => 
            array (
                'id' => 289,
                'user_id' => '9',
                'game_id' => '20',
                'answer_id' => '70',
                'created_at' => '2020-03-09 06:49:22',
                'updated_at' => '2020-03-09 06:49:22',
            ),
            150 => 
            array (
                'id' => 290,
                'user_id' => '9',
                'game_id' => '21',
                'answer_id' => '71',
                'created_at' => '2020-03-09 06:49:48',
                'updated_at' => '2020-03-09 06:49:48',
            ),
            151 => 
            array (
                'id' => 291,
                'user_id' => '9',
                'game_id' => '24',
                'answer_id' => '87',
                'created_at' => '2020-03-09 06:50:31',
                'updated_at' => '2020-03-09 06:50:31',
            ),
            152 => 
            array (
                'id' => 292,
                'user_id' => '9',
                'game_id' => '26',
                'answer_id' => '95',
                'created_at' => '2020-03-09 06:50:43',
                'updated_at' => '2020-03-09 06:50:43',
            ),
            153 => 
            array (
                'id' => 293,
                'user_id' => '9',
                'game_id' => '29',
                'answer_id' => '110',
                'created_at' => '2020-03-09 06:50:56',
                'updated_at' => '2020-03-09 06:50:56',
            ),
            154 => 
            array (
                'id' => 294,
                'user_id' => '9',
                'game_id' => '33',
                'answer_id' => '124',
                'created_at' => '2020-03-09 06:51:06',
                'updated_at' => '2020-03-09 06:51:06',
            ),
            155 => 
            array (
                'id' => 295,
                'user_id' => '9',
                'game_id' => '34',
                'answer_id' => '126',
                'created_at' => '2020-03-09 06:51:31',
                'updated_at' => '2020-03-09 06:51:31',
            ),
            156 => 
            array (
                'id' => 296,
                'user_id' => '9',
                'game_id' => '35',
                'answer_id' => '131',
                'created_at' => '2020-03-09 06:51:38',
                'updated_at' => '2020-03-09 06:51:38',
            ),
            157 => 
            array (
                'id' => 297,
                'user_id' => '9',
                'game_id' => '36',
                'answer_id' => '133',
                'created_at' => '2020-03-09 06:51:43',
                'updated_at' => '2020-03-09 06:51:43',
            ),
            158 => 
            array (
                'id' => 298,
                'user_id' => '9',
                'game_id' => '37',
                'answer_id' => '136',
                'created_at' => '2020-03-09 06:52:20',
                'updated_at' => '2020-03-09 06:52:20',
            ),
            159 => 
            array (
                'id' => 299,
                'user_id' => '9',
                'game_id' => '38',
                'answer_id' => '139',
                'created_at' => '2020-03-09 06:52:39',
                'updated_at' => '2020-03-09 06:52:39',
            ),
            160 => 
            array (
                'id' => 300,
                'user_id' => '9',
                'game_id' => '39',
                'answer_id' => '141',
                'created_at' => '2020-03-09 06:53:22',
                'updated_at' => '2020-03-09 06:53:22',
            ),
            161 => 
            array (
                'id' => 301,
                'user_id' => '9',
                'game_id' => '40',
                'answer_id' => '145',
                'created_at' => '2020-03-09 06:53:55',
                'updated_at' => '2020-03-09 06:53:55',
            ),
            162 => 
            array (
                'id' => 302,
                'user_id' => '2',
                'game_id' => '41',
                'answer_id' => '150',
                'created_at' => '2020-03-09 18:23:59',
                'updated_at' => '2020-03-09 18:23:59',
            ),
            163 => 
            array (
                'id' => 303,
                'user_id' => '2',
                'game_id' => '42',
                'answer_id' => '155',
                'created_at' => '2020-03-09 18:24:04',
                'updated_at' => '2020-03-09 18:24:04',
            ),
            164 => 
            array (
                'id' => 304,
                'user_id' => '2',
                'game_id' => '43',
                'answer_id' => '158',
                'created_at' => '2020-03-09 18:24:08',
                'updated_at' => '2020-03-09 18:24:08',
            ),
            165 => 
            array (
                'id' => 305,
                'user_id' => '2',
                'game_id' => '44',
                'answer_id' => '162',
                'created_at' => '2020-03-09 18:24:14',
                'updated_at' => '2020-03-09 18:24:14',
            ),
            166 => 
            array (
                'id' => 306,
                'user_id' => '2',
                'game_id' => '45',
                'answer_id' => '166',
                'created_at' => '2020-03-09 18:24:20',
                'updated_at' => '2020-03-09 18:24:20',
            ),
            167 => 
            array (
                'id' => 307,
                'user_id' => '2',
                'game_id' => '46',
                'answer_id' => '171',
                'created_at' => '2020-03-09 18:24:26',
                'updated_at' => '2020-03-09 18:24:26',
            ),
            168 => 
            array (
                'id' => 308,
                'user_id' => '2',
                'game_id' => '47',
                'answer_id' => '175',
                'created_at' => '2020-03-09 18:26:18',
                'updated_at' => '2020-03-09 18:26:18',
            ),
            169 => 
            array (
                'id' => 309,
                'user_id' => '2',
                'game_id' => '48',
                'answer_id' => '176',
                'created_at' => '2020-03-09 18:26:27',
                'updated_at' => '2020-03-09 18:26:27',
            ),
            170 => 
            array (
                'id' => 310,
                'user_id' => '3',
                'game_id' => '7',
                'answer_id' => '24',
                'created_at' => '2020-03-10 10:25:38',
                'updated_at' => '2020-03-10 10:25:38',
            ),
            171 => 
            array (
                'id' => 311,
                'user_id' => '3',
                'game_id' => '8',
                'answer_id' => '27',
                'created_at' => '2020-03-10 10:25:42',
                'updated_at' => '2020-03-10 10:25:42',
            ),
            172 => 
            array (
                'id' => 312,
                'user_id' => '3',
                'game_id' => '9',
                'answer_id' => '30',
                'created_at' => '2020-03-10 10:25:45',
                'updated_at' => '2020-03-10 10:25:45',
            ),
            173 => 
            array (
                'id' => 313,
                'user_id' => '3',
                'game_id' => '10',
                'answer_id' => '33',
                'created_at' => '2020-03-10 10:25:48',
                'updated_at' => '2020-03-10 10:25:48',
            ),
            174 => 
            array (
                'id' => 314,
                'user_id' => '3',
                'game_id' => '11',
                'answer_id' => '38',
                'created_at' => '2020-03-10 10:25:52',
                'updated_at' => '2020-03-10 10:25:52',
            ),
            175 => 
            array (
                'id' => 315,
                'user_id' => '3',
                'game_id' => '13',
                'answer_id' => '41',
                'created_at' => '2020-03-10 10:25:56',
                'updated_at' => '2020-03-10 10:25:56',
            ),
            176 => 
            array (
                'id' => 316,
                'user_id' => '3',
                'game_id' => '14',
                'answer_id' => '44',
                'created_at' => '2020-03-10 10:26:00',
                'updated_at' => '2020-03-10 10:26:00',
            ),
            177 => 
            array (
                'id' => 317,
                'user_id' => '3',
                'game_id' => '15',
                'answer_id' => '51',
                'created_at' => '2020-03-10 10:26:04',
                'updated_at' => '2020-03-10 10:26:04',
            ),
            178 => 
            array (
                'id' => 318,
                'user_id' => '3',
                'game_id' => '16',
                'answer_id' => '52',
                'created_at' => '2020-03-10 10:26:07',
                'updated_at' => '2020-03-10 10:26:07',
            ),
            179 => 
            array (
                'id' => 319,
                'user_id' => '3',
                'game_id' => '18',
                'answer_id' => '61',
                'created_at' => '2020-03-10 10:26:11',
                'updated_at' => '2020-03-10 10:26:11',
            ),
            180 => 
            array (
                'id' => 320,
                'user_id' => '3',
                'game_id' => '19',
                'answer_id' => '65',
                'created_at' => '2020-03-10 10:26:18',
                'updated_at' => '2020-03-10 10:26:18',
            ),
            181 => 
            array (
                'id' => 321,
                'user_id' => '3',
                'game_id' => '23',
                'answer_id' => '79',
                'created_at' => '2020-03-10 10:26:35',
                'updated_at' => '2020-03-10 10:26:35',
            ),
            182 => 
            array (
                'id' => 322,
                'user_id' => '3',
                'game_id' => '25',
                'answer_id' => '92',
                'created_at' => '2020-03-10 10:26:38',
                'updated_at' => '2020-03-10 10:26:38',
            ),
            183 => 
            array (
                'id' => 323,
                'user_id' => '3',
                'game_id' => '27',
                'answer_id' => '99',
                'created_at' => '2020-03-10 10:26:41',
                'updated_at' => '2020-03-10 10:26:41',
            ),
            184 => 
            array (
                'id' => 324,
                'user_id' => '3',
                'game_id' => '28',
                'answer_id' => '104',
                'created_at' => '2020-03-10 10:26:46',
                'updated_at' => '2020-03-10 10:26:46',
            ),
            185 => 
            array (
                'id' => 325,
                'user_id' => '3',
                'game_id' => '30',
                'answer_id' => '114',
                'created_at' => '2020-03-10 10:26:49',
                'updated_at' => '2020-03-10 10:26:49',
            ),
            186 => 
            array (
                'id' => 326,
                'user_id' => '3',
                'game_id' => '31',
                'answer_id' => '116',
                'created_at' => '2020-03-10 10:26:53',
                'updated_at' => '2020-03-10 10:26:53',
            ),
            187 => 
            array (
                'id' => 327,
                'user_id' => '3',
                'game_id' => '32',
                'answer_id' => '122',
                'created_at' => '2020-03-10 10:26:57',
                'updated_at' => '2020-03-10 10:26:57',
            ),
            188 => 
            array (
                'id' => 328,
                'user_id' => '3',
                'game_id' => '5',
                'answer_id' => '19',
                'created_at' => '2020-03-10 10:27:06',
                'updated_at' => '2020-03-10 10:27:06',
            ),
            189 => 
            array (
                'id' => 329,
                'user_id' => '3',
                'game_id' => '6',
                'answer_id' => '21',
                'created_at' => '2020-03-10 10:27:08',
                'updated_at' => '2020-03-10 10:27:08',
            ),
            190 => 
            array (
                'id' => 330,
                'user_id' => '3',
                'game_id' => '17',
                'answer_id' => '57',
                'created_at' => '2020-03-10 10:27:12',
                'updated_at' => '2020-03-10 10:27:12',
            ),
            191 => 
            array (
                'id' => 331,
                'user_id' => '3',
                'game_id' => '20',
                'answer_id' => '70',
                'created_at' => '2020-03-10 10:27:16',
                'updated_at' => '2020-03-10 10:27:16',
            ),
            192 => 
            array (
                'id' => 332,
                'user_id' => '3',
                'game_id' => '21',
                'answer_id' => '71',
                'created_at' => '2020-03-10 10:27:21',
                'updated_at' => '2020-03-10 10:27:21',
            ),
            193 => 
            array (
                'id' => 333,
                'user_id' => '3',
                'game_id' => '24',
                'answer_id' => '87',
                'created_at' => '2020-03-10 10:27:28',
                'updated_at' => '2020-03-10 10:27:28',
            ),
            194 => 
            array (
                'id' => 334,
                'user_id' => '3',
                'game_id' => '26',
                'answer_id' => '95',
                'created_at' => '2020-03-10 10:27:32',
                'updated_at' => '2020-03-10 10:27:32',
            ),
            195 => 
            array (
                'id' => 335,
                'user_id' => '3',
                'game_id' => '29',
                'answer_id' => '110',
                'created_at' => '2020-03-10 10:27:36',
                'updated_at' => '2020-03-10 10:27:36',
            ),
            196 => 
            array (
                'id' => 336,
                'user_id' => '3',
                'game_id' => '33',
                'answer_id' => '124',
                'created_at' => '2020-03-10 10:27:39',
                'updated_at' => '2020-03-10 10:27:39',
            ),
            197 => 
            array (
                'id' => 337,
                'user_id' => '3',
                'game_id' => '41',
                'answer_id' => '150',
                'created_at' => '2020-03-10 10:28:40',
                'updated_at' => '2020-03-10 10:28:40',
            ),
            198 => 
            array (
                'id' => 338,
                'user_id' => '3',
                'game_id' => '42',
                'answer_id' => '155',
                'created_at' => '2020-03-10 10:28:45',
                'updated_at' => '2020-03-10 10:28:45',
            ),
            199 => 
            array (
                'id' => 339,
                'user_id' => '3',
                'game_id' => '43',
                'answer_id' => '158',
                'created_at' => '2020-03-10 10:28:55',
                'updated_at' => '2020-03-10 10:28:55',
            ),
            200 => 
            array (
                'id' => 340,
                'user_id' => '3',
                'game_id' => '44',
                'answer_id' => '162',
                'created_at' => '2020-03-10 10:29:10',
                'updated_at' => '2020-03-10 10:29:10',
            ),
            201 => 
            array (
                'id' => 341,
                'user_id' => '3',
                'game_id' => '45',
                'answer_id' => '166',
                'created_at' => '2020-03-10 10:29:15',
                'updated_at' => '2020-03-10 10:29:15',
            ),
            202 => 
            array (
                'id' => 342,
                'user_id' => '3',
                'game_id' => '46',
                'answer_id' => '171',
                'created_at' => '2020-03-10 10:29:21',
                'updated_at' => '2020-03-10 10:29:21',
            ),
            203 => 
            array (
                'id' => 343,
                'user_id' => '3',
                'game_id' => '47',
                'answer_id' => '175',
                'created_at' => '2020-03-10 10:29:36',
                'updated_at' => '2020-03-10 10:29:36',
            ),
            204 => 
            array (
                'id' => 344,
                'user_id' => '3',
                'game_id' => '48',
                'answer_id' => '176',
                'created_at' => '2020-03-10 10:29:43',
                'updated_at' => '2020-03-10 10:29:43',
            ),
            205 => 
            array (
                'id' => 345,
                'user_id' => '3',
                'game_id' => '34',
                'answer_id' => '126',
                'created_at' => '2020-03-10 10:29:55',
                'updated_at' => '2020-03-10 10:29:55',
            ),
            206 => 
            array (
                'id' => 346,
                'user_id' => '3',
                'game_id' => '35',
                'answer_id' => '131',
                'created_at' => '2020-03-10 10:29:58',
                'updated_at' => '2020-03-10 10:29:58',
            ),
            207 => 
            array (
                'id' => 347,
                'user_id' => '3',
                'game_id' => '36',
                'answer_id' => '133',
                'created_at' => '2020-03-10 10:30:02',
                'updated_at' => '2020-03-10 10:30:02',
            ),
            208 => 
            array (
                'id' => 348,
                'user_id' => '3',
                'game_id' => '37',
                'answer_id' => '136',
                'created_at' => '2020-03-10 10:30:11',
                'updated_at' => '2020-03-10 10:30:11',
            ),
            209 => 
            array (
                'id' => 349,
                'user_id' => '3',
                'game_id' => '38',
                'answer_id' => '139',
                'created_at' => '2020-03-10 10:30:16',
                'updated_at' => '2020-03-10 10:30:16',
            ),
            210 => 
            array (
                'id' => 350,
                'user_id' => '3',
                'game_id' => '39',
                'answer_id' => '141',
                'created_at' => '2020-03-10 10:30:24',
                'updated_at' => '2020-03-10 10:30:24',
            ),
            211 => 
            array (
                'id' => 351,
                'user_id' => '3',
                'game_id' => '40',
                'answer_id' => '145',
                'created_at' => '2020-03-10 10:30:33',
                'updated_at' => '2020-03-10 10:30:33',
            ),
            212 => 
            array (
                'id' => 352,
                'user_id' => '15',
                'game_id' => '1',
                'answer_id' => '3',
                'created_at' => '2020-03-10 13:06:24',
                'updated_at' => '2020-03-15 14:33:44',
            ),
            213 => 
            array (
                'id' => 353,
                'user_id' => '15',
                'game_id' => '2',
                'answer_id' => '6',
                'created_at' => '2020-03-10 13:06:58',
                'updated_at' => '2020-03-10 13:06:58',
            ),
            214 => 
            array (
                'id' => 354,
                'user_id' => '15',
                'game_id' => '3',
                'answer_id' => '11',
                'created_at' => '2020-03-10 13:07:09',
                'updated_at' => '2020-03-10 13:07:09',
            ),
            215 => 
            array (
                'id' => 355,
                'user_id' => '15',
                'game_id' => '4',
                'answer_id' => '13',
                'created_at' => '2020-03-10 13:07:28',
                'updated_at' => '2020-03-10 13:07:28',
            ),
            216 => 
            array (
                'id' => 356,
                'user_id' => '15',
                'game_id' => '7',
                'answer_id' => '24',
                'created_at' => '2020-03-10 13:07:37',
                'updated_at' => '2020-03-10 13:07:37',
            ),
            217 => 
            array (
                'id' => 357,
                'user_id' => '15',
                'game_id' => '8',
                'answer_id' => '27',
                'created_at' => '2020-03-10 13:07:45',
                'updated_at' => '2020-03-10 13:07:45',
            ),
            218 => 
            array (
                'id' => 358,
                'user_id' => '15',
                'game_id' => '9',
                'answer_id' => '30',
                'created_at' => '2020-03-10 13:08:02',
                'updated_at' => '2020-03-10 13:08:02',
            ),
            219 => 
            array (
                'id' => 359,
                'user_id' => '15',
                'game_id' => '10',
                'answer_id' => '33',
                'created_at' => '2020-03-10 13:08:07',
                'updated_at' => '2020-03-10 13:08:07',
            ),
            220 => 
            array (
                'id' => 360,
                'user_id' => '15',
                'game_id' => '11',
                'answer_id' => '38',
                'created_at' => '2020-03-10 13:08:25',
                'updated_at' => '2020-03-10 13:08:25',
            ),
            221 => 
            array (
                'id' => 361,
                'user_id' => '15',
                'game_id' => '13',
                'answer_id' => '41',
                'created_at' => '2020-03-10 13:08:37',
                'updated_at' => '2020-03-10 13:08:37',
            ),
            222 => 
            array (
                'id' => 362,
                'user_id' => '15',
                'game_id' => '14',
                'answer_id' => '44',
                'created_at' => '2020-03-10 13:08:47',
                'updated_at' => '2020-03-10 13:08:47',
            ),
            223 => 
            array (
                'id' => 363,
                'user_id' => '15',
                'game_id' => '15',
                'answer_id' => '51',
                'created_at' => '2020-03-10 13:09:04',
                'updated_at' => '2020-03-10 13:09:04',
            ),
            224 => 
            array (
                'id' => 364,
                'user_id' => '15',
                'game_id' => '16',
                'answer_id' => '52',
                'created_at' => '2020-03-10 13:09:11',
                'updated_at' => '2020-03-10 13:09:11',
            ),
            225 => 
            array (
                'id' => 365,
                'user_id' => '15',
                'game_id' => '18',
                'answer_id' => '61',
                'created_at' => '2020-03-10 13:09:27',
                'updated_at' => '2020-03-10 13:09:27',
            ),
            226 => 
            array (
                'id' => 366,
                'user_id' => '15',
                'game_id' => '19',
                'answer_id' => '65',
                'created_at' => '2020-03-10 13:09:54',
                'updated_at' => '2020-03-10 13:09:54',
            ),
            227 => 
            array (
                'id' => 367,
                'user_id' => '15',
                'game_id' => '22',
                'answer_id' => '75',
                'created_at' => '2020-03-10 13:09:59',
                'updated_at' => '2020-03-10 13:09:59',
            ),
            228 => 
            array (
                'id' => 368,
                'user_id' => '15',
                'game_id' => '23',
                'answer_id' => '79',
                'created_at' => '2020-03-10 13:10:04',
                'updated_at' => '2020-03-10 13:10:04',
            ),
            229 => 
            array (
                'id' => 369,
                'user_id' => '15',
                'game_id' => '25',
                'answer_id' => '92',
                'created_at' => '2020-03-10 13:10:22',
                'updated_at' => '2020-03-10 13:10:22',
            ),
            230 => 
            array (
                'id' => 370,
                'user_id' => '15',
                'game_id' => '27',
                'answer_id' => '99',
                'created_at' => '2020-03-10 13:10:30',
                'updated_at' => '2020-03-10 13:10:30',
            ),
            231 => 
            array (
                'id' => 371,
                'user_id' => '15',
                'game_id' => '28',
                'answer_id' => '104',
                'created_at' => '2020-03-10 13:10:47',
                'updated_at' => '2020-03-10 13:10:47',
            ),
            232 => 
            array (
                'id' => 372,
                'user_id' => '15',
                'game_id' => '30',
                'answer_id' => '114',
                'created_at' => '2020-03-10 13:10:51',
                'updated_at' => '2020-03-10 13:10:51',
            ),
            233 => 
            array (
                'id' => 373,
                'user_id' => '15',
                'game_id' => '31',
                'answer_id' => '116',
                'created_at' => '2020-03-10 13:11:01',
                'updated_at' => '2020-03-10 13:11:01',
            ),
            234 => 
            array (
                'id' => 374,
                'user_id' => '15',
                'game_id' => '32',
                'answer_id' => '122',
                'created_at' => '2020-03-10 13:11:11',
                'updated_at' => '2020-03-10 13:11:11',
            ),
            235 => 
            array (
                'id' => 375,
                'user_id' => '15',
                'game_id' => '5',
                'answer_id' => '19',
                'created_at' => '2020-03-10 13:11:34',
                'updated_at' => '2020-03-10 13:11:34',
            ),
            236 => 
            array (
                'id' => 376,
                'user_id' => '15',
                'game_id' => '6',
                'answer_id' => '21',
                'created_at' => '2020-03-10 13:11:40',
                'updated_at' => '2020-03-10 13:11:40',
            ),
            237 => 
            array (
                'id' => 377,
                'user_id' => '15',
                'game_id' => '17',
                'answer_id' => '57',
                'created_at' => '2020-03-10 13:12:35',
                'updated_at' => '2020-03-10 13:12:35',
            ),
            238 => 
            array (
                'id' => 378,
                'user_id' => '15',
                'game_id' => '20',
                'answer_id' => '70',
                'created_at' => '2020-03-10 13:12:42',
                'updated_at' => '2020-03-10 13:12:42',
            ),
            239 => 
            array (
                'id' => 379,
                'user_id' => '15',
                'game_id' => '21',
                'answer_id' => '71',
                'created_at' => '2020-03-10 13:13:10',
                'updated_at' => '2020-03-10 13:13:10',
            ),
            240 => 
            array (
                'id' => 380,
                'user_id' => '15',
                'game_id' => '24',
                'answer_id' => '87',
                'created_at' => '2020-03-10 13:13:23',
                'updated_at' => '2020-03-10 13:13:23',
            ),
            241 => 
            array (
                'id' => 381,
                'user_id' => '15',
                'game_id' => '26',
                'answer_id' => '95',
                'created_at' => '2020-03-10 13:13:35',
                'updated_at' => '2020-03-10 13:13:35',
            ),
            242 => 
            array (
                'id' => 382,
                'user_id' => '15',
                'game_id' => '29',
                'answer_id' => '110',
                'created_at' => '2020-03-10 13:13:40',
                'updated_at' => '2020-03-10 13:13:40',
            ),
            243 => 
            array (
                'id' => 383,
                'user_id' => '15',
                'game_id' => '33',
                'answer_id' => '124',
                'created_at' => '2020-03-10 13:13:48',
                'updated_at' => '2020-03-10 13:13:48',
            ),
            244 => 
            array (
                'id' => 384,
                'user_id' => '15',
                'game_id' => '41',
                'answer_id' => '150',
                'created_at' => '2020-03-10 13:14:14',
                'updated_at' => '2020-03-10 13:14:14',
            ),
            245 => 
            array (
                'id' => 385,
                'user_id' => '15',
                'game_id' => '42',
                'answer_id' => '155',
                'created_at' => '2020-03-10 13:14:36',
                'updated_at' => '2020-03-10 13:14:36',
            ),
            246 => 
            array (
                'id' => 386,
                'user_id' => '15',
                'game_id' => '43',
                'answer_id' => '158',
                'created_at' => '2020-03-10 13:14:42',
                'updated_at' => '2020-03-10 13:14:42',
            ),
            247 => 
            array (
                'id' => 387,
                'user_id' => '15',
                'game_id' => '44',
                'answer_id' => '162',
                'created_at' => '2020-03-10 13:15:04',
                'updated_at' => '2020-03-10 13:15:04',
            ),
            248 => 
            array (
                'id' => 388,
                'user_id' => '15',
                'game_id' => '45',
                'answer_id' => '166',
                'created_at' => '2020-03-10 13:15:16',
                'updated_at' => '2020-03-10 13:15:16',
            ),
            249 => 
            array (
                'id' => 389,
                'user_id' => '15',
                'game_id' => '46',
                'answer_id' => '171',
                'created_at' => '2020-03-10 13:15:23',
                'updated_at' => '2020-03-10 13:15:23',
            ),
            250 => 
            array (
                'id' => 390,
                'user_id' => '15',
                'game_id' => '47',
                'answer_id' => '175',
                'created_at' => '2020-03-10 13:15:40',
                'updated_at' => '2020-03-10 13:15:40',
            ),
            251 => 
            array (
                'id' => 391,
                'user_id' => '15',
                'game_id' => '48',
                'answer_id' => '176',
                'created_at' => '2020-03-10 13:15:49',
                'updated_at' => '2020-03-10 13:15:49',
            ),
            252 => 
            array (
                'id' => 392,
                'user_id' => '15',
                'game_id' => '49',
                'answer_id' => '183',
                'created_at' => '2020-03-10 13:16:10',
                'updated_at' => '2020-03-10 13:16:10',
            ),
            253 => 
            array (
                'id' => 393,
                'user_id' => '15',
                'game_id' => '50',
                'answer_id' => '184',
                'created_at' => '2020-03-10 13:16:55',
                'updated_at' => '2020-03-10 13:16:55',
            ),
            254 => 
            array (
                'id' => 394,
                'user_id' => '15',
                'game_id' => '34',
                'answer_id' => '126',
                'created_at' => '2020-03-10 13:17:30',
                'updated_at' => '2020-03-10 13:17:30',
            ),
            255 => 
            array (
                'id' => 395,
                'user_id' => '15',
                'game_id' => '35',
                'answer_id' => '131',
                'created_at' => '2020-03-10 13:17:34',
                'updated_at' => '2020-03-10 13:17:34',
            ),
            256 => 
            array (
                'id' => 396,
                'user_id' => '15',
                'game_id' => '36',
                'answer_id' => '133',
                'created_at' => '2020-03-10 13:17:38',
                'updated_at' => '2020-03-10 13:17:38',
            ),
            257 => 
            array (
                'id' => 397,
                'user_id' => '15',
                'game_id' => '37',
                'answer_id' => '136',
                'created_at' => '2020-03-10 13:17:57',
                'updated_at' => '2020-03-10 13:17:57',
            ),
            258 => 
            array (
                'id' => 398,
                'user_id' => '15',
                'game_id' => '38',
                'answer_id' => '139',
                'created_at' => '2020-03-10 13:18:08',
                'updated_at' => '2020-03-10 13:18:08',
            ),
            259 => 
            array (
                'id' => 399,
                'user_id' => '15',
                'game_id' => '39',
                'answer_id' => '141',
                'created_at' => '2020-03-10 13:18:32',
                'updated_at' => '2020-03-10 13:18:32',
            ),
            260 => 
            array (
                'id' => 400,
                'user_id' => '15',
                'game_id' => '40',
                'answer_id' => '145',
                'created_at' => '2020-03-10 13:19:04',
                'updated_at' => '2020-03-10 13:19:04',
            ),
            261 => 
            array (
                'id' => 401,
                'user_id' => '2',
                'game_id' => '49',
                'answer_id' => '183',
                'created_at' => '2020-03-10 20:09:41',
                'updated_at' => '2020-03-10 20:09:41',
            ),
            262 => 
            array (
                'id' => 402,
                'user_id' => '2',
                'game_id' => '50',
                'answer_id' => '184',
                'created_at' => '2020-03-10 20:10:09',
                'updated_at' => '2020-03-10 20:10:09',
            ),
            263 => 
            array (
                'id' => 403,
                'user_id' => '2',
                'game_id' => '51',
                'answer_id' => '191',
                'created_at' => '2020-03-10 20:10:20',
                'updated_at' => '2020-03-10 20:10:20',
            ),
            264 => 
            array (
                'id' => 404,
                'user_id' => '2',
                'game_id' => '52',
                'answer_id' => '193',
                'created_at' => '2020-03-10 20:10:54',
                'updated_at' => '2020-03-10 20:10:54',
            ),
            265 => 
            array (
                'id' => 405,
                'user_id' => '1',
                'game_id' => '41',
                'answer_id' => '150',
                'created_at' => '2020-03-11 07:43:31',
                'updated_at' => '2020-03-11 07:43:31',
            ),
            266 => 
            array (
                'id' => 406,
                'user_id' => '1',
                'game_id' => '42',
                'answer_id' => '155',
                'created_at' => '2020-03-11 07:43:35',
                'updated_at' => '2020-03-11 07:43:35',
            ),
            267 => 
            array (
                'id' => 407,
                'user_id' => '1',
                'game_id' => '43',
                'answer_id' => '158',
                'created_at' => '2020-03-11 07:43:43',
                'updated_at' => '2020-03-11 07:43:43',
            ),
            268 => 
            array (
                'id' => 408,
                'user_id' => '1',
                'game_id' => '44',
                'answer_id' => '162',
                'created_at' => '2020-03-11 07:43:49',
                'updated_at' => '2020-03-11 07:43:49',
            ),
            269 => 
            array (
                'id' => 409,
                'user_id' => '1',
                'game_id' => '45',
                'answer_id' => '166',
                'created_at' => '2020-03-11 07:43:55',
                'updated_at' => '2020-03-11 07:43:55',
            ),
            270 => 
            array (
                'id' => 410,
                'user_id' => '1',
                'game_id' => '46',
                'answer_id' => '171',
                'created_at' => '2020-03-11 07:44:01',
                'updated_at' => '2020-03-11 07:44:01',
            ),
            271 => 
            array (
                'id' => 411,
                'user_id' => '1',
                'game_id' => '53',
                'answer_id' => '198',
                'created_at' => '2020-03-12 09:28:15',
                'updated_at' => '2020-03-12 09:28:15',
            ),
            272 => 
            array (
                'id' => 412,
                'user_id' => '1',
                'game_id' => '54',
                'answer_id' => '201',
                'created_at' => '2020-03-12 09:28:48',
                'updated_at' => '2020-03-12 09:28:48',
            ),
            273 => 
            array (
                'id' => 413,
                'user_id' => '1',
                'game_id' => '56',
                'answer_id' => '211',
                'created_at' => '2020-03-12 09:28:53',
                'updated_at' => '2020-03-12 09:28:53',
            ),
            274 => 
            array (
                'id' => 414,
                'user_id' => '1',
                'game_id' => '57',
                'answer_id' => '214',
                'created_at' => '2020-03-12 09:28:59',
                'updated_at' => '2020-03-12 09:28:59',
            ),
            275 => 
            array (
                'id' => 415,
                'user_id' => '1',
                'game_id' => '58',
                'answer_id' => '218',
                'created_at' => '2020-03-12 09:29:03',
                'updated_at' => '2020-03-12 09:29:03',
            ),
            276 => 
            array (
                'id' => 416,
                'user_id' => '1',
                'game_id' => '59',
                'answer_id' => '222',
                'created_at' => '2020-03-12 09:29:07',
                'updated_at' => '2020-03-12 09:29:07',
            ),
            277 => 
            array (
                'id' => 417,
                'user_id' => '1',
                'game_id' => '47',
                'answer_id' => '175',
                'created_at' => '2020-03-12 09:30:43',
                'updated_at' => '2020-03-12 09:30:43',
            ),
            278 => 
            array (
                'id' => 418,
                'user_id' => '1',
                'game_id' => '48',
                'answer_id' => '176',
                'created_at' => '2020-03-12 09:30:50',
                'updated_at' => '2020-03-12 09:30:50',
            ),
            279 => 
            array (
                'id' => 419,
                'user_id' => '1',
                'game_id' => '49',
                'answer_id' => '183',
                'created_at' => '2020-03-12 09:30:54',
                'updated_at' => '2020-03-12 09:30:54',
            ),
            280 => 
            array (
                'id' => 420,
                'user_id' => '1',
                'game_id' => '50',
                'answer_id' => '184',
                'created_at' => '2020-03-12 09:30:57',
                'updated_at' => '2020-03-12 09:30:57',
            ),
            281 => 
            array (
                'id' => 421,
                'user_id' => '1',
                'game_id' => '51',
                'answer_id' => '191',
                'created_at' => '2020-03-12 09:31:03',
                'updated_at' => '2020-03-12 09:31:03',
            ),
            282 => 
            array (
                'id' => 422,
                'user_id' => '1',
                'game_id' => '52',
                'answer_id' => '193',
                'created_at' => '2020-03-12 09:31:09',
                'updated_at' => '2020-03-12 09:31:09',
            ),
            283 => 
            array (
                'id' => 423,
                'user_id' => '1',
                'game_id' => '55',
                'answer_id' => '205',
                'created_at' => '2020-03-12 09:31:29',
                'updated_at' => '2020-03-12 09:31:29',
            ),
            284 => 
            array (
                'id' => 424,
                'user_id' => '2',
                'game_id' => '53',
                'answer_id' => '198',
                'created_at' => '2020-03-12 21:24:38',
                'updated_at' => '2020-03-12 21:24:38',
            ),
            285 => 
            array (
                'id' => 425,
                'user_id' => '2',
                'game_id' => '54',
                'answer_id' => '201',
                'created_at' => '2020-03-12 21:24:41',
                'updated_at' => '2020-03-12 21:24:41',
            ),
            286 => 
            array (
                'id' => 426,
                'user_id' => '2',
                'game_id' => '56',
                'answer_id' => '211',
                'created_at' => '2020-03-12 21:25:31',
                'updated_at' => '2020-03-12 21:25:31',
            ),
            287 => 
            array (
                'id' => 427,
                'user_id' => '2',
                'game_id' => '57',
                'answer_id' => '214',
                'created_at' => '2020-03-12 21:26:21',
                'updated_at' => '2020-03-12 21:26:21',
            ),
            288 => 
            array (
                'id' => 428,
                'user_id' => '2',
                'game_id' => '58',
                'answer_id' => '218',
                'created_at' => '2020-03-12 21:26:28',
                'updated_at' => '2020-03-12 21:26:28',
            ),
            289 => 
            array (
                'id' => 429,
                'user_id' => '2',
                'game_id' => '59',
                'answer_id' => '222',
                'created_at' => '2020-03-12 21:26:34',
                'updated_at' => '2020-03-12 21:26:34',
            ),
            290 => 
            array (
                'id' => 430,
                'user_id' => '2',
                'game_id' => '62',
                'answer_id' => '235',
                'created_at' => '2020-03-12 21:26:59',
                'updated_at' => '2020-03-12 21:26:59',
            ),
            291 => 
            array (
                'id' => 431,
                'user_id' => '2',
                'game_id' => '63',
                'answer_id' => '238',
                'created_at' => '2020-03-14 09:12:42',
                'updated_at' => '2020-03-14 09:12:42',
            ),
            292 => 
            array (
                'id' => 432,
                'user_id' => '2',
                'game_id' => '55',
                'answer_id' => '205',
                'created_at' => '2020-03-14 09:13:42',
                'updated_at' => '2020-03-14 09:13:42',
            ),
            293 => 
            array (
                'id' => 433,
                'user_id' => '2',
                'game_id' => '60',
                'answer_id' => '225',
                'created_at' => '2020-03-14 09:14:43',
                'updated_at' => '2020-03-14 09:14:43',
            ),
            294 => 
            array (
                'id' => 434,
                'user_id' => '2',
                'game_id' => '61',
                'answer_id' => '230',
                'created_at' => '2020-03-14 09:14:49',
                'updated_at' => '2020-03-14 09:14:49',
            ),
        ));
        
        
    }
}