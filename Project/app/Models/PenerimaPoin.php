<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenerimaPoin extends Model
{
    use HasFactory;
    protected $table = 'penerima_poin'; 

    protected $primaryKey = 'id_pp';
    public function poin()
    {
        return $this->belongsTo(Poin::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
