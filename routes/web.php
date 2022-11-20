<?php

use Illuminate\Support\Facades\Route;


//Route::get('/', function () use ($data) {
//    return view('welcome',$data);
//});

Route::get('/',[\App\Http\Controllers\FirstController::class,'getindex']);

Route::get('landing', function (){
    return view('landing');
}
) ->name('a');

Route::get('test3/{id?}',function (){

    return 'hellllllllo';
});

Route::get('first',[\App\Http\Controllers\FirstController::class,'bashar']);

Route::get('login',function (){
   return 'you must be Admin to access this page ';
}) ->name('login');

Route::resource('News',\App\Http\Controllers\NewsController::class);

Route::get('/about',function (){
    return view('about');
});

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
