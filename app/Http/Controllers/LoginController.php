<?php

namespace App\Http\Controllers;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //
    public function login(Request $request){
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:20',
        ]);
        $user = Registration::where('email','=',$request->email)->first();

        if($user){
            if(hash::check($request->password , $user->password)){
                $request->session()->put('loginId', $user->id);
                $request->session()->put('loginName', $user->name);
                
                return redirect('/blog_desc/'.session('blog_id'));
            }else{
                return back()->withInput()->with('fail','This password is incorrect.');
            }
        }else{
            return back()->withInput()->with('fail','This email is not registered.');
        }
    }

    public function logout(){
        Session::forget('loginId');
        //Session::pull('loginId','default'); //could also be used //session::forget is used for deleting session data without returning it, while session::pull retrieves and deletes session data, returning the value that was retrieved
        return back();
    }



}
