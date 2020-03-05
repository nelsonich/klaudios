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
                'created_at' => '2020-03-04 09:43:59',
                'updated_at' => '2020-03-04 09:43:59',
            ),
            1 => 
            array (
                'id' => 2,
                'answer' => 'фургон',
                'image' => 'van.png',
                'game_id' => '1',
                'created_at' => '2020-03-04 09:43:59',
                'updated_at' => '2020-03-04 09:43:59',
            ),
            2 => 
            array (
                'id' => 3,
                'answer' => 'самолёт',
                'image' => 'airplane.png',
                'game_id' => '1',
                'created_at' => '2020-03-04 09:43:59',
                'updated_at' => '2020-03-04 09:43:59',
            ),
            3 => 
            array (
                'id' => 4,
                'answer' => 'грузовик',
                'image' => 'truck.png',
                'game_id' => '1',
                'created_at' => '2020-03-04 09:43:59',
                'updated_at' => '2020-03-04 09:43:59',
            ),
            4 => 
            array (
                'id' => 5,
                'answer' => NULL,
                'image' => 'orange_pencil.svg',
                'game_id' => '2',
                'created_at' => '2020-03-04 09:43:59',
                'updated_at' => '2020-03-04 09:43:59',
            ),
            5 => 
            array (
                'id' => 6,
                'answer' => NULL,
                'image' => 'green_pencil.svg',
                'game_id' => '2',
                'created_at' => '2020-03-04 09:43:59',
                'updated_at' => '2020-03-04 09:43:59',
            ),
            6 => 
            array (
                'id' => 7,
                'answer' => NULL,
                'image' => 'blue_pencil.svg',
                'game_id' => '2',
                'created_at' => '2020-03-04 09:43:59',
                'updated_at' => '2020-03-04 09:43:59',
            ),
            7 => 
            array (
                'id' => 8,
                'answer' => NULL,
                'image' => 'red_pencil.svg',
                'game_id' => '2',
                'created_at' => '2020-03-04 09:43:59',
                'updated_at' => '2020-03-04 09:43:59',
            ),
            8 => 
            array (
                'id' => 9,
                'answer' => 'гусеница',
                'image' => NULL,
                'game_id' => '3',
                'created_at' => '2020-03-04 09:43:59',
                'updated_at' => '2020-03-04 09:43:59',
            ),
            9 => 
            array (
                'id' => 10,
                'answer' => 'червяк',
                'image' => NULL,
                'game_id' => '3',
                'created_at' => '2020-03-04 09:43:59',
                'updated_at' => '2020-03-04 09:43:59',
            ),
            10 => 
            array (
                'id' => 11,
                'answer' => 'одинаковые',
                'image' => NULL,
                'game_id' => '3',
                'created_at' => '2020-03-04 09:43:59',
                'updated_at' => '2020-03-04 09:43:59',
            ),
            11 => 
            array (
                'id' => 12,
                'answer' => NULL,
                'image' => 'red_square_box.svg',
                'game_id' => '4',
                'created_at' => '2020-03-04 09:43:59',
                'updated_at' => '2020-03-04 09:43:59',
            ),
            12 => 
            array (
                'id' => 13,
                'answer' => NULL,
                'image' => 'red_circle_big_box.svg',
                'game_id' => '4',
                'created_at' => '2020-03-04 09:43:59',
                'updated_at' => '2020-03-04 09:43:59',
            ),
            13 => 
            array (
                'id' => 14,
                'answer' => NULL,
                'image' => 'red_circle_small_box.svg',
                'game_id' => '4',
                'created_at' => '2020-03-04 09:43:59',
                'updated_at' => '2020-03-04 09:43:59',
            ),
            14 => 
            array (
                'id' => 15,
                'answer' => NULL,
                'image' => 'green_circle_box.svg',
                'game_id' => '4',
                'created_at' => '2020-03-04 09:43:59',
                'updated_at' => '2020-03-04 09:43:59',
            ),
            15 => 
            array (
                'id' => 16,
                'answer' => NULL,
                'image' => '56f12bc7444151539e130270.png',
                'game_id' => '5',
                'created_at' => '2020-03-05 15:05:33',
                'updated_at' => '2020-03-05 15:05:33',
            ),
            16 => 
            array (
                'id' => 17,
                'answer' => NULL,
                'image' => '1200px-Kvadrato.svg.png',
                'game_id' => '5',
                'created_at' => '2020-03-05 15:05:33',
                'updated_at' => '2020-03-05 15:05:33',
            ),
            17 => 
            array (
                'id' => 18,
                'answer' => NULL,
                'image' => '28436-4-triangle-clipart.png',
                'game_id' => '5',
                'created_at' => '2020-03-05 15:05:33',
                'updated_at' => '2020-03-05 15:05:33',
            ),
            18 => 
            array (
                'id' => 19,
                'answer' => NULL,
                'image' => 'Number 2 PNG images free download_PNG14925.png',
                'game_id' => '5',
                'created_at' => '2020-03-05 15:05:33',
                'updated_at' => '2020-03-05 15:05:33',
            ),
            19 => 
            array (
                'id' => 20,
                'answer' => NULL,
                'image' => '19-orange-png-image-download-thumb.png',
                'game_id' => '6',
                'created_at' => '2020-03-05 16:46:52',
                'updated_at' => '2020-03-05 16:46:52',
            ),
            20 => 
            array (
                'id' => 21,
                'answer' => NULL,
                'image' => '437-4376544_bush-clipart-vegetable-plant-.png',
                'game_id' => '6',
                'created_at' => '2020-03-05 16:46:52',
                'updated_at' => '2020-03-05 16:46:52',
            ),
            21 => 
            array (
                'id' => 22,
                'answer' => NULL,
                'image' => 'unnamed.png',
                'game_id' => '6',
                'created_at' => '2020-03-05 16:46:52',
                'updated_at' => '2020-03-05 16:46:52',
            ),
            22 => 
            array (
                'id' => 23,
                'answer' => NULL,
                'image' => '5b3329d43efc1792543ab088265ec68c.png',
                'game_id' => '6',
                'created_at' => '2020-03-05 16:46:52',
                'updated_at' => '2020-03-05 16:46:52',
            ),
            23 => 
            array (
                'id' => 24,
                'answer' => 'замок',
                'image' => 'padlock_PNG9416.png',
                'game_id' => '7',
                'created_at' => '2020-03-05 17:05:13',
                'updated_at' => '2020-03-05 17:05:13',
            ),
            24 => 
            array (
                'id' => 25,
                'answer' => 'собака',
                'image' => '5ebb80974b17bea40d3ff48d3fbad7c8.png',
                'game_id' => '7',
                'created_at' => '2020-03-05 17:05:13',
                'updated_at' => '2020-03-05 17:05:13',
            ),
            25 => 
            array (
                'id' => 26,
                'answer' => 'хозяин',
                'image' => 'f1c331da8706175aba5d27f75f28a103.png',
                'game_id' => '7',
                'created_at' => '2020-03-05 17:05:13',
                'updated_at' => '2020-03-05 17:05:13',
            ),
            26 => 
            array (
                'id' => 27,
                'answer' => 'Петух',
                'image' => 'download.jpg',
                'game_id' => '8',
                'created_at' => '2020-03-05 17:41:16',
                'updated_at' => '2020-03-05 17:41:16',
            ),
            27 => 
            array (
                'id' => 28,
                'answer' => 'Дед',
                'image' => '84a8cafaea7cc9fa614efda579717ecf.png_wh860.png',
                'game_id' => '8',
                'created_at' => '2020-03-05 17:41:16',
                'updated_at' => '2020-03-05 17:41:16',
            ),
            28 => 
            array (
                'id' => 29,
                'answer' => 'Будильник',
                'image' => 'alarm-clocks-mondaine-watch-ltd-alarm-clock.jpg',
                'game_id' => '8',
                'created_at' => '2020-03-05 17:41:16',
                'updated_at' => '2020-03-05 17:41:16',
            ),
            29 => 
            array (
                'id' => 30,
                'answer' => NULL,
                'image' => 'cinderella-disney-princess-crown-tiara-cartoon-princess.jpg',
                'game_id' => '9',
                'created_at' => '2020-03-05 17:47:38',
                'updated_at' => '2020-03-05 17:47:38',
            ),
            30 => 
            array (
                'id' => 31,
                'answer' => NULL,
                'image' => 'snow-white-seven-dwarfs-coloring-book-fairy-tale-drawing-snow-white-and-the-seven-dwarfs.jpg',
                'game_id' => '9',
                'created_at' => '2020-03-05 17:47:38',
                'updated_at' => '2020-03-05 17:47:38',
            ),
            31 => 
            array (
                'id' => 32,
                'answer' => NULL,
                'image' => 'ariel-the-little-mermaid-ursula-character-disney-princess-little-mermaid.jpg',
                'game_id' => '9',
                'created_at' => '2020-03-05 17:47:38',
                'updated_at' => '2020-03-05 17:47:38',
            ),
            32 => 
            array (
                'id' => 33,
                'answer' => NULL,
                'image' => 'fixik_simka.png',
                'game_id' => '10',
                'created_at' => '2020-03-05 17:57:08',
                'updated_at' => '2020-03-05 17:57:08',
            ),
            33 => 
            array (
                'id' => 34,
                'answer' => NULL,
                'image' => 'nolik.png',
                'game_id' => '10',
                'created_at' => '2020-03-05 17:57:08',
                'updated_at' => '2020-03-05 17:57:08',
            ),
            34 => 
            array (
                'id' => 35,
                'answer' => NULL,
                'image' => 'eefececa81c5a29dd2161667d4ae134b.png',
                'game_id' => '10',
                'created_at' => '2020-03-05 17:57:08',
                'updated_at' => '2020-03-05 17:57:08',
            ),
            35 => 
            array (
                'id' => 36,
                'answer' => 'петух',
                'image' => NULL,
                'game_id' => '11',
                'created_at' => '2020-03-05 18:12:31',
                'updated_at' => '2020-03-05 18:12:31',
            ),
            36 => 
            array (
                'id' => 37,
                'answer' => 'осел',
                'image' => NULL,
                'game_id' => '11',
                'created_at' => '2020-03-05 18:12:31',
                'updated_at' => '2020-03-05 18:12:31',
            ),
            37 => 
            array (
                'id' => 38,
                'answer' => 'козел',
                'image' => NULL,
                'game_id' => '11',
                'created_at' => '2020-03-05 18:12:31',
                'updated_at' => '2020-03-05 18:12:31',
            ),
            38 => 
            array (
                'id' => 40,
                'answer' => '3',
                'image' => NULL,
                'game_id' => '13',
                'created_at' => '2020-03-05 18:14:40',
                'updated_at' => '2020-03-05 18:14:40',
            ),
            39 => 
            array (
                'id' => 41,
                'answer' => '2',
                'image' => NULL,
                'game_id' => '13',
                'created_at' => '2020-03-05 18:14:41',
                'updated_at' => '2020-03-05 18:14:41',
            ),
            40 => 
            array (
                'id' => 42,
                'answer' => '1',
                'image' => NULL,
                'game_id' => '13',
                'created_at' => '2020-03-05 18:14:41',
                'updated_at' => '2020-03-05 18:14:41',
            ),
            41 => 
            array (
                'id' => 44,
                'answer' => '8',
                'image' => NULL,
                'game_id' => '14',
                'created_at' => '2020-03-05 18:16:58',
                'updated_at' => '2020-03-05 18:16:58',
            ),
            42 => 
            array (
                'id' => 45,
                'answer' => '9',
                'image' => NULL,
                'game_id' => '14',
                'created_at' => '2020-03-05 18:16:58',
                'updated_at' => '2020-03-05 18:16:58',
            ),
            43 => 
            array (
                'id' => 46,
                'answer' => '7',
                'image' => NULL,
                'game_id' => '14',
                'created_at' => '2020-03-05 18:16:58',
                'updated_at' => '2020-03-05 18:16:58',
            ),
            44 => 
            array (
                'id' => 47,
                'answer' => '6',
                'image' => NULL,
                'game_id' => '14',
                'created_at' => '2020-03-05 18:16:58',
                'updated_at' => '2020-03-05 18:16:58',
            ),
            45 => 
            array (
                'id' => 48,
                'answer' => 'В доме',
                'image' => NULL,
                'game_id' => '15',
                'created_at' => '2020-03-05 18:19:10',
                'updated_at' => '2020-03-05 18:19:10',
            ),
            46 => 
            array (
                'id' => 49,
                'answer' => 'В норах',
                'image' => NULL,
                'game_id' => '15',
                'created_at' => '2020-03-05 18:19:10',
                'updated_at' => '2020-03-05 18:19:10',
            ),
            47 => 
            array (
                'id' => 50,
                'answer' => 'В гнездах',
                'image' => NULL,
                'game_id' => '15',
                'created_at' => '2020-03-05 18:19:10',
                'updated_at' => '2020-03-05 18:19:10',
            ),
            48 => 
            array (
                'id' => 51,
                'answer' => 'В берлогах',
                'image' => NULL,
                'game_id' => '15',
                'created_at' => '2020-03-05 18:19:10',
                'updated_at' => '2020-03-05 18:19:10',
            ),
            49 => 
            array (
                'id' => 52,
                'answer' => NULL,
                'image' => '55300b8f746ea8be04a14bbf8943b015.png',
                'game_id' => '16',
                'created_at' => '2020-03-05 18:36:21',
                'updated_at' => '2020-03-05 18:36:21',
            ),
            50 => 
            array (
                'id' => 53,
                'answer' => NULL,
                'image' => 'flying-granny.png',
                'game_id' => '16',
                'created_at' => '2020-03-05 18:36:21',
                'updated_at' => '2020-03-05 18:36:21',
            ),
            51 => 
            array (
                'id' => 54,
                'answer' => NULL,
                'image' => 'm5a9ff4c3.png',
                'game_id' => '16',
                'created_at' => '2020-03-05 18:36:21',
                'updated_at' => '2020-03-05 18:36:21',
            ),
            52 => 
            array (
                'id' => 55,
                'answer' => 'Синий',
                'image' => NULL,
                'game_id' => '17',
                'created_at' => '2020-03-05 18:46:09',
                'updated_at' => '2020-03-05 18:46:09',
            ),
            53 => 
            array (
                'id' => 56,
                'answer' => 'Красный',
                'image' => NULL,
                'game_id' => '17',
                'created_at' => '2020-03-05 18:46:09',
                'updated_at' => '2020-03-05 18:46:09',
            ),
            54 => 
            array (
                'id' => 57,
                'answer' => 'Розовый',
                'image' => NULL,
                'game_id' => '17',
                'created_at' => '2020-03-05 18:46:09',
                'updated_at' => '2020-03-05 18:46:09',
            ),
            55 => 
            array (
                'id' => 58,
                'answer' => 'Зеленый',
                'image' => NULL,
                'game_id' => '17',
                'created_at' => '2020-03-05 18:46:09',
                'updated_at' => '2020-03-05 18:46:09',
            ),
            56 => 
            array (
                'id' => 59,
                'answer' => 'Танцор',
                'image' => NULL,
                'game_id' => '18',
                'created_at' => '2020-03-05 18:48:31',
                'updated_at' => '2020-03-05 18:48:31',
            ),
            57 => 
            array (
                'id' => 60,
                'answer' => 'Актер',
                'image' => NULL,
                'game_id' => '18',
                'created_at' => '2020-03-05 18:48:31',
                'updated_at' => '2020-03-05 18:48:31',
            ),
            58 => 
            array (
                'id' => 61,
                'answer' => 'Певец',
                'image' => NULL,
                'game_id' => '18',
                'created_at' => '2020-03-05 18:48:31',
                'updated_at' => '2020-03-05 18:48:31',
            ),
            59 => 
            array (
                'id' => 62,
                'answer' => 'Художник',
                'image' => NULL,
                'game_id' => '18',
                'created_at' => '2020-03-05 18:48:31',
                'updated_at' => '2020-03-05 18:48:31',
            ),
            60 => 
            array (
                'id' => 63,
                'answer' => 'Флора',
                'image' => NULL,
                'game_id' => '19',
                'created_at' => '2020-03-05 18:51:25',
                'updated_at' => '2020-03-05 18:51:25',
            ),
            61 => 
            array (
                'id' => 64,
                'answer' => 'Стелла',
                'image' => NULL,
                'game_id' => '19',
                'created_at' => '2020-03-05 18:51:25',
                'updated_at' => '2020-03-05 18:51:25',
            ),
            62 => 
            array (
                'id' => 65,
                'answer' => 'Блум',
                'image' => NULL,
                'game_id' => '19',
                'created_at' => '2020-03-05 18:51:25',
                'updated_at' => '2020-03-05 18:51:25',
            ),
            63 => 
            array (
                'id' => 66,
                'answer' => 'Текна',
                'image' => NULL,
                'game_id' => '19',
                'created_at' => '2020-03-05 18:51:25',
                'updated_at' => '2020-03-05 18:51:25',
            ),
            64 => 
            array (
                'id' => 67,
                'answer' => 'Карандаш',
                'image' => NULL,
                'game_id' => '20',
                'created_at' => '2020-03-05 18:53:49',
                'updated_at' => '2020-03-05 18:53:49',
            ),
            65 => 
            array (
                'id' => 68,
                'answer' => 'Фломастер',
                'image' => NULL,
                'game_id' => '20',
                'created_at' => '2020-03-05 18:53:49',
                'updated_at' => '2020-03-05 18:53:49',
            ),
            66 => 
            array (
                'id' => 69,
                'answer' => 'Маркер',
                'image' => NULL,
                'game_id' => '20',
                'created_at' => '2020-03-05 18:53:49',
                'updated_at' => '2020-03-05 18:53:49',
            ),
            67 => 
            array (
                'id' => 70,
                'answer' => 'Резинка',
                'image' => NULL,
                'game_id' => '20',
                'created_at' => '2020-03-05 18:53:49',
                'updated_at' => '2020-03-05 18:53:49',
            ),
            68 => 
            array (
                'id' => 71,
                'answer' => 'Молоток',
                'image' => NULL,
                'game_id' => '21',
                'created_at' => '2020-03-05 18:55:44',
                'updated_at' => '2020-03-05 18:55:44',
            ),
            69 => 
            array (
                'id' => 72,
                'answer' => 'Ножницы',
                'image' => NULL,
                'game_id' => '21',
                'created_at' => '2020-03-05 18:55:44',
                'updated_at' => '2020-03-05 18:55:44',
            ),
            70 => 
            array (
                'id' => 73,
                'answer' => 'Пила',
                'image' => NULL,
                'game_id' => '21',
                'created_at' => '2020-03-05 18:55:44',
                'updated_at' => '2020-03-05 18:55:44',
            ),
            71 => 
            array (
                'id' => 74,
                'answer' => 'Нож',
                'image' => NULL,
                'game_id' => '21',
                'created_at' => '2020-03-05 18:55:44',
                'updated_at' => '2020-03-05 18:55:44',
            ),
        ));
        
        
    }
}