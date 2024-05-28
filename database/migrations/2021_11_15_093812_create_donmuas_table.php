<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonmuasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donmuas', function (Blueprint $table) {
            $table->id();
            $table->integer('idKH');
            $table->string('idDMua');
            $table->integer('ID_SP');
            $table->string('sizeSP_kh');
            $table->string('SLSP_KH');
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
        Schema::dropIfExists('donmuas');
    }
}
