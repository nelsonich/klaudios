<?php

use App\Models\Features;
use Illuminate\Database\Seeder;

class FeaturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Features::create([
            "title" => "Features",
            "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, vero.",
            "image" => null,
        ]);
    }
}
