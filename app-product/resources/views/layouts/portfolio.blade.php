<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Drink Haven - Premium Alcohol & Beverages" />
    <meta name="author" content="Drink Haven" />
    <title>@yield('title', 'Drink Haven - Premium Alcohol & Beverages')</title>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Playfair+Display:wght@700&display=swap" rel="stylesheet" />

<section class="hero-section text-center py-5">

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" role="navigation">
    <div class="container">
        <a class="navbar-brand" href="{{ route('portfolio.home') }}">Drink Haven</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#testimonial">Testimonial</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>


    <!-- Main Content -->
    <main class="pt-5 mt-5">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="text-center mt-5 py-3 bg-light">
        <div class="container">
            <p class="mb-0">© {{ date('Y') }} Drink Haven. Built with Laravel {{ app()->version() }}</p>
        </div>
    </footer>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
