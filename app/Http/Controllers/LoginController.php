<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login(Request $request){
    
        if (Auth::guard('admin')->check()) {
            return redirect()->intended('dashboard');
        }
       

        if($request->isMethod('post')){
           $data = $request->all();

           $rules = [
              'email' => 'required|email|max:255',
              'password' => 'required|max:255'
           ];

           $customMessage = [
               'email.required' => 'Email is required',
               'email.email' => 'Valid email required',
               'password' => 'valid password',
           ];

           $validator = Validator::make($data, $rules, $customMessage);

           if($validator->fails()){
              return redirect()->back()->withErrors($validator)->withInput();
           }
           if(Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']], $request->filled('remember_me'))){
               if ($request->filled('remember_me')) {
                   $request->session()->put('email', $data['email']);
                   $request->session()->put('password', $data['password']);
               } else {
                   $request->session()->forget('email');
                   $request->session()->forget('password');
               }

               return redirect()->intended('dashboard');
           } else {
               return redirect()->back()->withErrors(['auth' => 'Authentication failed. Please check your credentials and try again.'])->withInput();
           }
        }
        return view('admin.login');
    }
    public function logout(Request $request)
    {
        // Log out the user
        Auth::guard('admin')->logout();


        // Invalidate the session
        $request->session()->invalidate();

        // Regenerate the session token to prevent CSRF attacks
        $request->session()->regenerateToken();

        // Redirect to login page (or any other page)
        return redirect('/');
    }
}
