<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = [
		'title',
		'content'
	];

	public function coments()
    {
    	return $this->hasMany(Coment::class);
    }
}
