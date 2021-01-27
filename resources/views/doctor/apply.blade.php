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

                    <form action="{{ route('applyDoctorStore' ) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" value="{{old('name')}}">
                            <small class="text-danger">{{$errors->first('name')}}</small>
                        </div>

                        <div class="mb-3">
                            <label for="">Contact</label>
                            <input type="text" name="contact" class="form-control" value="{{old('contact')}}">
                            <small class="text-danger">{{$errors->first('contact')}}</small>
                        </div>

                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control" value="{{old('email')}}">
                            <small class="text-danger">{{$errors->first('email')}}</small>
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col">
                                    <label for="">Gender</label>
                                    <select name="gender" class="form-select" value="{{old('gender')}}">
                                        <option selected>Select Gender</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Other</option>
                                    </select>
                                    <small class="text-danger">{{$errors->first('gender')}}</small>
                                </div>
                                <div class="col">
                                    <label for="">Cover</label>
                                    <input type="file" name="cover" class="form-control" value="{{old('cover')}}">
                                    <small class="text-danger">{{$errors->first('cover')}}</small>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="">Qualification</label>
                            <input type="text" name="qualification" class="form-control" value="{{old('qualification')}}">
                            <small class="text-danger">{{$errors->first('qualification')}}</small>
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col">
                                    <label for="">Speciality</label>
                                    <input name="speciality" class="form-control" value="{{old('speciality')}}">
                                        {{-- <option selected>Speciality</option>
                                        <option>Dermatologist</option>
                                        <option>Cardiologist</option>
                                        <option>Gynecologist</option>
                                        <option>Dentist</option>
                                        <option>Ophthalmologist</option>
                                        <option>General Physicians</option>
                                        <option>Orthopedist</option>
                                        <option>Hepatologist</option>
                                        <option>Hematologist</option>
                                        <option>ENT Specialist</option>
                                        <option>Neurologist</option>
                                        <option>Oncologist</option>
                                        <option>Pediatrician</option>
                                        <option>Pulmonologist</option>
                                        <option>Psychiatrist</option>
                                        <option>Question</option> --}}

                                    <small class="text-danger">{{$errors->first('speciality')}}</small>
                                </div>
                                <div class="col">
                                    <label for="">Category</label>
                                    <select name="category" class="form-select" value="{{old('category')}}">
                                        <option selected>Select Category</option>
                                        <option>Ayuveda</option>
                                        <option>Surgeons</option>
                                        <option>General practice</option>
                                        <option>Homeopath</option>
                                        <option>Naturopath</option>
                                        <option>Specialist</option>
                                        <option>Supper Specialist</option>
                                        <option>Dermatologist</option>
                                        <option>Cardiologist</option>
                                        <option>Gynecologist</option>
                                        <option>Dentist</option>
                                        <option>Ophthalmologist</option>
                                        <option>General Physicians</option>
                                        <option>Orthopedist</option>
                                        <option>Hepatologist</option>
                                        <option>Hematologist</option>
                                        <option>ENT Specialist</option>
                                        <option>Neurologist</option>
                                        <option>Oncologist</option>
                                        <option>Pediatrician</option>
                                        <option>Pulmonologist</option>
                                        <option>Psychiatrist</option>
                                        <option>Question</option>
                                    </select>
                                    <small class="text-danger">{{$errors->first('category')}}</small>
                                </div>
                            </div>

                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col">
                                    <label for="">Experience</label>
                                    <input type="text" name="experience" class="form-control" value="{{old('experience')}}">
                                    <small class="text-danger">{{$errors->first('experience')}}</small>
                                </div>
                                <div class="col">
                                    <label for="">Visiting Hour</label>
                                    <input type="text" name="visiting_hour" class="form-control" value="{{old('visiting_hour')}}">
                                    <small class="text-danger">{{$errors->first('visiting_hour')}}</small>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="">Address</label>
                            <textarea rows="5" type="text" name="address" class="form-control" value="{{old('address')}}"></textarea>
                            <small class="text-danger">{{$errors->first('address')}}</small>
                        </div>

                        <div class="mb-3">
                            <label for="">Country</label>
                            <input type="text" name="country" class="form-control" value="{{old('country')}}">
                            <small class="text-danger">{{$errors->first('country')}}</small>
                        </div>

                        <div class="mb-3">
                            <label for="">Fees</label>
                            <input type="text" name="fees" class="form-control" value="{{old('fees')}}">
                            <small class="text-danger">{{$errors->first('fees')}}</small>
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
