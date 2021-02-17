<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Kyslik\ColumnSortable\Sortable;

class Annonce extends Model
{
    use HasFactory;
    use Sortable;

    public $timestamps = false;

    protected $table = "annonces";

    protected $cast = [
        'prix' => 'float'
    ];

    protected $sortable = [
        'prix',
        'surface'
    ];

    protected $fillable = [
        'ref_annonce',
        'prix',
        'surface',
        'nb_piece'
    ];


}