@extends('admin.adminbase')

@section('title')

@endsection

@section('content')
<div class="container-fluid mt-0">
    <div class="row">
        <h3 class="bg-success lead display-5 text-white text-center p-3">All details of Hospital Management System</h3>
        {{-- <div class="col-lg-2">
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

        <div class="col">
            <img src="{{ asset('health1.jpg') }}" alt="" width="100%" height="300px">
            <table class="table table-bordered table-sm table-dark table-hover">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th>Contact</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Qualification</th>
                    <th scope="col">Speciality</th>
                    <th scope="col">Category</th>
                    <th scope="col">Experience</th>
                    <th scope="col">Visiting Hour</th>
                    <th scope="col">Fees</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
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
                        <td>{{ $d->fees }}</td>
                        <td>
                        {{-- <a href="" class="btn btn-success">{{ $d->users->isDoctor }}</a> --}}
                        <form action="{{ route('editUser',['user'=>$d->users->id]) }}" method="POST">
                            @method('PUT')
                            @csrf
                            @if ($d->users->isDoctor == False)

                            <input type="submit" name="send" value="panding" class="btn btn-danger">
                             @else
                             <a href="" class="btn btn-success">Approved</a>
                            @endif
                        </form>

                        </td>
                        <td>
                        <a href="" class="btn btn-success">No Patients</a>
                    </td>
                        </tr>
                    @endforeach
            </table>
        </div>
    </div>
</div>
</div>
@endsection
