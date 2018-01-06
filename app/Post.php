<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = [
		'user_id',
		'category_id',
		'name',
		'slug',
		'excerpt',
		'body',
		'status',
		'file'
	];

	public function user(){
		$this->belongsTo(User::class);
	}

	public function category(){
		$this->belongsTo(Category::class);
	}

    public function tags(){
    	return $this->belongsToMany(Tag::class);
    }
}
