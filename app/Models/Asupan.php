<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asupan extends Model
{
    use HasFactory;

    protected $table = 'asupans';

    protected $fillable = [
        'bahan_makanan',
        'trimester',
        'keterangan',
    ];
}