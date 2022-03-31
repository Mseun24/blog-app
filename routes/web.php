<?php

use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserAuth;
use Illuminate\Support\Facades\Route;
use App\Models\Todo;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/index', [TodoController::class, 'index']);
Route::get('/create', [TodoController::class, 'create']);
Route::post('/create1', [TodoController::class, 'create1']);
Route::post('/upload', [TodoController::class, 'upload']);
Route::get('/{id}/edit', [TodoController::class, 'edit']);
Route::patch('/update', [TodoController::class, 'update']);
Route::get('/{id}/completed', [TodoController::class, 'completed']);
Route::get('/{id}/delete', [TodoController::class, 'delete']);

// Route::post('user', [UserAuth::class,'userLogin']);
// // Route::view("login1", 'login1');
// Route::view("profile", 'profile');

// Route::get('/login1', function () {
//     if (session()->has('user')) {

//         return redirect('profile');
//     }

//     return view('login1');
//  });

// Route::get('/logout', function () {
//         if (session()->has('user')) {

//             session()->pull('user');
//         }

//         return redirect('login1');
//      });


require __DIR__.'/auth.php';
