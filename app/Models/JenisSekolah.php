<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisSekolah extends Model
{
    protected $table = 'jenis_sekolahs';
    protected $primaryKey = 'id_jenis_sekolah';
    public $timestamps = false;
    protected $guarded = [];
}
