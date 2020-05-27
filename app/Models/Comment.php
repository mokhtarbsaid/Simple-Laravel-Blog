<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $fillable = ['name','email', 'post_id', 'comment', 'status' ];
	protected $hidden = ['created_at', 'updated_at'];

	public function post()
	{
		return $this->belongsTo('App\Models\Post');
	}

	public function user()
	{
		return $this->belongsTo('App\User');
	}
	
    public function getGravatar()
    {
        $hash = md5(strtolower(trim($this->attributes['email'])));
        return "http://gravatar.com/avatar/$hash";
    }
}
