<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(AboutTableSeeder::class);
        $this->call(StaticInformationTableSeeder::class);
        $this->call(FeaturesTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(RequestQuotesTableSeeder::class);
        $this->call(LikeNewsTableSeeder::class);
        $this->call(NewsCommentsTableSeeder::class);
    }
}
