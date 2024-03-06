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
        <h2>Dashboard page</h2>
        <div class="container mt-5">
            <form action="{{ route('dashboard') }}" method="POST">
                @csrf
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name">
              </div>

              <div class="form-group">
                <label for="nickname">Nickname:</label>
                <input type="text" class="form-control" id="nickname" placeholder="Enter your nickname">
              </div>

              <div class="form-group">
                <label for="profession">Profession:</label>
                <input type="text" class="form-control" id="profession" placeholder="Enter your profession">
              </div>

              <div class="form-group">
                <label for="experience">Years of Experience:</label>
                <input type="number" class="form-control" id="experience" placeholder="Enter your years of experience">
              </div>

              <div class="form-group">
                <label for="services">Services:</label>

                <!-- Input group for services -->
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Enter a service">
                  <div class="input-group-append">
                    <button type="button" class="btn btn-primary">Add Service</button>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-success">Submit</button>
            </form>
          </div>
    </div>
    <div class="container mt-5">
        <h2>Cards</h2>
        <div class="container">
            <div class="row justify-content-start">
                @foreach ($cards as $card)
                    @include('shared.card.card')
                @endforeach
            </div>
        </div>
    </div>
@endsection
