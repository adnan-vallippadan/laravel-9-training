<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Form\FormController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function() {
    return "My Test Page";
});

Route::get('/test-controller', [PageController::class, 'testController']);
Route::get('/addition/{a}/{b}', [PageController::class, 'addNumbers']);

Route::get('/index', function() {
    return view('pages.index');
});

Route::get('/contact', [PageController::class, 'contact']);

Route::get('/hello/{name}', [PageController::class, 'hello']);

Route::group(["prefix" => "/form"], function() {
    Route::get("/", [FormController::class, "index"]);
    Route::post("/submit", [FormController::class, "submitData"]);
});

Route::resource('/users', UserController::class);
