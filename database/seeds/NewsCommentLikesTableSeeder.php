<?php

use Illuminate\Database\Seeder;

class NewsCommentLikesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('news_comment_likes')->delete();
        
        \DB::table('news_comment_likes')->insert(array (
            0 => 
            array (
                'id' => 2,
                'user_id' => '10',
                'comment_id' => '5',
                'created_at' => '2020-03-08 17:23:35',
                'updated_at' => '2020-03-08 17:23:35',
            ),
            1 => 
            array (
                'id' => 3,
                'user_id' => '2',
                'comment_id' => '4',
                'created_at' => '2020-04-03 20:25:11',
                'updated_at' => '2020-04-03 20:25:11',
            ),
            2 => 
            array (
                'id' => 4,
                'user_id' => '2',
                'comment_id' => '7',
                'created_at' => '2020-04-04 18:16:04',
                'updated_at' => '2020-04-04 18:16:04',
            ),
            3 => 
            array (
                'id' => 5,
                'user_id' => '2',
                'comment_id' => '6',
                'created_at' => '2020-04-04 18:55:39',
                'updated_at' => '2020-04-04 18:55:39',
            ),
        ));
        
        
    }
}