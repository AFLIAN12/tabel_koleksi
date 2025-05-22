<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'statuses';
    protected $primaryKey = 'id_status';
    public $timestamps = false;
    protected $guarded = [];
}
