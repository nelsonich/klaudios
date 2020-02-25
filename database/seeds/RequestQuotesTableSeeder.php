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
                'created_at' => '2020-02-23 21:45:46',
                'updated_at' => '2020-02-23 21:45:46',
            ),
            1 => 
            array (
                'id' => 2,
                'firstName' => 'Test',
                'lastName' => 'Test',
                'subject' => 'Test',
                'message' => 'Test',
                'created_at' => '2020-02-23 21:52:02',
                'updated_at' => '2020-02-23 21:52:02',
            ),
            2 => 
            array (
                'id' => 3,
                'firstName' => 'efwregf',
                'lastName' => 'rgtrg',
                'subject' => 'regretehg',
                'message' => 'ergreg',
                'created_at' => '2020-02-23 21:52:53',
                'updated_at' => '2020-02-23 21:52:53',
            ),
            3 => 
            array (
                'id' => 4,
                'firstName' => 'Klavdia',
                'lastName' => 'Xachatryan',
                'subject' => 'Subject',
                'message' => 'Message',
                'created_at' => '2020-02-24 16:17:17',
                'updated_at' => '2020-02-24 16:17:17',
            ),
            4 => 
            array (
                'id' => 5,
                'firstName' => 'Sofia',
                'lastName' => 'Aleksanyan',
                'subject' => 'meqenayi konsultaciya',
                'message' => 'inch karjena konsultaciyan',
                'created_at' => '2020-02-25 08:39:42',
                'updated_at' => '2020-02-25 08:39:42',
            ),
            5 => 
            array (
                'id' => 6,
                'firstName' => 'Arpine',
                'lastName' => 'Andriasyan',
                'subject' => 'Qqq',
                'message' => 'Hi',
                'created_at' => '2020-02-25 19:38:46',
                'updated_at' => '2020-02-25 19:38:46',
            ),
            6 => 
            array (
                'id' => 7,
                'firstName' => 'Arpine',
                'lastName' => 'Andriasyan',
                'subject' => 'Hi',
                'message' => 'Hi Nelson',
                'created_at' => '2020-02-25 19:41:01',
                'updated_at' => '2020-02-25 19:41:01',
            ),
        ));
        
        
    }
}