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
        Schema::create('consum', function (Blueprint $table) {
            $table->id();
            // TODO: Usuari
            $table->string('CAS', 13);
            $table->float('Concentracio');
            $table->enum('Conc. Tipus', ['Percentatge', 'Mols']);
            $table->integer('Quantitat');
            $table->date('Data');
            $table->enum('Motiu', ['Pràctica', 'Regularització', 'Altres']);
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
