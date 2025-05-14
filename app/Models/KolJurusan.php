<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KolJurusan extends Model
{
    protected $table = 'kol_jurusan';
    protected $primaryKey = 'id_jurusan';
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = [
        'id_jurusan',
        'nama_jurusan',
        'id_kajur',
        'id_sekjur',
        'visi',
        'misi',
    ];
}
