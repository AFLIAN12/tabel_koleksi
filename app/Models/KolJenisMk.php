<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KolJenisMk extends Model
{
    protected $table = 'Kol_jenis_mk';
    protected $primaryKey = 'id_jenis_mk';
    public $incrementing = false;
    public $timestamps = false;
    protected $guarded = [];
}
