<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tugas', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('jadwalharian_id')->references('id')->on('jadwalharian');
            $table->foreignId('mahasiswa_id')->references('id')->on('mahasiswa');
            $table->string('DESK_TUGAS', 50);
            $table->dateTime('TENGGAT_WAKTU');
            $table->boolean('STATUS');
            $table->string('CATATAN', 50)->nullable();
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
        Schema::dropIfExists('tugas');
    }
}
