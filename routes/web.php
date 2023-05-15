<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;
use App\Http\Controllers\Annunciocontroller;
use App\Http\Controllers\Revisorcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// HOMEPAGE
Route::get('/', [Mycontroller::class, 'homepage'])->name('homepage');

// ANNUNCI


Route::middleware(['auth'])->group(function () {

Route::get('/annunci/indice',[Annunciocontroller::class,'index'])->name('annunci.indice');

Route::get('/crea/annuncio', [Annunciocontroller::class, 'crea_annuncio'])->name('annunci.create');

Route::get('/categoria/{category}',[Annunciocontroller::class, 'categoryShow'])->name('categoryShow');

Route::get('/annuncio/detail/{id}',[Annunciocontroller::class,'dettaglio'])->name('annunci.dettaglio');

Route::get('/chi_siamo', [Mycontroller::class, 'chi_siamo'])->name('chi_siamo');
});

//* Revisore
Route::middleware(['isRevisor'])->group(function(){


    Route::get('/revisor/index',[Revisorcontroller::class,'revisorIndex'])->name('revisor.index');

    Route::patch('/accetta/annuncio/{annuncio}',[Revisorcontroller::class,'accettaAnnuncio'])->name('accetta.annuncio');

    Route::patch('/rifiuta/annuncio/{annuncio}',[Revisorcontroller::class,'rifiutaAnnuncio'])->name('rifiuta.annuncio');

    Route::get('revisor/undo',[Revisorcontroller::class,'undo'])->name('revisor.undo');
});

//* Richiesta e assegnazione revisore

Route::get('/rendi/revisore',[Revisorcontroller::class,'makeUserRevisor'])->name('revisor.make');
Route::get('/rendi/utente/revisore/{user}',[Revisorcontroller::class,'newRevisor'])->name('revisor.new');

//* Rotta per cercare un annuncio
Route::get('/ricerca/annuncio', [Mycontroller::class, 'searchAnnouncements'])->name('announcements_search');

//* Rotta per settare lingua

Route::get('/language/{lang}',[Mycontroller::class,'setLanguage'])->name('select.language');