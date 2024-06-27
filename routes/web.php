<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\urlController;
use App\Http\Controllers\authController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*---------------------------------------------------------------------------------------------------------------
LOGIN
---------------------------------------------------------------------------------------------------------------*/
Route::get('/', [authController::class,"showLogin"]);




/*---------------------------------------------------------------------------------------------------------------
Administrateur
---------------------------------------------------------------------------------------------------------------*/
Route::get('/admin', [urlController::class,"indexAdmin"]);
Route::get('/admin/user', [urlController::class,"userAdmin"]);


/*---------------------------------------------------------------------------------------------------------------
Assistant
---------------------------------------------------------------------------------------------------------------*/
Route::get('/assistant', [urlController::class,"indexAssistant"]);


/*---------------------------------------------------------------------------------------------------------------
bureau
---------------------------------------------------------------------------------------------------------------*/
Route::get('/bureau', [urlController::class,"indexBureau"]);


/*---------------------------------------------------------------------------------------------------------------
division
---------------------------------------------------------------------------------------------------------------*/
Route::get('/division', [urlController::class,"indexDivision"]);








