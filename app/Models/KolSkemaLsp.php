<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KolSkemaLsp extends Model
{
    protected $table = 'kol_skema_lsp';
    protected $primaryKey = 'id_skema_lsp';
    public $timestamps = false;
    protected $guarded = [];
}
