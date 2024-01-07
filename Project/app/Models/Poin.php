<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poin extends Model
{
    use HasFactory;
    protected $table = 'poins';
    protected $primaryKey = 'id_acara';
    public $incrementing = false;
    public $timestamps = true;
    public function penerima_poin()
    {
        return $this->hasMany('App\Models\PenerimaPoin', 'id_acara');
    }
}
