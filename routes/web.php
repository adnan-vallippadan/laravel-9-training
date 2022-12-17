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

Route::group(["prefix" => "/form", "middleware" => "auth-token"], function() {
    Route::get("/", [FormController::class, "index"]);
    Route::post("/submit", [FormController::class, "submitData"]);
});

Route::resource('/users', UserController::class);

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/home', function() {
    return view('pages.home');
})->middleware("token-auth");

Route::get('/blade', function() {
    $number = -10;
    $x = 25;
    $namesArray = ["Aju", "Anu", "Ammu", "Ali", "Abi", "Siya", "Dinu", "Gini"];
    return view('pages.blade', compact("number", "x", "namesArray"));
});


// Template Inheritance

Route::get('/layout', function () {
    return view('template-inheritance.layout');
});
Route::get('/child-1', function () {
    return view('template-inheritance.child-1');
});