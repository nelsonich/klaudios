<?php

use Illuminate\Database\Seeder;

class LikeNewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('like_news')->delete();
        
        \DB::table('like_news')->insert(array (
            0 => 
            array (
                'id' => 2,
                'user_id' => '1',
                'news_id' => '2',
                'created_at' => '2020-02-23 21:43:05',
                'updated_at' => '2020-02-23 21:43:05',
            ),
            1 => 
            array (
                'id' => 4,
                'user_id' => '1',
                'news_id' => '6',
                'created_at' => '2020-02-23 21:43:11',
                'updated_at' => '2020-02-23 21:43:11',
            ),
            2 => 
            array (
                'id' => 5,
                'user_id' => '1',
                'news_id' => '10',
                'created_at' => '2020-02-23 21:43:13',
                'updated_at' => '2020-02-23 21:43:13',
            ),
            3 => 
            array (
                'id' => 6,
                'user_id' => '1',
                'news_id' => '5',
                'created_at' => '2020-02-23 21:43:27',
                'updated_at' => '2020-02-23 21:43:27',
            ),
            4 => 
            array (
                'id' => 7,
                'user_id' => '2',
                'news_id' => '1',
                'created_at' => '2020-02-23 21:44:05',
                'updated_at' => '2020-02-23 21:44:05',
            ),
            5 => 
            array (
                'id' => 8,
                'user_id' => '2',
                'news_id' => '2',
                'created_at' => '2020-02-23 21:44:07',
                'updated_at' => '2020-02-23 21:44:07',
            ),
            6 => 
            array (
                'id' => 9,
                'user_id' => '2',
                'news_id' => '3',
                'created_at' => '2020-02-23 21:44:08',
                'updated_at' => '2020-02-23 21:44:08',
            ),
            7 => 
            array (
                'id' => 10,
                'user_id' => '2',
                'news_id' => '5',
                'created_at' => '2020-02-23 21:44:10',
                'updated_at' => '2020-02-23 21:44:10',
            ),
            8 => 
            array (
                'id' => 12,
                'user_id' => '3',
                'news_id' => '6',
                'created_at' => '2020-02-24 07:50:12',
                'updated_at' => '2020-02-24 07:50:12',
            ),
            9 => 
            array (
                'id' => 13,
                'user_id' => '2',
                'news_id' => '6',
                'created_at' => '2020-02-25 11:24:39',
                'updated_at' => '2020-02-25 11:24:39',
            ),
            10 => 
            array (
                'id' => 14,
                'user_id' => '7',
                'news_id' => '1',
                'created_at' => '2020-02-25 11:39:37',
                'updated_at' => '2020-02-25 11:39:37',
            ),
            11 => 
            array (
                'id' => 15,
                'user_id' => '7',
                'news_id' => '3',
                'created_at' => '2020-02-25 11:39:39',
                'updated_at' => '2020-02-25 11:39:39',
            ),
            12 => 
            array (
                'id' => 16,
                'user_id' => '1',
                'news_id' => '1',
                'created_at' => '2020-02-25 20:58:12',
                'updated_at' => '2020-02-25 20:58:12',
            ),
            13 => 
            array (
                'id' => 17,
                'user_id' => '1',
                'news_id' => '3',
                'created_at' => '2020-02-25 20:58:17',
                'updated_at' => '2020-02-25 20:58:17',
            ),
        ));
        
        
    }
}