<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoksTable extends Migration
{
    public function up()
{
    Schema::create('stoks', function (Blueprint $table) {
        $table->id('id_barang');
        $table->string('nama_barang');
        $table->integer('jml_masuk');
        $table->integer('jml_keluar');
        $table->integer('total_barang');
        $table->timestamps();
    });
}

    public function down()
    {
        Schema::dropIfExists('stoks');
    }
}
