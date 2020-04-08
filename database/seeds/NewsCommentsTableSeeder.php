<?php

use Illuminate\Database\Seeder;

class NewsCommentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('news_comments')->delete();
        
        \DB::table('news_comments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => '1',
                'news_id' => '5',
                'comment' => 'Comment 1',
                'created_at' => '2020-02-23 23:43:42',
                'updated_at' => '2020-02-23 23:43:42',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => '2',
                'news_id' => '5',
                'comment' => 'Cooment 2',
                'created_at' => '2020-02-23 23:44:54',
                'updated_at' => '2020-02-23 23:44:54',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => '1',
                'news_id' => '3',
                'comment' => 'comment',
                'created_at' => '2020-02-25 22:59:36',
                'updated_at' => '2020-02-25 22:59:36',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => '1',
                'news_id' => '9',
                'comment' => 'hello',
                'created_at' => '2020-02-26 23:22:14',
                'updated_at' => '2020-02-26 23:22:14',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => '10',
                'news_id' => '1',
                'comment' => 'Test',
                'created_at' => '2020-03-08 17:23:16',
                'updated_at' => '2020-03-08 17:23:16',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => '2',
                'news_id' => '1#!',
                'comment' => 'lavna',
                'created_at' => '2020-04-04 15:46:46',
                'updated_at' => '2020-04-04 15:46:46',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => '2',
                'news_id' => '4',
                'comment' => 'shat lavn e',
                'created_at' => '2020-04-04 18:16:00',
                'updated_at' => '2020-04-04 18:16:00',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => '2',
                'news_id' => '1',
                'comment' => 'Test 1',
                'created_at' => '2020-04-05 14:50:20',
                'updated_at' => '2020-04-05 14:50:20',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => '1',
                'news_id' => '1',
                'comment' => 'Test 2',
                'created_at' => '2020-04-05 15:03:03',
                'updated_at' => '2020-04-05 15:03:03',
            ),
        ));
        
        
    }
}