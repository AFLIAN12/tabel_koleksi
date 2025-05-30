<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KolJurusanSekolah extends Model
{
    protected $table = 'kol_jurusan_sekolah';
    protected $primaryKey = 'id_jurusan_sekolah';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_jurusan_sekolah',
        'nama',
        'nama_jurusan',
        'aktif',
    ];
}
