<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\DocumentTypeController;
use App\Http\Controllers\SourceController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\SubjectController;
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


Route::get('/documents', [DocumentController::class, 'index']);
Route::get('/documents/{document}', [DocumentController::class, 'show']);
Route::get('/subjects', [SubjectController::class, 'index']);
Route::get('/sources', [SourceController::class, 'index']);
Route::get('/document-types', [DocumentTypeController::class, 'index']);
Route::get('/status', [StatusController::class, 'index']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::get('/test', function(){
        return response([
            'status' => 'success'
        ]);
    });
    Route::post('/logout', [AuthController::class, 'logout']);
});
