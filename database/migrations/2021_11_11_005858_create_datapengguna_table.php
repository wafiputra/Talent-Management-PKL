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
            $table->string("iduser");
            $table->string("tempatlahhir");
            $table->date("tanggallahir");
            $table->string("jeniskelamin");
            $table->string("jabatan");
            $table->string("alamatasal");
            $table->string("alamatdomisili");
            $table->string("nomortelepon");
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
