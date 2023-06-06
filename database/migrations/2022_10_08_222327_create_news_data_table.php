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
        Schema::create('news_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('news_id')->references('id')->on('news')->cascadeOnDelete();
            $table->string('title');
            $table->text('text')->nullable();
            $table->string('slug');
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->foreignId('lang')->references('id')->on('languages');
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
        Schema::dropIfExists('news_data');
    }
};
