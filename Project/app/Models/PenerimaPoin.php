<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenerimaPoin extends Model
{
    use HasFactory;
    protected $table = 'penerima_poin';
    protected $primaryKey = 'id_pp';
    public $timestamps = false;
    public $incrementing = false;
    public function poins()
    {
        return $this->belongsTo('App\Models\Poin', 'id_acara');
    }
}
