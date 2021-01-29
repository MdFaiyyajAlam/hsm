<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    //
    public function drprofile(){

        if(User::where([['id',Auth::id()],['isAdmin',TRUE]])->exists()){
            return redirect()->route('admin.dashboard');
        }

        //check if data about doctor not exixts
        $data['doctor'] = Doctor::where('user_id',Auth::id())->first();

        $data['doctors'] = Doctor::where('user_id',Auth::id())->firstOrFail();
        // if(  $data['patients']=Patient::where('user_id','id')->get()){

        return view('doctor.profile',$data);
        // }
    }



    public function applyDoctor(){
        if(Doctor::where('user_id',Auth::id())->exists()){
            return redirect()->route('drprofile');
        }
        if(Doctor::where('user_id',Auth::id())->exists()){
            return redirect()->route('drprofile');
        }
        return view('doctor.apply');
    }

    public function applyDoctorStore(Request $req){

        if(Patient::where('user_id',Auth::id())->exists()){
            return redirect()->route('Patientprofile');
        }

        if(Doctor::where('user_id',Auth::id())->exists()){
            return redirect()->route('drprofile');
        }

        $req->validate([
            'name' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'cover' => 'required|mimes:jpg,png',
            'qualification' => 'required',
            'speciality' => 'required',
            'category' => 'required',
            'experience' => 'required',
            'visiting_hour' => 'required',
            'address' => 'required',
            'country' => 'required',
            'fees' => 'required',
        ]);

        $filename = time(). "." .$req->cover->extension();

        $req->cover->move(public_path('Doctor_dp'),$filename);

        Doctor::create([
            'name' => $req->name,
            'contact' => $req->contact,
            'email' => $req->email,
            'gender' => $req->gender,
            'cover' => $filename,
            'qualification' => $req->qualification,
            'speciality' => $req->speciality,
            'category' => $req->category,
            'experience' => $req->experience,
            'visiting_hour' => $req->visiting_hour,
            'address' => $req->address,
            'country' => $req->country,
            'fees' => $req->fees,
            'user_id' => Auth::id(),
        ]);
        return redirect()->route('drprofile');
    }

}
