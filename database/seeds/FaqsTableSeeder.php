<?php

use Illuminate\Database\Seeder;

class FaqsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('faqs')->delete();
        
        \DB::table('faqs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Change webpage language',
                'description' => 'Klaudios is supported in 3 languages. Typically, Claudios uses the default language English. For example, if you change the language to Armenian, Claudios will automatically switch to Armenian.',
                'lang' => 'en',
                'created_at' => '2020-03-05 21:24:18',
                'updated_at' => '2020-03-05 21:24:18',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Փոխեք կայքէջի լեզուն',
                'description' => 'Կլաուդիոսին աջակցում են 3 լեզուներով: Սովորաբար, Կլաուդիոսը օգտագործում է լռելյայն լեզուն անգլերեն: Օրինակ, եթե լեզուն փոխեք հայերեն, ապա Կլաուդիոսը ինքնաբերաբար անցում կկատարի հայերենին:',
                'lang' => 'am',
                'created_at' => '2020-03-05 21:24:18',
                'updated_at' => '2020-03-05 21:24:18',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Изменить язык веб-страницы',
                'description' => 'Клаудиос поддерживается на 3 языках. Как правило, Клаудиос по умолчанию использует язык Английский. Например, если вы поменяете язык на Армянский, Клаудиос  автоматически переключится на Армянский.',
                'lang' => 'ru',
                'created_at' => '2020-03-05 21:24:18',
                'updated_at' => '2020-03-05 21:24:18',
            ),
        ));
        
        
    }
}