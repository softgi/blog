<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardController;

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
Route::get('/', function() {
    return view('main');
});

Auth::routes();

Route::get('/board', [BoardController::class, 'index']);

Route::get('/board/write', [BoardController::class, 'create'])-> name('board.create');

Route::post('/board/write', [BoardController::class, 'store'])->name('board.store');

Route::get('/board/content/{id}', [BoardController::class, 'show'])->name('board.show');

Route::patch('/board/update/{id}', [BoardController::class, 'update']);

Route::get('/board/edit/{id}', [BoardController::class, 'edit']);

Route::delete('/board/{id}/destroy',[BoardController::class, 'destroy'])->name('board.destory');