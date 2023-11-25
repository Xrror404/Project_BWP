<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;
    protected $table = 'pengumuman'; 

    protected $primaryKey = 'id_pengumuman';

    protected $fillable = [
        'id_pengumuman',
        'judul_pengumuman',
        'isi_pengumuman',
        'pengumuman_added_date'
    ];
}
