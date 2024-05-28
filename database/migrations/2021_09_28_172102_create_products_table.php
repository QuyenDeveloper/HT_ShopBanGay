<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('menu_name1');
            $table->string('menu_name2');
            $table->string('menu_name3');
            $table->string('menu_name4');
            $table->integer('money');
            $table->integer('money_sale');
            $table->string('nhanhieu');
            $table->string('color1');
            $table->string('color2');
            $table->string('color3');
            $table->string('color4');
            $table->string('color5');
            $table->integer('size1');
            $table->integer('size2');
            $table->integer('size3');
            $table->integer('size4');
            $table->integer('size5');
            $table->integer('size6');
            $table->text('dattrung');
            $table->longText('content');
            $table->integer('active');
            $table->string('anh1');
            $table->string('anh2');
            $table->string('anh3');
            $table->string('anh4');
            $table->string('anh5');
            $table->string('anh6');
            $table->string('anh7');
            $table->string('anh8');
            $table->string('anh9');
            $table->string('anh10');
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
        Schema::dropIfExists('products');
    }
}
