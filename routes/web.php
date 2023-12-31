<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function(){
//     return view('onbording/authentication/signin');
// });

Route::get('/', [UserController::class, 'index']);
Route::post('/creat_user',[UserController::class,'store']);

Route::get('/signup', function(){
    return view('onbording/authentication/signup');
});

Route::get('/home', function(){
    return view('onbording/operationsScreens/mainpage');
});

Route::get('/profile',function(){
    return view('onbording/operationsScreens/profile');
});