<?php

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Faq::create([
            "title" => "Lorem ipsum dolor sit",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia doloribus laboriosam facilis est tenetur esse saepe consequatur. Reprehenderit explicabo iste quisquam iure, provident cupiditate maiores beatae veniam eligendi accusamus excepturi?",
            "lang" => "en",
        ]);

        Faq::create([
            "title" => "Lorem ipsum dolor sit",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia doloribus laboriosam facilis est tenetur esse saepe consequatur. Reprehenderit explicabo iste quisquam iure, provident cupiditate maiores beatae veniam eligendi accusamus excepturi?",
            "lang" => "am",
        ]);

        Faq::create([
            "title" => "Lorem ipsum dolor sit",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia doloribus laboriosam facilis est tenetur esse saepe consequatur. Reprehenderit explicabo iste quisquam iure, provident cupiditate maiores beatae veniam eligendi accusamus excepturi?",
            "lang" => "ru",
        ]);
    }
}
