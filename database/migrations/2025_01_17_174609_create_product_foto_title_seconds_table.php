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
        Schema::create('product_foto_title_seconds', function (Blueprint $table) {
            $table->id();
            $table->foreign('product_title_seconds_id')->references('id')->on('product_title_seconds')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('product_title_seconds_id');
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
        Schema::dropIfExists('product_foto_title_seconds');
    }
};
