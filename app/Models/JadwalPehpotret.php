<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalPehpotret extends Model
{
    use HasFactory;

    protected $table = 'jadwal_pehpotrets';

    protected $fillable = [
        'nama_jpehpotret', 'brand_jpehpotret', 'tanggal_jpehpotret', 'keterangan_jpehpotret',
        'id_tvideo', 'id_foto', 'id_cspehpotret', 'id_pkpehpotret'
    ];

    // Relasi ke TimVideo
    public function timVideo()
    {
        return $this->belongsTo(TimVideo::class, 'id_tvideo');
    }

    // Relasi ke TimFoto
    public function timFoto()
    {
        return $this->belongsTo(TimFoto::class, 'id_foto');
    }

    // Relasi ke CsPehpotret
    public function csPehpotret()
    {
        return $this->belongsTo(CsPehpotret::class, 'id_cspehpotret');
    }

    // Relasi ke PaketPehpotret
    public function paketPehpotret()
    {
        return $this->belongsTo(PaketPehpotret::class, 'id_pkpehpotret');
    }
}
