<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site1Controller;
use App\Http\Controllers\Site2Controller;

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

Route::get('about',function(){
    return 'About us';
});
Route::get('contact',function(){
    return 'Hello contact';
});
Route::get('site1',[Site1Controller::class,'index'])->name('index');

Route::prefix('site2')->name('site2.')->group(function(){
    Route::get('/',[Site2Controller::class,'index'])->name('index');
    Route::get('/about',[Site2Controller::class,'about'])->name('about');
    Route::get('/post',[Site2Controller::class,'post'])->name('post');
    Route::get('/contact',[Site2Controller::class,'contact'])->name('contact');
});
