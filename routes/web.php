<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RedBeesController;

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

Route::get('/', function(){
    return view('redbees.index');
})->name('redbees.index');

Route::get('OurServices', function(){
    return view('redbees.OurServices');
})->name('redbees.OurServices');

Route::get('whatWeDo', function(){
    return view('redbees.whatWeDo');
})->name('redbees.whatWe');

Route::get('contact', function(){
    return view('redbees.contact');
})->name('redbees.contact');

// Route::get('contact/create',[RedBeesController::class,'create'])->name('contact.create');
// Route::post('contact',[RedBeesController::store,'store'])->name('contact.store');
