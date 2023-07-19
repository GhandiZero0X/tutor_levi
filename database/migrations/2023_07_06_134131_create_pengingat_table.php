<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengingatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengingat', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('mahasiswa_id')->references('id')->on('mahasiswa');
            $table->dateTime('TANGGAL_PENGINGAT');
            $table->string('KETERANGAN', 30);
            $table->string('JUDUL_PENGINGAT', 20);
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
        Schema::dropIfExists('pengingat');
    }
}
