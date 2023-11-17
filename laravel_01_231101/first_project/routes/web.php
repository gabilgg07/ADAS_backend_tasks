<?php

use App\Http\Controllers\admin\PostsController as AdminPostsController;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
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

Route::get("/", [HomeController::class, "index"])->name("home");
Route::get("/posts", [PostsController::class, "index"]);
Route::get("/posts/detail", [PostsController::class, "detail"]);
Route::get("/user", UserController::class);
Route::get('/welcome', function () {
    dump(config('database.default'));
    return view('welcome');
});
// Route::get('/admin/posts', [AdminPostsController::class, "index"] );
// Route::get('/admin/posts/create', [AdminPostsController::class, "create"] );
// Route::post('/admin/posts/create', [AdminPostsController::class, "store"] );

Route::resource('admin/posts', AdminPostsController::class);
Route::view('/home', 'home');
Route::get('/show/{id?}/{lang?}', [AdminPostsController::class, 'show'])->whereNumber('id')->where('lang', '([a-zA-Z])\w{1}');