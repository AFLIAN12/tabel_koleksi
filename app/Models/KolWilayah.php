<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KolWilayah extends Model
{
    protected $table = 'kol_wilayah';
    protected $primaryKey = 'id_wil';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_wil',
        'nm_wil',
        'id_induk_wilayah',
        'id_level_wil',
    ];
}
