<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimFoto extends Model
{
    use HasFactory;

    protected $table = 'tim_fotos';

    protected $fillable = ['nama_tfoto', 'status_tfoto', 'bvia_tfoto'];
}
