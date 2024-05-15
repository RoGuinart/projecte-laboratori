<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = ['CAS', 'Concentracio', 'Tipus', 'Quantitat', 'Data_Entrada', 'Data_Caducitat'];
}
