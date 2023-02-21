<?php

namespace App\Http\Controllers;

use App\Models\destination;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }


    public function postlogin(request $request)
    {
        $login = $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        if(Auth::attempt($login)){
            $user = auth::user();
            return redirect()->route('admin')->with('status','Welcome '.$user->name);
        }
        return back()->with('status1','Incorrect Email or Password');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('home')->with('status','Logout Successfully');
    }


}
