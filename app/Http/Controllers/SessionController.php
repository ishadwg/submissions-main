<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
  public function create()
  {
    return view('session.create');
  }

  public function store()
  {
    // get email, password
    // validasi
    // validasi user password cek database
    // buka view home
    // notifikasi success / gagal

    $attributes = request()->validate([
      'email' => 'required|email',
      'password' => 'required',
    ]);

    if (auth()->attempt($attributes)) {
      return redirect('/home')->with('success', 'Welcome back');
    }

    /* Same result
    return back()
      ->withInput()
      ->withErrors(['email' => 'Your credentials could not be verified']);
    */

    throw ValidationException::withMessages(
      ['email' => 'Your credentials could not be verified.']
    );
  }

  public function destroy()
  {
    $loggedout = auth()->user()->name;
    auth()->logout();

    return redirect('/')->with('success', "See you again {$loggedout}");
  }
}
