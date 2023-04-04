<?php

namespace App\Http\Controllers;

use App\Models\DbProperti;
use Illuminate\Http\Request;
use App\Models\DbUser;


class PropertiController extends Controller
{
    function AddProperti(Request $request)
    {  

        $pro = new DbProperti();
        if ($request->session()->has('admin')) {
            $s = $request->session()->get('admin');
    }
    if ($request->input('add')) {

        if($request->has('img')) {
            $image = $request->file('img');
           
            $imageName = time().'.'.$request->img->getClientOriginalExtension();
            $request->img->move(public_path('/ClientAssets/img'), $imageName);
          
           
            $pro->images = $imageName;
        }

        $pro->housing_name = $request->input('housingname');
        $pro->property_type = $request->input('propertitype');
        $pro->price = $request->input('price');
        $pro->house_type = $request->input('housetype');
        $pro->sales_rent = $request->input('sale_rent');
        $pro->city_id = $request->input('city');
        $pro->state_id = $request->input('state');
        //$pro->status = $request->input('status');
        $pro->owner_id = $s->id;
        $pro->save();   
    }

    return view('Admin.AddProperti');
}
function ViewProperti(Request $request)
{
    

    if ($request->session()->has('admin')) {
        $s = $request->session()->get('admin');
    }
    $properties = DbProperti::all();
    
    

    return view('Admin.ViewProperti',compact('properties'));
}

public function DeletePro($id){

    DbProperti::find($id)->delete();
               return redirect()->route('viewproperti');
}
}
    
