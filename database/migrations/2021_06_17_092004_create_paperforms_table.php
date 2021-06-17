<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaperformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paperforms', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('url');
            $table->string('paperform_code');
            $table->string('page');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('request');
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
        Schema::dropIfExists('paperforms');
    }
}
