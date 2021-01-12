@extends('doctor.doctorbase')

@section('title')
Apply for Doctor
@endsection

@section('content')

<div class="conatiner mt-4">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card bg-light">
                <div class="card-header bg-dark text-white">
                    <h5>Apply For Doctors</h5>
                </div>
                <div class="card-body">

                    <form action="{{ route('applyDoctorStore' )}}" method="POST" enctype="multipart/form-data">
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
                            <label for="">Gender</label>
                            <input type="text" name="gender" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Qualification</label>
                            <input type="text" name="qualification" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Speciality</label>
                            <input type="text" name="speciality" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Consultant Type</label>
                            <input type="text" name="consultant_type" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Experience</label>
                            <input type="text" name="experience" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Visiting Hour</label>
                            <input type="text" name="visiting_hour" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Address</label>
                            <input type="text" name="address" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Cover</label>
                            <input type="file" name="cover" class="form-control">
                        </div>

                        <div class="mb-3">
                            <input type="submit" class="btn btn-danger w-100" value="Apply for Doctor">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
