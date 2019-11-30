<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'text',
        'user_id',
    ];

    public function user()
    {
        $this->hasOne(User::class, 'id', 'user_id');
    }
}
