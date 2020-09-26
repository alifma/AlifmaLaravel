<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

// Root
// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     $data = [
//         'nama' => 'Alif Maulana Arifin'
//     ];
//     return view('about', $data);
// });

Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
