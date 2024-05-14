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
        Schema::create('estoc', function (Blueprint $table) {
            $table->string('CAS', 13); // 12 per CAS + 1 per S/L
            $table->float('Concentracio');
            $table->enum('Tipus', ['Percentatge', 'Mols']);
            $table->integer('Quantitat');
            $table->date('Data Entrada');
            $table->date('Data Caducitat');
            //$table->enum('Armari', ...); TODO
            $table->integer('Armari');
            $table->primary(['CAS', 'Concentracio', 'Tipus', 'Data Caducitat']);
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
