<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KolPendidikan extends Model
{
    protected $primaryKey = 'id_pendidikan';
    public $incrementing = false;
    public $timestamps = false;
    protected $guarded = [];
}
