<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = ['name', 'description'];
    protected $attributes = [
        'description' => 'No description for this category',
    ];

    public function posts()
    {
    	return $this->hasMany('App\Models\Post');
    }
}
