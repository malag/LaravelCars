<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create()
    {
       return view('register');
    }
  
    public function store(Request $request) {
      $formFields = $request->validate([
          'name' => ['required', 'min:3'],
          'email' => ['required', 'email', Rule::unique('users', 'email')],
          'password' => 'required|confirmed|min:6'
      ]);
    
      $formFields['password'] = bcrypt($formFields['password']);
  
      $user = User::create( $formFields);
  
      auth() -> login($user);
  
      return redirect('/cars')->with('message', 'User registered and Logged in!');
    }
    
    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
        'email' => ['required', 'email'],
        'password' => 'required'
        ]);
        
        if(auth()->attempt($formFields))
        {
        $request->session()->regenerate();
        return redirect('/cars')->with('message', 'You are now logged in!');
        
        }
        return redirect('/login')->withErrors(['email'=> 'Invalid Credentials'])->onlyInput('email');
    }
    
    public function login()
    {
       return view('login');
    }

    public function logout(Request $request)
    {
      auth() -> logout();
      
      $request -> session() -> invalidate();
      $request -> session() -> regenerateToken();
  
      return redirect('/cars')->with('message', 'You have been Logged out!');
    }    
}
