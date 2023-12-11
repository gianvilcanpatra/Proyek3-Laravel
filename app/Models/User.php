<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Dokumen;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use App\Models\Keterampilan;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Model implements Authenticatable
{
    use AuthenticableTrait;
    use hasFactory;
    
    protected $primaryKey = 'user_id';
    protected $table = 'users';
    protected $fillable = ['user_id','name','email', 'password',];

    
    public function pengguna()
{
    return $this->hasOne(Pengguna::class, 'user_id', 'id');
}

public function keterampilan()
{
    return $this->hasMany(Keterampilan::class, 'user_id', 'id');
}

public function pendidikan()
{
    return $this->hasMany(Pendidikan::class, 'user_id', 'id');
}

public function pekerjaan()
{
    return $this->hasMany(Pekerjaan::class, 'user_id', 'id');
}

public function dokumen()
{
    return $this->hasMany(Dokumen::class, 'user_id', 'id');
}

}