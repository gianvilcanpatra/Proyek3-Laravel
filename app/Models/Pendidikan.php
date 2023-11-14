<?php

namespace App\Models;

use App\Models\pengguna;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pendidikan extends Model
{
    use HasFactory;
    protected $fillable = [
        'pengguna_id', 'pendidikanformal', 'jurusan', 'tahunPendidikan'];

    public function pengguna()
    {
        return $this->hasOne(pengguna::class,'pengguna_id', 'id');
    }
}
