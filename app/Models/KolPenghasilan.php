<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KolPenghasilan extends Model
{
    protected $table = 'kol_penghasilan';
    protected $primaryKey = 'id_penghasilan';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id_penghasilan',
        'nama_penghasilan',
    ];
}
