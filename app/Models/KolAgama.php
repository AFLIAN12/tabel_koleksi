<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KolAgama extends Model
{
    protected $table = 'kol_agama';
    protected $primaryKey = 'id_agama';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id_agama',
        'nama_agama',
        'id_feeder',
    ];
}
