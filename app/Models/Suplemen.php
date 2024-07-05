<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suplemen extends Model
{
    use HasFactory;
    
    protected $table = 'suplemens';

    protected $fillable = [
        'suplemen',
        'trimester',
        'keterangan',
    ];
}