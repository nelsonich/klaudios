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
                'status' => 0,
                'created_at' => '2020-03-04 09:43:59',
                'updated_at' => '2020-03-04 09:43:59',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'четвертый лишний',
                'image' => 'fourth-extra.png',
                'complexity_id' => '1',
                'status' => 0,
                'created_at' => '2020-03-04 09:43:59',
                'updated_at' => '2020-03-04 09:43:59',
            ),
        ));
        
        
    }
}