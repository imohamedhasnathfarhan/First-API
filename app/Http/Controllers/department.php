<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\departmentmodel;

class department extends Controller
{
    //
    function getdepartmentdata(){
        return["message"=>"this is get department area it's working"];
    }

     
    function postdepartmentdata(Request $request){

       
        $table = new departmentmodel();
        $table->name = $request->name;
        $table->date = $request->date;
        $table->department_head = $request->department_head;
        $table->status  = $request->status;
        $table->description = $request->description;
        $table->save();
        $message = "Success";
        return response()->json($message, 200);
   
    }




}
