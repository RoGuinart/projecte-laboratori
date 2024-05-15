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
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->string('CAS', 13); // 12 per CAS + 1 per S/L
            $table->float('Concentracio');
            $table->enum('Tipus', ['Percentatge', 'Mols']);
            $table->integer('Quantitat');
            $table->date('Data_Entrada');
            $table->date('Data_Caducitat');
            //$table->enum('Armari', ...); TODO
            //$table->integer('Armari');
            $table->timestamps();
            $table->unique(['CAS', 'Concentracio', 'Tipus', 'Data_Caducitat']);
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
