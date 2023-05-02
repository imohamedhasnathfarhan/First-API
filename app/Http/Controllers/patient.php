<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\patientmodel;

class AuthControllerpatient extends Controller
{
    //{}
    function getpatientdata()
    {
        return["Message"=>"Yeah it's patient data working"];
    }




    function postpatientdata(Request $request){

       
        $table = new patientmodel(); 
        $table->name = $request->name;
        $table->gender = $request->gender;
        $table->phone = $request->phone;
        $table->dob  = $request->dob;
        $table->address = $request->address;
        $table->marital_status = $request->marital_status; 
        $table->weight = $request->weight; 
        $table->height  = $request->height ; 
        $table->emergency_contact_name = $request->emergency_contact_name; 
        $table->emergency_contact_phone = $request->emergency_contact_phone; 
        $table->past_medical_history = $request->past_medical_history; 
        // $table->logo = $request->logo; 
        $table->save();
        $message = "Success";
        return response()->json($table, 200);
   
    }


    function updatepatientdata(Request $request,$id){

       
        $table = patientmodel::where('id',$id)->first();
        $table->name = $request->name;
        $table->gender = $request->gender;
        $table->phone = $request->phone;
        $table->dob  = $request->dob;
        $table->address = $request->address;
        $table->marital_status = $request->marital_status; 
        $table->weight = $request->weight; 
        $table->height  = $request->height ; 
        $table->emergency_contact_name = $request->emergency_contact_name; 
        $table->emergency_contact_phone = $request->emergency_contact_phone; 
        $table->past_medical_history = $request->past_medical_history; 
        $table->save();
        // $message = "Success";
        return response()->json($table, 200);
   
    }



    function deletepatientdata(Request $request,$id){

       
        $table = patientmodel::where('id',$id)->first();
        if($table){
            $table->delete();
            $message = "Success";
           return response()->json($message, 200);
        }else{
            $message = "User Not Found!";
           return response()->json($message, 200);
        }  
   
    }


    






}
