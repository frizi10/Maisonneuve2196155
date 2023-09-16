<?php

use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [EtudiantController::class, 'index'])->name('etudiant.index');
Route::get('/edit-student/{etudiant}', [EtudiantController::class, 'edit'])->name('etudiant.edit');
Route::put('/edit-student/{etudiant}', [EtudiantController::class, 'update']);
Route::get('/show-student/{etudiant}', [EtudiantController::class, 'show'])->name('etudiant.show');

Route::get('/student-create', [EtudiantController::class, 'create'])->name('etudiant.create');
Route::post('/student-create', [EtudiantController::class, 'store']);
Route::delete('/student-delete/{etudiant}', [EtudiantController::class, 'destroy'])->name('etudiant.delete');

