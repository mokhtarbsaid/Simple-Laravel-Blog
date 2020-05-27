<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Requests\CommentRequest;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Comment;
use Illuminate\Support\Facades\Storage;
use DB;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show', 'action');
        $this->middleware('CheckCategory')->only('create');
        $this->middleware('CheckTag')->only('create');
    }

    public function index()
    {
        $posts = Post::all();
        return view('posts.index')->with('posts',$posts);
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all(); 
        return view('posts.create')->with('categories', $categories)->with('tags', $tags);
    }

    public function store(PostRequest $request)
    {
        $user_id = Auth::user()->id;
        $image = $request->image->store('uploads/posts','public');
        $post = Post::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'content'=>$request->content,
            'image'=>$image,
            'category_id'=>$request->category,
            'user_id'=>$user_id,
        ]);
        // Attach the post to here tags 
        $post->tags()->attach($request->tag);

        return redirect(route('posts.index'))->with(['success'=>'The Post is Added Successfully']);
    }

    public function show(Post $post)
    { 
        views($post)->record();
        $views = Post::orderByViews('desc')->paginate(3);
        $categories = Category::all();
        $tags = Tag::all();

        return view('posts.show', compact('post' , 'categories', 'tags', 'views'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all(); 
        return view('posts.edit')->with('post', $post)->with('categories', $categories)->with('tags', $tags);
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        // 
        $data = $request->only(['title', 'description', 'content']);

        if($request->hasFile('image')){
            //store the new image in the storage folder
            $image = $request->image->store('uploads/posts','public');
            //store the old image from the storage folder
            Storage::disk('public')->delete($post->image);
            // Add the new image
            $data['image'] = $image;
        }
        // Attach the post to here new tags and detach the old tags with sync()
        $post->tags()->sync($request->tag);
        //Update now
        $post->update($data);
        return redirect(route('posts.index'))->with(['success'=>'The Post is Updated Successfully']);
    }

    public function destroy($id)
    {
        $post= Post::withTrashed()->where('id',$id)->first();
        if ($post->trashed()) {   
           Storage::disk('public')->delete($post->image);
            $post->forceDelete();

            return redirect(route('trashed.index'))->with(['success'=>'The Post Delete Successfully']);
        }else{
            $post->delete();
            return redirect(route('posts.index'))->with(['success'=>'The Post Moved to Trash Successfully']);
        }
        
    }

    public function trashed()
    {
        $trashed = Post::onlyTrashed()->get();
        return view('posts.index')->with('posts', $trashed);
    }

    public function restore($id){
        Post::withTrashed()->where('id', $id)->restore();
        return redirect(route('posts.index'))->with(['success'=>'The Post Restored Successfully']);
    }
    
    public function action(Request $request){

     if($request->ajax()){
        
      $output = '';
      $query = $request->get('query');        
      if($query != '') {
       $data = DB::table('posts')
         ->where('title', 'like', '%'.$query.'%')
         ->orWhere('content', 'like', '%'.$query.'%')
         ->get();   
      }

      $total_row = $data->count();
      if($total_row > 0){
       foreach($data as $result){
        $output .= '<a href="'.route('posts.show',$result->id).'"><li class="search-result">'.$result->title.'</li></a>';
       }
      }
      else{
       $output = '<li class="search-result">No Result, Try Other Words</li>';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}

   




