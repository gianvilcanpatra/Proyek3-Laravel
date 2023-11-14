<?php

namespace App\Models;

use App\Models\pengguna;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pekerjaan extends Model
{
    use HasFactory;
    
    protected $fillable = ['pengguna_id', 'pekerjaan','city','employer','mulai','tahun','terakhir','tambah','deskripsis'];

    public function pengguna()
    {
        return $this->hasOne(pengguna::class);
    }
}
