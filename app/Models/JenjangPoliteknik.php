<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenjangPoliteknik extends Model
{
    protected $table = 'jenjang_politekniks';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded = [];
}
