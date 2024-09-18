<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Plezo PoS') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Google Calendar Scheduling Script -->
    <link href="https://calendar.google.com/calendar/scheduling-button-script.css" rel="stylesheet">
    <script src="https://calendar.google.com/calendar/scheduling-button-script.js" async></script>

    <style>
        /* Make the header sticky */
        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
            /* Ensure the navbar is above other content */
        }

        /* Footer Styles */
        footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 20px 0;
        }

        footer h5 {
            margin-bottom: 1rem;
            font-weight: 600;
        }

        footer a {
            color: #ffffff;
            text-decoration: none;
        }

        footer a:hover {
            color: #cfd9e6;
        }

        .social-icons a {
            margin-right: 15px;
            font-size: 1.5rem;
        }

        .social-icons a:last-child {
            margin-right: 0;
        }

        .footer-logo {
            max-width: 120px;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="Logo" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto d-flex align-items-center">
                        <li class="nav-item">
                            <a href="#features" class="nav-link">Features</a>
                        </li>
                        <li class="nav-item">
                            <a href="#CaseStudies" class="nav-link">Case Studies</a>
                        </li>
                        <li class="nav-item">
                            <a href="#Pricing" class="nav-link">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a href="/contact" class="nav-link">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <!-- Button to trigger modal -->
                            <button class="btn btn-primary nav-button1" data-bs-toggle="modal"
                                data-bs-target="#demoModal">
                                Book a Demo
                            </button>
                        </li>

                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Modal for Booking Demo -->
    <div class="modal fade" id="demoModal" tabindex="-1" aria-labelledby="demoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="demoModalLabel">Book a Demo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Google Calendar Appointment Scheduling -->
                    <div id="calendar-container">
                        <script>
                            (function() {
                                var target = document.currentScript;
                                window.addEventListener('load', function() {
                                    calendar.schedulingButton.load({
                                        url: 'https://calendar.google.com/calendar/appointments/schedules/AcZssZ2YuyjXcpnLw7rP30D6_8qiD6MVTGehtzvAWE_bxKOejZFl7jXZLO5Aft9tiW8SaiD4cfb73EmB?gv=true',
                                        color: '#039BE5',
                                        label: 'Book an appointment',
                                        target: target.parentNode,
                                    });
                                });
                            })();
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <!-- Row 1: Social Media -->
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h5>Follow Us</h5>
                </div>
                <div class="col-12 text-center social-icons">
                    <a href="https://instagram.com" class="text-light me-3" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://facebook.com" class="text-light me-3" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://tiktok.com" class="text-light" aria-label="TikTok">
                        <i class="fab fa-tiktok"></i>
                    </a>
                </div>
            </div>

            <!-- Row 2: Logo and Menu -->
            <div class="row mb-4">
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="footer-logo mb-3">
                </div>
                <div class="col-md-6 text-center">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#" class="text-white">Home</a></li>
                        <li class="list-inline-item"><a href="#" class="text-white">About</a></li>
                        <li class="list-inline-item"><a href="#" class="text-white">Services</a></li>
                        <li class="list-inline-item"><a href="#" class="text-white">Contact</a></li>
                    </ul>
                </div>
            </div>

            <!-- Row 3: Powered by TechPatron -->
            <div class="row">
                <div class="col-12 text-center">
                    <p>Powered by TechPatron</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
