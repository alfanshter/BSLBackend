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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user');
            $table->foreign('id_user')->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            // Buat id_tl boleh null
            $table->foreignId('id_tl')
                ->nullable()
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->date('date');
            $table->dateTime('check_in');
            $table->string('picture_in');
            $table->dateTime('check_out')->nullable();
            $table->string('picture_out')->nullable();
            $table->double('latitude_in')->nullable();
            $table->double('longitude_in')->nullable();
            $table->double('latitude_out')->nullable();
            $table->double('longitude_out')->nullable();
            $table->double('latitude_lembur')->nullable();
            $table->double('longitude_lembur')->nullable();
            $table->string('address_in')->nullable();
            $table->string('address_out')->nullable();
            $table->string('address_lembur')->nullable();
            $table->string('overtime_reason')->nullable();
            $table->float('overtime')->nullable();
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
        Schema::dropIfExists('reports');
    }
};
