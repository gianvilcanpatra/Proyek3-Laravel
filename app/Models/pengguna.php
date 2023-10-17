<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class pengguna extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['document_url'];

    public function getDocumentUrlAttribute()
    {
        return Storage::url($this->document_path);
    }

}
