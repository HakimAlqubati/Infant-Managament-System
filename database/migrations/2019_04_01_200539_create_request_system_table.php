<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestSystemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RequestSystem', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email');
            $table->text('neme');
            $table->string('address');
            $table->integer('phone');
            $table->string('country');
            $table->string('city');
            $table->integer('user_id')->unsigned()->index();
           // $table->foreign('user_id')->references()->on('Users')->onDelete('cascade');


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
        Schema::dropIfExists('RequestSystem');
    }
}
