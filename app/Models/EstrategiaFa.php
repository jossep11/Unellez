<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstrategiaFa extends Model
{
    protected $table = 'estrategia_fas';
    protected $fillable = [
        'Fortalezas','Amenazas', 'Description'
    ];
    use HasFactory;
}
