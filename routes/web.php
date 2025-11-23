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