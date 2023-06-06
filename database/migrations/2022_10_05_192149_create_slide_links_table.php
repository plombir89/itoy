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
        Schema::create('slide_links', function (Blueprint $table) {
            $table->id();
            $table->foreignId('slide_id')->references('id')->on('slides')->cascadeOnDelete();
            $table->string('link')->nullable();
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
        Schema::dropIfExists('slide_links');
    }
};
