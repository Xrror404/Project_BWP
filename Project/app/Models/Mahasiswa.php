<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    protected $primaryKey = 'nrp_mhs';
    public $timestamps = false;
    public static function getByNrp($nrp_mhs)
    {
        return self::where('nrp_mhs', $nrp_mhs)->first();
    }
}
