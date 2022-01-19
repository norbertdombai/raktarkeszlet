<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RaktarController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/raktarkeszlet', [RaktarController::class, 'index']);
Route::get('/api/raktarkeszlet/{id}', [RaktarController::class, 'show']);
Route::post('/api/raktarkeszlet', [RaktarController::class, 'store']); // A létrehozó formnak, ami a /raktarkeszlet/new oldalon jelenik meg erre az útvonalra kell mutasson
Route::get('/raktarkeszlet/edit/{id}', [RaktarController::class, 'edit']);
Route::get('/raktarkeszlet/list', [RaktarController::class, 'list']);
Route::put('/api/raktarkeszlet/{id}', [RaktarController::class, 'update']); // A módosító formnak, ami a /raktarkeszlet/edit oldalon jelenik meg erre az útvonalra kell mutasson
Route::delete('/api/raktarkeszlet/{id}', [RaktarController::class, 'destroy']);
Route::get('/raktarkeszlet/new', [RaktarController::class, 'create']);
Route::get('/raktarkeszlet/list', [RaktarController::class, 'list']);




