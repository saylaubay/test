<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'district_id',
        'type_id',
        'desc',
    ];



    public function offices()
    {
        return $this->hasMany(Office::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }



}
