<?php

use Illuminate\Database\Seeder;

class RequestQuotesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('request_quotes')->delete();
        
        \DB::table('request_quotes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'firstName' => 'Test',
                'lastName' => 'Test',
                'subject' => 'Subject',
                'message' => 'Message',
                'created_at' => '2020-02-23 23:45:46',
                'updated_at' => '2020-02-23 23:45:46',
            ),
            1 => 
            array (
                'id' => 2,
                'firstName' => 'Test',
                'lastName' => 'Test',
                'subject' => 'Test',
                'message' => 'Test',
                'created_at' => '2020-02-23 23:52:02',
                'updated_at' => '2020-02-23 23:52:02',
            ),
            2 => 
            array (
                'id' => 3,
                'firstName' => 'efwregf',
                'lastName' => 'rgtrg',
                'subject' => 'regretehg',
                'message' => 'ergreg',
                'created_at' => '2020-02-23 23:52:53',
                'updated_at' => '2020-02-23 23:52:53',
            ),
            3 => 
            array (
                'id' => 4,
                'firstName' => 'Klavdia',
                'lastName' => 'Xachatryan',
                'subject' => 'Subject',
                'message' => 'Message',
                'created_at' => '2020-02-24 18:17:17',
                'updated_at' => '2020-02-24 18:17:17',
            ),
            4 => 
            array (
                'id' => 5,
                'firstName' => 'Sofia',
                'lastName' => 'Aleksanyan',
                'subject' => 'meqenayi konsultaciya',
                'message' => 'inch karjena konsultaciyan',
                'created_at' => '2020-02-25 10:39:42',
                'updated_at' => '2020-02-25 10:39:42',
            ),
            5 => 
            array (
                'id' => 6,
                'firstName' => 'Arpine',
                'lastName' => 'Andriasyan',
                'subject' => 'Qqq',
                'message' => 'Hi',
                'created_at' => '2020-02-25 21:38:46',
                'updated_at' => '2020-02-25 21:38:46',
            ),
            6 => 
            array (
                'id' => 7,
                'firstName' => 'Arpine',
                'lastName' => 'Andriasyan',
                'subject' => 'Hi',
                'message' => 'Hi Nelson',
                'created_at' => '2020-02-25 21:41:01',
                'updated_at' => '2020-02-25 21:41:01',
            ),
            7 => 
            array (
                'id' => 8,
                'firstName' => 'ffsdv',
                'lastName' => 'svdea',
                'subject' => 'dsvcdsv',
                'message' => 'scvdsavsa',
                'created_at' => '2020-02-26 23:25:43',
                'updated_at' => '2020-02-26 23:25:43',
            ),
        ));
        
        
    }
}