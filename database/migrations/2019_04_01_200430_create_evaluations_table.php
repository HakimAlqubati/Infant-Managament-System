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

            $table->unsignedBigInteger('child_id');
            $table->unsignedBigInteger('center_id');
            $table->unsignedBigInteger('created_by');

            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            //$table->foreign('chid_id')->references('id')->on('Children')->onDelete('cascade');
            $table->foreign('center_id')->references('id')->on('Center')->onDelete('cascade');



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
