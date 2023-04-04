<?php

namespace App\Http\Controllers;
use App\Models\Dbproperti;
use Illuminate\Http\Request;
use App\Models\DbUser;
use App\Models\UserRequest;
use Session;

class LandingController extends Controller
{

    function Home()
    {   
    $properties = DbProperti::all();
    
        return view('Home',compact('properties'));


    }
    function Login(Request $request)
    {
        if ($request->input('signin')){
            $email = $request->input('email');
            $password = $request->input('password');
             $verifyEmail = DbUser::where('email',$email)->first();

            if ($verifyEmail) {
                if ($verifyEmail->password == $password) {
                    if ($verifyEmail->role_id == 2) {
                        session()->put('user', $verifyEmail);
                        return redirect()->route('home');
                    }
                    else {
                        session()->put('admin', $verifyEmail);

                        // Session::set('admin', $verifyEmail);
                        return redirect()->route('admin');
                    }
                }
            }
        }
        return view('Login');
    }
    function Signup(Request $request)
    {
        if ($request->input('signup')) {
            $user = new DbUser;
            
            $validated = $request->validate([
                'name' => 'required',
                'email' => 'required|unique:db_users|',
                'password' => 'required',
            ]);
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = $request->input('password');
            $user->role_id = 2;    
            $user->save();
            return redirect()->route('login');
        }
        return view('Signup');
    }
    
    function PropertiDetail($id)
    {
        //if ($request->input('propertidetail')) 
        $properties = Dbproperti::find($id);
            return view('propertidetail',compact('properties'));
    }
    function Contact(Request $request)
    {
     
      return view('contact');


    }

    function requestA(Request $request){
        $req = new UserRequest;
            
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);
        $req->name = $request->input('name');
        $req->email = $request->input('email');
        $req->phone = $request->input('phone');
        $req->message = $request->input('message');
     
        $req->save();
        return redirect()->back()->with('suc', 'requeset sent sussefully');
     }
    


}      
