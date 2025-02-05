<?php

use App\Livewire\CreateCustomer;
use App\Livewire\ListCustomer;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', CreateCustomer::class);
Route::get('/list', ListCustomer::class)->name('list');
