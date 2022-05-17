<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMempunyaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mempunyai', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ID_Matkul')->constrained('_matkul');
            $table->foreignId('ID_Jadwal')->constrained('jadwal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mempunyai');
    }
}
