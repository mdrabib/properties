<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('properties',[propertyController::class,'getAllPropertyData'])->name('properties');

Route::post('properties/new',[propertyController::class,'storePropertyData'])->name('addproperties');

Route::get('property/{id}',[propertyController::class,'getSinglePropertyData'])->name('getSingleProperty');

Route::get('projects',[ProjectsController::class,'projectsApi']);
Route::get('flootdetails',[FloorDetailsController::class,'floorDetailsApi']);

