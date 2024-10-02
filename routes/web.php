<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoituresController;

use App\Http\Controllers\Categoriecontroller;


Route::get('/', function () {
    return view('welcome');
});
Route::get('acceuil', function () {
    return "bonjour equipe";
});

Route::get('/listcategorie', [Categoriecontroller::class,'index'])->name('categorie.index');
Route::get('/formulaire', [Categoriecontroller::class,'create'])->name('categorie.create');
Route::post('/ajouter', [Categoriecontroller::class,'store'])->name('categorie.store');
Route::get('/detail/{categorie}', [Categoriecontroller::class,'show'])->name('categorie.show');
Route::get('/edite/{categorie}', [Categoriecontroller::class,'edit'])->name('categorie.edit');
Route::put('/update/{categorie}', [Categoriecontroller::class,'update'])->name('categorie.update');
Route::delete('/delete/{categorie}', [Categoriecontroller::class,'destroy'])->name('categorie.delete');
 Route::get('/form', [VoituresController::class,'create'])->name('voiture.create');
 Route::post('/ajoutvoiture', [VoituresController::class,'store'])->name('voiture.store');
