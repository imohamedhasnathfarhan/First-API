<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyAPI;
use App\Http\Controllers\company;
use App\Http\Controllers\specialization;
use App\Http\Controllers\department;
use App\Http\Controllers\servicecategory;
use App\Http\Controllers\patient;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Doctor

Route::post("postdoctor",[dummyAPI::class,'postdoctordata']);
Route::get("getalldoctor",[dummyAPI::class,'getAllData']);
Route::post("getsingledoctor",[dummyAPI::class,'getSingleData']);


// Company

Route::get("getcompany",[company::class,'getcompanydata']);
Route::post("postcompany",[company::class,'postcompanydata']);
Route::post("updatecompany/{id}",[company::class,'updatecompanydata']);
Route::delete("deletecompany/{id}",[company::class,'deletecompanydata']);



// Specialization

Route::get("getspecialization",[specialization::class,'getspecializationdata']);


// Department

Route::get("getdepartment",[department::class,"getdepartmentdata"]);
Route::post("postdepartment",[department::class,"postdepartmentdata"]);


// Service Category

Route::get("getservicecategory",[servicecategory::class,"getservicecategorydata"]);


// Patient

Route::get("getpatient",[patient::class,"getpatientdata"]);