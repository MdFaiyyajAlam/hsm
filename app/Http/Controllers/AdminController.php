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
        if(User::where([['id',Auth::id()],['isAdmin',FALSE]])->exists()){
            return redirect()->route('drprofile');
        }

        $data['doctors'] = Doctor::all()->count();
        $data['patients'] = Patient::all()->count();
        return view('admin.dashboard',$data);
    }

    public function doctors(Request $request){

        $data['doctors'] = Doctor::all();
        return view('admin.doctor',$data);
    }

    public function patients(Request $request){

        $data['patients'] = Patient::all();
        return view('admin.patient',$data);
    }

    public function editUser(Request $request){
        User::find($request->user)->update([
            'isDoctor'=>TRUE,
        ]);
        return redirect()->back();

    }
}
