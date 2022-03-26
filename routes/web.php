<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\PricePlaneController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\sms\test;
use App\Http\Controllers\PeriodPlaneController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserRequestController;
use App\Http\Controllers\VeriedSmsController;
use App\Models\Document;
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

Route::get('/user/login' , function(){
    return view('login');
})->name('user.login');
Route::post('/user/login' ,[AuthController::class , 'LoginUser' ])->name('userlogin');



/*
|--------------------------------------------------------
| User Routes
|--------------------------------------------------------
*/

Route::middleware('auth')->group(function(){
    Route::get('/dashboard' , [AuthController::class , 'Dashboard'])->name('dashboard');
    Route::post('/logout',[AuthController::class,'logout'])->name('user.logout');
    Route::get('/myinfo' ,[UserController::class , 'ShowInfo'] )->name('my.info');
    Route::get('/upload' , [UserController::class , 'UploadDoc'])->name('user.upload');
    Route::post('/upload/doc' , [UserController::class , 'StoreDoc'])->name('upload.doc');
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
    Route::post('/logout',[AdminController::class,'logout'])->name('logout');

});

 Route::middleware('auth:admin')->group(function () {

    Route::get('/panel' ,[AdminController::class , 'LoginPanel' ])->name('admin.panel');
    Route::get('/userrequest/plan' ,[UserRequestController::class, 'ShowRequest'])->name('userrequest');
    Route::get('show/info/{id}' , [UserRequestController::class , 'ShowInfo']);
    Route::get('confirm/info/{id}' , [UserRequestController::class , 'ConfirmInfo']);
    Route::post('confirm/info' , [UserRequestController::class , 'FinalConfirm'])->name('confirm.info');
    Route::get('/list/docs' ,[UserRequestController::class, 'ListDocs'])->name('list.doc');
    Route::get('delete/userrequest/{id}' , [UserRequestController::class , 'DeleteRequest']);


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

     });







/*
|---------------------------------------------------------
|Register Routes
|---------------------------------------------------------
*/

Route::get('/register/form' ,[RegisterController::class ,'RegisterFrom'])->name('register.form');
Route::post('/register/user' , [RegisterController::class , 'RegisterUser' ])->name('register.user');
Route::post('/store/user' , [RegisterController::class , 'StoreUser'])->name('store.user');
Route::get('/register/confirm' ,[RegisterController::class , 'ConfirmForm'])->name('confirm.form');
Route::post('confirm/sms' , [VeriedSmsController::class , 'Verification'])->name('confirm.code');
Route::get('recheck/form/{data}' , [RegisterController::class , 'ReCheckForm'])->name('recheck.form');
Route::get('success/registration' ,function(){
    return view('successRegistration');
})->name('success.registration');

/*
|---------------------------------------------------------------
| SMS Routes
|---------------------------------------------------------------
*/
Route::get('/sms' , [test::class , 'testsend']);
Route::post('send/sms' ,[SmsController::class , 'SendSms'])->name('send.sms');
