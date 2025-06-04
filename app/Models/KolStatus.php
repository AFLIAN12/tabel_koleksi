<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KolStatus extends Model
{
    protected $table = 'kol_statuse';
    protected $primaryKey = 'id_status';
    public $timestamps = false;
    protected $guarded = [];
}
