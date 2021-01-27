@extends('admin.adminbase')

@section('title')

@endsection

@section('content')
<div class="container-fluid mt-4">
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
            <img src="{{ asset('health1.jpg') }}" alt="" width="100%" height="300px">
            <table class="table table-bordered table-sm">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Qualification</th>
                    <th>Speciality</th>
                    <th>Category</th>
                    <th>Experience</th>
                    <th>Visiting Hour</th>
                </tr>

                    @foreach ($doctors as $d )
                    <tr>
                        <td>{{ $d->id }}</td>
                        <td>{{ $d->name }}</td>
                        <td>{{ $d->contact }}</td>
                        <td>{{ $d->email }}</td>
                        <td>{{ $d->gender }}</td>
                        <td>{{ $d->qualification }}</td>
                        <td>{{ $d->speciality }}</td>
                        <td>{{ $d->category }}</td>
                        <td>{{ $d->experience }}</td>
                        <td>{{ $d->visiting_hour }}</td>

                        </tr>
                    @endforeach
            </table>
        </div>
    </div>
</div>
</div>
@endsection
