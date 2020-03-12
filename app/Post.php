<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'content', 'date_written', 'featured_image', 'votes_up',
        'vote_down', 'user_id', 'category_id'
    ];

    //
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
