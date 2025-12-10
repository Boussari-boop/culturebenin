<?php

namespace app\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Langue extends Model
{
    use HasFactory;

    protected $table = 'langues';

    protected $fillable = [
        'code_langue',
        'nom_langue',
        'description',
    ];
}
