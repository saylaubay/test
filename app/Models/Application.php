<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'file',
        'document_id',
        'desc',
    ];

    public function document()
    {
        return $this->belongsTo(Document::class);
    }


}
