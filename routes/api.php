<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyAPI;
use App\Http\Controllers\company;
use App\Http\Controllers\specialization;
use App\Http\Controllers\department;
use App\Http\Controllers\servicecategory;
use App\Http\Controllers\patient;
use App\Http\Controllers\Api\AuthController;


// Route::post('/doctors', [DoctorController::class, 'store']);
// Route::put('/doctors/{id}', [DoctorController::class, 'update']);
// Route::get('/doctors/{id}', [DoctorController::class, 'show']);
// Route::get('/doctors', [DoctorController::class, 'index']);
// Route::delete('/doctors/{id}', [DoctorController::class, 'destroy']);

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
 
Route::post('register', 'Api\AuthController@register');
Route::post("login",[AuthController::class,'login']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/',function(){
    return response()->json([
        'message'=> 'Welcome to the Laravel API'
    ]);
});



//Doctor

Route::post("postdoctor",[dummyAPI::class,'postdoctordata']);
Route::get("getalldoctor",[dummyAPI::class,'getAllData']);
Route::post("getsingledoctor",[dummyAPI::class,'getSingleData']);
Route::post("updatedoctor/{id}",[dummyAPI::class,'updatedoctordata']);
Route::delete("deletedoctor/{id}",[dummyAPI::class,'deletedoctordata']);



// Company

Route::get("getcompany",[company::class,'getcompanydata']);
Route::post("postcompany",[company::class,'postcompanydata']);
Route::post("updatecompany/{id}",[company::class,'updatecompanydata']);
Route::delete("deletecompany/{id}",[company::class,'deletecompanydata']);



// Specialization

Route::get("getspecialization",[specialization::class,'getspecializationdata']);
Route::post("postspecialization",[specialization::class,"postspecializationdata"]);
Route::post("updatespecialization/{id}",[specialization::class,"updatespecializationdata"]);
Route::delete("deletespecialization/{id}",[specialization::class,"deletespecializationdata"]);



// Department

Route::get("getdepartment",[department::class,"getdepartmentdata"]);
Route::post("postdepartment",[department::class,"postdepartmentdata"]);
Route::post("updatedepartment/{id}",[department::class,"updatedepartmentdata"]);
Route::delete("deletedepartment/{id}",[department::class,"deletedepartmentdata"]);


// Service Category

Route::get("getservicecategory",[servicecategory::class,"getservicecategorydata"]);
Route::post("postservicecategory",[servicecategory::class,"postservicecategorydata"]);
Route::post("updateservicecategory/{id}",[servicecategory::class,"updateservicecategorydata"]);
Route::delete("deleteservicecategory/{id}",[servicecategory::class,"deleteservicecategorydata"]);



// Patient

Route::get("getpatient",[patient::class,"getpatientdata"]);
Route::post("postpatient",[patient::class,"postpatientdata"]);
Route::post("updatepatient/{id}",[patient::class,"updatepatientdata"]);
Route::delete("deletepatient/{id}",[patient::class,"deletepatientdata"]);