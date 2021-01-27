@extends('patient.patientbase')
@section('title')

@endsection

@section('content')
<div class="container mt-4">
    <div class="row">

        <div class="col-lg-8 mx-auto">
            <div class="card bg-light">
                <div class="card-header">
                    <h4>Book Appoinment Now</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('patientBookStore',['id'=>request()->id])}}" method="POST" enctype="multipart/form-data">
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
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Gender</label>
                            <input type="text" name="gender" class="form-control">
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
                            <label for="">Country</label>
                            <input type="text" name="country" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Cover</label>
                            <input type="file" name="cover" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Disases</label>
                            <input type="text" name="disease" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Description</label>
                            <input type="text" name="description" class="form-control">
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
