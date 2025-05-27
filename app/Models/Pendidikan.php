<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    protected $primaryKey = 'id_pendidikan';
    public $incrementing = false;
    public $timestamps = false;
    protected $guarded = [];
}
