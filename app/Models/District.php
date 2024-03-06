<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class District extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'desc',
    ];

    protected $observables = ['test'];

    public function test()
    {
        Log::alert("TEST");
        $this->fireModelEvent('test',false);

    }


    public function offices()
    {
        return $this->hasMany(Office::class);
    }




}
