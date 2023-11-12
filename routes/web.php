<?php

use App\Http\Controllers\Admin\{
    SupportController
};
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

Route::get("/supports/listando", [SupportController::class, 'index'])->name('supports.listando');


Route::resource("/supports", SupportController::class);


Route::get("/contato", function () {
    return view("site.contact");
});

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('admin.dashboard');
})->middleware('auth');
