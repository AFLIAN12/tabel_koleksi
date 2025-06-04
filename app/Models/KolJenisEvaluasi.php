<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KolJenisEvaluasi extends Model
{
    protected $table = 'kol_jenis_evaluasi';
    protected $primaryKey = 'id_jenis_evaluasi';
    public $incrementing = false;
    public $timestamps = false;
    protected $guarded = [];
}
