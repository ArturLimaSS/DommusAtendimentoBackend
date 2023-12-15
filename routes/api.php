<?php

use App\Http\Controllers\KanbanController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
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


Route::post('/user', [UserController::class, 'create']);

Route::controller(UserController::class)->group(function () {
    Route::get('/user/{id}', 'show');
    Route::post('/user', 'create');
});

Route::controller(TeamController::class)->group(function () {
    Route::get('/team/{id}', 'show');
    Route::post('/team', 'create');
});

Route::controller(TicketController::class)->group(function(){
    Route::post('/ticket', 'create');
    Route::get('/ticket/{id}', 'index');
    Route::get('/ticket', 'show');
});


Route::controller(KanbanController::class)->group(function(){
    Route::get('/kanban/{id}', 'show');
});
