<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KolTerminal extends Model
{
    protected $table = 'kol_terminal';
    protected $primaryKey = 'id_terminal';
    public $timestamps = false;
    protected $guarded = [];
}
