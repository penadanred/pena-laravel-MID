<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Your custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- Anchor at top -->
    <div id="top"></div>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top custom-nav">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#top">{{ $portfolio['name'] ?? 'BREW BREW' }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#top">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#testimonial">Testimonials</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page content -->
    <main>
        @yield('content')
    </main>

    <!-- Bootstrap bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Small script: smooth-scroll with offset + close collapse on mobile + active link highlight -->
    <script>
    (function () {
        const OFFSET = 80; // height of fixed nav (adjust if needed)
        // smooth scroll + offset
        document.querySelectorAll('.nav-link[href^="#"]').forEach(link => {
            link.addEventListener('click', function (e) {
                const hash = this.getAttribute('href');
                if (!hash || hash === '#') return;
                const target = document.querySelector(hash);
                if (!target) return;

                e.preventDefault();

                const targetPos = target.getBoundingClientRect().top + window.pageYOffset - OFFSET;
                window.scrollTo({ top: targetPos, behavior: 'smooth' });

                // close mobile nav if open
                const navbarCollapse = document.querySelector('.navbar-collapse.show');
                if (navbarCollapse) {
                    const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse) || new bootstrap.Collapse(navbarCollapse);
                    bsCollapse.hide();
                }
            });
        });

        // add/remove .active on nav links while scrolling
        const sections = Array.from(document.querySelectorAll('section[id]'));
        function onScroll() {
            const scrollPos = window.pageYOffset + OFFSET + 5;
            let currentId = 'top';
            for (const sec of sections) {
                const top = sec.offsetTop;
                if (scrollPos >= top) {
                    currentId = sec.id;
                }
            }
            document.querySelectorAll('.nav-link').forEach(a => {
                a.classList.remove('active');
                const href = a.getAttribute('href')?.replace('#','') || 'top';
                if (href === currentId) a.classList.add('active');
            });
        }
        window.addEventListener('scroll', onScroll, { passive: true });
        window.addEventListener('load', onScroll);
    })();
    </script>

</body>
</html>
