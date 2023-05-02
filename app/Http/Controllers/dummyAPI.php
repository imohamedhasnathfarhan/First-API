<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class dummyAPI extends Controller
{
    //
    function getSingleData(Request $request)
    {
        $docters = Doctor::where('id', $request->fid)->get();
        return response()->json($docters, 200);
    }

    // function postdoctordata(Request $request)
    // {

    //     if ($request->password == $request->Cpassword) {
    //         $table = new Doctor();
    //         $table->first_name = $request->firstname;
    //         $table->last_name = $request->lastname;
    //         $table->gender = $request->gender;
    //         $table->mobile  = $request->mobile;
    //         $table->password = $request->password;
    //         $table->designation = $request->designation;
    //         $table->department = $request->department;
    //         $table->address = $request->address;
    //         $table->email  = $request->email;
    //         $table->dob = $request->dob;
    //         $table->education = $request->education;
    //         $table->profile_picture = $request->profilepicture;
    //         $table->save();
    //         $message = "Success";
    //         return response()->json($message, 200);
    //     } else {
    //         $message = "wrong";
    //         return response()->json($message, 200);
    //     }

    //     //  return["name"=>"mohamedhasnathfarhan","email"=>"mohamedhasnathfarhan@gmail.com","address"=>"Colombo"];
    // }

    function postdoctordata(Request $request){

       
        $table = new Doctor();
        $table->first_name = $request->firstname;
        $table->last_name = $request->lastname;
        $table->gender = $request->gender;
        $table->mobile  = $request->mobile;
        $table->password = $request->password;
        $table->designation = $request->designation;
        $table->department = $request->department;
        $table->address = $request->address;
        $table->email  = $request->email;
        $table->dob = $request->dob;
        $table->education = $request->education;
        $table->profile_picture = $request->profilepicture;
        $table->save();
        $message = "Success";
        return response()->json($table, 200);
   
    }







    function updatedoctordata(Request $request, $id)
    {


        $table = Doctor::where('id', $id)->first();
        $table->first_name = $request->firstname;
        $table->last_name = $request->lastname;
        $table->gender = $request->gender;
        $table->mobile  = $request->mobile;
        $table->password = $request->password;
        $table->designation = $request->designation;
        $table->department = $request->department;
        $table->address = $request->address;
        $table->email  = $request->email;
        $table->dob = $request->dob;
        $table->education = $request->education;
        $table->profile_picture = $request->profilepicture;
        $table->save();
        // $message = "Success";
        return response()->json($table, 200);
    }


    function deletedoctordata(Request $request,$id){

       
        $table = Doctor::where('id',$id)->first();
        if($table){
            $table->delete();
            $message = "Success";
           return response()->json($message, 200);
        }else{
            $message = "User Not Found!";
           return response()->json($message, 200);
        }  
   
    }










    function getAllData()
    {

        $docters = Doctor::all();
        return response()->json($docters, 200);
    }
}
