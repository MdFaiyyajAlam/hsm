@extends('admin.adminbase')

@section('title')

@endsection

@section('content')
<div class="container-fluid mt-0">
    <div class="row">

    <h3 class="bg-success lead display-5 text-white text-center p-3">All details of Hospital Management System</h3>
        <div class="col-lg-3">
            <div class="list-group bg-light">
                <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action bg-dark text-white">Dashboard</a>
                <a href="{{ route('admin.doctors') }}" class="list-group-item list-group-item-action">Doctors</a>
                <a href="{{ route('admin.patients') }}" class="list-group-item list-group-item-action">Patient</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <input type="submit" class="list-group-item list-group-item-action bg-danger text-white" value="Logout">
                </form>
            </div>
        </div>

        <div class="col-lg-9">
            <div class="row">

                <img src="{{ asset('health1.jpg') }}" alt="" width="100%" height="300px">
                <div class="col-lg-6 mt-3">
                    <div class="card bg-light ">
                        <div class="card-body">
                            <h3>Total Doctors Presnt</h3>
                            <hr>
                            <h4>{{ $doctors }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-3">
                    <div class="card bg-light">
                        <div class="card-body">
                            <h3 class="">All Patients:- </h3>
                            <hr>
                            <h4>{{ $patients }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
