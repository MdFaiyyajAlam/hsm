<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class PatientController extends Controller
{
    //

    public function patientProfile(){
        if(User::where([['id',Auth::id()],['isAdmin',TRUE]])->exists()){
            return redirect()->route('admin.dashboard');
        }
        $data['patients'] = Patient::where('user_id',Auth::id())->firstOrFail();
        return view('patient.patientProfile',$data);
    }


    public function patientBook(){
        if(Doctor::where('user_id',Auth::id())->exists()){
          return  redirect()->back();
        }

        if(Patient::where('user_id',Auth::id())->exists()){
            return redirect()->route('patientProfile');
        }
        return view('patient.patient');
    }

    public function patientBookStore(Request $req, $id){
        if(Patient::where('user_id',Auth::id())->exists()){
            return redirect()->route('patientProfile');
        }

        $req->validate([
            'name' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'country' => 'required',
            'disease' => 'required',
            'description' => 'required',
            'cover' => 'required|mimes:jpg,png',
        ]);

        $filename = time(). "." .$req->cover->extension();

        $req->cover->move(public_path('Doctor_dp'),$filename);

        Patient::create([
            'name' => $req->name,
            'contact' => $req->contact,
            'email' => $req->email,
            'gender' => $req->gender,
            'dob' => $req->dob,
            'address' => $req->address,
            'country' => $req->country,
            'disease' => $req->disease,
            'description' => $req->description,
            'cover'=>$filename,
            'user_id' => Auth::id(),
            'doctor_id'=>$id

        ]);
        return redirect()->route('patientProfile');
    }

}


