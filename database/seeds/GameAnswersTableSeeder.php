<?php

use Illuminate\Database\Seeder;

class GameAnswersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('game_answers')->delete();
        
        \DB::table('game_answers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'answer' => 'авто',
                'image' => 'car.png',
                'game_id' => '1',
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-15 14:37:45',
            ),
            1 => 
            array (
                'id' => 2,
                'answer' => 'фургон',
                'image' => 'van.png',
                'game_id' => '1',
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-15 14:38:25',
            ),
            2 => 
            array (
                'id' => 3,
                'answer' => 'самолёт',
                'image' => 'airplane.png',
                'game_id' => '1',
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-15 13:52:29',
            ),
            3 => 
            array (
                'id' => 4,
                'answer' => 'грузовик',
                'image' => 'truck.png',
                'game_id' => '1',
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-15 13:52:29',
            ),
            4 => 
            array (
                'id' => 5,
                'answer' => NULL,
                'image' => 'orange_pencil.svg',
                'game_id' => '2',
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-04 10:43:59',
            ),
            5 => 
            array (
                'id' => 6,
                'answer' => NULL,
                'image' => 'green_pencil.svg',
                'game_id' => '2',
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-04 10:43:59',
            ),
            6 => 
            array (
                'id' => 7,
                'answer' => NULL,
                'image' => 'blue_pencil.svg',
                'game_id' => '2',
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-04 10:43:59',
            ),
            7 => 
            array (
                'id' => 8,
                'answer' => NULL,
                'image' => 'red_pencil.svg',
                'game_id' => '2',
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-04 10:43:59',
            ),
            8 => 
            array (
                'id' => 9,
                'answer' => 'гусеница',
                'image' => NULL,
                'game_id' => '3',
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-15 14:38:49',
            ),
            9 => 
            array (
                'id' => 10,
                'answer' => 'червяк',
                'image' => NULL,
                'game_id' => '3',
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-04 10:43:59',
            ),
            10 => 
            array (
                'id' => 11,
                'answer' => 'одинаковые',
                'image' => NULL,
                'game_id' => '3',
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-04 10:43:59',
            ),
            11 => 
            array (
                'id' => 12,
                'answer' => NULL,
                'image' => 'red_square_box.svg',
                'game_id' => '4',
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-04 10:43:59',
            ),
            12 => 
            array (
                'id' => 13,
                'answer' => NULL,
                'image' => 'red_circle_big_box.svg',
                'game_id' => '4',
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-04 10:43:59',
            ),
            13 => 
            array (
                'id' => 14,
                'answer' => NULL,
                'image' => 'red_circle_small_box.svg',
                'game_id' => '4',
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-04 10:43:59',
            ),
            14 => 
            array (
                'id' => 15,
                'answer' => NULL,
                'image' => 'green_circle_box.svg',
                'game_id' => '4',
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-04 10:43:59',
            ),
            15 => 
            array (
                'id' => 16,
                'answer' => NULL,
                'image' => '56f12bc7444151539e130270.png',
                'game_id' => '5',
                'created_at' => '2020-03-05 16:05:33',
                'updated_at' => '2020-03-05 16:05:33',
            ),
            16 => 
            array (
                'id' => 17,
                'answer' => NULL,
                'image' => '1200px-Kvadrato.svg.png',
                'game_id' => '5',
                'created_at' => '2020-03-05 16:05:33',
                'updated_at' => '2020-03-05 16:05:33',
            ),
            17 => 
            array (
                'id' => 18,
                'answer' => NULL,
                'image' => '28436-4-triangle-clipart.png',
                'game_id' => '5',
                'created_at' => '2020-03-05 16:05:33',
                'updated_at' => '2020-03-05 16:05:33',
            ),
            18 => 
            array (
                'id' => 19,
                'answer' => NULL,
                'image' => 'Number 2 PNG images free download_PNG14925.png',
                'game_id' => '5',
                'created_at' => '2020-03-05 16:05:33',
                'updated_at' => '2020-03-05 16:05:33',
            ),
            19 => 
            array (
                'id' => 20,
                'answer' => NULL,
                'image' => '19-orange-png-image-download-thumb.png',
                'game_id' => '6',
                'created_at' => '2020-03-05 17:46:52',
                'updated_at' => '2020-03-05 17:46:52',
            ),
            20 => 
            array (
                'id' => 21,
                'answer' => NULL,
                'image' => '437-4376544_bush-clipart-vegetable-plant-.png',
                'game_id' => '6',
                'created_at' => '2020-03-05 17:46:52',
                'updated_at' => '2020-03-05 17:46:52',
            ),
            21 => 
            array (
                'id' => 22,
                'answer' => NULL,
                'image' => 'unnamed.png',
                'game_id' => '6',
                'created_at' => '2020-03-05 17:46:52',
                'updated_at' => '2020-03-05 17:46:52',
            ),
            22 => 
            array (
                'id' => 23,
                'answer' => NULL,
                'image' => '5b3329d43efc1792543ab088265ec68c.png',
                'game_id' => '6',
                'created_at' => '2020-03-05 17:46:52',
                'updated_at' => '2020-03-05 17:46:52',
            ),
            23 => 
            array (
                'id' => 24,
                'answer' => 'замок',
                'image' => 'padlock_PNG9416.png',
                'game_id' => '7',
                'created_at' => '2020-03-05 18:05:13',
                'updated_at' => '2020-03-05 18:05:13',
            ),
            24 => 
            array (
                'id' => 25,
                'answer' => 'собака',
                'image' => '5ebb80974b17bea40d3ff48d3fbad7c8.png',
                'game_id' => '7',
                'created_at' => '2020-03-05 18:05:13',
                'updated_at' => '2020-03-05 18:05:13',
            ),
            25 => 
            array (
                'id' => 26,
                'answer' => 'хозяин',
                'image' => 'f1c331da8706175aba5d27f75f28a103.png',
                'game_id' => '7',
                'created_at' => '2020-03-05 18:05:13',
                'updated_at' => '2020-03-05 18:05:13',
            ),
            26 => 
            array (
                'id' => 27,
                'answer' => 'Петух',
                'image' => 'download.jpg',
                'game_id' => '8',
                'created_at' => '2020-03-05 18:41:16',
                'updated_at' => '2020-03-05 18:41:16',
            ),
            27 => 
            array (
                'id' => 28,
                'answer' => 'Дед',
                'image' => '84a8cafaea7cc9fa614efda579717ecf.png_wh860.png',
                'game_id' => '8',
                'created_at' => '2020-03-05 18:41:16',
                'updated_at' => '2020-03-05 18:41:16',
            ),
            28 => 
            array (
                'id' => 29,
                'answer' => 'Будильник',
                'image' => 'alarm-clocks-mondaine-watch-ltd-alarm-clock.jpg',
                'game_id' => '8',
                'created_at' => '2020-03-05 18:41:16',
                'updated_at' => '2020-03-05 18:41:16',
            ),
            29 => 
            array (
                'id' => 30,
                'answer' => NULL,
                'image' => 'cinderella-disney-princess-crown-tiara-cartoon-princess.jpg',
                'game_id' => '9',
                'created_at' => '2020-03-05 18:47:38',
                'updated_at' => '2020-03-05 18:47:38',
            ),
            30 => 
            array (
                'id' => 31,
                'answer' => NULL,
                'image' => 'snow-white-seven-dwarfs-coloring-book-fairy-tale-drawing-snow-white-and-the-seven-dwarfs.jpg',
                'game_id' => '9',
                'created_at' => '2020-03-05 18:47:38',
                'updated_at' => '2020-03-05 18:47:38',
            ),
            31 => 
            array (
                'id' => 32,
                'answer' => NULL,
                'image' => 'ariel-the-little-mermaid-ursula-character-disney-princess-little-mermaid.jpg',
                'game_id' => '9',
                'created_at' => '2020-03-05 18:47:38',
                'updated_at' => '2020-03-05 18:47:38',
            ),
            32 => 
            array (
                'id' => 33,
                'answer' => NULL,
                'image' => 'fixik_simka.png',
                'game_id' => '10',
                'created_at' => '2020-03-05 18:57:08',
                'updated_at' => '2020-03-05 18:57:08',
            ),
            33 => 
            array (
                'id' => 34,
                'answer' => NULL,
                'image' => 'nolik.png',
                'game_id' => '10',
                'created_at' => '2020-03-05 18:57:08',
                'updated_at' => '2020-03-05 18:57:08',
            ),
            34 => 
            array (
                'id' => 35,
                'answer' => NULL,
                'image' => 'eefececa81c5a29dd2161667d4ae134b.png',
                'game_id' => '10',
                'created_at' => '2020-03-05 18:57:08',
                'updated_at' => '2020-03-05 18:57:08',
            ),
            35 => 
            array (
                'id' => 36,
                'answer' => 'петух',
                'image' => NULL,
                'game_id' => '11',
                'created_at' => '2020-03-05 19:12:31',
                'updated_at' => '2020-03-05 19:12:31',
            ),
            36 => 
            array (
                'id' => 37,
                'answer' => 'осел',
                'image' => NULL,
                'game_id' => '11',
                'created_at' => '2020-03-05 19:12:31',
                'updated_at' => '2020-03-05 19:12:31',
            ),
            37 => 
            array (
                'id' => 38,
                'answer' => 'козел',
                'image' => NULL,
                'game_id' => '11',
                'created_at' => '2020-03-05 19:12:31',
                'updated_at' => '2020-03-05 19:12:31',
            ),
            38 => 
            array (
                'id' => 40,
                'answer' => '3',
                'image' => NULL,
                'game_id' => '13',
                'created_at' => '2020-03-05 19:14:40',
                'updated_at' => '2020-03-05 19:14:40',
            ),
            39 => 
            array (
                'id' => 41,
                'answer' => '2',
                'image' => NULL,
                'game_id' => '13',
                'created_at' => '2020-03-05 19:14:41',
                'updated_at' => '2020-03-05 19:14:41',
            ),
            40 => 
            array (
                'id' => 42,
                'answer' => '1',
                'image' => NULL,
                'game_id' => '13',
                'created_at' => '2020-03-05 19:14:41',
                'updated_at' => '2020-03-05 19:14:41',
            ),
            41 => 
            array (
                'id' => 44,
                'answer' => '8',
                'image' => NULL,
                'game_id' => '14',
                'created_at' => '2020-03-05 19:16:58',
                'updated_at' => '2020-03-05 19:16:58',
            ),
            42 => 
            array (
                'id' => 45,
                'answer' => '9',
                'image' => NULL,
                'game_id' => '14',
                'created_at' => '2020-03-05 19:16:58',
                'updated_at' => '2020-03-05 19:16:58',
            ),
            43 => 
            array (
                'id' => 46,
                'answer' => '7',
                'image' => NULL,
                'game_id' => '14',
                'created_at' => '2020-03-05 19:16:58',
                'updated_at' => '2020-03-05 19:16:58',
            ),
            44 => 
            array (
                'id' => 47,
                'answer' => '6',
                'image' => NULL,
                'game_id' => '14',
                'created_at' => '2020-03-05 19:16:58',
                'updated_at' => '2020-03-05 19:16:58',
            ),
            45 => 
            array (
                'id' => 48,
                'answer' => 'В доме',
                'image' => NULL,
                'game_id' => '15',
                'created_at' => '2020-03-05 19:19:10',
                'updated_at' => '2020-03-05 19:19:10',
            ),
            46 => 
            array (
                'id' => 49,
                'answer' => 'В норах',
                'image' => NULL,
                'game_id' => '15',
                'created_at' => '2020-03-05 19:19:10',
                'updated_at' => '2020-03-05 19:19:10',
            ),
            47 => 
            array (
                'id' => 50,
                'answer' => 'В гнездах',
                'image' => NULL,
                'game_id' => '15',
                'created_at' => '2020-03-05 19:19:10',
                'updated_at' => '2020-03-05 19:19:10',
            ),
            48 => 
            array (
                'id' => 51,
                'answer' => 'В берлогах',
                'image' => NULL,
                'game_id' => '15',
                'created_at' => '2020-03-05 19:19:10',
                'updated_at' => '2020-03-05 19:19:10',
            ),
            49 => 
            array (
                'id' => 52,
                'answer' => NULL,
                'image' => '55300b8f746ea8be04a14bbf8943b015.png',
                'game_id' => '16',
                'created_at' => '2020-03-05 19:36:21',
                'updated_at' => '2020-03-05 19:36:21',
            ),
            50 => 
            array (
                'id' => 53,
                'answer' => NULL,
                'image' => 'flying-granny.png',
                'game_id' => '16',
                'created_at' => '2020-03-05 19:36:21',
                'updated_at' => '2020-03-05 19:36:21',
            ),
            51 => 
            array (
                'id' => 54,
                'answer' => NULL,
                'image' => 'm5a9ff4c3.png',
                'game_id' => '16',
                'created_at' => '2020-03-05 19:36:21',
                'updated_at' => '2020-03-05 19:36:21',
            ),
            52 => 
            array (
                'id' => 55,
                'answer' => 'Синий',
                'image' => NULL,
                'game_id' => '17',
                'created_at' => '2020-03-05 19:46:09',
                'updated_at' => '2020-03-05 19:46:09',
            ),
            53 => 
            array (
                'id' => 56,
                'answer' => 'Красный',
                'image' => NULL,
                'game_id' => '17',
                'created_at' => '2020-03-05 19:46:09',
                'updated_at' => '2020-03-05 19:46:09',
            ),
            54 => 
            array (
                'id' => 57,
                'answer' => 'Розовый',
                'image' => NULL,
                'game_id' => '17',
                'created_at' => '2020-03-05 19:46:09',
                'updated_at' => '2020-03-05 19:46:09',
            ),
            55 => 
            array (
                'id' => 58,
                'answer' => 'Зеленый',
                'image' => NULL,
                'game_id' => '17',
                'created_at' => '2020-03-05 19:46:09',
                'updated_at' => '2020-03-05 19:46:09',
            ),
            56 => 
            array (
                'id' => 59,
                'answer' => 'Танцор',
                'image' => NULL,
                'game_id' => '18',
                'created_at' => '2020-03-05 19:48:31',
                'updated_at' => '2020-03-05 19:48:31',
            ),
            57 => 
            array (
                'id' => 60,
                'answer' => 'Актер',
                'image' => NULL,
                'game_id' => '18',
                'created_at' => '2020-03-05 19:48:31',
                'updated_at' => '2020-03-05 19:48:31',
            ),
            58 => 
            array (
                'id' => 61,
                'answer' => 'Певец',
                'image' => NULL,
                'game_id' => '18',
                'created_at' => '2020-03-05 19:48:31',
                'updated_at' => '2020-03-05 19:48:31',
            ),
            59 => 
            array (
                'id' => 62,
                'answer' => 'Художник',
                'image' => NULL,
                'game_id' => '18',
                'created_at' => '2020-03-05 19:48:31',
                'updated_at' => '2020-03-05 19:48:31',
            ),
            60 => 
            array (
                'id' => 63,
                'answer' => 'Флора',
                'image' => NULL,
                'game_id' => '19',
                'created_at' => '2020-03-05 19:51:25',
                'updated_at' => '2020-03-05 19:51:25',
            ),
            61 => 
            array (
                'id' => 64,
                'answer' => 'Стелла',
                'image' => NULL,
                'game_id' => '19',
                'created_at' => '2020-03-05 19:51:25',
                'updated_at' => '2020-03-05 19:51:25',
            ),
            62 => 
            array (
                'id' => 65,
                'answer' => 'Блум',
                'image' => NULL,
                'game_id' => '19',
                'created_at' => '2020-03-05 19:51:25',
                'updated_at' => '2020-03-05 19:51:25',
            ),
            63 => 
            array (
                'id' => 66,
                'answer' => 'Текна',
                'image' => NULL,
                'game_id' => '19',
                'created_at' => '2020-03-05 19:51:25',
                'updated_at' => '2020-03-05 19:51:25',
            ),
            64 => 
            array (
                'id' => 67,
                'answer' => 'Карандаш',
                'image' => NULL,
                'game_id' => '20',
                'created_at' => '2020-03-05 19:53:49',
                'updated_at' => '2020-03-05 19:53:49',
            ),
            65 => 
            array (
                'id' => 68,
                'answer' => 'Фломастер',
                'image' => NULL,
                'game_id' => '20',
                'created_at' => '2020-03-05 19:53:49',
                'updated_at' => '2020-03-05 19:53:49',
            ),
            66 => 
            array (
                'id' => 69,
                'answer' => 'Маркер',
                'image' => NULL,
                'game_id' => '20',
                'created_at' => '2020-03-05 19:53:49',
                'updated_at' => '2020-03-05 19:53:49',
            ),
            67 => 
            array (
                'id' => 70,
                'answer' => 'Резинка',
                'image' => NULL,
                'game_id' => '20',
                'created_at' => '2020-03-05 19:53:49',
                'updated_at' => '2020-03-05 19:53:49',
            ),
            68 => 
            array (
                'id' => 71,
                'answer' => 'Молоток',
                'image' => NULL,
                'game_id' => '21',
                'created_at' => '2020-03-05 19:55:44',
                'updated_at' => '2020-03-05 19:55:44',
            ),
            69 => 
            array (
                'id' => 72,
                'answer' => 'Ножницы',
                'image' => NULL,
                'game_id' => '21',
                'created_at' => '2020-03-05 19:55:44',
                'updated_at' => '2020-03-05 19:55:44',
            ),
            70 => 
            array (
                'id' => 73,
                'answer' => 'Пила',
                'image' => NULL,
                'game_id' => '21',
                'created_at' => '2020-03-05 19:55:44',
                'updated_at' => '2020-03-05 19:55:44',
            ),
            71 => 
            array (
                'id' => 74,
                'answer' => 'Нож',
                'image' => NULL,
                'game_id' => '21',
                'created_at' => '2020-03-05 19:55:44',
                'updated_at' => '2020-03-05 19:55:44',
            ),
            72 => 
            array (
                'id' => 75,
                'answer' => 'Зимой',
                'image' => NULL,
                'game_id' => '22',
                'created_at' => '2020-03-06 11:09:01',
                'updated_at' => '2020-03-06 11:09:01',
            ),
            73 => 
            array (
                'id' => 76,
                'answer' => 'Летом',
                'image' => NULL,
                'game_id' => '22',
                'created_at' => '2020-03-06 11:09:01',
                'updated_at' => '2020-03-06 11:09:01',
            ),
            74 => 
            array (
                'id' => 77,
                'answer' => 'Осенью',
                'image' => NULL,
                'game_id' => '22',
                'created_at' => '2020-03-06 11:09:01',
                'updated_at' => '2020-03-06 11:09:01',
            ),
            75 => 
            array (
                'id' => 78,
                'answer' => 'Весной',
                'image' => NULL,
                'game_id' => '22',
                'created_at' => '2020-03-06 11:09:01',
                'updated_at' => '2020-03-06 11:09:01',
            ),
            76 => 
            array (
                'id' => 79,
                'answer' => '1',
                'image' => NULL,
                'game_id' => '23',
                'created_at' => '2020-03-06 11:14:02',
                'updated_at' => '2020-03-06 11:14:02',
            ),
            77 => 
            array (
                'id' => 80,
                'answer' => '2',
                'image' => NULL,
                'game_id' => '23',
                'created_at' => '2020-03-06 11:14:02',
                'updated_at' => '2020-03-06 11:14:02',
            ),
            78 => 
            array (
                'id' => 81,
                'answer' => '3',
                'image' => NULL,
                'game_id' => '23',
                'created_at' => '2020-03-06 11:14:02',
                'updated_at' => '2020-03-06 11:14:02',
            ),
            79 => 
            array (
                'id' => 82,
                'answer' => '5',
                'image' => NULL,
                'game_id' => '23',
                'created_at' => '2020-03-06 11:14:02',
                'updated_at' => '2020-03-06 11:14:02',
            ),
            80 => 
            array (
                'id' => 87,
                'answer' => 'Отпустил в море',
                'image' => NULL,
                'game_id' => '24',
                'created_at' => '2020-03-06 11:57:56',
                'updated_at' => '2020-03-06 11:57:56',
            ),
            81 => 
            array (
                'id' => 88,
                'answer' => 'Отнес старухе',
                'image' => NULL,
                'game_id' => '24',
                'created_at' => '2020-03-06 11:57:56',
                'updated_at' => '2020-03-06 11:57:56',
            ),
            82 => 
            array (
                'id' => 89,
                'answer' => 'Сварил суп',
                'image' => NULL,
                'game_id' => '24',
                'created_at' => '2020-03-06 11:57:56',
                'updated_at' => '2020-03-06 11:57:56',
            ),
            83 => 
            array (
                'id' => 90,
                'answer' => 'Отнес на базар',
                'image' => NULL,
                'game_id' => '24',
                'created_at' => '2020-03-06 11:57:56',
                'updated_at' => '2020-03-06 11:57:56',
            ),
            84 => 
            array (
                'id' => 91,
                'answer' => 'Мандарин',
                'image' => NULL,
                'game_id' => '25',
                'created_at' => '2020-03-06 12:04:05',
                'updated_at' => '2020-03-06 12:04:05',
            ),
            85 => 
            array (
                'id' => 92,
                'answer' => 'Бусы',
                'image' => NULL,
                'game_id' => '25',
                'created_at' => '2020-03-06 12:04:05',
                'updated_at' => '2020-03-06 12:04:05',
            ),
            86 => 
            array (
                'id' => 93,
                'answer' => 'Конфетку',
                'image' => NULL,
                'game_id' => '25',
                'created_at' => '2020-03-06 12:04:05',
                'updated_at' => '2020-03-06 12:04:05',
            ),
            87 => 
            array (
                'id' => 94,
                'answer' => 'Серьги',
                'image' => NULL,
                'game_id' => '25',
                'created_at' => '2020-03-06 12:04:05',
                'updated_at' => '2020-03-06 12:04:05',
            ),
            88 => 
            array (
                'id' => 95,
                'answer' => NULL,
                'image' => 'pasanochka.png',
                'game_id' => '26',
                'created_at' => '2020-03-06 12:23:57',
                'updated_at' => '2020-03-06 12:23:57',
            ),
            89 => 
            array (
                'id' => 96,
                'answer' => NULL,
                'image' => '3753d6ad5a3ef014318025beb3dfec94.png',
                'game_id' => '26',
                'created_at' => '2020-03-06 12:23:57',
                'updated_at' => '2020-03-06 12:23:57',
            ),
            90 => 
            array (
                'id' => 97,
                'answer' => NULL,
                'image' => 'w256h2561385311558Mittens.png',
                'game_id' => '26',
                'created_at' => '2020-03-06 12:23:57',
                'updated_at' => '2020-03-06 12:23:57',
            ),
            91 => 
            array (
                'id' => 98,
                'answer' => NULL,
                'image' => '317169711_w640_h640_shapka-ushanka-kamysh.webp',
                'game_id' => '26',
                'created_at' => '2020-03-06 12:23:57',
                'updated_at' => '2020-03-06 12:23:57',
            ),
            92 => 
            array (
                'id' => 99,
                'answer' => NULL,
                'image' => '98663275_4.png',
                'game_id' => '27',
                'created_at' => '2020-03-06 12:39:50',
                'updated_at' => '2020-03-06 12:39:50',
            ),
            93 => 
            array (
                'id' => 100,
                'answer' => NULL,
                'image' => 'kartinki-loshadey-dlya-srisovki-2.png',
                'game_id' => '27',
                'created_at' => '2020-03-06 12:39:50',
                'updated_at' => '2020-03-06 12:39:50',
            ),
            94 => 
            array (
                'id' => 101,
                'answer' => NULL,
                'image' => 'c5c75075b0b8d40a53358f9aeff3715f.png',
                'game_id' => '27',
                'created_at' => '2020-03-06 12:39:50',
                'updated_at' => '2020-03-06 12:39:50',
            ),
            95 => 
            array (
                'id' => 102,
                'answer' => NULL,
                'image' => 'download.png',
                'game_id' => '27',
                'created_at' => '2020-03-06 12:39:50',
                'updated_at' => '2020-03-06 12:39:50',
            ),
            96 => 
            array (
                'id' => 103,
                'answer' => NULL,
                'image' => '151705286818236292.png',
                'game_id' => '28',
                'created_at' => '2020-03-06 12:47:24',
                'updated_at' => '2020-03-06 12:47:24',
            ),
            97 => 
            array (
                'id' => 104,
                'answer' => NULL,
                'image' => 'b3f90b9c7814f1c35f9df9777168ab38.png',
                'game_id' => '28',
                'created_at' => '2020-03-06 12:47:24',
                'updated_at' => '2020-03-06 12:47:24',
            ),
            98 => 
            array (
                'id' => 105,
                'answer' => NULL,
                'image' => 'змея-рисунок-png-1.png',
                'game_id' => '28',
                'created_at' => '2020-03-06 12:47:24',
                'updated_at' => '2020-03-06 12:47:24',
            ),
            99 => 
            array (
                'id' => 106,
                'answer' => NULL,
                'image' => '57c6d5f36c702156e0b3bef4.png',
                'game_id' => '28',
                'created_at' => '2020-03-06 12:47:24',
                'updated_at' => '2020-03-06 12:47:24',
            ),
            100 => 
            array (
                'id' => 107,
                'answer' => NULL,
                'image' => 'торт-с-днем-рождения-рисунок-png-2.png',
                'game_id' => '29',
                'created_at' => '2020-03-06 12:55:52',
                'updated_at' => '2020-03-06 12:55:52',
            ),
            101 => 
            array (
                'id' => 108,
                'answer' => NULL,
                'image' => '4780b566fa72b70802d6f11515965e2a.png',
                'game_id' => '29',
                'created_at' => '2020-03-06 12:55:52',
                'updated_at' => '2020-03-06 12:55:52',
            ),
            102 => 
            array (
                'id' => 109,
                'answer' => NULL,
                'image' => '8aff9583e25235f38e4c4e3911e59ec8.png',
                'game_id' => '29',
                'created_at' => '2020-03-06 12:55:52',
                'updated_at' => '2020-03-06 12:55:52',
            ),
            103 => 
            array (
                'id' => 110,
                'answer' => NULL,
                'image' => '4f06869581b82ff5e87396a164839d37.png',
                'game_id' => '29',
                'created_at' => '2020-03-06 12:55:52',
                'updated_at' => '2020-03-06 12:55:52',
            ),
            104 => 
            array (
                'id' => 111,
                'answer' => '3',
                'image' => NULL,
                'game_id' => '30',
                'created_at' => '2020-03-06 13:05:30',
                'updated_at' => '2020-03-06 13:05:30',
            ),
            105 => 
            array (
                'id' => 112,
                'answer' => '4',
                'image' => NULL,
                'game_id' => '30',
                'created_at' => '2020-03-06 13:05:30',
                'updated_at' => '2020-03-06 13:05:30',
            ),
            106 => 
            array (
                'id' => 113,
                'answer' => '8',
                'image' => NULL,
                'game_id' => '30',
                'created_at' => '2020-03-06 13:05:30',
                'updated_at' => '2020-03-06 13:05:30',
            ),
            107 => 
            array (
                'id' => 114,
                'answer' => '7',
                'image' => NULL,
                'game_id' => '30',
                'created_at' => '2020-03-06 13:05:30',
                'updated_at' => '2020-03-06 13:05:30',
            ),
            108 => 
            array (
                'id' => 115,
                'answer' => 'Тополь',
                'image' => NULL,
                'game_id' => '31',
                'created_at' => '2020-03-06 13:08:19',
                'updated_at' => '2020-03-06 13:08:19',
            ),
            109 => 
            array (
                'id' => 116,
                'answer' => 'Ель',
                'image' => NULL,
                'game_id' => '31',
                'created_at' => '2020-03-06 13:08:19',
                'updated_at' => '2020-03-06 13:08:19',
            ),
            110 => 
            array (
                'id' => 117,
                'answer' => 'Дуб',
                'image' => NULL,
                'game_id' => '31',
                'created_at' => '2020-03-06 13:08:19',
                'updated_at' => '2020-03-06 13:08:19',
            ),
            111 => 
            array (
                'id' => 118,
                'answer' => 'Ясень',
                'image' => NULL,
                'game_id' => '31',
                'created_at' => '2020-03-06 13:08:19',
                'updated_at' => '2020-03-06 13:08:19',
            ),
            112 => 
            array (
                'id' => 119,
                'answer' => NULL,
                'image' => '119068.png',
                'game_id' => '32',
                'created_at' => '2020-03-06 13:52:02',
                'updated_at' => '2020-03-06 13:52:02',
            ),
            113 => 
            array (
                'id' => 120,
                'answer' => NULL,
                'image' => 'bd3cd679566d88660da1e7adc6246b0c.png',
                'game_id' => '32',
                'created_at' => '2020-03-06 13:52:02',
                'updated_at' => '2020-03-06 13:52:02',
            ),
            114 => 
            array (
                'id' => 121,
                'answer' => NULL,
                'image' => 'b65581b53a0dce597e7d8f2e7aa0de91.png',
                'game_id' => '32',
                'created_at' => '2020-03-06 13:52:02',
                'updated_at' => '2020-03-06 13:52:02',
            ),
            115 => 
            array (
                'id' => 122,
                'answer' => NULL,
                'image' => 'wrestling_PNG10.png',
                'game_id' => '32',
                'created_at' => '2020-03-06 13:52:02',
                'updated_at' => '2020-03-06 13:52:02',
            ),
            116 => 
            array (
                'id' => 123,
                'answer' => NULL,
                'image' => '119068.png',
                'game_id' => '33',
                'created_at' => '2020-03-06 13:55:47',
                'updated_at' => '2020-03-06 13:55:47',
            ),
            117 => 
            array (
                'id' => 124,
                'answer' => NULL,
                'image' => 'wrestling_PNG10.png',
                'game_id' => '33',
                'created_at' => '2020-03-06 13:55:47',
                'updated_at' => '2020-03-06 13:55:47',
            ),
            118 => 
            array (
                'id' => 125,
                'answer' => NULL,
                'image' => 'bd3cd679566d88660da1e7adc6246b0c.png',
                'game_id' => '33',
                'created_at' => '2020-03-06 13:55:47',
                'updated_at' => '2020-03-06 13:55:47',
            ),
            119 => 
            array (
                'id' => 126,
                'answer' => NULL,
                'image' => 'twoGraphic.png',
                'game_id' => '34',
                'created_at' => '2020-03-07 17:48:54',
                'updated_at' => '2020-03-07 17:48:54',
            ),
            120 => 
            array (
                'id' => 127,
                'answer' => NULL,
                'image' => 'oneGraphic.png',
                'game_id' => '34',
                'created_at' => '2020-03-07 17:48:54',
                'updated_at' => '2020-03-07 17:48:54',
            ),
            121 => 
            array (
                'id' => 128,
                'answer' => NULL,
                'image' => 'threeGraphic.png',
                'game_id' => '34',
                'created_at' => '2020-03-07 17:48:54',
                'updated_at' => '2020-03-07 17:48:54',
            ),
            122 => 
            array (
                'id' => 129,
                'answer' => NULL,
                'image' => 'answer3.png',
                'game_id' => '35',
                'created_at' => '2020-03-07 17:50:47',
                'updated_at' => '2020-03-07 17:50:47',
            ),
            123 => 
            array (
                'id' => 130,
                'answer' => NULL,
                'image' => 'answer2.png',
                'game_id' => '35',
                'created_at' => '2020-03-07 17:50:47',
                'updated_at' => '2020-03-07 17:50:47',
            ),
            124 => 
            array (
                'id' => 131,
                'answer' => NULL,
                'image' => 'answer1.png',
                'game_id' => '35',
                'created_at' => '2020-03-07 17:50:47',
                'updated_at' => '2020-03-07 17:50:47',
            ),
            125 => 
            array (
                'id' => 132,
                'answer' => NULL,
                'image' => 'answer2.png',
                'game_id' => '36',
                'created_at' => '2020-03-07 18:07:27',
                'updated_at' => '2020-03-07 18:07:27',
            ),
            126 => 
            array (
                'id' => 133,
                'answer' => NULL,
                'image' => 'answer3.png',
                'game_id' => '36',
                'created_at' => '2020-03-07 18:07:27',
                'updated_at' => '2020-03-07 18:07:27',
            ),
            127 => 
            array (
                'id' => 134,
                'answer' => NULL,
                'image' => 'answer1.png',
                'game_id' => '36',
                'created_at' => '2020-03-07 18:07:27',
                'updated_at' => '2020-03-07 18:07:27',
            ),
            128 => 
            array (
                'id' => 135,
                'answer' => NULL,
                'image' => 'greenRedAnswer2.png',
                'game_id' => '37',
                'created_at' => '2020-03-07 18:19:34',
                'updated_at' => '2020-03-07 18:19:34',
            ),
            129 => 
            array (
                'id' => 136,
                'answer' => NULL,
                'image' => 'redGreenAnswer1.png',
                'game_id' => '37',
                'created_at' => '2020-03-07 18:19:34',
                'updated_at' => '2020-03-07 18:19:34',
            ),
            130 => 
            array (
                'id' => 137,
                'answer' => NULL,
                'image' => '2020-03-07_2143.png',
                'game_id' => '38',
                'created_at' => '2020-03-07 18:48:06',
                'updated_at' => '2020-03-07 18:48:06',
            ),
            131 => 
            array (
                'id' => 138,
                'answer' => NULL,
                'image' => '2020-03-07_2144.png',
                'game_id' => '38',
                'created_at' => '2020-03-07 18:48:06',
                'updated_at' => '2020-03-07 18:48:06',
            ),
            132 => 
            array (
                'id' => 139,
                'answer' => NULL,
                'image' => '2020-03-07_2144_001.png',
                'game_id' => '38',
                'created_at' => '2020-03-07 18:48:06',
                'updated_at' => '2020-03-07 18:48:06',
            ),
            133 => 
            array (
                'id' => 140,
                'answer' => '12',
                'image' => NULL,
                'game_id' => '39',
                'created_at' => '2020-03-07 18:54:05',
                'updated_at' => '2020-03-07 18:54:05',
            ),
            134 => 
            array (
                'id' => 141,
                'answer' => '13',
                'image' => NULL,
                'game_id' => '39',
                'created_at' => '2020-03-07 18:54:05',
                'updated_at' => '2020-03-07 18:54:05',
            ),
            135 => 
            array (
                'id' => 142,
                'answer' => '14',
                'image' => NULL,
                'game_id' => '39',
                'created_at' => '2020-03-07 18:54:05',
                'updated_at' => '2020-03-07 18:54:05',
            ),
            136 => 
            array (
                'id' => 143,
                'answer' => '15',
                'image' => NULL,
                'game_id' => '39',
                'created_at' => '2020-03-07 18:54:05',
                'updated_at' => '2020-03-07 18:54:05',
            ),
            137 => 
            array (
                'id' => 144,
                'answer' => '17',
                'image' => NULL,
                'game_id' => '40',
                'created_at' => '2020-03-07 18:59:43',
                'updated_at' => '2020-03-07 18:59:43',
            ),
            138 => 
            array (
                'id' => 145,
                'answer' => '18',
                'image' => NULL,
                'game_id' => '40',
                'created_at' => '2020-03-07 18:59:43',
                'updated_at' => '2020-03-07 18:59:43',
            ),
            139 => 
            array (
                'id' => 146,
                'answer' => '19',
                'image' => NULL,
                'game_id' => '40',
                'created_at' => '2020-03-07 18:59:43',
                'updated_at' => '2020-03-07 18:59:43',
            ),
            140 => 
            array (
                'id' => 147,
                'answer' => '20',
                'image' => NULL,
                'game_id' => '40',
                'created_at' => '2020-03-07 18:59:43',
                'updated_at' => '2020-03-07 18:59:43',
            ),
            141 => 
            array (
                'id' => 148,
                'answer' => 'Скрипка',
                'image' => NULL,
                'game_id' => '41',
                'created_at' => '2020-03-09 15:57:15',
                'updated_at' => '2020-03-09 15:57:15',
            ),
            142 => 
            array (
                'id' => 149,
                'answer' => 'Альт',
                'image' => NULL,
                'game_id' => '41',
                'created_at' => '2020-03-09 15:57:15',
                'updated_at' => '2020-03-09 15:57:15',
            ),
            143 => 
            array (
                'id' => 150,
                'answer' => 'Труба',
                'image' => NULL,
                'game_id' => '41',
                'created_at' => '2020-03-09 15:57:15',
                'updated_at' => '2020-03-09 15:57:15',
            ),
            144 => 
            array (
                'id' => 151,
                'answer' => 'Арфа',
                'image' => NULL,
                'game_id' => '41',
                'created_at' => '2020-03-09 15:57:15',
                'updated_at' => '2020-03-09 15:57:15',
            ),
            145 => 
            array (
                'id' => 152,
                'answer' => 'Физика',
                'image' => NULL,
                'game_id' => '42',
                'created_at' => '2020-03-09 16:01:04',
                'updated_at' => '2020-03-09 16:01:04',
            ),
            146 => 
            array (
                'id' => 153,
                'answer' => 'Химия',
                'image' => NULL,
                'game_id' => '42',
                'created_at' => '2020-03-09 16:01:04',
                'updated_at' => '2020-03-09 16:01:04',
            ),
            147 => 
            array (
                'id' => 154,
                'answer' => 'Математика',
                'image' => NULL,
                'game_id' => '42',
                'created_at' => '2020-03-09 16:01:04',
                'updated_at' => '2020-03-09 16:01:04',
            ),
            148 => 
            array (
                'id' => 155,
                'answer' => 'История',
                'image' => NULL,
                'game_id' => '42',
                'created_at' => '2020-03-09 16:01:04',
                'updated_at' => '2020-03-09 16:01:04',
            ),
            149 => 
            array (
                'id' => 156,
                'answer' => '9',
                'image' => NULL,
                'game_id' => '43',
                'created_at' => '2020-03-09 16:03:35',
                'updated_at' => '2020-03-09 16:03:35',
            ),
            150 => 
            array (
                'id' => 157,
                'answer' => '3',
                'image' => NULL,
                'game_id' => '43',
                'created_at' => '2020-03-09 16:03:35',
                'updated_at' => '2020-03-09 16:03:35',
            ),
            151 => 
            array (
                'id' => 158,
                'answer' => '4',
                'image' => NULL,
                'game_id' => '43',
                'created_at' => '2020-03-09 16:03:35',
                'updated_at' => '2020-03-09 16:03:35',
            ),
            152 => 
            array (
                'id' => 159,
                'answer' => '5',
                'image' => NULL,
                'game_id' => '43',
                'created_at' => '2020-03-09 16:03:35',
                'updated_at' => '2020-03-09 16:03:35',
            ),
            153 => 
            array (
                'id' => 160,
                'answer' => 'Бабушка',
                'image' => NULL,
                'game_id' => '44',
                'created_at' => '2020-03-09 16:06:08',
                'updated_at' => '2020-03-09 16:06:08',
            ),
            154 => 
            array (
                'id' => 161,
                'answer' => 'Мама',
                'image' => NULL,
                'game_id' => '44',
                'created_at' => '2020-03-09 16:06:08',
                'updated_at' => '2020-03-09 16:06:08',
            ),
            155 => 
            array (
                'id' => 162,
                'answer' => 'Дедушка',
                'image' => NULL,
                'game_id' => '44',
                'created_at' => '2020-03-09 16:06:08',
                'updated_at' => '2020-03-09 16:06:08',
            ),
            156 => 
            array (
                'id' => 163,
                'answer' => 'Сестра',
                'image' => NULL,
                'game_id' => '44',
                'created_at' => '2020-03-09 16:06:08',
                'updated_at' => '2020-03-09 16:06:08',
            ),
            157 => 
            array (
                'id' => 164,
                'answer' => 'Бах',
                'image' => NULL,
                'game_id' => '45',
                'created_at' => '2020-03-09 17:19:34',
                'updated_at' => '2020-03-09 17:19:34',
            ),
            158 => 
            array (
                'id' => 165,
                'answer' => 'Моцарт',
                'image' => NULL,
                'game_id' => '45',
                'created_at' => '2020-03-09 17:19:34',
                'updated_at' => '2020-03-09 17:19:34',
            ),
            159 => 
            array (
                'id' => 166,
                'answer' => 'Айвазовский',
                'image' => NULL,
                'game_id' => '45',
                'created_at' => '2020-03-09 17:19:34',
                'updated_at' => '2020-03-09 17:19:34',
            ),
            160 => 
            array (
                'id' => 167,
                'answer' => 'Комитас',
                'image' => NULL,
                'game_id' => '45',
                'created_at' => '2020-03-09 17:19:34',
                'updated_at' => '2020-03-09 17:19:34',
            ),
            161 => 
            array (
                'id' => 168,
                'answer' => 'Сентябрь',
                'image' => NULL,
                'game_id' => '46',
                'created_at' => '2020-03-09 17:27:40',
                'updated_at' => '2020-03-09 17:27:40',
            ),
            162 => 
            array (
                'id' => 169,
                'answer' => 'Октябрь',
                'image' => NULL,
                'game_id' => '46',
                'created_at' => '2020-03-09 17:27:40',
                'updated_at' => '2020-03-09 17:27:40',
            ),
            163 => 
            array (
                'id' => 170,
                'answer' => 'Ноябрь',
                'image' => NULL,
                'game_id' => '46',
                'created_at' => '2020-03-09 17:27:40',
                'updated_at' => '2020-03-09 17:27:40',
            ),
            164 => 
            array (
                'id' => 171,
                'answer' => 'Май',
                'image' => NULL,
                'game_id' => '46',
                'created_at' => '2020-03-09 17:27:40',
                'updated_at' => '2020-03-09 17:27:40',
            ),
            165 => 
            array (
                'id' => 172,
                'answer' => 'Алмаз',
                'image' => '574bf02152f1a15500a2023c.png',
                'game_id' => '47',
                'created_at' => '2020-03-09 17:45:34',
                'updated_at' => '2020-03-09 17:45:34',
            ),
            166 => 
            array (
                'id' => 173,
                'answer' => 'Изумруд',
                'image' => 'emerald_PNG22303.png',
                'game_id' => '47',
                'created_at' => '2020-03-09 17:45:34',
                'updated_at' => '2020-03-09 17:45:34',
            ),
            167 => 
            array (
                'id' => 174,
                'answer' => 'Рубин',
                'image' => 'ruby_PNG1.png',
                'game_id' => '47',
                'created_at' => '2020-03-09 17:45:34',
                'updated_at' => '2020-03-09 17:45:34',
            ),
            168 => 
            array (
                'id' => 175,
                'answer' => 'Топаз',
                'image' => '191-1910584_topaz-stone-png-download-image-topaz-stone-yellow.png',
                'game_id' => '47',
                'created_at' => '2020-03-09 17:45:34',
                'updated_at' => '2020-03-09 17:45:34',
            ),
            169 => 
            array (
                'id' => 176,
                'answer' => 'Свинец',
                'image' => 'p1370-svinec.png',
                'game_id' => '48',
                'created_at' => '2020-03-09 18:08:52',
                'updated_at' => '2020-03-09 18:08:52',
            ),
            170 => 
            array (
                'id' => 177,
                'answer' => 'Золото',
                'image' => 'gold_PNG10981.png',
                'game_id' => '48',
                'created_at' => '2020-03-09 18:08:52',
                'updated_at' => '2020-03-09 18:08:52',
            ),
            171 => 
            array (
                'id' => 178,
                'answer' => 'Серебро',
                'image' => '100-oz-silver-bar-royal-canadian-mint-007b1775b40d4b9240af03d9bdcfe2a1.png',
                'game_id' => '48',
                'created_at' => '2020-03-09 18:08:52',
                'updated_at' => '2020-03-09 18:08:52',
            ),
            172 => 
            array (
                'id' => 179,
                'answer' => 'Платина',
                'image' => '5328438-buy-platinum-pacific-coin-exchange-coin-dealers-san-diego-platinum-png-450_303_preview.png',
                'game_id' => '48',
                'created_at' => '2020-03-09 18:08:52',
                'updated_at' => '2020-03-09 18:08:52',
            ),
            173 => 
            array (
                'id' => 180,
                'answer' => 'Кориандр',
                'image' => NULL,
                'game_id' => '49',
                'created_at' => '2020-03-10 12:04:21',
                'updated_at' => '2020-03-10 12:04:21',
            ),
            174 => 
            array (
                'id' => 181,
                'answer' => 'Куркума',
                'image' => NULL,
                'game_id' => '49',
                'created_at' => '2020-03-10 12:04:21',
                'updated_at' => '2020-03-10 12:04:21',
            ),
            175 => 
            array (
                'id' => 182,
                'answer' => 'Корица',
                'image' => NULL,
                'game_id' => '49',
                'created_at' => '2020-03-10 12:04:21',
                'updated_at' => '2020-03-10 12:04:21',
            ),
            176 => 
            array (
                'id' => 183,
                'answer' => 'Лавровый лист',
                'image' => NULL,
                'game_id' => '49',
                'created_at' => '2020-03-10 12:04:21',
                'updated_at' => '2020-03-10 12:04:21',
            ),
            177 => 
            array (
                'id' => 184,
                'answer' => 'Глина',
                'image' => NULL,
                'game_id' => '50',
                'created_at' => '2020-03-10 12:22:04',
                'updated_at' => '2020-03-10 12:22:04',
            ),
            178 => 
            array (
                'id' => 185,
                'answer' => 'Сахар',
                'image' => NULL,
                'game_id' => '50',
                'created_at' => '2020-03-10 12:22:04',
                'updated_at' => '2020-03-10 12:22:04',
            ),
            179 => 
            array (
                'id' => 186,
                'answer' => 'Уксус',
                'image' => NULL,
                'game_id' => '50',
                'created_at' => '2020-03-10 12:22:04',
                'updated_at' => '2020-03-10 12:22:04',
            ),
            180 => 
            array (
                'id' => 187,
                'answer' => 'Спирт',
                'image' => NULL,
                'game_id' => '50',
                'created_at' => '2020-03-10 12:22:04',
                'updated_at' => '2020-03-10 12:22:04',
            ),
            181 => 
            array (
                'id' => 188,
                'answer' => 'Натюрморт',
                'image' => NULL,
                'game_id' => '51',
                'created_at' => '2020-03-10 15:36:56',
                'updated_at' => '2020-03-10 15:36:56',
            ),
            182 => 
            array (
                'id' => 189,
                'answer' => 'Портрет',
                'image' => NULL,
                'game_id' => '51',
                'created_at' => '2020-03-10 15:36:56',
                'updated_at' => '2020-03-10 15:36:56',
            ),
            183 => 
            array (
                'id' => 190,
                'answer' => 'Пейзаж',
                'image' => NULL,
                'game_id' => '51',
                'created_at' => '2020-03-10 15:36:56',
                'updated_at' => '2020-03-10 15:36:56',
            ),
            184 => 
            array (
                'id' => 191,
                'answer' => 'Скульптура',
                'image' => NULL,
                'game_id' => '51',
                'created_at' => '2020-03-10 15:36:56',
                'updated_at' => '2020-03-10 15:36:56',
            ),
            185 => 
            array (
                'id' => 192,
                'answer' => NULL,
                'image' => 'a1de7f87ef3a.png',
                'game_id' => '52',
                'created_at' => '2020-03-10 20:07:37',
                'updated_at' => '2020-03-10 20:07:37',
            ),
            186 => 
            array (
                'id' => 193,
                'answer' => NULL,
                'image' => 'carnation-2940590_960_720.png',
                'game_id' => '52',
                'created_at' => '2020-03-10 20:07:37',
                'updated_at' => '2020-03-10 20:07:37',
            ),
            187 => 
            array (
                'id' => 194,
                'answer' => NULL,
                'image' => 'bellflower_PNG27.png',
                'game_id' => '52',
                'created_at' => '2020-03-10 20:07:37',
                'updated_at' => '2020-03-10 20:07:37',
            ),
            188 => 
            array (
                'id' => 195,
                'answer' => NULL,
                'image' => 'васильки-png-.png',
                'game_id' => '52',
                'created_at' => '2020-03-10 20:07:37',
                'updated_at' => '2020-03-10 20:07:37',
            ),
            189 => 
            array (
                'id' => 196,
                'answer' => 'Е',
                'image' => NULL,
                'game_id' => '53',
                'created_at' => '2020-03-12 07:02:29',
                'updated_at' => '2020-03-12 07:02:29',
            ),
            190 => 
            array (
                'id' => 197,
                'answer' => 'Ю',
                'image' => NULL,
                'game_id' => '53',
                'created_at' => '2020-03-12 07:02:29',
                'updated_at' => '2020-03-12 07:02:29',
            ),
            191 => 
            array (
                'id' => 198,
                'answer' => 'Л',
                'image' => NULL,
                'game_id' => '53',
                'created_at' => '2020-03-12 07:02:29',
                'updated_at' => '2020-03-12 07:02:29',
            ),
            192 => 
            array (
                'id' => 199,
                'answer' => 'И',
                'image' => NULL,
                'game_id' => '53',
                'created_at' => '2020-03-12 07:02:29',
                'updated_at' => '2020-03-12 07:02:29',
            ),
            193 => 
            array (
                'id' => 200,
                'answer' => 'Стол',
                'image' => 'table_PNG6994.png',
                'game_id' => '54',
                'created_at' => '2020-03-12 07:22:49',
                'updated_at' => '2020-03-12 07:22:49',
            ),
            194 => 
            array (
                'id' => 201,
                'answer' => 'Кровать',
                'image' => '661-22toronta.png',
                'game_id' => '54',
                'created_at' => '2020-03-12 07:22:49',
                'updated_at' => '2020-03-12 07:22:49',
            ),
            195 => 
            array (
                'id' => 202,
                'answer' => 'Кресло',
                'image' => 'armchairs-2022418_1280.png',
                'game_id' => '54',
                'created_at' => '2020-03-12 07:22:49',
                'updated_at' => '2020-03-12 07:22:49',
            ),
            196 => 
            array (
                'id' => 203,
                'answer' => 'Стул',
                'image' => '183310be.png',
                'game_id' => '54',
                'created_at' => '2020-03-12 07:22:49',
                'updated_at' => '2020-03-12 07:22:49',
            ),
            197 => 
            array (
                'id' => 204,
                'answer' => 'Чай',
                'image' => NULL,
                'game_id' => '55',
                'created_at' => '2020-03-12 07:39:01',
                'updated_at' => '2020-03-12 07:39:01',
            ),
            198 => 
            array (
                'id' => 205,
                'answer' => 'Мука',
                'image' => NULL,
                'game_id' => '55',
                'created_at' => '2020-03-12 07:39:01',
                'updated_at' => '2020-03-12 07:39:01',
            ),
            199 => 
            array (
                'id' => 206,
                'answer' => 'Хлеб',
                'image' => NULL,
                'game_id' => '55',
                'created_at' => '2020-03-12 07:39:01',
                'updated_at' => '2020-03-12 07:39:01',
            ),
            200 => 
            array (
                'id' => 207,
                'answer' => 'Сыр',
                'image' => NULL,
                'game_id' => '55',
                'created_at' => '2020-03-12 07:39:01',
                'updated_at' => '2020-03-12 07:39:01',
            ),
            201 => 
            array (
                'id' => 208,
                'answer' => 'Камень',
                'image' => NULL,
                'game_id' => '56',
                'created_at' => '2020-03-12 07:45:27',
                'updated_at' => '2020-03-12 07:45:27',
            ),
            202 => 
            array (
                'id' => 209,
                'answer' => 'Книга',
                'image' => NULL,
                'game_id' => '56',
                'created_at' => '2020-03-12 07:45:27',
                'updated_at' => '2020-03-12 07:45:27',
            ),
            203 => 
            array (
                'id' => 210,
                'answer' => 'Ваза',
                'image' => NULL,
                'game_id' => '56',
                'created_at' => '2020-03-12 07:45:27',
                'updated_at' => '2020-03-12 07:45:27',
            ),
            204 => 
            array (
                'id' => 211,
                'answer' => 'Ребенок',
                'image' => NULL,
                'game_id' => '56',
                'created_at' => '2020-03-12 07:45:27',
                'updated_at' => '2020-03-12 07:45:27',
            ),
            205 => 
            array (
                'id' => 212,
                'answer' => 'Кефир',
                'image' => NULL,
                'game_id' => '57',
                'created_at' => '2020-03-12 07:49:39',
                'updated_at' => '2020-03-12 07:49:39',
            ),
            206 => 
            array (
                'id' => 213,
                'answer' => 'Сметана',
                'image' => NULL,
                'game_id' => '57',
                'created_at' => '2020-03-12 07:49:39',
                'updated_at' => '2020-03-12 07:49:39',
            ),
            207 => 
            array (
                'id' => 214,
                'answer' => 'Торт',
                'image' => NULL,
                'game_id' => '57',
                'created_at' => '2020-03-12 07:49:39',
                'updated_at' => '2020-03-12 07:49:39',
            ),
            208 => 
            array (
                'id' => 215,
                'answer' => 'Творог',
                'image' => NULL,
                'game_id' => '57',
                'created_at' => '2020-03-12 07:49:39',
                'updated_at' => '2020-03-12 07:49:39',
            ),
            209 => 
            array (
                'id' => 216,
                'answer' => NULL,
                'image' => 'unnamed.png',
                'game_id' => '58',
                'created_at' => '2020-03-12 07:56:26',
                'updated_at' => '2020-03-12 07:56:26',
            ),
            210 => 
            array (
                'id' => 217,
                'answer' => NULL,
                'image' => '3753d6ad5a3ef014318025beb3dfec94.png',
                'game_id' => '58',
                'created_at' => '2020-03-12 07:56:26',
                'updated_at' => '2020-03-12 07:56:26',
            ),
            211 => 
            array (
                'id' => 218,
                'answer' => NULL,
                'image' => '437-4376544_bush-clipart-vegetable-plant-.png',
                'game_id' => '58',
                'created_at' => '2020-03-12 07:56:26',
                'updated_at' => '2020-03-12 07:56:26',
            ),
            212 => 
            array (
                'id' => 219,
                'answer' => NULL,
                'image' => 'odezhda18.png',
                'game_id' => '58',
                'created_at' => '2020-03-12 07:56:26',
                'updated_at' => '2020-03-12 07:56:26',
            ),
            213 => 
            array (
                'id' => 220,
                'answer' => NULL,
                'image' => '706bfc8bfcdf86c169373e5521239aed.png',
                'game_id' => '59',
                'created_at' => '2020-03-12 08:12:23',
                'updated_at' => '2020-03-12 08:12:23',
            ),
            214 => 
            array (
                'id' => 221,
                'answer' => NULL,
                'image' => '309139.png',
                'game_id' => '59',
                'created_at' => '2020-03-12 08:12:23',
                'updated_at' => '2020-03-12 08:12:23',
            ),
            215 => 
            array (
                'id' => 222,
                'answer' => NULL,
                'image' => 'кот-рисунок-png-4.png',
                'game_id' => '59',
                'created_at' => '2020-03-12 08:12:23',
                'updated_at' => '2020-03-12 08:12:23',
            ),
            216 => 
            array (
                'id' => 223,
                'answer' => NULL,
                'image' => 'cactus_PNG23643.png',
                'game_id' => '59',
                'created_at' => '2020-03-12 08:12:23',
                'updated_at' => '2020-03-12 08:12:23',
            ),
            217 => 
            array (
                'id' => 224,
                'answer' => 'Дом',
                'image' => NULL,
                'game_id' => '60',
                'created_at' => '2020-03-12 08:14:32',
                'updated_at' => '2020-03-12 08:14:32',
            ),
            218 => 
            array (
                'id' => 225,
                'answer' => 'Море',
                'image' => NULL,
                'game_id' => '60',
                'created_at' => '2020-03-12 08:14:32',
                'updated_at' => '2020-03-12 08:14:32',
            ),
            219 => 
            array (
                'id' => 226,
                'answer' => 'Лес',
                'image' => NULL,
                'game_id' => '60',
                'created_at' => '2020-03-12 08:14:32',
                'updated_at' => '2020-03-12 08:14:32',
            ),
            220 => 
            array (
                'id' => 227,
                'answer' => 'Дым',
                'image' => NULL,
                'game_id' => '60',
                'created_at' => '2020-03-12 08:14:32',
                'updated_at' => '2020-03-12 08:14:32',
            ),
            221 => 
            array (
                'id' => 228,
                'answer' => 'Дева',
                'image' => NULL,
                'game_id' => '61',
                'created_at' => '2020-03-12 11:13:50',
                'updated_at' => '2020-03-12 11:13:50',
            ),
            222 => 
            array (
                'id' => 229,
                'answer' => 'Козерог',
                'image' => NULL,
                'game_id' => '61',
                'created_at' => '2020-03-12 11:13:50',
                'updated_at' => '2020-03-12 11:13:50',
            ),
            223 => 
            array (
                'id' => 230,
                'answer' => 'Весы',
                'image' => NULL,
                'game_id' => '61',
                'created_at' => '2020-03-12 11:13:50',
                'updated_at' => '2020-03-12 11:13:50',
            ),
            224 => 
            array (
                'id' => 231,
                'answer' => 'Телец',
                'image' => NULL,
                'game_id' => '61',
                'created_at' => '2020-03-12 11:13:50',
                'updated_at' => '2020-03-12 11:13:50',
            ),
            225 => 
            array (
                'id' => 232,
                'answer' => 'Пушкин',
                'image' => NULL,
                'game_id' => '62',
                'created_at' => '2020-03-12 11:18:04',
                'updated_at' => '2020-03-12 11:18:04',
            ),
            226 => 
            array (
                'id' => 233,
                'answer' => 'Гоголь',
                'image' => NULL,
                'game_id' => '62',
                'created_at' => '2020-03-12 11:18:04',
                'updated_at' => '2020-03-12 11:18:04',
            ),
            227 => 
            array (
                'id' => 234,
                'answer' => 'Толстой',
                'image' => NULL,
                'game_id' => '62',
                'created_at' => '2020-03-12 11:18:04',
                'updated_at' => '2020-03-12 11:18:04',
            ),
            228 => 
            array (
                'id' => 235,
                'answer' => 'Чайковский',
                'image' => NULL,
                'game_id' => '62',
                'created_at' => '2020-03-12 11:18:04',
                'updated_at' => '2020-03-12 11:18:04',
            ),
            229 => 
            array (
                'id' => 236,
                'answer' => NULL,
                'image' => '1e803becbc6acc1a6a17d65792879e6a.png',
                'game_id' => '63',
                'created_at' => '2020-03-14 09:02:11',
                'updated_at' => '2020-03-14 09:02:11',
            ),
            230 => 
            array (
                'id' => 237,
                'answer' => NULL,
                'image' => '1-2-spain-flag-png-thumb.png',
                'game_id' => '63',
                'created_at' => '2020-03-14 09:02:11',
                'updated_at' => '2020-03-14 09:02:11',
            ),
            231 => 
            array (
                'id' => 238,
                'answer' => NULL,
                'image' => 'armenia.png',
                'game_id' => '63',
                'created_at' => '2020-03-14 09:02:11',
                'updated_at' => '2020-03-14 09:02:11',
            ),
            232 => 
            array (
                'id' => 239,
                'answer' => NULL,
                'image' => 'ang.png',
                'game_id' => '63',
                'created_at' => '2020-03-14 09:02:11',
                'updated_at' => '2020-03-14 09:02:11',
            ),
        ));
        
        
    }
}