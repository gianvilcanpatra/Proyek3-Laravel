<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
  public function login(){
    return view('login');
}
public function loginproses(Request $request){
    if(Auth::attempt($request->only('email','password'))){
        return redirect('tampilanawal');
    }
    
    return \redirect('login');
}

public function register(){
 return view ('register');
}
public function registeruser(Request $request){
User::create([
 'name' =>$request->name,
 'email' =>$request->email,
 'password' => bcrypt($request->password),
 'Confirmpassword' => bcrypt($request->Confirmpassword),
 'remember_token' => Str::random(60) ,
]);
return redirect('/login');
}
}
