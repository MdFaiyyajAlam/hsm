@extends('home.homebase')

@section('title')

@endsection

@section('content')
<div class="jumbotron bg-info ">
    <img src="health1.jpg" alt="" width="100%" height="300px">
    <div class="container-fluid mt-2">
        <h1 class="display-3 text-center text-warning">Welcome To All India Institute of Medical Sciences, Delhi</h1>
    </div>
    <div class="container-fluid">

    <p class="lead text-white">All India Institute of Medical Sciences abbreviated as AIIMS Delhi is one of the top
        choices for medical aspirants in India. According to the recent NIRF rankings, AIIMS Delhi is the number medical
        institute in the country and it has managed to maintain this position since 2018. Situated in the capital city
        of India, the institute was established in 1956, and ever since then, it has managed to excel in the field of
        medical education by providing the best combination of theoretical and practical knowledge. </p>
        <a href="" class="btn btn-danger btn-float-end">Read More</a>
    </div>
    <hr>

</div>

<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                @foreach($doctors as $d)
                <div class="col-lg-6">
                <div class="card border-success bg-light mt-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{ asset('Doctor_dp/'.$d->cover) }}" alt="" width="215px" height="230px" class="rounded-circle">
                                <hr>

                                <a href="#" class="btn btn-success btn-sm ms-">{{$d->fees }}</a>
                                <a href="" class="btn btn-success btn-sm  text center">Call Now</a>
                                <div class="book d-md-flex justify-content-md">
                                    <a href="{{ route('patientBook',['id'=>$d->id]) }}" class="btn btn-danger w-100 btn-sm mt-3 float-auto">Book Appoinment</a>
                                </div>
                            </div>

                            <div class="col-lg-8">
                               <a href="" class="btn btn-secondary btn-sm btn-outline-success text-white w-100" style="background-color: rgb(36, 177, 133)"><h4>{{ $d->name }}</h4></a>
                                <h5>{{ $d->qualification }}</h5>
                                <h5>Speciality : {{ $d->speciality }}</h5>
                                <h5>{{ $d->category }}</h5>
                                <h5>Experience : {{ $d->experience }}</h5>
                                <h5>Time : {{ $d->visiting_hour }}</h5>
                                <p class="lead">{{ $d->address }} , {{ $d->country }}</p>
                                <h6>Contact:-{{ $d->contact }}, Email:-{{ $d->email }}</h6>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        </div>
    </div>
</div>

@endsection
