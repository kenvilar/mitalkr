<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = [
        'user1_id',
        'user2_id',
    ];
    
    public function chats()
    {
        return $this->hasManyThrough(Chat::class, Message::class);
    }
    
    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
