<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Activities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('body');
            $table->string('image')->nullable();
            $table->integer('child_id')->unsigned()->index();
            $table->integer('center_id')->unsigned()->index();
            $table->integer('created_by')->unsigned()->index(); 
            
          //  $table->foreign('child_id')->references()->on('Chidren')->onDelete('cascade');
         //   $table->foreign('center_id')->references()->on('Center')->onDelete('cascade');
           // $table->foreign('created_by')->references()->on('Users')->onDelete('cascade');

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
        Schema::dropIfExists('Activities');
    }
}
