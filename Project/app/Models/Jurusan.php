<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    protected $table = 'jurusan';
    protected $primaryKey = 'id_jurusan';

    public function users()
    {
        return $this->hasMany(User::class, 'id_jurusan');
    }

    public function matkuls()
    {
        return $this->hasMany(Matkul::class, 'id_jurusan');
    }
}
