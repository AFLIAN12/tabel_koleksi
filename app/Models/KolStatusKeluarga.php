<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KolStatusKeluarga extends Model
{
    protected $table = 'kol_status_keluarga';
    protected $primaryKey = 'id_status_keluarga';
    public $timestamps = false;
    protected $guarded = [];
}
