<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KolPekerjaan extends Model
{
    protected $table = 'kol_pekerjaan';
    protected $primaryKey = 'id_pekerjaan';
    public $incrementing = false;
    public $timestamps = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_pekerjaan',
        'nama_pekerjaan',
    ];
}
