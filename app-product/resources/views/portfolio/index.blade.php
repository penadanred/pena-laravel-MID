@extends('layouts.portfolio')

@section('title', $portfolio['name'] . ' - Gsite')

@section('content')

<!-- Full Background Wrapper -->
<div style="background: url('https://tse2.mm.bing.net/th/id/OIP.0iarJstj-emHi_kreOEv7AHaEo?rs=1&pid=ImgDetMain&o=7&rm=3') no-repeat center center/cover; background-attachment: fixed; min-height: 100vh; color: #fff;">

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
    <div class="container">
        <h2 class="section-title text-center">About Us</h2>
        <div class="row align-items-center mt-4">
            <!-- Image Column -->
            <div class="col-md-5 text-center mb-4 mb-md-0">
            <img src="https://grc.edu.ph/wp-content/uploads/2025/08/Graduation-2025-Ms-Heidi-1024x577.jpeg" alt="GLOBAL RECIPROCAL COLLEGES" class="img-fluid rounded">
            <img src="https://grc.edu.ph/wp-content/uploads/2024/05/FB_IMG_1714789198276-1024x683.jpg" alt="GLOBAL RECIPROCAL COLLEGES" class="img-fluid rounded">
             <img src="https://grc.edu.ph/wp-content/uploads/2024/05/418726168_742433734584369_3751672870079643009_n-1024x576.jpg" alt="GLOBAL RECIPROCAL COLLEGES" class="img-fluid rounded">

            </div>

            <!-- Bio Text Column -->
            <div class="col-md-7 text-white">
                <p>{{ $portfolio['bio'] }}</p>
            </div>
        </div>
    </div>
</section>


    <!-- Testimonials Section -->
    <section id="testimonial" class="section py-5" style="background: rgba(0,0,0,0.7);">
        <div class="container">
            <h2 class="section-title text-center mb-5">What Our Student Say</h2>
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
            <h2 class="section-title">Contact Us</h2>
            <p class="mb-4">Visit us at {{ $portfolio['location'] }} or contact us below:</p>
            <p><strong>Phone:</strong> {{ $portfolio['phone'] }}</p>
            <p><strong>Email:</strong> {{ $portfolio['email'] }}</p>
        </div>
    </section>

</div>
@endsection

