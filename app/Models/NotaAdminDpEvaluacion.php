<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotaAdminDpEvaluacion extends Model
{
    use HasFactory;

    protected $fillable = ['fortaleza', 'oportunidad', 'debilidad', 'amenaza'];
}
