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