<?php

use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\DocumentController;
use App\Http\Controllers\Api\V1\DocumentTypeController;
use App\Http\Controllers\Api\V1\ProfileController;
use App\Http\Controllers\Api\V1\SourceController;
use App\Http\Controllers\Api\V1\StatusController;
use App\Http\Controllers\Api\V1\SubjectController;
use App\Http\Controllers\FeaturedSubjectController;
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

Route::group(['prefix' => '/v1'], function () {
    Route::get('/documents', [DocumentController::class, 'index']);
    Route::get('/documents/{document}', [DocumentController::class, 'show']);
    Route::get('/subjects', [SubjectController::class, 'index']);
    Route::get('/sources', [SourceController::class, 'index']);
    Route::get('/document-types', [DocumentTypeController::class, 'index']);
    Route::get('/status', [StatusController::class, 'index']);
    Route::get('/featured-subjects', [FeaturedSubjectController::class, 'index']);

    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);

    Route::group(['middleware' => ['auth:sanctum']], function () {
        Route::post('/sources/users', [SourceController::class, 'follow']);
        Route::delete('/sources/users', [SourceController::class, 'unfollow']);
        Route::get('/profile', [ProfileController::class, 'index']);
        Route::post('/profile', [ProfileController::class, 'update']);
        Route::post('/profile/activate', [ProfileController::class, 'activate_premium']);
        Route::get('/profile/sources', [ProfileController::class, 'following']);
        Route::post('/logout', [AuthController::class, 'logout']);
    });
});
