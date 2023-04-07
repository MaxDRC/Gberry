<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ConceptController;
use App\Http\Controllers\GalerieController;
use App\Http\Controllers\RejoindreController;
use App\Http\Controllers\PartenairesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('acceuil');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

                        ///////////////////// BERRY SUNDAY //////////////////////
Route::get('/concept', [ConceptController::class, 'index'])->name('concept.index');

                        ///////////////////// GALERIE PHOTO  //////////////////////
Route::get('/galerie', [GalerieController::class, 'index'])->name('galerie.index');

                        ///////////////////// REJOIGNEZ-NOUS  //////////////////////
Route::get('/rejoindre', [RejoindreController::class, 'index'])->name('rejoindre.index');

                        ///////////////////// PARTENAIRES  //////////////////////
Route::get('/partenaires', [PartenairesController::class, 'index'])->name('partenaires.index');


require __DIR__.'/auth.php';
