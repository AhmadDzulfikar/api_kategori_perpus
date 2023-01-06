<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penerima_id')->constrained('users');
            $table->foreignId('pengirim_id')->constrained('users');
            $table->string('judul',50);
            $table->text('isi');
            $table->enum('status', ['terkirim', 'terbaca']);
            $table->dateTime('tanggal_kirim');
            // $table->bigInteger('penerima_id')->unsigned();
            // $table->foreign('penerima_id')->references('id')->on('users');
            // $table->bigInteger('pengirim_id')->unsigned();
            // $table->foreign('pengirim_id')->references('id')->on('users');
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
        Schema::dropIfExists('pesans');
    }
}
