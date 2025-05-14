<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KolJk extends Model
{
    protected $table = 'kol_jk';
    protected $primaryKey = 'id_jk';
    protected $keyType = 'int';
    public $incrementing = true;

    protected $fillable = [
        'nama_jk',
        'ket',
    ];
}
