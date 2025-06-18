<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriUKT extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_kategori_ukt';
    protected $table = 'tabel_kategori_ukt'; // <- Penting
    protected $keyType = 'string';
    protected $fillable = 
    ['id_kategori_ukt',
     'id_prodi', 
     'kategori_ukt', 
     'nominal'];
    
    public function prodi()
    {
        return $this->belongsTo(KolProdi::class, 'id_prodi');
    }
}