<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiampuhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diampuh', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ID_Matkul')->constrained('_matkul');
            $table->foreignId('NIP')->constrained('dosen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diampuh');
    }
}
