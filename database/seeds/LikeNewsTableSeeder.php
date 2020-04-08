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
                'created_at' => '2020-02-23 23:43:05',
                'updated_at' => '2020-02-23 23:43:05',
            ),
            1 => 
            array (
                'id' => 4,
                'user_id' => '1',
                'news_id' => '6',
                'created_at' => '2020-02-23 23:43:11',
                'updated_at' => '2020-02-23 23:43:11',
            ),
            2 => 
            array (
                'id' => 5,
                'user_id' => '1',
                'news_id' => '10',
                'created_at' => '2020-02-23 23:43:13',
                'updated_at' => '2020-02-23 23:43:13',
            ),
            3 => 
            array (
                'id' => 6,
                'user_id' => '1',
                'news_id' => '5',
                'created_at' => '2020-02-23 23:43:27',
                'updated_at' => '2020-02-23 23:43:27',
            ),
            4 => 
            array (
                'id' => 8,
                'user_id' => '2',
                'news_id' => '2',
                'created_at' => '2020-02-23 23:44:07',
                'updated_at' => '2020-02-23 23:44:07',
            ),
            5 => 
            array (
                'id' => 10,
                'user_id' => '2',
                'news_id' => '5',
                'created_at' => '2020-02-23 23:44:10',
                'updated_at' => '2020-02-23 23:44:10',
            ),
            6 => 
            array (
                'id' => 12,
                'user_id' => '3',
                'news_id' => '6',
                'created_at' => '2020-02-24 09:50:12',
                'updated_at' => '2020-02-24 09:50:12',
            ),
            7 => 
            array (
                'id' => 14,
                'user_id' => '7',
                'news_id' => '1',
                'created_at' => '2020-02-25 13:39:37',
                'updated_at' => '2020-02-25 13:39:37',
            ),
            8 => 
            array (
                'id' => 15,
                'user_id' => '7',
                'news_id' => '3',
                'created_at' => '2020-02-25 13:39:39',
                'updated_at' => '2020-02-25 13:39:39',
            ),
            9 => 
            array (
                'id' => 16,
                'user_id' => '1',
                'news_id' => '1',
                'created_at' => '2020-02-25 22:58:12',
                'updated_at' => '2020-02-25 22:58:12',
            ),
            10 => 
            array (
                'id' => 17,
                'user_id' => '1',
                'news_id' => '3',
                'created_at' => '2020-02-25 22:58:17',
                'updated_at' => '2020-02-25 22:58:17',
            ),
            11 => 
            array (
                'id' => 18,
                'user_id' => '2',
                'news_id' => '10',
                'created_at' => '2020-02-26 19:01:43',
                'updated_at' => '2020-02-26 19:01:43',
            ),
            12 => 
            array (
                'id' => 19,
                'user_id' => '10',
                'news_id' => '1',
                'created_at' => '2020-02-28 19:02:07',
                'updated_at' => '2020-02-28 19:02:07',
            ),
            13 => 
            array (
                'id' => 20,
                'user_id' => '10',
                'news_id' => '4',
                'created_at' => '2020-02-28 19:02:53',
                'updated_at' => '2020-02-28 19:02:53',
            ),
            14 => 
            array (
                'id' => 21,
                'user_id' => '3',
                'news_id' => '1',
                'created_at' => '2020-03-08 16:07:16',
                'updated_at' => '2020-03-08 16:07:16',
            ),
            15 => 
            array (
                'id' => 23,
                'user_id' => '1',
                'news_id' => '4',
                'created_at' => '2020-03-11 07:46:29',
                'updated_at' => '2020-03-11 07:46:29',
            ),
            16 => 
            array (
                'id' => 25,
                'user_id' => '2',
                'news_id' => '9',
                'created_at' => '2020-04-03 20:26:57',
                'updated_at' => '2020-04-03 20:26:57',
            ),
            17 => 
            array (
                'id' => 27,
                'user_id' => '2',
                'news_id' => '6',
                'created_at' => '2020-04-04 18:30:40',
                'updated_at' => '2020-04-04 18:30:40',
            ),
            18 => 
            array (
                'id' => 28,
                'user_id' => '2',
                'news_id' => '3',
                'created_at' => '2020-04-04 18:32:22',
                'updated_at' => '2020-04-04 18:32:22',
            ),
            19 => 
            array (
                'id' => 29,
                'user_id' => '2',
                'news_id' => '4',
                'created_at' => '2020-04-04 18:49:29',
                'updated_at' => '2020-04-04 18:49:29',
            ),
            20 => 
            array (
                'id' => 30,
                'user_id' => '2',
                'news_id' => '1',
                'created_at' => '2020-04-04 19:12:12',
                'updated_at' => '2020-04-04 19:12:12',
            ),
            21 => 
            array (
                'id' => 31,
                'user_id' => '2',
                'news_id' => '8',
                'created_at' => '2020-04-05 15:37:39',
                'updated_at' => '2020-04-05 15:37:39',
            ),
        ));
        
        
    }
}