<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketPehpotret extends Model
{
    use HasFactory;

    protected $table = 'paket_pehpotrets';

    protected $fillable = ['nama_pkpehpotret', 'nama_kpaket'];

    // Relasi ke KategoriPaket
    public function kategoriPaket()
    {
        return $this->belongsTo(KategoriPaket::class, 'nama_kpaket');
    }
}
