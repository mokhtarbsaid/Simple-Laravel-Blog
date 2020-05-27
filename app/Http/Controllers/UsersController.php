<?php

namespace App\Http\Controllers;
use App\User;
use App\Models\Profile;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function index()
    {
    	$users = User::all();
    	return view('users.index')->with('users', $users);
    }

    public function create()
    {
    	return view('users.create');
    }

    public function edit(User $user)
    {
        $profile = $user->profile;
    	return view('users.profile', ['user'=>$user, 'profile'=>$profile] );
    }

    public function update(User $user, Request $request)
    {
        $profile = $user->profile;
        $data = $request->all();
        if ($request->hasFile('picture')) {
            $picture = $request->picture->store('uploads/profiles','public');
            $data['picture'] = $picture;
        }
        $profile->update($data);
        return redirect(route('users.edit',$user->id))->with(['success'=>'Your Profile is Updated Successfully']);

    }

    public function makeAdmin(User $user)
    {
    	$user->role = 'admin';
    	$user->save();
    	return redirect(route('users.index'))->with(['success'=>'The User is Admin Now Successfully']);
    }
}
