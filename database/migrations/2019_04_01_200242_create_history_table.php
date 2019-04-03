<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('History', function (Blueprint $table) {
            $table->integer('id');
            $table->string('status');
            $table->string('desc');
            $table->unsignedBigInteger('child_id');
          //  $table->integer('child_id')->unsingned()->index();
           // $table->foreign('child_id')->references('id')->on('Children')->onDelete('cascade');

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
        Schema::dropIfExists('History');
    }
}
