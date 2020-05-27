<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;

class Post extends Model implements Viewable
{
	use InteractsWithViews;
	use SoftDeletes;

	protected $fillable = ['title','description', 'content', 'image', 'user_id','category_id', ];
	protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

	public function category()
	{
		return $this->belongsTo('App\Models\Category');
	}
	public function user()
	{
		return $this->belongsTo('App\User');
	}
	public function tags()
	{
		return $this->belongsToMany('App\Models\Tag');
	}

    public function hasTag($tagId){
        return in_array($tagId, $this->tags->pluck('id')->toArray());
    }

	public function comments()
	{
		return $this->hasMany('App\Models\Comment');
	}
}
