<?php

use App\Livewire\Akun;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/',Home::class)->name('home');
Route::get('/akun',Akun::class)->name('akun');
