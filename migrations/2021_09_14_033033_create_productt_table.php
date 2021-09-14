<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducttTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productt', function (Blueprint $table) {
            $table->bigIncrements('id_productt');
            $table->string('nama_productt');
            $table->string('deskripsi');
            $table->string('harga');
            $table->string('foto_productt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productt');
    }
}
