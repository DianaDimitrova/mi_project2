<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
			$table->string('name');
			$table->text('body');
			$table->string('small_body');
			$table->string('url');
			$table->string('picture');
			$table->string('price');
			$table->integer('catalog_id');
			$table->integer('user_id');
			$table->enum('vip',array('0','1'))->default('0');
			$table->enum('showhide',array('show','hide'))->default('show');
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
