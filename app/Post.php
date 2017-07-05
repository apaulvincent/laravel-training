<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function addComment($body)
    {
        // Long form
        // Comment::create([
        //     'body' => $body,
        //     'post_id' => $this->id
        // ]);

        // Short form
        $this->comments()->create(compact('body'));

    }


    // protected $fillable = ['title', 'body'];
    protected $guarded = [];
}
