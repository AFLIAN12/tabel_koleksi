<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PilihanProdiSbmpn extends Model
{
    protected $table = 'pilihanprodi_sbmpns';
    public $timestamps = false;
    protected $guarded = [];
    protected $primaryKey = ['id_prodi', 'id_jurusan'];
    public $incrementing = false;
}
