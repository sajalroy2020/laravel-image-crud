<?php

use App\Http\Controllers\StudentInfoController;
use Illuminate\Support\Facades\Route;



Route::get('/', [StudentInfoController::class, 'index']);
Route::get('/create', [StudentInfoController::class, 'create']);
Route::post('/store', [StudentInfoController::class, 'store']);
Route::get('/edit/{id}', [StudentInfoController::class, 'edit']);
Route::put('/update/{id}', [StudentInfoController::class, 'update']);
Route::get('/destroy/{id}', [StudentInfoController::class, 'destroy']);



