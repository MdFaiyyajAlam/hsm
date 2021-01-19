<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Support\Facades\Route;
use Auth;

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


Route::get('/',function () {
    $data['doctors'] = Doctor::all();
    return view('home.homepage',$data);
})->name('index');



Route::get('/applyDoctor',[DoctorController::class,"applydoctor"])->name('applyDoctor');

Route::get('/drprofile',[DoctorController::class,'drprofile'])->name('drprofile');
Route::post('/applyDoctorStore',[DoctorController::class,"applyDoctorStore"])->name('applyDoctorStore');

Route::get('/patientBook',[PatientController::class,'patientBook'])->name('patientBook');
Route::post('/patientBookStore',[PatientController::class,'patientBookStore'])->name('patientBookStore');


Route::prefix("admin")->group(function(){
    Route::get('/dashboard',[AdminController::class,"dashboard"])->name('admin.dashboard');
    Route::get('/doctor',[AdminController::class,"doctor"])->name('doctor');
    Route::get('/patients',[AdminController::class,"patient"])->name('patients');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
