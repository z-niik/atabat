<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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
// Route::prefix('user')->middleware('user')->as('user.')->group(function(){

//     Route::get('/login', function(){
//         return  "Admin Logined";
//     })->name('user');
//   });

Route::get('/', function () {
    return view('index');
});
Route::post('/register/form' , [RegisterController::class , 'AcceptRules'])->name('register.form');
Route::post('/register' , [RegisterController::class , 'RegisterUser' ])->name('register');
