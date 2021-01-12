<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class PatientController extends Controller
{
    //


    public function patientBook(){
        $data['patient'] = Patient::all();
        return view('patient.patient',$data);
    }

    public function patientBookStore(Request $req){

        $req->validate([
            'name' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'disases' => 'required',
        ]);

        Patient::create([
            'name' => $req->name,
            'contact' => $req->contact,
            'email' => $req->email,
            'dob' => $req->dob,
            'address' => $req->address,
            'disases' => $req->disases,
            'user_id' => Auth::id(),
        ]);
        return redirect()->back();
    }

}
