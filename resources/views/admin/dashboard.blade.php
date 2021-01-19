@extends('admin.adminbase')

@section('title')

@endsection

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-3">
            <div class="list-group">
                <a href="" class="list-group-item list-group-item-action bg-dark text-white">Dashboard</a>
                <a href="" class="list-group-item list-group-item-action">Doctors</a>
                <a href="" class="list-group-item list-group-item-action">Patient</a>
            </div>
        </div>

        <div class="col-lg-9">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card bg-danger text-white">
                        <div class="card-body">
                            <h4 class="lead">Total Doctors Presnt</h4>
                            <hr>
                            <h6>{{ $doctors }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
