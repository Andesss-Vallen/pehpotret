<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CsPehpotret extends Model
{
    use HasFactory;

    protected $table = 'cs_pehpotrets';

    protected $fillable = ['nama_cspehpotret'];
}
