<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id','desc')->paginate(3);
        $categories = Category::all();
        $views = Post::orderByViews()->get();
        return view('welcome', [
            'posts'=>$posts,
            'categories'=>$categories,
            'views'=>$views

        ]);
    }

}
