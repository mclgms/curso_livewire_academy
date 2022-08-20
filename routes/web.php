<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Teste;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste',Teste::class)->name('teste.index');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
