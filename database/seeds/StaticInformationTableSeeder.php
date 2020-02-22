<?php

use App\Models\StaticInformation;
use Illuminate\Database\Seeder;

class StaticInformationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StaticInformation::create([
            "logo" => "klaudios.png",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia doloribus laboriosam facilis est tenetur esse saepe consequatur. Reprehenderit explicabo iste quisquam iure, provident cupiditate maiores beatae veniam eligendi accusamus excepturi?",
            "place" => "Armenia Abovyan",
            "phone" => "093-33-55-86",
            "email" => "xachatryan.nelsonich@gmail.com",
            "instagram_link" => "#",
            "facebook_link" => "#",
            "twitter_link" => "#",
        ]);
    }
}
