<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfographicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infographics', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('posted_by');
            $table->string('file_location');
            $table->timestamps();

            $table->foreign('posted_by')
              ->references('id')
              ->on('users')
              ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infographics');
    }
}
