<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Chats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('subject');
            $table->text('message');
            $table->integer('sender_id')->unsigned()->index();
            $table->integer('receiver_id')->unsigned()->index();
         //   $table->foreign('sender_id')->references()->on('Users')->onDelete('cascade');
       //     $table->foreign('receiver_id')->references()->on('Users')->onDelete('cascade');


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
        Schema::dropIfExists('Chats');
    }
}
