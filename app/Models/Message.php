<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function post(): HasOne
    {
        return $this->hasOne(Post::class, 'id', 'post_id');
    }
}
