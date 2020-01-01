<?php

namespace App\Models;

use Mild\Database\Entity\Model;

class User extends Model
{
    /**
     * @var string
     */
    protected $table = 'users';
    /**
     * @var array
     */
    protected $with = [
        'post'
    ];

    /**
     * @return \Mild\Database\Entity\Relations\BelongsTo
     */
    public function post()
    {
        return $this->belongsTo(Post::class, 'id', 'user_id')->orderBy('id');
    }

    public function roles()
    {
        return $this->hasMany(Role::class);
    }

    public function getNameAttribute($value)
    {
        return $value.' asd';
    }

    public function getEmailAttribute($value)
    {

    }

    public function getcreated_atAttribute()
    {

    }

    public function getCreatedAtAttribute()
    {

    }
}