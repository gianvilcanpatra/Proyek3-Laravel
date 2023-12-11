<?php

namespace App\Models;

use App\Models\Dokumen;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use App\Models\Keterampilan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pengguna extends Model
{
    use HasFactory;

    protected $guarded = [];
    //protected $primaryKey = "id";

    protected $appends = ['document_url'];

    public function getDocumentUrlAttribute()
    {
        return Storage::url($this->document_path);
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id', 'id');
    }


}
