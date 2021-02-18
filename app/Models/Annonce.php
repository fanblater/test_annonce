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


    /**
     * Timestamp to false for desactivation of
     * required data "updated_at" "created_at"
     */
    public $timestamps = false;


    /**
     * Declare name of the table
     */
    protected $table = "annonces";



    /**
     * Declare sortable for sorting data based on price and surface
     */
    protected $sortable = [
        'prix',
        'surface'
    ];

    /**
     * Declare fillable to insert all data's at once
     */
    protected $fillable = [
        'ref_annonce',
        'prix',
        'surface',
        'nb_piece'
    ];


}
