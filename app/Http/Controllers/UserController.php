<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests;
use App\User;
use App\UserTranslation;
use App;

class UserController extends Controller
{
    public function create()
    {
    	return view('adduser');
    }
    public function store()
    {
    	$input = Request::all();
    	$data = [
    	'en'  => ['name' => $input['en_name']],
    	'ar'  => ['name' => $input['ar_name']],
    	'email' => $input['email'],
    	'password' => $input['password'],
  ];

  $user = User::create($data);

  return redirect('home');


    }

    public function list()
    {
    	$users = User::get();
       return view('useredit',compact('users'));

    }
    public function edit($id)
    {
    	$user = User::find($id);
    	return view('edituser',compact('user'));

    }
    public function update()
    {
    	$input = Request::all();
		$data = [
    	'name' => $input['name']
  ];
    	
   		$category = UserTranslation::where('user_id',$input['id'])->where('locale',App::getLocale())->update($data);
   		$data = [
    	'email' => $input['email'],
    	'password' => $input['password']
  ];
   		$category = User::where('id',$input['id'])->update($data);
   		return redirect('home');

    }
    public function remove()
    {
		$users = User::get();
       return view('removeuser',compact('users'));
    }
    public function delete($id)
    {
    	$user = User::where('id',$id)->delete();
    	return redirect('home');

    }
}
