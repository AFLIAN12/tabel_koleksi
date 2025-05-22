<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Politeknik extends Model
{
    protected $table = 'politekniks';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded = [];
}
