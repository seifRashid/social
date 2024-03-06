<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Your Website</title>
  <!-- Bootstrap CSS link (you can use CDN or download the file) -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Navbar Start Here -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">

        <!-- Logo (replace "your-logo.png" with your actual logo file) -->
        <a class="navbar-brand" href="#">
          {{-- <img src="your-logo.png" alt="Your Logo" height="30"> --}}
          <h2>Rashid</h2>
        </a>

        <!-- Navbar Toggler for small screens -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            @auth
                <li class="nav-item active">
                <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/dashboard">Dashboard</a>
                </li>
                {{-- <li class="nav-item">
                <a class="nav-link" href="/about">About Us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/services">Services</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/register">Register</a>
                </li> --}}
                <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/profile">{{ auth()->user()->name }}</a>
                </li>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <input type="submit" value="Logout" class="btn btn-sm rounded-3 btn-danger">
                    {{-- <button type="submit">Logout</button> --}}
                </form>
            @endauth
            @guest
                 <li class="nav-item active">
                <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/about">About Us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/services">Services</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/register">Register</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
                </li>
            @endguest
          </ul>
        </div>

      </div>
    </nav>
</header>
<!-- Navigation Bar -->
<section>

    <div>
        {{-- the content goes here --}}
        @yield('content')

    </div>

</section>


<!-- Bootstrap JS scripts (include them at the end of the body for better performance) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
