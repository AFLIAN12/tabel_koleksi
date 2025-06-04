<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KolPoliteknik extends Model
{
    protected $table = 'kol_politeknik';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded = [];
}
