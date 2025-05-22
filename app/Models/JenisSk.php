<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisSk extends Model
{
    protected $table = 'jenis_sks';
    protected $primaryKey = 'id_jenis_sk';
    public $timestamps = false;
    protected $guarded = [];
}
