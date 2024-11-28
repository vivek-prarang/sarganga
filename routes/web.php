<?php

use App\Http\Controllers\Main\Home;
use Illuminate\Support\Facades\Route;



Route::get('/',[Home::class,'index'])->name('home');Route::get('/',[Home::class,'index'])->name('home');
Route::get('collections',[Home::class,'collections'])->name('collections');
Route::get('concept',[Home::class,'concept'])->name('concept');
Route::get('collaborations',[Home::class,'collaborations'])->name('collaborations');
Route::get('contacts',[Home::class,'contacts'])->name('contacts');
Route::get('blogs',[Home::class,'blogs'])->name('blogs');
Route::get('site',[Home::class,'site'])->name('site');

// collaborations/contacts


require __DIR__."/admin.php";