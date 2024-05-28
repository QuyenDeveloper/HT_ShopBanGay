<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXacNhanDHSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xac_nhan_d_h_s', function (Blueprint $table) {
            $table->id();
            $table->integer('idKH');
            $table->string('idDMua');
            $table->integer('idDchi');
            $table->string('loinhan');
//            $table->string('ngldon');
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
        Schema::dropIfExists('xac_nhan_d_h_s');
    }
}
