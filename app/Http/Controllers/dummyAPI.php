<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class dummyAPI extends Controller
{
    //
    function getSingleData(Request $request){
        $docters = Doctor::where('id',$request->fid)->get();
        return response()->json($docters, 200);
    }

    function postdoctordata(Request $request){

        if($request->password == $request->Cpassword){
            $table = new Doctor();
            $table->first_name = $request->firstname;
            $table->last_name = $request->lastname;
            $table->gender = $request->gender;
            $table->mobile  = $request->mobile ;
            $table->password = $request->password;
            $table->designation = $request->designation;
            $table->department = $request->department; 
            $table->address = $request->address; 
            $table->email  = $request->email ; 
            $table->dob = $request->dob; 
            $table->education = $request->education; 
            $table->profile_picture = $request->profilepicture; 
            $table->save();
            $message = "Success";
            return response()->json($message, 200);
        }else{
            $message = "wrong";
            return response()->json($message, 200);
        }
        
      //  return["name"=>"mohamedhasnathfarhan","email"=>"mohamedhasnathfarhan@gmail.com","address"=>"Colombo"];
    }

    function getAllData(){

        $docters = Doctor::all();
        return response()->json($docters, 200);
    }
}
