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
                'created_at' => '2020-02-23 22:40:38',
                'updated_at' => '2020-02-25 22:24:42',
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
                'created_at' => '2020-02-23 22:40:38',
                'updated_at' => '2020-02-23 22:55:09',
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
                'created_at' => '2020-02-24 08:49:36',
                'updated_at' => '2020-02-24 08:49:36',
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
                'created_at' => '2020-02-24 22:16:25',
                'updated_at' => '2020-02-24 22:16:25',
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
                'created_at' => '2020-02-25 08:15:01',
                'updated_at' => '2020-02-25 08:15:01',
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
                'created_at' => '2020-02-25 09:39:47',
                'updated_at' => '2020-02-25 09:39:47',
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
                'created_at' => '2020-02-25 12:39:28',
                'updated_at' => '2020-02-25 12:39:28',
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
                'created_at' => '2020-02-25 12:41:00',
                'updated_at' => '2020-02-25 12:41:00',
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
                'created_at' => '2020-02-25 17:27:28',
                'updated_at' => '2020-02-25 17:27:28',
            ),
            9 => 
            array (
                'id' => 10,
                'role' => 'user',
                'first_name' => 'Nels',
                'last_name' => 'Xachatryan',
                'user_name' => 'nels',
                'email' => 'xachatryan_nelson@mail.ru',
                'email_verified_at' => NULL,
                'password' => '$2y$10$wd8acOX7syYbmuUKqedEm.PC.kiqysRAvF22gdFgcQn334b3/p6Z6',
                'remember_token' => NULL,
                'created_at' => '2020-02-25 22:57:29',
                'updated_at' => '2020-02-25 22:57:29',
            ),
            10 => 
            array (
                'id' => 11,
                'role' => 'user',
                'first_name' => 'Lusine',
                'last_name' => 'Sardaryan',
                'user_name' => 'LusineSardaryanS',
                'email' => 'Sardaryan_LS@mail.ru',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Peyn/Qf5A.b93G1ZWZ8uS.FAam2fQqpic8etVYZxraFBpeRuf1JLe',
                'remember_token' => NULL,
                'created_at' => '2020-02-28 11:29:02',
                'updated_at' => '2020-02-28 11:29:02',
            ),
            11 => 
            array (
                'id' => 12,
                'role' => 'user',
                'first_name' => 'Mxitar',
                'last_name' => 'Mesropyan',
                'user_name' => 'Mxitar',
                'email' => 'mesropyan.mxo@mail.ru',
                'email_verified_at' => NULL,
                'password' => '$2y$10$lgcqWstm8EEsBlq1QZ0aVeQfAxbT5jiojr.XM7Vb3X7y1pl7.Pt1O',
                'remember_token' => NULL,
                'created_at' => '2020-02-28 17:49:04',
                'updated_at' => '2020-02-28 17:49:04',
            ),
            12 => 
            array (
                'id' => 13,
                'role' => 'user',
                'first_name' => 'Hovhannes',
                'last_name' => 'Andriasyan',
                'user_name' => '_Andriasyan_',
                'email' => 'andriashovhannes@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.8hyN9kq48454ZlS2Ad3zuomShBPvbUrAdlQ0k6g/snla/lFeogwa',
                'remember_token' => NULL,
                'created_at' => '2020-03-01 08:48:33',
                'updated_at' => '2020-03-01 08:48:33',
            ),
        ));
        
        
    }
}