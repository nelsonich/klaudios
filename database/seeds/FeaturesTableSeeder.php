<?php

use Illuminate\Database\Seeder;

class FeaturesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('features')->delete();
        
        \DB::table('features')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Features',
                'description' => '<p>Management starts with planning, and planning starts with defining goals. In the absence of goals no activity will be organized. Planning is the first important management function. Other functions, such as organization, staffing, management and control, come later. In the absence of planning, no other management function can be implemented: through our site people can find the best car mechanic who will do their job well and you will be sure. But that\'s not all. We have a number of other projects in another area that you will soon find out.</p>',
                'image' => NULL,
                'lang' => 'en',
                'created_at' => '2020-02-25 22:20:02',
                'updated_at' => '2020-02-27 11:16:12',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Характеристики',
                'description' => 'Управление начинается с планирования, а планирование начинается с определения целей. При отсутствии целей ни о какой организации нельзя думать.Планирование является первой важной функцией управления. Другие функции, например, организация, укомплектование персоналом, руководство и контроль, придут позже. При отсутствии планирования никакая другая функция управления не может быть выполнена.На нашем сайте люди могут найти лучшего автомеханика, который будет хорошо и безупречно выполнять свою работу, и вы, несомненно, будете довольны. Но это еще не все. У нас есть много разных планов в другой области, которые вы скоро узнаете.',
                'image' => NULL,
                'lang' => 'ru',
                'created_at' => '2020-02-25 22:20:02',
                'updated_at' => '2020-02-25 22:20:02',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Առանձնահատկություններ',
                'description' => '<p>Կառավարումը սկսվում է պլանավորումից, իսկ պլանավորումը սկսվում է նպատակների որոշմամբ: Նպատակների բացակայության դեպքում ոչ մի կազմակերպություն &nbsp;չի կարող ինչ որ գործունեություն ծավալել:Պլանավորումը կառավարման առաջին կարևոր գործառույթն է: Մյուս գործառույթները, օրինակ, կազմակերպումը, աշխատակազմը, ղեկավարումը և վերահսկումը գալիս են ավելի ուշ: Պլանավորման բացակայության դեպքում կառավարման այլ գործառույթ չի կարող իրականացվել:Մեր կայքի միջոցով մարդիկ կարող են գտնել լավագույն ավտոմեխանիկ, ով լավ կկատարի իր աշխատանքը, և դուք անպայման գոհ կմնաք: Բայց դա դեռ ամենը չէ: Մենք ունենք մի շարք այլ ծրագրեր մեկ այլ ոլորտում, որը շուտով կիմանաք:</p>',
                'image' => NULL,
                'lang' => 'am',
                'created_at' => '2020-02-25 22:20:02',
                'updated_at' => '2020-02-28 20:52:04',
            ),
        ));
        
        
    }
}