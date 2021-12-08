<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatapendidikanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapendidikan', function (Blueprint $table) {
            $table->id();
            $table->string("idPengguna");
            $table->string("namaSekolah");
            $table->string("jurusan");
            $table->string("tahunMasuk");
            $table->string("tahunLulus");
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
        Schema::dropIfExists('datapendidikan');
    }
}
