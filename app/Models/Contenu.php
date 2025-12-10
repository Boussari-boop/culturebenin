<?php

namespace app\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contenu extends Model
{
    use HasFactory;

    protected $table = 'contenus';

    protected $fillable = [
        'titre',
        'texte',
        'date creation',
        'statut',
        'parent_id',
        'date_validation',
        'id_region',
        'id_langue',
        'id_moderateur',
        'id_type_contenu',
        'id_auteur',
    ];
}
