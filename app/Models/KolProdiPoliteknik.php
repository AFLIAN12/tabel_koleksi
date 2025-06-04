<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KolProdiPoliteknik extends Model
{
    protected $table = 'kol_prodi_politeknik';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded = [];
}
