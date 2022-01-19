<?php

use App\Http\Controllers\Doctor;
use App\Http\Controllers\labs;
use App\Http\Controllers\patients;
use App\Http\Controllers\Doctor_Controller;
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

Route::get('/dashboard', function () {
    return view('backend.index');
});

Route::get('/', function () {
    return view('front.index');

});
// Route::get('/doctorsform',[Doctor_Controller::class,'index'])->name('index');
// Route::post('/doctorsform',[Doctor_Controller::class,'create'])->name('create');
// Route::get('/edit/{id}',[Doctor_Controller::class,'edit'])->name('edit');
// Route::put('/edit/{id}',[Doctor_Controller::class,'update'])->name('update');
// Route::get('/delete/{id}',[Doctor_Controller::class,'destroy'])->name('destroy');
// Route::view('upload','front.uploadfile');
// Route::post('upload',[labs::class,'file'])->name('file');
 Route::get('/test', function () {
    return view('welcome');

});
