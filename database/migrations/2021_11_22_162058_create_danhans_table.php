<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDanhansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('danhans', function (Blueprint $table) {
            $table->id();
            $table->integer('idKH');
            $table->string('idDMua');
            $table->integer('idDchi');
            $table->string('loinhan');
//            $table->string('xndanhan');
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
        Schema::dropIfExists('danhans');
    }
}
