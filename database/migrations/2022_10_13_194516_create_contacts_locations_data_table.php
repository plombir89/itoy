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
        Schema::create('contacts_locations_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('location_id')->references('id')->on('contacts_locations')->cascadeOnDelete();
            $table->foreignId('lang')->references('id')->on('languages');
            $table->string('country');
            $table->string('address')->nullable();
            $table->text('contacts')->nullable();
            $table->string('hours')->nullable();
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
        Schema::dropIfExists('contacts_locations_data');
    }
};
