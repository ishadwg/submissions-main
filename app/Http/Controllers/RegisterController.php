<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
  public function create()
  {
    return view('register.create');
  }

  public function store()
  {
    $attributes = request()->validate([
      'name' => 'required|max:255',
      'email' => 'required|email|max:255|unique:users,email',
      'password' => 'required|max:255|min:7',
      'password_confirmation' => 'required|same:password',
    ]);

    $user = new User();
    $user->name = $attributes['name'];
    $user->email = $attributes['email'];
    $user->password = $attributes['password'];
    $user->role = 'Submitter';
    $user->save();

    return redirect('/home')->with('success', 'Your account has been created.');


  }
}
