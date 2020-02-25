<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role' => 'superadmin',
                'first_name' => 'Klavdia',
                'last_name' => 'Xachatryan',
                'user_name' => 'klaudios',
                'email' => 'xachatryan_klavdia@mail.ru',
                'email_verified_at' => NULL,
                'password' => '$2y$10$3gPvAzPV9JV.NDzZaosUh.EsIDma5ZL.ijHPnCuJhxlKIbgPSHLAC',
                'remember_token' => NULL,
                'created_at' => '2020-02-23 21:40:38',
                'updated_at' => '2020-02-23 21:40:38',
            ),
            1 => 
            array (
                'id' => 2,
                'role' => 'user',
                'first_name' => 'Nelson',
                'last_name' => 'Xachatryan',
                'user_name' => 'nelsonich',
                'email' => 'xachatryan.nelsonich@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$7uFKlfHfQgSTuiFJBr1zBOXmlQtXwyLqADVDLcgyy/6RDl0kR1JZy',
                'remember_token' => NULL,
                'created_at' => '2020-02-23 21:40:38',
                'updated_at' => '2020-02-23 21:55:09',
            ),
            2 => 
            array (
                'id' => 3,
                'role' => 'user',
                'first_name' => 'София',
                'last_name' => 'Алексанян',
                'user_name' => 'Алексанян',
                'email' => 'sofia.aleksanyan@mail.ru',
                'email_verified_at' => NULL,
                'password' => '$2y$10$AMP0hdTCa/FJVuasPtDxbOCJFc/iR3rqusnpHDJIHfzpe3adHLkUW',
                'remember_token' => NULL,
                'created_at' => '2020-02-24 07:49:36',
                'updated_at' => '2020-02-24 07:49:36',
            ),
            3 => 
            array (
                'id' => 4,
                'role' => 'user',
                'first_name' => 'Klavdia',
                'last_name' => 'Xachatryan',
                'user_name' => 'Klavdia',
                'email' => 'xachatryan.klavdia@mail.ru',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ol7BXraGjOfq1Dwi6JmJMOvm9UMB8J3paq83hNm4pRpUCuDiB8HXi',
                'remember_token' => NULL,
                'created_at' => '2020-02-24 21:16:25',
                'updated_at' => '2020-02-24 21:16:25',
            ),
            4 => 
            array (
                'id' => 5,
                'role' => 'user',
                'first_name' => 'Kristine',
                'last_name' => 'Afiyan',
                'user_name' => 'Kristine',
                'email' => 'ch_afiyan@rambler.ru',
                'email_verified_at' => NULL,
                'password' => '$2y$10$aVrT5lMz5z1hvfUPXNX/ieaICtSgXbMUFrAkb67oNMwyePb5YvyQW',
                'remember_token' => NULL,
                'created_at' => '2020-02-25 07:15:01',
                'updated_at' => '2020-02-25 07:15:01',
            ),
            5 => 
            array (
                'id' => 6,
                'role' => 'user',
                'first_name' => 'Tatevik',
                'last_name' => 'Tovmasyan',
                'user_name' => 'Tatevik',
                'email' => 'tatevka_5555@mail.ru',
                'email_verified_at' => NULL,
                'password' => '$2y$10$jElHzxICbciikF8o.snbmeMMYxT5TNo5JvCu5NreM.P5FqVzdKNai',
                'remember_token' => NULL,
                'created_at' => '2020-02-25 08:39:47',
                'updated_at' => '2020-02-25 08:39:47',
            ),
            6 => 
            array (
                'id' => 7,
                'role' => 'user',
                'first_name' => 'Susanna',
                'last_name' => 'Aleksanyan',
                'user_name' => 'Susanna',
                'email' => 'susanna.aleksanyan@mail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$EPsWJCn0be0ODhOnDLpfUe21gcqvuo8KQF8bGx2QStVN1WpaM3Uei',
                'remember_token' => NULL,
                'created_at' => '2020-02-25 11:39:28',
                'updated_at' => '2020-02-25 11:39:28',
            ),
            7 => 
            array (
                'id' => 8,
                'role' => 'user',
                'first_name' => 'Robert',
                'last_name' => 'Mirzoyan',
                'user_name' => 'Robert',
                'email' => 'robert.mirzoyan@mail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$RdSCaTsbMBzC2LUYMuWzv.nVM9otCv3JNjGHYzMGZUxiNRDFocBEG',
                'remember_token' => NULL,
                'created_at' => '2020-02-25 11:41:00',
                'updated_at' => '2020-02-25 11:41:00',
            ),
            8 => 
            array (
                'id' => 9,
                'role' => 'user',
                'first_name' => 'Inna',
                'last_name' => 'Martirosyan',
                'user_name' => 'Inna',
                'email' => 'abba222@list.ru',
                'email_verified_at' => NULL,
                'password' => '$2y$10$7s/VYNhDTGyn3yfezT9IZO5EjVr5HAnBpEGs.QQA8wwOYWw3sj.Oq',
                'remember_token' => NULL,
                'created_at' => '2020-02-25 16:27:28',
                'updated_at' => '2020-02-25 16:27:28',
            ),
        ));
        
        
    }
}