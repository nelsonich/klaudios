<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaticInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('static_information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('logo');
            $table->text('description');
            $table->string('place');
            $table->string('phone');
            $table->string('email');
            $table->string('instagram_link');
            $table->string('facebook_link');
            $table->string('twitter_link');
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
        Schema::dropIfExists('static_information');
    }
}
