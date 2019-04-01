<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCenter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Center', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('addres');
            $table->string('email');
            $table->string('phone');
            $table->string('media')->nullable();
            $table->string('profile')->nullable();
            $table->string('onwer_name');
            $table->string('notes')->nullable();
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
        Schema::dropIfExists('Center');
    }
}
