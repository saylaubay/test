<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;


    protected $fillable = [
        'doc_number',
        'file',
        'body',
        'user_id',
        'tg_message_id',
        'input_id',
        'sender_id',
        'desc',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function input()
    {
        return $this->belongsTo(Input::class);
    }

    public function sender()
    {
        return $this->belongsTo(Sender::class);
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }



}
