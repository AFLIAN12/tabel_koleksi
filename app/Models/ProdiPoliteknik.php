<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProdiPoliteknik extends Model
{
    protected $table = 'prodi_politekniks';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded = [];
}
