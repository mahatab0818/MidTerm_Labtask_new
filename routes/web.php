<?php
use App\Http\Controllers\employee\EmployeeController;
use App\Http\Controllers\employee\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\employee\PackageController;
use App\Http\Controllers\employee\BookingController;
use App\Http\Controllers\employee\TourguideController;
use App\Http\Controllers\employee\FeedbackController;
use App\Http\Controllers\account\AccountController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\customer\UCustomerController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\tourguide\guideController;
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


Route::get('/', [LoginController::class,'first']); //Welcome Blade (redirect to login)

Route::get('/register',[UserController::class, 'register'])->name('reg.register');//Registration
Route::post('/auth/save',[UserController::class, 'save'])->name('auth.save'); //Registration Save
Route::get('/login',[LoginController::class, 'index'])->name('login.index');//Login
Route::post('/auth/check',[LoginController::class, 'verify'])->name('auth.check');//Login verification
Route::get('/logout',[LogoutController::class, 'logout'])->name('auth.logout');//Logout





//Varrification Start
Route::group(['middleware'=>'sess'],function ( ){

    //Customer ->profile
    Route::get("dashboard/profile",[EmployeeController::class,'profile']);
    Route::get("dashboard/editprofile/{id}",[EmployeeController::class,'edit']);
    Route::post("dashboard/editprofile/{id}",[EmployeeController::class,'update']);
    

    //Admin ->profile
    Route::get("dashboard/profile",[AdminProfileController::class,'profile']);
    Route::get("dashboard/editprofile/{id}",[AdminProfileController::class,'edit']);
    Route::post("dashboard/editprofile/{id}",[AdminProfileController::class,'update']);
});
//Varrification END