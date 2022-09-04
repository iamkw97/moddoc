<?php

use App\Http\Controllers\clerk\doctors\DoctorController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
*/
Route::get('/super', ['middleware' => 'issuper', function () {
    return view('dashboards.home-su');
}]);
Route::get('/admin', ['middleware' => 'isadmin', function () {
    return view('dashboards.home-ad');
}]);
Route::get('/clerk', ['middleware' => 'isclerk', function () {
    return view('dashboards.home-cl');
}]);
Route::get('/patient', ['middleware' => 'ispatient', function () {
    return view('dashboards.home-pa');
}]);

/*
|++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
| Clerk Routes
|++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
*/

// starting---------------------------------------------------------------
// start doctor register blade
Route::get('/clerk/doctor/register', [DoctorController::class, 'startRegisterDoctor'])->name('start.register-doctor');


// storing----------------------------------------------------------------
Route::post('/clerk/doctor/save', [DoctorController::class, 'storeRegisterDoctor'])->name('store.register-doctor');

// updating---------------------------------------------------------------
