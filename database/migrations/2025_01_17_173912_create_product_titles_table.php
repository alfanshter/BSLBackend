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
        Schema::create('product_titles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produk_models_id');
            $table->foreign('produk_models_id')->references('id')->on('produk_models')->onDelete('cascade')->onUpdate('cascade');
            $table->string('foto');
            $table->string('judul');
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
        Schema::dropIfExists('product_titles');
    }
};
