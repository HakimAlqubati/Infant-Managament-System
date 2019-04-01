<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('email');
            $table->string('name_user');
            $table->text('body');
            $table->integer('post_id')->unsigned()->index();
            $table->string('status');
            
           // $table->foreign('user_id')->references()->on('Users')->onDelete('cascade');
           // $table->foreign('post_id')->references()->on('Activities')->onDelete('cascade');
           // $table->foreign('post_id')->references()->on('Story')->onDelete('cascade');


            
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
        Schema::dropIfExists('Comments');
    }
}
