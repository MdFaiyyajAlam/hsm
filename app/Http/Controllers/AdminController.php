<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(Request $request){

        $data['doctors'] = Doctor::all()->count();
        return view('admin.dashboard',$data);
    }

    public function doctors(Request $request){

        $data['doctors'] = Doctor::all();
        return view('admin.doctor_profile',$data);
    }

    public function patients(Request $request){

        $data['patients'] = Patient::all();
        return view('admin.patient_profile',$data);
    }
}
