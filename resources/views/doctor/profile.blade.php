@extends('doctor.doctorbase')

@section('title')

@endsection

@section('content')

<div class="container mt-3">
    <div class="row">


        <div class="col-lg-4">
            <div class="card bg-light">
                <img src="{{ asset('Doctor_dp/'.$doctors->cover) }}" alt="" class="card-img-top rounded-circle">
            <div class="card-body">
                <h2>{{ $doctors->name }}</h2>
                <table class="table-bordered">
                    <tr>
                        <th>Gender</th>
                        <td>{{ $doctors->gender }}</td>
                    </tr>
                    <tr>
                        <th>Contact</th>
                        <td>{{ $doctors->contact }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $doctors->email }}</td>
                    </tr>
                    <tr>
                        <th>Qualification</th>
                        <td>{{ $doctors->qualification }}</td>
                    </tr>
                    <tr>
                        <th>Speciality</th>
                        <td>{{ $doctors->speciality }}</td>
                    </tr>
                    <tr>
                        <th>Consultant Type</th>
                        <td>{{ $doctors->consultant_type }}</td>
                    </tr>
                    <tr>
                        <th>experience</th>
                        <td>{{ $doctors->experience }}</td>
                    </tr>
                    <tr>
                        <th>Visiting Hour</th>
                        <td>{{ $doctors->visiting_hour }}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{ $doctors->address }}</td>
                    </tr>
                </table>
            </div>
            </div>
        </div>
        <div class="col-lg-8">
<table class="table">
    <tr>
        <thead><h3 class="bg-success text-white">Patient Records</h3></thead>
    </tr>

    <tr>
        <thead>
            <th>Name</th>
            <th>Date of Birth</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Disases</th>
            <th>Address</th>
        </thead>
    </tr>
    @foreach($doctors->patients as $patient)
    <tr>
        <td>{{ $patient->name }}</td>
        <td>{{ $patient->dob }}</td>
        <td>{{ $patient->contact }}</td>
        <td>{{ $patient->email }}</td>
        <td>{{ $patient->disases }}</td>
        <td>{{ $patient->address }}</td>
    </tr>
    @endforeach
</table>
        </div>
    </div>
</div>
@endsection
