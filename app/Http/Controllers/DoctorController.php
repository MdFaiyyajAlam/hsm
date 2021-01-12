<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\User;
use Auth;

class DoctorController extends Controller
{
    //
    public function profile(){

        $data['doctors'] = Doctor::where('user_id',Auth::id())->firstOrFail();
        return view('doctor.profile',$data);
    }

    public function doctor_index(){

        $data['doctors'] = Doctor::all();
        return view('doctor.index',$data);
    }

    public function applyDoctor(){
        return view('doctor.apply');
    }

    public function applyDoctorStore(Request $req){

        $req->validate([
            'name' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'qualification' => 'required',
            'speciality' => 'required',
            'consultant_type' => 'required',
            'experience' => 'required',
            'visiting_hour' => 'required',
            'address' => 'required',
            'cover' => 'required|mimes:jpg,png',
        ]);

        $filename = time(). "." .$req->cover->extension();

        $req->cover->move(public_path('Doctor_dp'),$filename);

        Doctor::create([
            'name' => $req->name,
            'contact' => $req->contact,
            'email' => $req->email,
            'gender' => $req->gender,
            'qualification' => $req->qualification,
            'speciality' => $req->speciality,
            'consultant_type' => $req->consultant_type,
            'experience' => $req->experience,
            'visiting_hour' => $req->visiting_hour,
            'address' => $req->address,
            'cover' => $filename,
            'user_id' => Auth::id(),
        ]);
        return redirect()->back();
    }

}
