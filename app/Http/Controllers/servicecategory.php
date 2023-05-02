<?php

namespace App\Http\Controllers;
use App\Models\servicecategorymodel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class servicecategory extends Controller
{
    //
    function getservicecategorydata(){
        return["Message"=>"This is service cateogry it's working"];
    }

    function postservicecategorydata(Request $request){

       
        $table = new servicecategorymodel();
        $table->service_category = $request->service_category;
        $table->save();
        $message = "Success";
        return response()->json($table, 200);
   
    }

   
    function updateservicecategorydata(Request $request,$id){

       
        $table = servicecategorymodel::where('id',$id)->first();
        $table->service_category = $request->service_category;
        $table->save();
        // $message = "Success";
        return response()->json($table, 200);
   
    }

    function deleteservicecategorydata(Request $request,$id){

       
        $table = servicecategorymodel::where('id',$id)->first();
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
