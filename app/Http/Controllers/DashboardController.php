<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\User;

class DashboardController extends Controller
{
    public function index()
    {
    	return view('dashboard.index',[
    		'postsCount'=>Post::all()->count(),
    		'usersCount'=>User::all()->count(),
    		'categoriesCount'=>Category::all()->count(),
            'commentsCount'=>Comment::where('status','moderated')->count(),
    	]);
    }
    public function edit()
    {
    	return view('dashboard.settings');
    }

}
