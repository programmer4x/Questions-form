<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\FormQuestionController;
use App\Http\Controllers\QuestionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
//
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::apiResource('FormQuestion' ,FormQuestionController::class);
Route::apiResource('Question' ,QuestionController::class);
Route::apiResource('Answer' ,AnswerController::class);

