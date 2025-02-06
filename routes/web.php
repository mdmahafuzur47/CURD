<?php

use App\Livewire\CreateCustomer;
use App\Livewire\EditCustomer;
use App\Livewire\ListCustomer;
use App\Livewire\ViewSingleCustomer;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', CreateCustomer::class);
Route::get('/list', ListCustomer::class)->name('list');
Route::get('/view/{id}', ViewSingleCustomer::class)->name('view');
Route::get('/edit/{id}', EditCustomer::class)->name('edit');
