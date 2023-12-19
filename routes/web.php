<?php


use App\http\controllers\EdulevelController;
use App\Http\Controllers\FullController;
use App\Http\Controllers\KegumumController;
use App\Http\Controllers\PengasuhController;
use App\Http\Controllers\PrivatController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\RegulerController;
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
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home');
// });

// Auth::routes();

// Route::middleware('auth')->group(function () {
//CRUD EDULEVEL
Route::get('edulevels',                [EdulevelController::class, 'data']);
Route::get('edulevels/add',            [EdulevelController::class, 'add']);
Route::post('edulevels',               [EdulevelController::class, 'addProcess']);
Route::get('edulevels/edit/{id}',      [EdulevelController::class, 'edit']);
Route::patch('edulevels/{id}',         [EdulevelController::class, 'editProcess']);
Route::delete('edulevels/{id}',        [EdulevelController::class, 'delete']);

//CRUD PROGRAM

Route::resource('programs',            ProgramController::class); //resources itu mencangkup semua dari

//CRUD KEGIATAN UMUS

// Route::resource('kegumums',            KegumumController::class);

Route::get('kegumums',                [KegumumController::class, 'index']);
Route::get('kegumums/add',            [KegumumController::class, 'add']);
Route::post('kegumums',               [KegumumController::class, 'addProcess']);
Route::get('kegumums/edit/{id}',      [KegumumController::class, 'edit']);
Route::patch('kegumums/{id}',         [KegumumController::class, 'editProcess']);
Route::delete('kegumums/{id}',        [KegumumController::class, 'delete']);

// KEGIATAN PRIVAT/KHUSUS

Route::get('privats',                 [PrivatController::class, 'index']);
Route::get('privats/add',             [PrivatController::class, 'add']);
Route::post('privats',                [PrivatController::class, 'addProcess']);
Route::get('privats/edit/{id}',       [PrivatController::class, 'edit']);
Route::patch('privats/{id}',          [PrivatController::class, 'editProcess']);
Route::delete('privats/{id}',         [PrivatController::class, 'delete']);

//CRUD PENGASUH

Route::resource('pengasuhs',          PengasuhController::class);

// CRUD MURID

Route::resource('fulls',              FullController::class);


Route::resource('regulers',          RegulerController::class);
// });





// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
