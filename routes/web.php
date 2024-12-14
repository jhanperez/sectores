<?php


use App\Livewire\Usuarios\CrearUsuarios;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/a', CrearUsuarios::class)->name('crearusaurios');
