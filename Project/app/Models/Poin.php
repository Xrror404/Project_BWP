<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poin extends Model
{
    use HasFactory;
    protected $table = 'poin'; 

    protected $primaryKey = 'id_acara';

    public function penerimaPoin()
    {
        return $this->hasMany(PenerimaPoin::class);
    }
}
