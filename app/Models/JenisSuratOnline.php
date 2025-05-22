<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisSuratOnline extends Model
{
    protected $table = 'jenis_surat_onlines';
    protected $primaryKey = 'id_surat';
    public $timestamps = false;
    protected $guarded = [];
}
