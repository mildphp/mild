<?php

namespace App\Models;

use Mild\Database\Entity\Model;

class PostType extends Model
{
    /**
     * @var string 
     */
    protected $table = 'post_types';

    protected $with = [
        'posts'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class, 'id', 'type_id');
    }
}