<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    
    public function register()
    {
        return view('auth.register');
    }
    public function index()
    {
        $posts = post::get();
        return view('index', compact('posts'));
    }
    // public function post()
    // {
    //     return view('post');
    // }

////////////////////////////////////////////////////
public function auth_login(Request $request)
{

    $remember = !empty($request->remember) ? true : false;
  
    if(Auth::attempt(['email' => $request->email , 'password' => $request->password]))
    {
        
        return redirect('index');

    }
    else
    {
        return redirect()->back()->with('error',"please enter currect email and password");
    }

}    





public function create_user(Request $request)
    {
       

        $save = new User;
        $save->name = trim($request->name);
        $save->email = trim($request->email);
        $save->password = Hash::make($request->password);
        $save->save();

        return redirect('login')->with('success',"Register successfully");

    }
    
}
