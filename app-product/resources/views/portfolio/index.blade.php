@extends('layouts.portfolio')

@section('title', $portfolio['name'] . ' - ' . $portfolio['title'])

@section('content')

<!-- Hero Section -->
<section class="hero-section text-center py-5">
    <div class="container">
        <img src="{{ $portfolio['profile_image'] }}" alt="{{ $portfolio['name'] }}" class="profile-img mb-4 rounded-circle" width="150" height="150">
        <h1 class="display-4">{{ $portfolio['name'] }}</h1>
        <h3 class="mb-3 text-muted">{{ $portfolio['title'] }}</h3>
        <p class="lead">{{ $portfolio['bio'] }}</p>
    </div>
</section>

<!-- About / Skills Section -->
<section id="about" class="section bg-white py-5">
    <div class="container">
        <h2 class="section-title text-center mb-4">Our Specialties</h2>
        <ul class="list-group list-group-flush">
            @foreach($portfolio['skills'] as $skill)
                <li class="list-group-item">{{ $skill }}</li>
            @endforeach
        </ul>
    </div>
</section>

<!-- Projects / Featured Articles Section -->
<section id="projects" class="section bg-light py-5">
    <div class="container">
        <h2 class="section-title text-center mb-4">Testimonial</h2>
        <div class="row">
            @foreach($portfolio['projects'] as $project)
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $project['title'] }}</h5>
                            <p class="card-text">{{ $project['description'] }}</p>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <a href="{{ $project['url'] }}" class="btn btn-primary" target="_blank">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="section py-5">
    <div class="container">
        <h2 class="section-title text-center mb-4">Contact Us</h2>
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <p><strong>Email:</strong> {{ $portfolio['email'] }}</p>
                <p><strong>Phone:</strong> {{ $portfolio['phone'] }}</p>
                <p><strong>Location:</strong> {{ $portfolio['location'] }}</p>

                @if(!empty($portfolio['social_links']))
                    <div class="mt-4">
                        <h5>Follow us:</h5>
                        @foreach($portfolio['social_links'] as $platform => $link)
                            <a href="{{ $link }}" target="_blank" class="me-3 text-decoration-none">
                                <i class="fab fa-{{ $platform }} fa-lg me-1"></i> {{ ucfirst($platform) }}
                            </a>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

@endsection
