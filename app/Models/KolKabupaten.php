<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KolKabupaten extends Model
{
    protected $table = 'kol_kabupaten';
    protected $primaryKey = 'id_kabupaten';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_kabupaten',
        'nama_kabupaten',
        'id_provinsi',
    ];
}
