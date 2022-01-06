<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleDashboardController;

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

Route::get('/dashboard/articles', [ArticleDashboardController::class, 'showAll']); // ok
Route::get('/dashboard/articles/{id}', [ArticleDashboardController::class, 'admin_show']); // ok

Route::get('/dashboard/create', [ArticleDashboardController::class, 'create']); // view ok
Route::post('/dashboard/articles/create/{title}&{description}', [ArticleDashboardController::class, 'store']); // view ok

Route::delete('/dashboard/delete/{id}', [ArticleDashboardController::class, 'delete']);
Route::put('/dashboard/update/{id}', [ArticleDashboardController::class, 'update']);


Route::get('/articles', [ArticleDashboardController::class, 'showAll']); // ok
Route::get('/articles/{id}', [ArticleDashboardController::class, 'show']); // ok

Route::get('/', [ArticleDashboardController::class, 'showAll']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__ . '/auth.php';
