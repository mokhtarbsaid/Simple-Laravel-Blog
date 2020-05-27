<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Validator;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::all();
        return view('comments.index')->with('comments',$comments);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 
        // validation the data before insert to database
        $messages = $this->getMessages();
        $rules= $this->getRules();
        $validator = Validator::make($request->all(), $rules, $messages); // Valdator::make($request,validation rules,[ Message ])
  
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }
        Comment::create([
            'name'    => $request->name,
            'email'    => $request->email,
            'post_id'      => $request->post_id,
            'comment' => $request->comment,
        ]);

        return redirect(route('posts.show', $request->post_id))->with(['success'=>'Your is Added Successfully, It\'s Now Under Rewiew' ]);
    }


    public function approve(Request $request, $id)
    {
        $comment = Comment::find($id);
        $comment->update(['status' => 'approved']);

        return redirect()->back()->with(['success'=>'The Comment is Approved Successfully']);
    }
    
    public function approveAll(Request $request)
    {
        $comments = Comment::$request->all();
        $comments->update(['status' => 'approved']);

        return redirect()->back()->with(['success'=>'The Comments is Approved Successfully']);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //Check if the offer id exist
        $comment = Offer::find($id); //Offer::where('id','$id')->first();
        if(!$comment)
            return redirect()->back()->with(['error'=>'This Comment Not Found']);
        $comment->delete();
        return redirect()->route('comments.index')->with(['success'=>'Comment Deleted Successfully']);
    }

 protected function getRules(){
       return $rules = [//validation Rules: 'names' => 'All Rules' ]
            'name'=>'required|min:3|max:100',
            'email'=>'required|email|max:100',
            'comment'=>'required|string|min:3',
        ];
    }

    protected function getMessages(){
        return $messages = [
            'name.required'=>'Please provide us your name',
            'email.required'=>'Please provide us a valid email address',
            'comment.required'=>'Please leave your comment ',       
        ];
    }
}
