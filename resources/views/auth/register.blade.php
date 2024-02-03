@extends('layout.layout')

@section('content')

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">

      <!-- Registration Form -->
      <form action="{{ route('register') }}" method="POST">
        @csrf
        <h2 class="text-center mb-4">Register</h2>
        <!-- Username Input -->
        <div class="form-group">
            <label for="name">Username:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        @error('name')
        <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror

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

        <div class="form-group">
          <label for="password">Confirm Password:</label>
          <input type="password" class="form-control" id="password" name="password_confirmation" required>
        </div>
        @error('password')
        <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror

        <!-- Registration Button -->
        <button type="submit" class="btn btn-primary btn-block">Register</button>
      </form>

    </div>
  </div>
</div>

@endsection
