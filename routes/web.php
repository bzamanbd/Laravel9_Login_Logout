<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function(){
    if (session()->has('user')) {
        return view('profile');
    }return view('login');
});

Route::post('userl',[UserController::class, 'userData']);
Route::view('prof','profile');
Route::get('logout',function(){
    if (session()->has('user')) {
        session()->pull('user',null);
        return redirect('login');
    }
});