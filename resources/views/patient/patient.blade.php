@extends('patient.patientbase')
@section('title')

@endsection

@section('content')
<div class="container">
    <div class="row">

        <div class="col-lg-6 mx-auto">
            <div class="card bg-light">
                <div class="card-header">
                    <h4>Book Appoinment Now</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('patientBookStore') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Contact</label>
                            <input type="text" name="contact" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Date of Birth</label>
                            <input type="text" name="dob" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Address</label>
                            <input type="text" name="address" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Disases</label>
                            <input type="text" name="disases" class="form-control">
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-danger w-100" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
