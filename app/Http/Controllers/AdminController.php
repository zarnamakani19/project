<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\DbProperti;
use App\Models\DbUser;


class AdminController extends Controller
{
    function Home()
    {
       $properticount = DbProperti::count();
       $usercount = DbUser::where('role_id',2)->count();
      
        $count = ['properticount' => $properticount,'usercount' => $usercount ];
        return view('Admin.Home',compact('count'));
    }
    function AddProperti()
    {  
        
        return view('addproperti');
    }
    function ViewProperti(){
        
        return view('viewproperti');
    }

    function logout(){
        session_unset();
        Session::flush();
        return view('Login');



    }

}

        