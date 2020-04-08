<?php

use Illuminate\Database\Seeder;

class PayersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payers')->delete();
        
        \DB::table('payers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => '2',
                'payer_id' => 'WQU427G8TNZNU',
                'email' => 'xachatryan.nelsonich-buyer@gmail.com',
                'payer_status' => 'approved',
                'first_name' => 'Nelson',
                'last_name' => 'buyer',
                'country_code' => 'US',
                'currency_code' => 'USD',
                'amt' => '20.00',
                'time_stamp' => '2020-03-29T18:37:10Z',
                'created_at' => '2020-03-29 18:37:11',
                'updated_at' => '2020-03-29 18:37:11',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => '2',
                'payer_id' => 'WQU427G8TNZNU',
                'email' => 'xachatryan.nelsonich-buyer@gmail.com',
                'payer_status' => 'approved',
                'first_name' => 'Nelson',
                'last_name' => 'buyer',
                'country_code' => 'US',
                'currency_code' => 'USD',
                'amt' => '20.00',
                'time_stamp' => '2020-03-29T18:43:35Z',
                'created_at' => '2020-03-29 18:43:35',
                'updated_at' => '2020-03-29 18:43:35',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => '2',
                'payer_id' => 'WQU427G8TNZNU',
                'email' => 'xachatryan.nelsonich-buyer@gmail.com',
                'payer_status' => 'approved',
                'first_name' => 'Nelson',
                'last_name' => 'buyer',
                'country_code' => 'US',
                'currency_code' => 'USD',
                'amt' => '20.00',
                'time_stamp' => '2020-04-04T17:47:41Z',
                'created_at' => '2020-04-04 17:47:42',
                'updated_at' => '2020-04-04 17:47:42',
            ),
        ));
        
        
    }
}