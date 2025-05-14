<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KolStatusHidup extends Model
{
    protected $table = 'kol_status_hidup';
    protected $primaryKey = 'id_status_hidup';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_status_hidup',
        'nama_status_hidup',
    ];
}
