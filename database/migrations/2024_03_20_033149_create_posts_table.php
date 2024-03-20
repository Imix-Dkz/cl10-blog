<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
                //Campos adicionales
                $table->string('name');
                $table->string('slug');
                $table->text('extract');
                $table->longText('body'); //Body puede llegar a tener mucho texto
                //"enum" es un tipo de valor numerico limitado a lo que se indique, en este caso, 1 ó 2
                $table->enum('status', [1, 2])->default();
                //Para control de llaves foraneas se añaden estos 2 y sus vinculos correspóndintes
                $table->unsignedBigInteger('user_id');
                $table->unsignedBigInteger('category_id');
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
