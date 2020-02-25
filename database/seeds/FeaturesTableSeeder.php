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
            "description" => "Management begins with planning and planning begins with the determination of objectives. In the absence of objectives no organisation can ever be thought about.Planning is the first important function of management. The other functions, e.g., organising, staffing, directing and controlling come later. In the absence of planning no other function of management can be performed.Through our site, people can find the best car mechanic who will do their job well and perfectly, and you will surely be pleased. But that's not all. We have many different plans in another area that you'll soon find out.",
            "image" => null,
            "lang" => "en",
        ]);

        Features::create([
            "title" => "Характеристики",
            "description" => "Управление начинается с планирования, а планирование начинается с определения целей. При отсутствии целей ни о какой организации нельзя думать.Планирование является первой важной функцией управления. Другие функции, например, организация, укомплектование персоналом, руководство и контроль, придут позже. При отсутствии планирования никакая другая функция управления не может быть выполнена.На нашем сайте люди могут найти лучшего автомеханика, который будет хорошо и безупречно выполнять свою работу, и вы, несомненно, будете довольны. Но это еще не все. У нас есть много разных планов в другой области, которые вы скоро узнаете.",
            "image" => null,
            "lang" => "ru",
        ]);

        Features::create([
            "title" => "Առանձնահատկություններ",
            "description" => "Կառավարումը սկսվում է պլանավորումից, և պլանավորումը սկսվում է նպատակների որոշմամբ: Նպատակների բացակայության դեպքում ոչ մի կազմակերպություն երբևէ չի կարելի մտածել:Պլանավորումը կառավարման առաջին կարևոր գործառույթն է: Մյուս գործառույթները, օրինակ, կազմակերպումը, աշխատակազմը, ղեկավարումը և վերահսկումը գալիս են ավելի ուշ: Պլանավորման բացակայության դեպքում կառավարման այլ գործառույթ չի կարող իրականացվել:Մեր կայքի միջոցով մարդիկ կարող են գտնել լավագույն մեքենավարը, ով լավ և լավ կատարելու է իրենց գործը, և դուք անպայման գոհ կլինեք: Բայց դա բոլորը չէ: Մենք ունենք մի շարք այլ ծրագրեր մեկ այլ ոլորտում, որը շուտով կիմանաք:",
            "image" => null,
            "lang" => "am",
        ]);
    }
}
