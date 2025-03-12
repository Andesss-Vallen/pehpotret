<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPaket extends Model
{
    use HasFactory;

    protected $table = 'kategori_pakets';

    protected $fillable = ['nama_kpaket'];

    // Relasi ke Paket
    public function paketPehpotrets()
    {
        return $this->hasMany(PaketPehpotret::class, 'nama_kpaket');
    }
}
