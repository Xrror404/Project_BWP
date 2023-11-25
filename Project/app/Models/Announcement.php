<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;
    protected $table = 'pengumuman'; // Specify the table name if it differs from the default convention

    protected $primaryKey = 'id_pengumuman'; // Specify the primary key if it differs from 'id'

    protected $fillable = [
        'id_pengumuman',
        'judul_pengumuman',
        'isi_pengumuman',
        'pengumuman_added_date'
    ];
}
