<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coment extends Model
{
    protected $fillable = [
    	'coment',
    	'post_id'

    ];

    public function post()
    {
    	return $this->belongsTo(Post::class);
    }
}
