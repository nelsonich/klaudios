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
                'created_at' => '2020-02-23 22:43:42',
                'updated_at' => '2020-02-23 22:43:42',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => '2',
                'news_id' => '5',
                'comment' => 'Cooment 2',
                'created_at' => '2020-02-23 22:44:54',
                'updated_at' => '2020-02-23 22:44:54',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => '1',
                'news_id' => '3',
                'comment' => 'comment',
                'created_at' => '2020-02-25 21:59:36',
                'updated_at' => '2020-02-25 21:59:36',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => '1',
                'news_id' => '9',
                'comment' => 'hello',
                'created_at' => '2020-02-26 22:22:14',
                'updated_at' => '2020-02-26 22:22:14',
            ),
        ));
        
        
    }
}