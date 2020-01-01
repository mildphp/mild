<?php

namespace App\Models;

use Mild\Database\Entity\Model;

class Post extends Model
{
    /**
     * @var string
     */
    protected $table = 'posts';
    /**
     * @var array
     */
    protected $with = [

    ];

    /**
     * @return \Mild\Database\Entity\Relations\BelongsTo
     */
    public function type()
    {
        return $this->belongsTo(PostType::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getTitleAttribute($value)
    {
        return $value.' sad ';
    }
}