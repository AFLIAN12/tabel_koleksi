<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KolJenisSuratOnline extends Model
{
    protected $table = 'kol_jenis_surat_online';
    protected $primaryKey = 'id_surat';
    public $timestamps = false;
    protected $guarded = [];
}
