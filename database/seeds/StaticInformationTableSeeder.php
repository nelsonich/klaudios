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
                'description' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia doloribus laboriosam facilis est tenetur esse saepe consequatur. Reprehenderit explicabo iste quisquam iure, provident cupiditate maiores beatae veniam eligendi accusamus excepturi?</p>',
                'place' => 'Armenia Abovyan',
                'phone' => '093-33-55-86',
                'email' => 'xachatryan.nelsonich@gmail.com',
                'instagram_link' => 'https://www.instagram.com/klaudios.change/',
                'facebook_link' => 'https://www.facebook.com/klaudios.klaudios.370',
                'twitter_link' => 'https://twitter.com/klaudios12',
                'created_at' => '2020-02-25 22:20:02',
                'updated_at' => '2020-02-25 22:23:27',
            ),
        ));
        
        
    }
}