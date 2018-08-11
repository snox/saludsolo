<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 产品
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cate_id');
            $table->string('name');
            $table->text('content');
        });

        // 图片
        Schema::create('product_images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->string('title');
            $table->string('srcBigPic');
            $table->string('smallPath');
            $table->integer('bigW');
            $table->integer('bigH');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('product_images');
        Schema::dropIfExists('products');
    }
}
