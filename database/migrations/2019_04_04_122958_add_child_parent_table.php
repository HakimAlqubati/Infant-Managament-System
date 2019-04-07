<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddChildParentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ParentChildren', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('parent_type_id');
            $table->unsignedBigInteger('child_id');
            $table->String('note');


            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('parent_type_id')->references('id')->on('ParentTypes')->onDelete('cascade');
            $table->foreign('child_id')->references('id')->on('children')->onDelete('cascade');

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
        Schema::dropIfExists('ParentChildren');
    }
}
