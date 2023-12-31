<?php

use App\Http\Controllers\PostController;
use App\Http\Livewire\CrudApplication;
use App\Http\Livewire\CrudCompany;
use App\Http\Livewire\CrudJob;
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
})->name('index');
//ruta de las tarjetas
route::get('posts/{job}',[PostController::class,'show'])->name('posts.show');
route::get('company/{company}',[PostController::class,'search'])->name('posts.search');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/jobs',CrudJob::class)->name('jobs');
    Route::get('/companies',CrudCompany::class)->name('companies');
    Route::get('/applications',CrudApplication::class)->name('applications');
});
