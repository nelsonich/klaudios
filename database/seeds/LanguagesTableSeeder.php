<?php

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('languages')->delete();
        
        \DB::table('languages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'lang' => 'ru',
                'image' => 'ru.png',
                'status' => '1',
                'created_at' => '2020-03-05 21:24:18',
                'updated_at' => '2020-03-05 21:24:18',
            ),
            1 => 
            array (
                'id' => 2,
                'lang' => 'en',
                'image' => 'en.png',
                'status' => '1',
                'created_at' => '2020-03-05 21:24:18',
                'updated_at' => '2020-03-05 21:24:18',
            ),
            2 => 
            array (
                'id' => 3,
                'lang' => 'am',
                'image' => 'am.png',
                'status' => '1',
                'created_at' => '2020-03-05 21:24:18',
                'updated_at' => '2020-03-05 21:24:18',
            ),
        ));
        
        
    }
}