<?php

use Illuminate\Database\Seeder;

class GameCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('game_categories')->delete();
        
        \DB::table('game_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'разминка',
                'image' => 'warm-up.png',
                'complexity_id' => '1',
                'status' => 1,
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-07 17:52:25',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'четвертый лишний',
                'image' => 'fourth-extra.png',
                'complexity_id' => '1',
                'status' => 1,
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-07 17:52:28',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '3D-мышление',
                'image' => '20200307173555.png',
                'complexity_id' => '1',
                'status' => 1,
                'created_at' => '2020-03-07 17:35:26',
                'updated_at' => '2020-03-07 18:35:55',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Закономерности',
                'image' => '20200307173714.png',
                'complexity_id' => '1',
                'status' => 1,
                'created_at' => '2020-03-07 18:10:44',
                'updated_at' => '2020-03-07 18:37:14',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'четвертый лишний',
                'image' => 'warm-up.png',
                'complexity_id' => '2',
                'status' => 1,
                'created_at' => '2020-03-08 16:33:32',
                'updated_at' => '2020-03-10 20:14:47',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Множества',
                'image' => 'warm-up.png',
                'complexity_id' => '1',
                'status' => 0,
                'created_at' => '2020-03-09 18:35:39',
                'updated_at' => '2020-03-09 18:35:39',
            ),
        ));
        
        
    }
}