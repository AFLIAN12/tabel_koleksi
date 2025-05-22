<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisAktifitas extends Model
{
    protected $table = 'jenis_aktifitas';
    protected $primaryKey = 'id_jenis_aktifitas';
    public $timestamps = false;
    protected $guarded = [];
}
