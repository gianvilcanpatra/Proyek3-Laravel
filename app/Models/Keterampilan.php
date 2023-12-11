<?php

namespace App\Models;

use App\Models\pengguna;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Keterampilan extends Model
{
    use HasFactory;
    protected $guarded = [];
    //protected $primaryKey = "id";

    public function user()
    {
        return $this->belongsTo(User::class,'user_id', 'id');
    }
}
