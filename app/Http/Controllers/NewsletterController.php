<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsletterRequest;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Validator;

class NewsletterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('store');
        
    }
    
    public function index()
    {
    	$newsletters = Newsletter::all();
    	return view('newsletters.index', compact('newsletters'));
    }

    public function store(Request $request)
    {
 
        // validation the data before insert to database
        $messages = $this->getMessages();
        $rules= $this->getRules();
        $validator = Validator::make($request->all(), $rules, $messages);
  
        if ($validator->fails()) {
            return redirect(route('frontend').'#subscribe')->withErrors($validator)->withInputs($request->all());
        }
        Newsletter::create([
            'email'    => $request->email, 
        ]);

        return redirect(route('frontend').'#subscribe')->with(['success'=>'Your are Now Subscribed to Our Newsletter, 
        	You Will Be Received Our Newsletter' ]);
       


    }

    public function delete($id)
    {

        $newsletter = Newsletter::find($id); 
        $newsletter->delete();
        return redirect()->route('newsletters.index')->with(['success'=>'The Subscriber Deleted Successfully']);
    }


    protected function getRules(){
       return $rules = [
            'email'=>'required|email|unique:newsletters|min:3|max:191',
        ];
    }

    protected function getMessages(){
        return $messages = [
            'email.required'=>'Please provide us a valid email address',    
        ];
    }  
}
