<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KolJenisSk extends Model
{
    protected $table = 'kol_jenis_sk';
    protected $primaryKey = 'id_jenis_sk';
    public $timestamps = false;
    protected $guarded = [];
}
