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
                'created_at' => '2020-03-04 09:43:59',
                'updated_at' => '2020-03-04 09:43:59',
            ),
            1 => 
            array (
                'id' => 2,
                'question' => '<p>Выбери карандаш.<br>НЕ синий и НЕ жёлтый.<br>НЕ самый длинный и НЕ самый короткий.</p>',
                'image' => NULL,
                'game_category_id' => '1',
                'created_at' => '2020-03-04 09:43:59',
                'updated_at' => '2020-03-04 09:43:59',
            ),
            2 => 
            array (
                'id' => 3,
                'question' => '<p>Гусеница не длиннее червяка.<br>Червяк не длиннее гусеницы.<br>Кто длиннее?</p>',
                'image' => 'caterpillar-and-worm.png',
                'game_category_id' => '1',
                'created_at' => '2020-03-04 09:43:59',
                'updated_at' => '2020-03-04 09:43:59',
            ),
            3 => 
            array (
                'id' => 4,
                'question' => '<p>Укажи коробку, если:<br>- она красного цвета;<br>- дно круглое;<br>- коробка высокая.</p>',
                'image' => NULL,
                'game_category_id' => '1',
                'created_at' => '2020-03-04 09:43:59',
                'updated_at' => '2020-03-04 09:43:59',
            ),
            4 => 
            array (
                'id' => 5,
                'question' => '<p>Укажи лишнее.</p>',
                'image' => NULL,
                'game_category_id' => '2',
                'created_at' => '2020-03-05 13:47:33',
                'updated_at' => '2020-03-05 13:47:33',
            ),
            5 => 
            array (
                'id' => 6,
                'question' => '<p>Укажи лишний предмет.</p>',
                'image' => NULL,
                'game_category_id' => '2',
                'created_at' => '2020-03-05 16:41:04',
                'updated_at' => '2020-03-05 16:41:04',
            ),
            6 => 
            array (
                'id' => 7,
                'question' => '<p>Он не лает, не кусает и в дом не пускает...</p>',
                'image' => NULL,
                'game_category_id' => '1',
                'created_at' => '2020-03-05 16:57:07',
                'updated_at' => '2020-03-05 16:57:07',
            ),
            7 => 
            array (
                'id' => 8,
                'question' => '<p>Кто рано утром будит всех...</p>',
                'image' => NULL,
                'game_category_id' => '1',
                'created_at' => '2020-03-05 17:34:38',
                'updated_at' => '2020-03-05 17:34:38',
            ),
            8 => 
            array (
                'id' => 9,
                'question' => '<p>Кто из них золушка...</p>',
                'image' => NULL,
                'game_category_id' => '1',
                'created_at' => '2020-03-05 17:43:08',
                'updated_at' => '2020-03-05 17:43:08',
            ),
            9 => 
            array (
                'id' => 10,
                'question' => '<p>Кто из них Симка...</p>',
                'image' => NULL,
                'game_category_id' => '1',
                'created_at' => '2020-03-05 17:52:14',
                'updated_at' => '2020-03-05 17:52:14',
            ),
            10 => 
            array (
                'id' => 11,
                'question' => '<p>Кого не было среди бременских музыкантов...</p>',
                'image' => NULL,
                'game_category_id' => '1',
                'created_at' => '2020-03-05 18:06:41',
                'updated_at' => '2020-03-05 18:06:41',
            ),
            11 => 
            array (
                'id' => 13,
                'question' => '<p>Сколько гласных в слове отец...</p>',
                'image' => NULL,
                'game_category_id' => '1',
                'created_at' => '2020-03-05 18:13:52',
                'updated_at' => '2020-03-05 18:13:52',
            ),
            12 => 
            array (
                'id' => 14,
            'question' => '<p>Сколько будет (9+1)-2...</p>',
                'image' => NULL,
                'game_category_id' => '1',
                'created_at' => '2020-03-05 18:16:25',
                'updated_at' => '2020-03-05 18:16:25',
            ),
            13 => 
            array (
                'id' => 15,
                'question' => '<p>Где живут медведи...</p>',
                'image' => NULL,
                'game_category_id' => '1',
                'created_at' => '2020-03-05 18:18:35',
                'updated_at' => '2020-03-05 18:18:35',
            ),
            14 => 
            array (
                'id' => 16,
                'question' => '<p>Кто из них баба яга...</p>',
                'image' => NULL,
                'game_category_id' => '1',
                'created_at' => '2020-03-05 18:24:39',
                'updated_at' => '2020-03-05 18:24:39',
            ),
            15 => 
            array (
                'id' => 17,
                'question' => '<p>Какого цвета нет в радуге...</p>',
                'image' => NULL,
                'game_category_id' => '2',
                'created_at' => '2020-03-05 18:43:11',
                'updated_at' => '2020-03-05 18:43:11',
            ),
            16 => 
            array (
                'id' => 18,
                'question' => '<p>Как называют того кто поет...</p>',
                'image' => NULL,
                'game_category_id' => '1',
                'created_at' => '2020-03-05 18:47:30',
                'updated_at' => '2020-03-05 18:47:30',
            ),
            17 => 
            array (
                'id' => 19,
                'question' => '<p>У кого из Винксов были красные волосы...</p>',
                'image' => NULL,
                'game_category_id' => '1',
                'created_at' => '2020-03-05 18:50:48',
                'updated_at' => '2020-03-05 18:50:48',
            ),
            18 => 
            array (
                'id' => 20,
                'question' => '<p>Какой предмет лишний...</p>',
                'image' => NULL,
                'game_category_id' => '2',
                'created_at' => '2020-03-05 18:53:05',
                'updated_at' => '2020-03-05 18:53:05',
            ),
            19 => 
            array (
                'id' => 21,
                'question' => '<p>Какой предмет лишний...</p>',
                'image' => NULL,
                'game_category_id' => '2',
                'created_at' => '2020-03-05 18:55:05',
                'updated_at' => '2020-03-05 18:55:05',
            ),
        ));
        
        
    }
}