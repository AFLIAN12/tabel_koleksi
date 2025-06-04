<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KolJenisSekolah extends Model
{
    protected $table = 'kol_jenis_sekolah';
    protected $primaryKey = 'id_jenis_sekolah';
    public $timestamps = false;
    protected $guarded = [];
}
