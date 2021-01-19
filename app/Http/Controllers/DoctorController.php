<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    //
    public function drprofile(){

        $data['doctors'] = Doctor::where('user_id',Auth::id())->firstOrFail();
        return view('doctor.profile',$data);
    }




    public function applyDoctor(){
        if(Doctor::where('user_id',Auth::id())->exists()){
            return redirect()->route('drprofile');
        }
        return view('doctor.apply');
    }

    public function applyDoctorStore(Request $req){

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
            'user_id' => Auth::id(),
        ]);
        return redirect()->route('drprofile');
    }

}
