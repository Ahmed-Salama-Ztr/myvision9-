<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site1Controller;
use App\Http\Controllers\Site2Controller;
use App\Http\Controllers\Site3Controller;

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

Route::prefix('site3')->name('site3.')->group(function(){
    Route::get('/',[Site3Controller::class,'index'])->name('index');
    Route::get('about',[Site3Controller::class,'about'])->name('about');
    Route::get('experience',[Site3Controller::class,'experience'])->name('experience');
    Route::get('education',[Site3Controller::class,'education'])->name('education');
    Route::get('skills',[Site3Controller::class,'skills'])->name('skills');
    Route::get('interests',[Site3Controller::class,'interests'])->name('interests');
    Route::get('awards',[Site3Controller::class,'awards'])->name('awards');
});

Route::get('form1',[FormController::class,'form1'])->name('form1');
Route::post('form1',[FormController::class,'form1_data'])->name('form1_data');

Route::get('form2',[FormController::class,'form2'])->name('form2');
Route::post('form2',[FormController::class,'form2_data'])->name('form2_data');

Route::get('form3',[FormController::class,'form3'])->name('form3');
Route::post('form3',[FormController::class,'form3_data'])->name('form3_data');

Route::get('form4',[FormController::class,'form4'])->name('form4');
Route::post('form4',[FormController::class,'form4_data'])->name('form4_data');

Route::get('/full-form',[FormController::class,'full_form'])->name('full_form');
Route::post('/full-form',[FormController::class,'full_form_data'])->name('full_form_data');
