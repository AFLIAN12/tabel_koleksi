<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bulan extends Model
{
    protected $primaryKey = 'no_bln';
    public $incrementing = false;
    public $timestamps = false;

    protected $guarded = [];
}
