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
Route::get("query1",[StudentsController::class,'firstQuery']);
Route::get("query2",[StudentsController::class,'secondQuery']);
Route::get("ladiesc",[StudentsController::class,'childLadies']);
Route::get("ladiesy",[StudentsController::class,'YoungLadies']);
Route::get("ladieso",[StudentsController::class,'oldLadies']);