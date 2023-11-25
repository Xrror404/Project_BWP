<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilePenting extends Model
{
    use HasFactory;
    protected $table = 'file'; 

    protected $primaryKey = 'id_file';

    protected $fillable = [
        'nama_file',
        'isi_file',
    ];
}
