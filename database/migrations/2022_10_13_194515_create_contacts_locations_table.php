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
        Schema::create('contacts_locations', function (Blueprint $table) {
            $table->id();
            $table->boolean('published')->default(false);
            $table->integer('order')->default(0);
            $table->boolean('default')->default(false);
            $table->string('img');
            $table->string('lon');
            $table->string('lat');
            $table->integer('zoom');
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
        Schema::dropIfExists('contacts_locations');
    }
};
