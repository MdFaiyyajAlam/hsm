<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth;

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
    //$data['doctors'] = Doctor::where('name',$req->search)->orwhere('qualification','LIKE', "%".$req->search."%")->get();
    $data['doctors'] = Doctor::all();
    return view('home.homepage',$data);
})->name('home');



Route::get('/applyDoctor',[DoctorController::class,"applydoctor"])->name('applyDoctor');

Route::get('/drprofile',[DoctorController::class,'drprofile'])->name('drprofile');
Route::post('/applyDoctorStore',[DoctorController::class,"applyDoctorStore"])->name('applyDoctorStore');


Route::prefix('patient')->group(function(){
Route::get('/patientBook/{id}',[PatientController::class,'patientBook'])->name('patientBook');
Route::post('/patientBookStore/{id}',[PatientController::class,'patientBookStore'])->name('patientBookStore');
Route::get('/patientProfile',[PatientController::class,'patientProfile'])->name('patientProfile');

});
Route::prefix("admin")->group(function(){
    Route::get('/dashboard',[AdminController::class,"dashboard"])->name('admin.dashboard');
    Route::get('/doctors',[AdminController::class,"doctors"])->name('admin.doctors');
    Route::get('/patients',[AdminController::class,"patients"])->name('admin.patients');
    Route::put('/editUser',[AdminController::class,"editUser"])->name('editUser');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
