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
        Schema::create('menu', function (Blueprint $table) {
            $table->id();
            $table->boolean('published')->default(false);
            $table->integer('order')->default(0);
            $table->timestamps();
        });

        Schema::table('menu',function (Blueprint $table){
            $table->foreignId('parent_id')->after('published')->nullable()->references('id')->on('menu')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
    }
};
