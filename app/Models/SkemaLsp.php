<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkemaLsp extends Model
{
    protected $table = 'skema_lsps';
    protected $primaryKey = 'id_skema_lsp';
    public $timestamps = false;
    protected $guarded = [];
}
