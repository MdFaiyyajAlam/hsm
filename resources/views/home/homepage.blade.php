@extends('home.homebase')

@section('title')

@endsection

@section('content')
<div class="jumbotron bg-secondary ">
    <div class="container-fluid mt-2">
        <h1 class="display-3 text-center text-warning">Welcome To All India Institute of Medical Sciences, Delhi</h1>
    </div>
    <p class="lead text-white">All India Institute of Medical Sciences abbreviated as AIIMS Delhi is one of the top
        choices for medical aspirants in India. According to the recent NIRF rankings, AIIMS Delhi is the number medical
        institute in the country and it has managed to maintain this position since 2018. Situated in the capital city
        of India, the institute was established in 1956, and ever since then, it has managed to excel in the field of
        medical education by providing the best combination of theoretical and practical knowledge. </p>
    <hr>
</div>

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-3">
            <div class="form-group">
                <a href="" class="list-group-item list-group-item-action">Dashboard</a>
                <a href="" class="list-group-item list-group-item-action">Patient</a>
                <a href="" class="list-group-item list-group-item-action">Doctor</a>
                <a href="" class="list-group-item list-group-item-action">Contact Us</a>
                <a href="" class="list-group-item list-group-item-action">About Us</a>
            </div>
            <div class="form-group mt-3">
                <h5 class="bg-info text-white">Top 15 Types of Doctors</h5>
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
            <div class="row">
                @foreach($doctors as $d)
                <div class="card border-success bg-light mt-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{ asset('Doctor_dp/'.$d->cover) }}" alt="" width="250px" height="250px" class="rounded-circle">

                                <div class="book d-md-flex justify-content-md">
                                    <a href="{{ route('patientBook') }}" class="btn btn-danger mt-3 float-auto">Book Appoinment</a>
                                </div>
                            </div>

                            <div class="col-lg-8">
                                <h4 class="bg-success text-warning">{{ $d->name }}</h4>
                                <h5>{{ $d->qualification }}</h5>
                                <h5>Speciality : {{ $d->speciality }}</h5>
                                <h5>{{ $d->category }}</h5>
                                <h5>Experience : {{ $d->experience }}</h5>
                                <h5>Time : {{ $d->visiting_hour }}</h5>
                                <p class="lead">{{ $d->address }}</p>
                                <h6>Contact:-{{ $d->contact }}, Email:-{{ $d->email }}</h6>
                                <h6></h6>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
