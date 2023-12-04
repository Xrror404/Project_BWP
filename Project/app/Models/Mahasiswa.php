<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Mahasiswa extends Authenticatable
{
    use HasFactory;

    protected $table = 'user';
    protected $primaryKey = 'id_user';
    public $timestamps = false;
    public static function getByNrp($user_username)
    {
        return self::where('user_username', $user_username)->first();
    }

    public function getAuthPassword()
    {
        return $this->user_password;
    }
}
