<?php

use Illuminate\Database\Seeder;

class AboutsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('abouts')->delete();
        
        \DB::table('abouts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'About Us',
                'description' => '<p>We have always dreamed of having our own business. And here we have opened it. We started our business from<strong> February 20 2020</strong>.We will help you find a good auto mechanic that will help you repair your cars with quality. We also have our page on Facebook, Instagram and Twitter. We hope that you will appreciate our work and that our business will grow rapidly. We look forward to each and every one.</p>',
                'image' => 'about.png',
                'lang' => 'en',
                'created_at' => '2020-02-25 23:20:02',
                'updated_at' => '2020-02-28 21:56:11',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'О Нас',
                'description' => '<p>Мы всегда мечтали иметь собственный бизнес. И вот мы его открыли. Мы начали свой бизнес с <strong>20 февраля 2020 года</strong>. Мы поможем вам найти хорошего автомеханика, который поможет вам качественно ремонтировать ваши автомобили. У нас также есть наша страница в Facebook, Instagram и Twitter. Мы надеемся, что вы оцените нашу работу и наш бизнес будет быстро расти. Мы с нетерпением ждем каждого.</p>',
                'image' => 'about.png',
                'lang' => 'ru',
                'created_at' => '2020-02-25 23:20:02',
                'updated_at' => '2020-02-28 21:56:40',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Մեր Մասին',
                'description' => '<p>Միշտ երազել ենք ունենալ մեր սեփական բիզնեսը: Եվ ահա մենք բացեցինք այն: Մենք սկսեցինք մեր գործը <strong>2020 թվականի փետրվարի 20-ից</strong>: Մենք կօգնենք ձեզ գտնել լավ ավտոմեխանիկ, ով կօգնի ձեզ որակյալ վերանորոգել ձեր մեքենաները: Մենք ունենք նաև մեր էջը Facebook- ում, Instagram- ում և Twitter- ում: Հուսով ենք, որ դուք կգնահատեք մեր աշխատանքը։ Մենք անհամբեր սպասում ենք ձեզնից յուրաքանչյուրին:</p>',
                'image' => 'about.png',
                'lang' => 'am',
                'created_at' => '2020-02-25 23:20:02',
                'updated_at' => '2020-02-28 21:56:58',
            ),
        ));
        
        
    }
}