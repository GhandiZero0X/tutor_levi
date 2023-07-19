<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalHarianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwalharian', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('mahasiswa_id')->references('id')->on('mahasiswa');
            $table->dateTime('HARI');
            $table->string('KEGIATAN', 30);
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
        Schema::dropIfExists('jadwalharian');
    }
}
