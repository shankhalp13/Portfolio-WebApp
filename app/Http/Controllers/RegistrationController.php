<?php

namespace App\Http\Controllers;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    //
    public function register(Request $request){

        $data = $request->validate([
            'name' => 'required',
            'phonenumber' => 'required',
            'email' => 'required|email|unique:registrations',
            'password' => 'required|min:8|max:20',
            'cpassword'=> 'required|min:8|max:20',
        ]);

        /*
        The following code snippet custom validates the password and confirm password but its a long way of doing what the predefined does.
        */
        $validator = Validator::make($request->all(), [
            'password' => 'required|min:8|max:20',
            'cpassword'=> 'required|min:8|max:20',
        ]);

        if ($request->password !== $request->cpassword) {
        $validator->errors()->add('cpassword', 'The password and confirmation password do not match.');
        $validator->errors()->add('password', 'The password and confirmation password do not match.');
        return back()->withErrors($validator)->withInput();
        }




        $registration = new Registration;
        $registration->name = $request->name;
        $registration->email = $request->email;
        $registration->phonenumber = $request->phonenumber;
        $registration->password = Hash::make($request->password);

        if($registration->save()){
            return redirect('/login/'.$request->email)->with('Success','Registered Successfully');
        }else{
            return back()->withInput($request->all())->with('Failure','Registration Failure');
        }



        //Session::put('submitted',true);


    }
}
