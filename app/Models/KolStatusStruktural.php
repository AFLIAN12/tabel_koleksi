<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KolStatusStruktural extends Model
{
    protected $table = 'kol_status_struktural';
    protected $primaryKey = 'id_status_struktural';
    public $timestamps = false;
    protected $guarded = [];
}
