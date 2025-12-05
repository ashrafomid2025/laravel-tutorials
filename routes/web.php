<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get("addData", [StudentsController::class, 'addData']);
Route::get("fetchData", [StudentsController::class, 'fetchData']);
Route::get("update", [StudentsController::class, 'update']);
Route::get("delete", [StudentsController::class, 'delete']);
Route::get("showDeleted", [StudentsController::class, 'showDeletedData']);
Route::get("restore", [StudentsController::class, 'restoreData']);
Route::get("query1",[StudentsController::class,'firstQuery']);
Route::get("query2",[StudentsController::class,'secondQuery']);
Route::get("ladiesc",[StudentsController::class,'childLadies']);
Route::get("ladiesy",[StudentsController::class,'YoungLadies']);
Route::get("ladieso",[StudentsController::class,'oldLadies']);
// resource controller crud, invokable create, read , delete, update
// Route::view("excercise",'Excercise',['name'=> "Ali Ahmadi"]);
Route::get('excercise', function(){
    $name = "Ali Ahmadi";
    return view('Excercise',compact('name'));
});
Route::prefix('student')->controller(StudentsController::class)->group(function(){
    Route::get('/', 'fetchStudents');
    Route::view('add','Student.add');
    Route::post('create', 'create');
    Route::get("update/{id}", 'update');
    Route::put("edit/{id}", 'edit');
    Route::delete('delete/{id}', 'destroy');
});