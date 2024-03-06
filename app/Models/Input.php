<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Input extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'desc',
    ];

    public function documents()
    {
        return $this->hasMany(Document::class);
    }

    





}
