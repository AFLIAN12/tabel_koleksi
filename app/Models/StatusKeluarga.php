<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatusKeluarga extends Model
{
    protected $table = 'status_keluargas';
    protected $primaryKey = 'id_status_keluarga';
    public $timestamps = false;
    protected $guarded = [];
}
