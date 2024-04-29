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
        Schema::create('generos', function (Blueprint $table) {
            $table->id();
            $table->String('Tipo_Genero')->noNull();
            /**
             * call the tables
             */
            $table->unsignedBigInteger('user_id')->unique(); // llamando la tabla users
            $table->foreign('user_id')
                ->references('id')
                ->on('users')           //llave foranea
                ->onUpdate('cascade '); //si se cambia el genero, se actualiza en el usuario
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generos');
    }
};
