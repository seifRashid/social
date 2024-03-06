<div class="container col">
    <div class="container mt-5">
    <div class="card" style="width: 18rem;">

        <!-- User Photo -->
        {{-- <img src="user-photo.jpg" class="card-img-top" alt="User Photo"> --}}

        <div class="card-body">

        <!-- User Details -->
        <h5 class="card-title">{{ $card->name }}</h5>
        <p class="card-text"><strong>Nickname:</strong> {{ $card->name }}</p>
        <p class="card-text"><strong>Profession:</strong> {{ $card->profession }}</p>
        <p class="card-text"><strong>Experience:</strong> {{ $card->years_of_experience }}</p>

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
