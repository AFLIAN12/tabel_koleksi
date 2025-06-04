<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KolStatusKalender extends Model
{
    protected $table = 'kol_status_kalender';
    protected $primaryKey = 'id_status_kalender';
    public $timestamps = false;
    protected $guarded = [];
}
