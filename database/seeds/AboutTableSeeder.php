<?php

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            "title" => "About Us",
            "description" => "We have always dreamed of having our own business. And here we have opened it. We started our business from  February 20  2020.We will help you find a good auto mechanic  that will help you repair your cars with quality. We also have our page on Facebook, Instagram and Twitter. We hope that you will appreciate our work and that our business will grow rapidly. We look forward to each and every one.",
            "image" => "about.png",
            "lang" => "en",
        ]);

        About::create([
            "title" => "О Нас",
            "description" => "Мы всегда мечтали иметь собственный бизнес. И вот мы его открыли. Мы начали свой бизнес с 20 февраля 2020 года. Мы поможем вам найти хорошего автомеханика, который поможет вам качественно ремонтировать ваши автомобили. У нас также есть наша страница в Facebook, Instagram и Twitter. Мы надеемся, что вы оцените нашу работу и наш бизнес будет быстро расти. Мы с нетерпением ждем каждого.",
            "image" => "about.png",
            "lang" => "ru",
        ]);

        About::create([
            "title" => "Մեր Մասին",
            "description" => "Միշտ երազել ենք ունենալ մեր սեփական բիզնեսը: Եվ ահա մենք բացեցինք այն: Մենք սկսեցինք մեր գործը 2020 թվականի փետրվարի 20-ից: Մենք կօգնենք ձեզ գտնել լավ ավտո մեխանիկ, որը կօգնի ձեզ որակյալ վերանորոգել ձեր մեքենաները: Մենք ունենք նաև մեր էջը Facebook- ում, Instagram- ում և Twitter- ում: Հուսով ենք, որ դուք կգնահատեք մեր աշխատանքը, և որ մեր գործն արագ կաճի: Մենք անհամբեր սպասում ենք յուրաքանչյուրին:",
            "image" => "about.png",
            "lang" => "am",
        ]);
    }
}
