<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $table = 'matkul';
    protected $primaryKey = 'id_matkul';
    public $timestamps = false;
    public static function getByJurusan($kodeJurusan)
    {
        return self::where('id_jurusan', $kodeJurusan)->get();
    }
}
