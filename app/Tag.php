<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = ['created_at', 'updated_at', 'deleted_at'];

    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}
