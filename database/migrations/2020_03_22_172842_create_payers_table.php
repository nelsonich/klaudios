<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('payer_id');
            $table->string('email');
            $table->string('payer_status');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('country_code');
            $table->string('currency_code');
            $table->string('amt');
            $table->string('time_stamp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payers');
    }
}
