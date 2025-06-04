<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KolJenisAktifitas extends Model
{
    protected $table = 'kol_jenis_aktifita';
    protected $primaryKey = 'id_jenis_aktifitas';
    public $timestamps = false;
    protected $guarded = [];
}
