<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenerimaPoin extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pp';
    protected $table = 'penerima_poin'; // Sesuaikan dengan nama tabel yang benar

    public function poin()
    {
        return $this->belongsTo(Poin::class, 'id_acara', 'id_acara');
    }
}
