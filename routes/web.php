<?php

use App\Http\Controllers\MasterclassController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/', [MasterclassController::class, 'index'])->name('home');
Route::get('/home', [MasterclassController::class, 'index'])->name('home')->middleware('auth');

/* Route::get('/pages/masterclass/create',[MasterclassController::class,'create']); 

CON EL MÉTODO RESOURCE YA SE TIENE ACCESO A TODOS LOS MÉTODOS DEL CONTROLADOR MasterclassController EN LA RUTA /pages/masterclass. No hace falta hacer ruta para create, delete, storage...
*/

Route::resource('/pages/masterclass',MasterclassController::class);

