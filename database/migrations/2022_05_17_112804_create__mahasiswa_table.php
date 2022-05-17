<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('NPM', 15);
            $table->string('Nama_Mahasiswa', 25);
            $table->string('Alamat', 40);
            $table->dateTime('Tanggal_Lahir');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_mahasiswa');
    }
}
