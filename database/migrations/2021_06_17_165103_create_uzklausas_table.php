<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUzklausasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uzklausas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('page');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->text('request');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uzklausas');
    }
}
