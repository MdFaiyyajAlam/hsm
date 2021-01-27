@extends('patient.patientbase')

@section('title')
PatientProfile
@endsection

@section('content')

<div class="container-fluid mt-3">
    <div class="row">


        <div class="col-lg-4">
            <div class="card bg-light">
                <div class="card-header bg-dark">
                    <h5 class=" text-white">AIIMS Patient Profile</h5>
                </div>
                <img src="{{ asset('Doctor_dp/'.$patients->cover) }}" alt="" class="card-img-top rounded-circle">
            <div class="card-body">
                <h2>{{ $patients->name }}</h2>
                <table class="table-bordered">
                    <tr>
                        <th>Gender</th>
                        <td>{{ $patients->gender }}</td>
                    </tr>
                    <tr>
                        <th>Contact</th>
                        <td>{{ $patients->contact }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $patients->email }}</td>
                    </tr>
                    <tr>
                        <th>Date of Birth</th>
                        <td>{{ $patients->dob }}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{ $patients->address }}</td>
                    </tr>
                    <tr>
                        <th>Country</th>
                        <td>{{ $patients->country}}</td>
                    </tr>

                </table>
            </div>
            </div>
        </div>
        <div class="col-lg-8">
            {{-- <div class="row">

                        @foreach($doctors as $d)
                        <div class="col-lg-6">
                        <div class="card border-success bg-light mt-2">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <img src="{{ asset('Doctor_dp/'.$d->cover) }}" alt="" width="215px" height="230px" class="rounded-circle">
                                        <hr>

                                        <a href="#" class="btn btn-success btn-sm ms-2">{{$d->fees }}</a>

                                    </div>

                                    <div class="col-lg-8">
                                        <h4 class="bg-success text-warning">{{ $d->name }}</h4>
                                        <h5>{{ $d->qualification }}</h5>
                                        <h5>Speciality : {{ $d->speciality }}</h5>
                                        <h5>{{ $d->category }}</h5>
                                        <h5>Experience : {{ $d->experience }}</h5>
                                        <h5>Time : {{ $d->visiting_hour }}</h5>
                                        <p class="lead">{{ $d->address }} , {{ $d->country }}</p>
                                        <h6>Contact:-{{ $d->contact }}, Email:-{{ $d->email }}</h6>
                                        <h6></h6>
                                    </div>
                                </div>
                            </div>

                    @endforeach
                </div>
        </div>
    </div> --}}
</div>
@endsection
