<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentsController;
use App\Models\Student;

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
// Route::get('/coba', function () {
//     return view('coba');
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

Route::get('/students', [StudentsController::class, 'index']);
Route::get('/students/create', [StudentsController::class, 'create']);
Route::get('/students/{student}', [StudentsController::class, 'show']);
Route::post('/students', [StudentsController::class, 'store']);
Route::delete('/students/{student}', [StudentsController::class, 'destroy']);
Route::get('/students/{student}/edit', [StudentsController::class, 'edit']);
Route::patch('/students/{student}', [StudentsController::class, 'update']);
// Route::resources('/students', [StudentsController::class]);
