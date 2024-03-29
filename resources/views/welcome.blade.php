@extends('layout.layout')

@section('content')
    <div class="container">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="container mt-5">
        <div class="card" style="width: 18rem;">

            <!-- User Photo -->
            {{-- <img src="user-photo.jpg" class="card-img-top" alt="User Photo"> --}}

            <div class="card-body">

            <!-- User Details -->
            <h5 class="card-title">John Doe</h5>
            <p class="card-text"><strong>Nickname:</strong> johndoe123</p>
            <p class="card-text"><strong>Profession:</strong> Web Developer</p>
            <p class="card-text"><strong>Years of experience</strong> 10 years</p>

            <!-- User Services -->
            <h6 class="card-subtitle mb-2 text-muted">Services</h6>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Web Design</li>
                <li class="list-group-item">Front-end Development</li>
                <li class="list-group-item">Consulting</li>
            </ul>

            </div>
        </div>
        </div>
    </div>
@endsection
