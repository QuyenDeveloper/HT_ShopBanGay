<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaichiKHSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daichi_k_h_s', function (Blueprint $table) {
            $table->id();
            $table->integer('idKH');
            $table->string('hoten');
            $table->string('sdt');
            $table->string('daichi');
            $table->string('loaiDC');
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
        Schema::dropIfExists('daichi_k_h_s');
    }
}
