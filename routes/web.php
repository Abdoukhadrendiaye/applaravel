<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Produitcontroller;
use App\Http\Controllers\Categoriecontroller;

Route::get('/', function () {
    return view('welcome');
});
Route::get('acceuil', function () {
    return "bonjour equipe";
});
Route::get('/list',[Produitcontroller::class, "index"])->name("index");
Route::get('/abdou',[Produitcontroller::class, "create"])->name("create");

Route::get('/categorie',[Categoriecontroller::class, "categorie"]);
