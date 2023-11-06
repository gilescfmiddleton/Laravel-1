<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\Authcontroller;

use App\Http\Controllers\TestController;
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


Route::get('/about', [TestController::class, 'showAboutPage' ]);
Route::get("/about/{name}", [TestController::class, 'showAboutDetails']);
Route::post("/register",[UserController::class, 'register']);
Route::resource("user",Authcontroller::class);

