<?php

use Illuminate\Database\Seeder;

class StaticInformationTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('static_information')->delete();
        
        \DB::table('static_information')->insert(array (
            0 => 
            array (
                'id' => 1,
                'logo' => 'klaudios.png',
                'description' => '<p>Join the millions of people who organize life and work with Klaudios.</p>',
                'place' => 'Armenia Abovyan',
                'phone' => '093-33-55-86',
                'email' => 'xachatryan.nelsonich@gmail.com',
                'instagram_link' => 'https://www.instagram.com/klaudios.change/',
                'facebook_link' => 'https://www.facebook.com/klaudios.klaudios.370',
                'twitter_link' => 'https://twitter.com/klaudios12',
                'created_at' => '2020-02-25 23:20:02',
                'updated_at' => '2020-02-25 23:23:27',
            ),
        ));
        
        
    }
}