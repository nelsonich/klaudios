<?php

use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('games')->delete();
        
        \DB::table('games')->insert(array (
            0 => 
            array (
                'id' => 1,
                'question' => '<p>Укажи лишний транспорт.</p>',
                'image' => NULL,
                'game_category_id' => '1',
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-04 10:43:59',
            ),
            1 => 
            array (
                'id' => 2,
                'question' => '<p>Выбери карандаш.<br>НЕ синий и НЕ жёлтый.<br>НЕ самый длинный и НЕ самый короткий.</p>',
                'image' => NULL,
                'game_category_id' => '1',
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-04 10:43:59',
            ),
            2 => 
            array (
                'id' => 3,
                'question' => '<p>Гусеница не длиннее червяка.<br>Червяк не длиннее гусеницы.<br>Кто длиннее?</p>',
                'image' => NULL,
                'game_category_id' => '1',
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-04 10:43:59',
            ),
            3 => 
            array (
                'id' => 4,
                'question' => '<p>Укажи коробку, если:<br>- она красного цвета;<br>- дно круглое;<br>- коробка высокая.</p>',
                'image' => NULL,
                'game_category_id' => '1',
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-04 10:43:59',
            ),
            4 => 
            array (
                'id' => 5,
                'question' => '<p>Укажи лишнее.</p>',
                'image' => NULL,
                'game_category_id' => '2',
                'created_at' => '2020-03-05 14:47:33',
                'updated_at' => '2020-03-05 14:47:33',
            ),
            5 => 
            array (
                'id' => 6,
                'question' => '<p>Укажи лишний предмет.</p>',
                'image' => NULL,
                'game_category_id' => '2',
                'created_at' => '2020-03-05 17:41:04',
                'updated_at' => '2020-03-05 17:41:04',
            ),
            6 => 
            array (
                'id' => 7,
                'question' => '<p>Он не лает, не кусает и в дом не пускает...</p>',
                'image' => NULL,
                'game_category_id' => '1',
                'created_at' => '2020-03-05 17:57:07',
                'updated_at' => '2020-03-05 17:57:07',
            ),
            7 => 
            array (
                'id' => 8,
                'question' => '<p>Кто рано утром будит всех...</p>',
                'image' => NULL,
                'game_category_id' => '1',
                'created_at' => '2020-03-05 18:34:38',
                'updated_at' => '2020-03-05 18:34:38',
            ),
            8 => 
            array (
                'id' => 9,
                'question' => '<p>Кто из них золушка...</p>',
                'image' => NULL,
                'game_category_id' => '1',
                'created_at' => '2020-03-05 18:43:08',
                'updated_at' => '2020-03-05 18:43:08',
            ),
            9 => 
            array (
                'id' => 10,
                'question' => '<p>Кто из них Симка...</p>',
                'image' => NULL,
                'game_category_id' => '1',
                'created_at' => '2020-03-05 18:52:14',
                'updated_at' => '2020-03-05 18:52:14',
            ),
            10 => 
            array (
                'id' => 11,
                'question' => '<p>Кого не было среди бременских музыкантов...</p>',
                'image' => NULL,
                'game_category_id' => '1',
                'created_at' => '2020-03-05 19:06:41',
                'updated_at' => '2020-03-05 19:06:41',
            ),
            11 => 
            array (
                'id' => 13,
                'question' => '<p>Сколько гласных в слове отец...</p>',
                'image' => NULL,
                'game_category_id' => '1',
                'created_at' => '2020-03-05 19:13:52',
                'updated_at' => '2020-03-05 19:13:52',
            ),
            12 => 
            array (
                'id' => 14,
            'question' => '<p>Сколько будет (9+1)-2...</p>',
                'image' => NULL,
                'game_category_id' => '1',
                'created_at' => '2020-03-05 19:16:25',
                'updated_at' => '2020-03-05 19:16:25',
            ),
            13 => 
            array (
                'id' => 15,
                'question' => '<p>Где живут медведи...</p>',
                'image' => NULL,
                'game_category_id' => '1',
                'created_at' => '2020-03-05 19:18:35',
                'updated_at' => '2020-03-05 19:18:35',
            ),
            14 => 
            array (
                'id' => 16,
                'question' => '<p>Кто из них баба яга...</p>',
                'image' => NULL,
                'game_category_id' => '1',
                'created_at' => '2020-03-05 19:24:39',
                'updated_at' => '2020-03-05 19:24:39',
            ),
            15 => 
            array (
                'id' => 17,
                'question' => '<p>Какого цвета нет в радуге...</p>',
                'image' => NULL,
                'game_category_id' => '2',
                'created_at' => '2020-03-05 19:43:11',
                'updated_at' => '2020-03-05 19:43:11',
            ),
            16 => 
            array (
                'id' => 18,
                'question' => '<p>Как называют того кто поет...</p>',
                'image' => NULL,
                'game_category_id' => '1',
                'created_at' => '2020-03-05 19:47:30',
                'updated_at' => '2020-03-05 19:47:30',
            ),
            17 => 
            array (
                'id' => 19,
                'question' => '<p>У кого из Винксов были красные волосы...</p>',
                'image' => NULL,
                'game_category_id' => '1',
                'created_at' => '2020-03-05 19:50:48',
                'updated_at' => '2020-03-05 19:50:48',
            ),
            18 => 
            array (
                'id' => 20,
                'question' => '<p>Какой предмет лишний...</p>',
                'image' => NULL,
                'game_category_id' => '2',
                'created_at' => '2020-03-05 19:53:05',
                'updated_at' => '2020-03-05 19:53:05',
            ),
            19 => 
            array (
                'id' => 21,
                'question' => '<p>Какой предмет лишний...</p>',
                'image' => NULL,
                'game_category_id' => '2',
                'created_at' => '2020-03-05 19:55:05',
                'updated_at' => '2020-03-05 19:55:05',
            ),
            20 => 
            array (
                'id' => 22,
                'question' => '<p>Когда выпадает снег...</p>',
                'image' => NULL,
                'game_category_id' => '1',
                'created_at' => '2020-03-06 11:07:33',
                'updated_at' => '2020-03-06 11:07:33',
            ),
            21 => 
            array (
                'id' => 23,
            'question' => '<p>Сколько будет (8+2)-9...</p>',
                'image' => NULL,
                'game_category_id' => '1',
                'created_at' => '2020-03-06 11:12:20',
                'updated_at' => '2020-03-06 11:12:20',
            ),
            22 => 
            array (
                'id' => 24,
                'question' => '<p>Что сделал старик поймав золотую рыбку...</p>',
                'image' => NULL,
                'game_category_id' => '2',
                'created_at' => '2020-03-06 11:55:18',
                'updated_at' => '2020-03-06 11:55:18',
            ),
            23 => 
            array (
                'id' => 25,
                'question' => '<p><strong>Что можно повесить на елку...</strong></p>',
                'image' => NULL,
                'game_category_id' => '1',
                'created_at' => '2020-03-06 12:02:36',
                'updated_at' => '2020-03-06 12:02:36',
            ),
            24 => 
            array (
                'id' => 26,
                'question' => '<p>Что здесь лишнее...</p>',
                'image' => NULL,
                'game_category_id' => '2',
                'created_at' => '2020-03-06 12:23:17',
                'updated_at' => '2020-03-06 12:23:17',
            ),
            25 => 
            array (
                'id' => 27,
                'question' => '<p>Кто из них лишний...</p>',
                'image' => NULL,
                'game_category_id' => '1',
                'created_at' => '2020-03-06 12:39:04',
                'updated_at' => '2020-03-06 12:39:04',
            ),
            26 => 
            array (
                'id' => 28,
                'question' => '<p>Укажи лишнего...</p>',
                'image' => NULL,
                'game_category_id' => '1',
                'created_at' => '2020-03-06 12:46:47',
                'updated_at' => '2020-03-06 12:46:47',
            ),
            27 => 
            array (
                'id' => 29,
                'question' => '<p>Укажи лишнего...</p>',
                'image' => NULL,
                'game_category_id' => '2',
                'created_at' => '2020-03-06 12:54:57',
                'updated_at' => '2020-03-06 12:54:57',
            ),
            28 => 
            array (
                'id' => 30,
                'question' => '<p>Сколько дней в неделе...</p>',
                'image' => NULL,
                'game_category_id' => '1',
                'created_at' => '2020-03-06 13:05:12',
                'updated_at' => '2020-03-06 13:05:12',
            ),
            29 => 
            array (
                'id' => 31,
                'question' => '<p>Зимой и летом одним цветом...</p>',
                'image' => NULL,
                'game_category_id' => '1',
                'created_at' => '2020-03-06 13:07:42',
                'updated_at' => '2020-03-06 13:07:42',
            ),
            30 => 
            array (
                'id' => 32,
                'question' => '<p><strong>Кто здесь лишний...</strong></p>',
                'image' => NULL,
                'game_category_id' => '1',
                'created_at' => '2020-03-06 13:50:56',
                'updated_at' => '2020-03-06 13:50:56',
            ),
            31 => 
            array (
                'id' => 33,
                'question' => '<p><strong>Кто здесь лишний...</strong></p>',
                'image' => NULL,
                'game_category_id' => '2',
                'created_at' => '2020-03-06 13:54:05',
                'updated_at' => '2020-03-06 13:54:05',
            ),
            32 => 
            array (
                'id' => 34,
                'question' => '<p>Сложи из двух картинок одну.</p>',
                'image' => '20200307164804.png',
                'game_category_id' => '3',
                'created_at' => '2020-03-07 17:48:04',
                'updated_at' => '2020-03-07 17:48:04',
            ),
            33 => 
            array (
                'id' => 35,
                'question' => '<p>Сложи из двух картинок одну.</p>',
                'image' => '20200307164950.png',
                'game_category_id' => '3',
                'created_at' => '2020-03-07 17:49:50',
                'updated_at' => '2020-03-07 17:49:50',
            ),
            34 => 
            array (
                'id' => 36,
                'question' => '<p>Сложи из двух картинок одну.</p>',
                'image' => '20200307170641.png',
                'game_category_id' => '3',
                'created_at' => '2020-03-07 18:06:41',
                'updated_at' => '2020-03-07 18:06:41',
            ),
            35 => 
            array (
                'id' => 37,
                'question' => '<p>Продолжи ряд.</p>',
                'image' => '20200307171840.png',
                'game_category_id' => '4',
                'created_at' => '2020-03-07 18:18:40',
                'updated_at' => '2020-03-07 18:18:40',
            ),
            36 => 
            array (
                'id' => 38,
                'question' => '<p>Продолжи ряд.</p>',
                'image' => '20200307174716.png',
                'game_category_id' => '4',
                'created_at' => '2020-03-07 18:47:16',
                'updated_at' => '2020-03-07 18:47:16',
            ),
            37 => 
            array (
                'id' => 39,
                'question' => '<p>Продолжи ряд.</p><p><strong>3, 4, 6, 9 ...</strong></p>',
                'image' => NULL,
                'game_category_id' => '4',
                'created_at' => '2020-03-07 18:53:33',
                'updated_at' => '2020-03-07 18:53:33',
            ),
            38 => 
            array (
                'id' => 40,
                'question' => '<p>Продолжи ряд.</p><p>3, 4, 7, 11 ...</p>',
                'image' => NULL,
                'game_category_id' => '4',
                'created_at' => '2020-03-07 18:58:23',
                'updated_at' => '2020-03-07 18:58:23',
            ),
            39 => 
            array (
                'id' => 41,
                'question' => '<p>Какой инструмент лишний...</p>',
                'image' => NULL,
                'game_category_id' => '2',
                'created_at' => '2020-03-09 15:55:29',
                'updated_at' => '2020-03-09 15:55:29',
            ),
            40 => 
            array (
                'id' => 42,
                'question' => '<p>Укажи лишнее...</p>',
                'image' => NULL,
                'game_category_id' => '2',
                'created_at' => '2020-03-09 16:00:19',
                'updated_at' => '2020-03-09 16:00:19',
            ),
            41 => 
            array (
                'id' => 43,
                'question' => '<p>Какой лишний...</p>',
                'image' => NULL,
                'game_category_id' => '2',
                'created_at' => '2020-03-09 16:02:59',
                'updated_at' => '2020-03-09 16:02:59',
            ),
            42 => 
            array (
                'id' => 44,
                'question' => '<p>Укажи разницу...</p>',
                'image' => NULL,
                'game_category_id' => '2',
                'created_at' => '2020-03-09 16:05:26',
                'updated_at' => '2020-03-09 16:05:26',
            ),
            43 => 
            array (
                'id' => 45,
                'question' => '<p>Кто лишний...</p>',
                'image' => NULL,
                'game_category_id' => '2',
                'created_at' => '2020-03-09 17:18:08',
                'updated_at' => '2020-03-09 17:18:08',
            ),
            44 => 
            array (
                'id' => 46,
                'question' => '<p>Укажи лишнее...</p>',
                'image' => NULL,
                'game_category_id' => '2',
                'created_at' => '2020-03-09 17:26:15',
                'updated_at' => '2020-03-09 17:26:15',
            ),
            45 => 
            array (
                'id' => 47,
                'question' => '<p>Какой камень лишний...</p>',
                'image' => NULL,
                'game_category_id' => '5',
                'created_at' => '2020-03-09 17:42:17',
                'updated_at' => '2020-03-09 17:42:17',
            ),
            46 => 
            array (
                'id' => 48,
                'question' => '<p>Какой металл лишний...</p>',
                'image' => NULL,
                'game_category_id' => '5',
                'created_at' => '2020-03-09 18:05:32',
                'updated_at' => '2020-03-09 18:05:32',
            ),
            47 => 
            array (
                'id' => 49,
                'question' => '<p>Укажи лишний...</p>',
                'image' => NULL,
                'game_category_id' => '5',
                'created_at' => '2020-03-10 11:52:39',
                'updated_at' => '2020-03-10 11:52:39',
            ),
            48 => 
            array (
                'id' => 50,
                'question' => '<p>Укажи лишнего...</p>',
                'image' => NULL,
                'game_category_id' => '5',
                'created_at' => '2020-03-10 12:20:48',
                'updated_at' => '2020-03-10 12:20:48',
            ),
            49 => 
            array (
                'id' => 51,
                'question' => '<p>Выбери правельный ответ...</p>',
                'image' => NULL,
                'game_category_id' => '5',
                'created_at' => '2020-03-10 15:35:56',
                'updated_at' => '2020-03-10 15:35:56',
            ),
            50 => 
            array (
                'id' => 52,
                'question' => '<p>Какой цветок лишний...</p>',
                'image' => NULL,
                'game_category_id' => '5',
                'created_at' => '2020-03-10 15:39:39',
                'updated_at' => '2020-03-10 15:39:39',
            ),
            51 => 
            array (
                'id' => 53,
                'question' => '<p>Укажи лишнюю букву...</p>',
                'image' => NULL,
                'game_category_id' => '2',
                'created_at' => '2020-03-12 07:01:54',
                'updated_at' => '2020-03-12 07:01:54',
            ),
            52 => 
            array (
                'id' => 54,
                'question' => '<p>Что здесь лишнее...</p>',
                'image' => NULL,
                'game_category_id' => '2',
                'created_at' => '2020-03-12 07:04:39',
                'updated_at' => '2020-03-12 07:04:39',
            ),
            53 => 
            array (
                'id' => 55,
                'question' => '<p>Укажи лишнее слово...</p>',
                'image' => NULL,
                'game_category_id' => '5',
                'created_at' => '2020-03-12 07:37:03',
                'updated_at' => '2020-03-12 07:37:03',
            ),
            54 => 
            array (
                'id' => 56,
                'question' => '<p>Укажи лишнее...</p>',
                'image' => NULL,
                'game_category_id' => '2',
                'created_at' => '2020-03-12 07:44:44',
                'updated_at' => '2020-03-12 07:44:44',
            ),
            55 => 
            array (
                'id' => 57,
                'question' => '<p>Какой лишний...</p>',
                'image' => NULL,
                'game_category_id' => '2',
                'created_at' => '2020-03-12 07:48:36',
                'updated_at' => '2020-03-12 07:48:36',
            ),
            56 => 
            array (
                'id' => 58,
                'question' => '<p>Что лишнее...</p>',
                'image' => NULL,
                'game_category_id' => '2',
                'created_at' => '2020-03-12 07:54:19',
                'updated_at' => '2020-03-12 07:54:19',
            ),
            57 => 
            array (
                'id' => 59,
                'question' => '<p>Укажи лишнее...</p>',
                'image' => NULL,
                'game_category_id' => '2',
                'created_at' => '2020-03-12 08:06:42',
                'updated_at' => '2020-03-12 08:06:42',
            ),
            58 => 
            array (
                'id' => 60,
                'question' => '<p>Какое лишнее...</p>',
                'image' => NULL,
                'game_category_id' => '5',
                'created_at' => '2020-03-12 08:13:45',
                'updated_at' => '2020-03-12 08:13:45',
            ),
            59 => 
            array (
                'id' => 61,
                'question' => '<p>Какой лишний...</p>',
                'image' => NULL,
                'game_category_id' => '5',
                'created_at' => '2020-03-12 11:12:37',
                'updated_at' => '2020-03-12 11:12:37',
            ),
            60 => 
            array (
                'id' => 62,
                'question' => '<p>Укажи лишнего...</p>',
                'image' => NULL,
                'game_category_id' => '2',
                'created_at' => '2020-03-12 11:16:55',
                'updated_at' => '2020-03-12 11:16:55',
            ),
            61 => 
            array (
                'id' => 63,
                'question' => '<p>Какой лишний...</p>',
                'image' => NULL,
                'game_category_id' => '2',
                'created_at' => '2020-03-12 11:19:06',
                'updated_at' => '2020-03-12 11:19:06',
            ),
        ));
        
        
    }
}