<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatapenggunaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapengguna', function (Blueprint $table) {
            $table->id();
            $table->string("idUser");
            $table->string("tempatLahir");
            $table->date("tanggalLahir");
            $table->string("jenisKelamin");
            $table->string("jabatan");
            $table->string("alamatAsal");
            $table->string("alamatDomisili");
            $table->string("telepon");
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
        Schema::dropIfExists('datapengguna');
    }
}
