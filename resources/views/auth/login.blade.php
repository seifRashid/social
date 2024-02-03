@extends('layout.layout')

@section('content')

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">

      <!-- Registration Form -->
      <form action="{{ route('login') }}" method="POST">
        @csrf
        <h2 class="text-center mb-4">Login</h2>
        <!-- Email Input -->
        <div class="form-group">
          <label for="email">Email address:</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        @error('email')
        <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror

        <!-- Password Input -->
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        @error('password')
        <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror

        <!-- Registration Button -->
        <button type="submit" class="btn btn-primary btn-block">Login</button>
      </form>

    </div>
  </div>
</div>

@endsection
