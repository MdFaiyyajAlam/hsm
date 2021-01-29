@extends('admin.adminbase')

@section('title')

@endsection

@section('content')
<div class="container-fluid mt-0">
    <div class="row">
        <h3 class="bg-success lead display-5 text-white text-center p-3">All details of Hospital Management System</h3>
        {{-- <div class="col-lg-3">
            <div class="list-group bg-light">
                <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action bg-dark text-white">Dashboard</a>
                <a href="{{ route('admin.doctors') }}" class="list-group-item list-group-item-action">Doctors</a>
                <a href="{{ route('admin.patients') }}" class="list-group-item list-group-item-action">Patient</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <input type="submit" class="list-group-item list-group-item-action bg-danger text-white" value="Logout">
                </form>
            </div>
        </div> --}}

        <div class="col-lg-12">
            <img src="{{ asset('health1.jpg') }}" alt="" width="100%" height="300px">
            <table class="table table-bordered table-sm table-dark table-hover">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Address</th>
                    <th>Country</th>
                    <th>Action</th>
                </tr>

                    @foreach ($patients as $p )
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->contact }}</td>
                        <td>{{ $p->email }}</td>
                        <td>{{ $p->gender }}</td>
                        <td>{{ $p->dob }}</td>
                        <td>{{ $p->address }}</td>
                        <td>{{ $p->country }}</td>
                        <td>
                            <a href="" class="btn btn-danger">Details</a>
                        </td>

                        </tr>
                    @endforeach
            </table>
        </div>
    </div>
</div>
</div>
@endsection
