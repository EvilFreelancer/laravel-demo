<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Post extends Model
{
    protected $table = 'posts';

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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function messages(): HasMany
    {
        return $this->hasMany(Message::class, 'post_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOneThrough
     */
    public function messagesUsers(): HasOneThrough
    {
        //return $this->hasOneThrough(User::class, Message::class);

        return $this->hasOneThrough(
            User::class,
            Message::class,
            'post_id', // Foreign key on history table...
            'id',      // Foreign key on users table...
            'id',      // Local key on suppliers table...
            'user_id'  // Local key on users table...
        );
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function tags(): MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggable', 'taggable');
    }
}
