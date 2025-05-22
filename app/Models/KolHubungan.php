<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KolHubungan extends Model
{
    //
        // Nama tabel jika berbeda dari konvensi default Laravel
    protected $table = 'kol_hubungan';

    // Primary key khusus (bukan 'id')
    protected $primaryKey = 'id_hubungan';

    // Non-incrementing jika bukan auto-increment (opsional, tergantung struktur)
    public $incrementing = true;

    // Tipe primary key (integer atau string)
    protected $keyType = 'int';

    // Kolom yang boleh diisi (fillable)
    protected $fillable = [
        'nama_hubungan',
    ];
}

<?php
class KolHubungan extends Model
{
    protected $table = 'kol_hubungan';
    protected $primaryKey = 'id_hubungan';
    public $incrementing = false;
    public $timestamps = false; // tambahkan ini jika tidak ada created_at/updated_at
    protected $fillable = [
        'id_hubungan', 'nama_hubungan'
    ];
}