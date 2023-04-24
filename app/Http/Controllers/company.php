<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\companymodel;
use Illuminate\Http\Request;

class company extends Controller
{
    function getcompanydata(){
        // $table = new companymodel();
        // return["name"=>"mohamedhasnathfarhan","email"=>"mohamedhasnathfarhan@gmail.com","address"=>"Colombo"];
        // return response()->json($table, 200);

        $company = companymodel::all();
        return response()->json($company, 200);
        
    }

    
    function postcompanydata(Request $request){

       
            $table = new companymodel();
            $table->name = $request->name;
            $table->registration_no = $request->registration_no;
            $table->address1 = $request->address1;
            $table->address2  = $request->address2 ;
            // $table->address2 = $request->password;
            $table->city = $request->city;
            $table->zipcode = $request->zipcode; 
            $table->country = $request->country; 
            $table->tel1  = $request->tel1 ; 
            $table->tel2 = $request->tel2; 
            $table->tel3 = $request->tel3; 
            $table->email = $request->email; 
            $table->logo = $request->logo; 
            $table->save();
            $message = "Success";
            return response()->json($table, 200);
       
        }

         
    function updatecompanydata(Request $request,$id){

       
        $table = companymodel::where('id',$id)->first();
        $table->name = $request->name;
        $table->registration_no = $request->registration_no;
        $table->address1 = $request->address1;
        $table->address2  = $request->address2 ;
        // $table->address2 = $request->password;
        $table->city = $request->city;
        $table->zipcode = $request->zipcode; 
        $table->country = $request->country; 
        $table->tel1  = $request->tel1 ; 
        $table->tel2 = $request->tel2; 
        $table->tel3 = $request->tel3; 
        $table->email = $request->email; 
        $table->logo = $request->logo; 
        $table->save();
        // $message = "Success";
        return response()->json($table, 200);
   
    }


    function deletecompanydata(Request $request,$id){

       
        $table = companymodel::where('id',$id)->first();
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

    //

