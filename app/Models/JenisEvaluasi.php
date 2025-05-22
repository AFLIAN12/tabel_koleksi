<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisEvaluasi extends Model
{
    protected $table = 'jenis_evaluasis';
    protected $primaryKey = 'id_jenis_evaluasi';
    public $incrementing = false;
    public $timestamps = false;
    protected $guarded = [];
}
