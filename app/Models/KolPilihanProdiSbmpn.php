<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KolPilihanProdiSbmpn extends Model
{
    protected $table = 'kol_pilihanprodi_sbmpn';
    public $timestamps = false;
    protected $guarded = [];
    protected $primaryKey = ['id_prodi', 'id_jurusan'];
    public $incrementing = false;
}
