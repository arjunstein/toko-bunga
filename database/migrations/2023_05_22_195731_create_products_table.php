<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Random\Engine;

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
            $table->bigInteger('categoryId')->unsigned();
            $table->foreign('categoryId')->references('id')->on('categories')->onDelete('restrict')->onUpdate('restrict');
            $table->string('namaProduk');
            $table->string('slug')->unique();
            $table->string('gambar');
            $table->string('deskripsi')->nullable();
            $table->integer('harga');
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
