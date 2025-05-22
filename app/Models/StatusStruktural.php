<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatusStruktural extends Model
{
    protected $table = 'status_strukturals';
    protected $primaryKey = 'id_status_struktural';
    public $timestamps = false;
    protected $guarded = [];
}
