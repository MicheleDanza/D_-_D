<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('index')->unique(); // Indice unico per identificare l'abilità
            $table->string('name'); // Nome abbreviato dell'abilità
            $table->string('full_name'); // Nome completo dell'abilità
            $table->json('desc'); // Descrizione dell'abilità come JSON
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('skills');
    }
};
