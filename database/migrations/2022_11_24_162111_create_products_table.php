<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->boolean('published')->default(false);
            $table->integer('stock')->default(1);
            $table->string('code');
            $table->integer('price');
            $table->integer('discount');
            $table->string('img');
            $table->boolean('featured')->default(false);
            $table->boolean('special')->default(false);
            $table->integer('reviews')->default(0);
            $table->integer('rating')->default(0);
            $table->softDeletes();
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
};
