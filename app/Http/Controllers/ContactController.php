<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Validator;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('contactPage','store');
        
    }
    public function contactPage()
    {
    	return view('contact.contactPage');
    }
    public function store(Request $request)
    {
 
        // validation the data before insert to database
        $messages = $this->getMessages();
        $rules= $this->getRules();
        $validator = Validator::make($request->all(), $rules, $messages); // Valdator::make($request,validation rules,[ Message ])
  
        if ($validator->fails()) {
            return redirect(route('contacts.contactPage').'#contact')->withErrors($validator)->withInputs($request->all());
        }
        Contact::create([
            'firstName'=> $request->fname,
            'lastName' => $request->lname,
            'email'    => $request->email,
            'subject'  => $request->subject,
            'message'  => $request->message,
        ]);

        return redirect(route('contacts.contactPage').'#contact')->with(['success'=>'Your Message Submited Successfully, W\'ll Reply As Soon As Possible' ]);
    }


    public function index()
    {
    	$contacts = Contact::all();
    	return view('contact.index', compact('contacts'));
    }

    public function show(Contact $contact)
    {
    	return view('contact.show', compact('contact'));
    }

    public function reply(Contact $contact)
    {
    	return view('contact.reply', compact('contact'));
    }

    public function delete($id)
    {

        $contact = Contact::find($id); 
        $contact->delete();
        return redirect()->route('contacts.index')->with(['success'=>'The Message Deleted Successfully']);
    }

    protected function getRules(){
       return $rules = [
            'fname'=>'required|min:3|max:100',
            'lname'=>'required|min:3|max:100',
            'email'=>'required|email|min:3|max:190',
            'subject'=>'required|string|min:3|max:190',
            'message'=>'required|string|min:3',
        ];
    }

    protected function getMessages(){
        return $messages = [
            'fname.required'=>'Please provide us your first name',
            'lname.required'=>'Please provide us your last name',
            'email.required'=>'Please provide us a valid email address',
            'subject.required'=>'Please provide us a message subject ', 
            'message.required'=>'Please leave your message here ',      
        ];
    }
}
