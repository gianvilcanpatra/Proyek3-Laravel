<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Dokumen extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = "id";

    protected $appends = ['document_url'];

    public function getDocumentUrlAttribute()
    {
        return Storage::url($this->attributes['document_path']);
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id', 'id');
    }
}
