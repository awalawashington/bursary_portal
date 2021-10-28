<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admins\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Students\UserController;
use App\Http\Controllers\Students\CourseController;
use App\Http\Controllers\Students\SiblingController;
use App\Http\Controllers\Students\SettingsController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Students\OtherInfoController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Students\FamilyStatusController;
use App\Http\Controllers\Students\ParentStatusController;
use App\Http\Controllers\Students\TumsaBursaryController;

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

Route::get('/executives', function () {
    return view('executives');
});

Route::get('/contact', function () {
    return view('contact');
});



Route::prefix('student')->name('student.')->group(function(){
  
    Route::middleware(['guest:web','guest:admin'])->group(function(){
        Route::view('/login','students.auth.login')->name('login');
        Route::post('/login',[LoginController::class ,'studentLogin']);

        Route::get('/register/step-1',[RegisterController::class ,'request_otp_view'])->name('register.step-1');
        Route::post('/register/step-1',[RegisterController::class ,'request_otp']);
        Route::get('/register/step-2',[RegisterController::class ,'verify_otp_view'])->name('register.step-2');
        Route::post('/register/step-2',[RegisterController::class ,'verify_otp']);
        Route::get('/register',[RegisterController::class ,'registerView'])->name('register');
        Route::post('/register',[RegisterController::class ,'register']);

        Route::get('/password/email',[ForgotPasswordController::class ,'request_otp_view'])->name('password.email');
        Route::post('/password/email',[ForgotPasswordController::class ,'request_otp']);
        Route::get('/password/verify',[ForgotPasswordController::class ,'verify_otp_view'])->name('password.verify');
        Route::post('/password/verify',[ForgotPasswordController::class ,'verify_otp']);
        Route::get('/password/reset',[ResetPasswordController::class ,'resetPasswordView'])->name('password.reset');
        Route::post('/password/reset',[ResetPasswordController::class ,'reset']);
    });

    Route::middleware(['auth:web'])->group(function(){
        Route::view('/dashboard','students.students.dashboard')->name('dashboard');
        Route::get('/logout',[LoginController::class,'studentLogout'])->name('logout');

        Route::view('/settings','students.students.settings')->name('settings');
        Route::post('/settings/password',[SettingsController::class ,'updatePassword'])->name('settings.password');
        Route::post('/settings/profile',[SettingsController::class ,'updateProfile'])->name('settings.profile');
        Route::post('/settings/course',[CourseController::class ,'store'])->name('settings.course');

        Route::view('/course','students.students.course')->name('course');

        Route::view('/bursary','students.students.bursary')->name('bursary');
        Route::post('/bursary/family',[FamilyStatusController::class ,'store'])->name('bursary.family');
        Route::post('/bursary/other_info',[OtherInfoController::class ,'store'])->name('bursary.other_info');
        Route::post('/bursary/tumsa',[TumsaBursaryController::class ,'store'])->name('bursary.tumsa');
        
    });

});

Route::prefix('admin')->name('admin.')->group(function(){
       
    Route::middleware(['guest:admin', 'guest:web'])->group(function(){
          Route::view('/login','admin.auth.login')->name('login');
          Route::post('/login',[LoginController::class ,'adminLogin'])->name('check');
    });

    Route::middleware(['auth:admin'])->group(function(){
        Route::get('/dashboard',[AdminController::class ,'index'])->name('dashboard');

        Route::get('/settings',[AdminController::class ,'settingsView'])->name('settings');
        Route::post('/settings/password',[AdminController::class ,'updatePassword'])->name('settings.password');

        Route::get('/students',[AdminController::class ,'studentsView'])->name('students');
        Route::get('/student/{id}',[AdminController::class ,'studentView'])->name('student');
        Route::get('/applicants',[AdminController::class ,'applicantsView'])->name('applicants');
        Route::get('/inquiries',[AdminController::class ,'inquiriewsView'])->name('inquiries');
        Route::get('/logout',[LoginController::class,'adminLogout'])->name('logout');
    });

});







