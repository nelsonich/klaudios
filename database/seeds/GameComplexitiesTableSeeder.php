<?php

use Illuminate\Database\Seeder;

class GameComplexitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('game_complexities')->delete();
        
        \DB::table('game_complexities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'новичок',
                'image' => 'newbie.png',
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-04 10:43:59',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'опытный',
                'image' => 'experienced.png',
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-04 10:43:59',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'эксперт',
                'image' => 'expert.png',
                'created_at' => '2020-03-04 10:43:59',
                'updated_at' => '2020-03-04 10:43:59',
            ),
        ));
        
        
    }
}