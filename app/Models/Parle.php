<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parle extends Model
{
     use HasFactory;
    protected $table = 'parles';

    protected $fillable = [
        'id_region',
        'id_langue',
    ];
}
