<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Evaluations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('education');
            $table->string('sport');
            $table->string('speaking');
            $table->string('soial');
            $table->string('health');
            $table->string('eating');
            $table->string('drinking');
            $table->string('bathroom');
            $table->string('responsive');
            $table->string('other');

            $table->integer('child_id')->unsigned()->index();
            $table->integer('center_id')->unsigned()->index();
            $table->integer('created_by')->unsigned()->index();


          //  $table->foreign('created_by')->references()->on('Users')->onDelete('cascade');
           // $table->foreign('chid_id')->references()->on('Children')->onDelete('cascade');
            //$table->foreign('center_id')->references()->on('Center')->onDelete('cascade');



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
        Schema::dropIfExists('Evaluations');
    }
}
