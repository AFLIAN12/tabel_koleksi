<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriUKT extends Model
{
    use HasFactory;

    protected $table = 'tabel_kategori_ukt';
    protected $primaryKey = 'id_kategori_ukt';
    protected $fillable = ['id_prodi', 'kategori_ukt', 'nominal'];

    public function prodi()
    {
        return $this->belongsTo(KolProdi::class, 'id_prodi');
    }
}