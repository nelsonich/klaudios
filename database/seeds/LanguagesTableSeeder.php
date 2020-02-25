<?php

use App\Models\Languages;
use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Languages::create([
            "lang" => "ru",
            "image" => "ru.png"
        ]);

        Languages::create([
            "lang" => "en",
            "image" => "en.png"
        ]);

        Languages::create([
            "lang" => "am",
            "image" => "am.png"
        ]);
    }
}
