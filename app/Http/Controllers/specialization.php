<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\specializationmodel;

class specialization extends Controller
{
  //

  function getspecializationdata()
  {
    return ["name" => "This is Specialization"];
  }


  function postspecializationdata(Request $request)
  {


    $table = new specializationmodel();
    $table->specialization = $request->specialization;
    $table->save();
    $message = "Success";
    return response()->json($table, 200);
  }




  function updatespecializationdata(Request $request, $id)
  {


    $table = specializationmodel::where('id', $id)->first();
    $table->specialization = $request->specialization;
    $table->save();
    // $message = "Success";
    return response()->json($table, 200);
  }


  function deletespecializationdata(Request $request, $id)
  {


    $table = specializationmodel::where('id', $id)->first();
    if ($table) {
      $table->delete();
      $message = "Success";
      return response()->json($message, 200);
    } else {
      $message = "User Not Found!";
      return response()->json($message, 200);
    }
  }
}
