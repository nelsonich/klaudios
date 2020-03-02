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
            "title" => "Change webpage language",
            "description" => "Klaudios is supported in 3 languages. Typically, Claudios uses the default language English. For example, if you change the language to Armenian, Claudios will automatically switch to Armenian.",
            "lang" => "en",
        ]);

        Faq::create([
            "title" => "Փոխեք կայքէջի լեզուն",
            "description" => "Կլաուդիոսին աջակցում են 3 լեզուներով: Սովորաբար, Կլաուդիոսը օգտագործում է լռելյայն լեզուն անգլերեն: Օրինակ, եթե լեզուն փոխեք հայերեն, ապա Կլաուդիոսը ինքնաբերաբար անցում կկատարի հայերենին:",
            "lang" => "am",
        ]);

        Faq::create([
            "title" => "Изменить язык веб-страницы",
            "description" => "Клаудиос поддерживается на 3 языках. Как правило, Клаудиос по умолчанию использует язык Английский. Например, если вы поменяете язык на Армянский, Клаудиос  автоматически переключится на Армянский.",
            "lang" => "ru",
        ]);
    }
}
