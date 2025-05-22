<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatusKalender extends Model
{
    protected $table = 'status_kalenders';
    protected $primaryKey = 'id_status_kalender';
    public $timestamps = false;
    protected $guarded = [];
}
