<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Terminal extends Model
{
    protected $table = 'terminals';
    protected $primaryKey = 'id_terminal';
    public $timestamps = false;
    protected $guarded = [];
}
