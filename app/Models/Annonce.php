<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class Annonce extends Model
{
    use HasFactory;


    protected $table = "annonces";

    protected $cast = [
        'prix' => 'float'
    ];

    protected $fillable = [
        'ref_annonce',
        'prix',
        'surface',
        'nb_piece'
    ];


}