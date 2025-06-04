<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KolJenjangPoliteknik extends Model
{
    protected $table = 'kol_jenjang_politeknik';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded = [];
}
