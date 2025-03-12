<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimVideo extends Model
{
    use HasFactory;

    protected $table = 'tim_videos';  

    protected $fillable = ['nama_tvideo', 'status_tvideo', 'bvia_tvideo'];
}
