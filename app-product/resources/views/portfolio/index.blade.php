@extends('layouts.portfolio')

@section('title', $portfolio['name'] . ' - Coffee Shop')

@section('content')

<!-- Full Background Wrapper -->
<div style="background: url('https://img.freepik.com/free-photo/top-view-alcohol-bottles-with-copy-space_23-2148673772.jpg') no-repeat center center/cover; background-attachment: fixed; min-height: 100vh; color: #fff;">

    <!-- Hero Section -->
   <section class="hero-section text-center d-flex align-items-center justify-content-center" 
    style="min-height: 100vh; background: url('{{ $portfolio['profile_image'] }}') no-repeat center center/cover; position: relative;">

    <!-- Dark overlay -->
    <div style="position: absolute; top:0; left:0; width:100%; height:100%; background: rgba(0,0,0,0.6);"></div>

    <div class="container position-relative text-white">
        <h1 class="display-2 fw-bold">{{ $portfolio['name'] }}</h1>
        <p class="lead">{{ $portfolio['title'] }}</p>
    </div>
</section>


    <!-- About Section -->
    <section id="about" class="section py-5" style="background: rgba(0,0,0,0.7);">
        <div class="container text-center">
            <h2 class="section-title">About Us</h2>
            <p class="mt-3">{{ $portfolio['bio'] }}</p>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonial" class="section py-5" style="background: rgba(0,0,0,0.7);">
        <div class="container">
            <h2 class="section-title text-center mb-5">What Our Customers Say</h2>
            <div class="row">
                @foreach($portfolio['testimonials'] as $testimonial)
                    <div class="col-md-6 mb-4">
                        <div class="card bg-dark bg-opacity-75 p-3 border-0 shadow text-white">
                            <p class="fst-italic">"{{ $testimonial['quote'] }}"</p>
                            <h6 class="mt-2">- {{ $testimonial['author'] }}</h6>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section py-5" style="background: rgba(0,0,0,0.7);">
        <div class="container text-center">
            <h2 class="section-title">Get In Touch</h2>
            <p class="mb-4">Visit us at {{ $portfolio['location'] }} or contact us below:</p>
            <p><strong>Phone:</strong> {{ $portfolio['phone'] }}</p>
            <p><strong>Email:</strong> {{ $portfolio['email'] }}</p>
        </div>
    </section>

</div>
@endsection
