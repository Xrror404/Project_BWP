<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poin extends Model
{
    use HasFactory;

    protected $connection = "KoneksiDatabase";
    protected $table = 'poins';
    protected $primaryKey = 'id_acara';
    public $incrementing = false;
    public $timestamps = true;

    public function PointByUser()
    {
        return $this->belongstoMany(User::class, 'penerima_poin', 'id_acara', 'id_penerima');
    }
}
