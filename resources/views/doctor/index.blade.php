@extends('doctor.doctorbase')

@section('title')

@endsection

@section('content')

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-3">
<div class="form-group">
    <a href="" class="list-group-item list-group-item-action">Dermatologist</a>
    <a href="" class="list-group-item list-group-item-action">Cardiologist</a>
    <a href="" class="list-group-item list-group-item-action">Gynecologist</a>
    <a href="" class="list-group-item list-group-item-action">Dentist</a>
    <a href="" class="list-group-item list-group-item-action">Ophthalmologist</a>
    <a href="" class="list-group-item list-group-item-action">Orthopedist</a>
    <a href="" class="list-group-item list-group-item-action">Hepatologist</a>
    <a href="" class="list-group-item list-group-item-action">Hematologist</a>
    <a href="" class="list-group-item list-group-item-action">ENT Specialist</a>
    <a href="" class="list-group-item list-group-item-action">Neurologist</a>
    <a href="" class="list-group-item list-group-item-action">Oncologist</a>
    <a href="" class="list-group-item list-group-item-action">Pediatrician</a>
    <a href="" class="list-group-item list-group-item-action">Pulmonologist</a>
    <a href="" class="list-group-item list-group-item-action">Psychiatrist</a>
    <a href="" class="list-group-item list-group-item-action">Question</a>
</div>
        </div>

        <div class="col-lg-9">
            @foreach($doctors as $d)
            <div class="card bg-light mt-2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{ asset('Doctor_dp/'.$d->cover) }}" alt="" width="250px" height="250px" class="rounded-circle">
                        </div>

                        <div class="col-lg-8">
                            <h4>{{ $d->name }}</h4>
                            <h5>{{ $d->qualification }}</h5>
                            <h5>{{ $d->speciality }}</h5>
                            <h5>{{ $d->experience }}</h5>
                            <h5>{{ $d->consulant_type }}</h5>
                            <h5>{{ $d->visiting_hour }}</h5>
                            <p class="lead">{{ $d->address }}</p>
                            <h6>Contact:-{{ $d->contact }}</h6>
                            <h6>Email:-{{ $d->email }}</h6>
                            <a href="{{ route('profile') }}" class="btn btn-warning">View Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection

