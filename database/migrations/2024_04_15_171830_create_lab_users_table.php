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
        Schema::create('lab_users', function (Blueprint $table) {
            // Potser no fa falta una taula d'usuaris, només els rols...
            $table->id();
            $table->string('Nom');
            $table->enum('Rol', ['Anònim', 'Estudiant', 'Professor']); // URL
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
