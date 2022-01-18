<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRaktarkeszletTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raktarkeszlet', function (Blueprint $table) {
            $table->id();
            $table->integer('cikkszam');
            $table->string('megnevezes');
            $table->float('ar');
            $table->integer('raktaron');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('raktarkeszlet');
    }
}
