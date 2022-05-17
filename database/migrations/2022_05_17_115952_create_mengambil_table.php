<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMengambilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mengambil', function (Blueprint $table) {
            $table->id();
            $table->foreignId('NPM')->constrained('_mahasiswa');
            $table->foreignId('ID_Matkul')->constrained('_matkul');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mengambil');
    }
}
