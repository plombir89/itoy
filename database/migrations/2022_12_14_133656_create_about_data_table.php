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
        Schema::create('about_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('about_id')->references('id')->on('about')->cascadeOnDelete();
            $table->foreignId('lang')->references('id')->on('languages');
            $table->string('title');
            $table->string('why_title')->nullable();
            $table->text('text')->nullable();
            $table->text('content')->nullable();
            $table->text('why_content');
            $table->string('description')->nullable();
            $table->string('keywords')->nullable();
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
        Schema::dropIfExists('about_data');
    }
};
