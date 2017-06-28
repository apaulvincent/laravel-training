<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    // public static function incomplete()
    // {
    //     return static::where('completed', 0)->get();
    // }

    public function scopeIncomplete($query)  // Add scope to chain filters
    {
        return $query->where('completed', 0); // App\Task::incomplete()->get();
    }
}
