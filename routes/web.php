<?php

use App\Http\Controllers\Admin\DashboardController  as AdminDashboardController;

use App\Http\Controllers\Admin\ProjectController as AdminProjectController;

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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // Only authenticated users may access this route...
Route::middleware('auth')
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        // Deleted Routes
        Route::get('/projects/deleted', [AdminprojectController::class, 'deletedIndex'])->name('projects.deleted.index');
        Route::get('/projects/deleted/{project}', [AdminprojectController::class, 'deletedShow'])->name('projects.deleted.show');
        Route::patch('/projects/deleted/{project}', [AdminprojectController::class, 'deletedRestore'])->name('projects.deleted.restore');
        Route::delete('/projects/deleted/{project}', [AdminprojectController::class, 'deletedDestroy'])->name('projects.deleted.destroy');
        Route::resource('/projects', AdminProjectController::class);
    });




