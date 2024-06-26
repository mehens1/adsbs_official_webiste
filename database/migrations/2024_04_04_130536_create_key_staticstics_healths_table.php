<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeyStaticsticsHealthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('key_staticstics_healths', function (Blueprint $table) {
            $table->id();
            $table->string('label');
            $table->integer('assisted_value');
            $table->integer('home_value');
            $table->string('key');
            $table->string('uploaded_document')->nullable();
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
        Schema::dropIfExists('key_staticstics_healths');
    }
}
