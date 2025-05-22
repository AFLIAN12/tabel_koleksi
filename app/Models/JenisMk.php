<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisMk extends Model
{
    protected $table = 'jenis_mks';
    protected $primaryKey = 'id_jenis_mk';
    public $incrementing = false;
    public $timestamps = false;
    protected $guarded = [];
}
