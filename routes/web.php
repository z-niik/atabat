<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PricePlaneController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\sms\test;
use App\Http\Controllers\PeriodPlaneController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\UserRequestController;
use Symfony\Component\Routing\Matcher\Dumper\StaticPrefixCollection;

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
    return view('index');
});

/*
|--------------------------------------------------------
| Admin Routes
|--------------------------------------------------------
*/

Route::prefix('admin')->middleware('admin')->as('admin.')->group(function(){

    Route::get('/login',function(){
        return view('admin.login');
    })->name('login');
    Route::get('/register' , function(){
        return view('admin.register');
    })->name('register');

    Route::post('/login' ,[AdminController::class , 'Login'])->name('login');
    Route::post('/register', [AdminController::class , 'Register'])->name('register');

});

// Route::middleware(['auth','admin'])->group(function () {

    Route::get('/panel' , function(){
        return view('admin.index');
    })->name('admin.panel');

    Route::get('/userrequest/plan' ,[UserRequestController::class, 'ShowRequest'])->name('userrequest');

    Route::get('/period/plan' ,[PeriodPlaneController::class , 'showPeriod'])->name('period.panel');
    Route::post('/add/periodplane' ,[PeriodPlaneController::class , 'AddPeriodPlane'])->name('add.periodplane');
    Route::get('delete/periodplane/{id}' , [PeriodPlaneController::class , 'DeletePeriodPlan']);
    Route::get('edit/periodplane/{id}' , [PeriodPlaneController::class , 'EditPeriodPlane']);
    Route::post('edit/periodplane/{id}' , [PeriodPlaneController::class , 'Edit']);

    Route::get('/price/plan' ,[PricePlaneController::class , 'showPrice'])->name('price.panel');
    Route::post('/add/priceplane' ,[PricePlaneController::class , 'AddPricePlane'])->name('add.priceplane');
    Route::get('delete/priceplan/{id}' , [PricePlaneController::class , 'DeletePricePlan']);
    Route::get('/edit/priceplane/{id}' , [PricePlaneController::class , 'EditPricaPlane']);
    Route::post('/edit/priceplane/{id}' , [PricePlaneController::class , 'Edit']);

    Route::get('state/list',[StateController::class , 'ViewState'])->name('state.list');
    Route::post('add/state' , [StateController::class , 'AddState'])->name('add.state');
    Route::get('edit/state/{id}' , [StateController::class , 'Edit']);
    Route::post('edit/state/{id}' ,[StateController::class , 'EditState']);
    Route::get('delete/state/{id}' , [StateController::class , 'DeleteState']);

    // });







/*
|---------------------------------------------------------
|
|---------------------------------------------------------
*/

Route::get('register/form' ,[RegisterController::class ,'RegisterFrom'])->name('register.form');
Route::post('register/user' , [RegisterController::class , 'RegisterUser' ])->name('register.user');
Route::get('/register/confirm' ,[RegisterController::class , 'ConfirmForm'])->name('confirm.form');

/*
|---------------------------------------------------------------
| SMS Routes
|---------------------------------------------------------------
*/
Route::get('/sms' , [test::class , 'testsend']);
