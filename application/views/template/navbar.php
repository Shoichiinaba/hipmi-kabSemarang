<body>

    <!-- Header -->
    <div class="bg-accent-color py-3">
        <div class="r-container">
            <div
                class="d-flex flex-xl-row flex-column justify-content-center justify-content-xl-between align-items-center font-2">
                <div
                    class="d-flex flex-xl-row flex-column flex-wrap align-items-center justify-content-center justify-content-xl-start text-white mb-3 mb-xl-0 gap-xl-5 gap-2">
                    <span class="d-flex flex-row align-items-center gap-2">
                        <i class="fa-solid fa-envelope text-white"></i>
                        Hipmi-KabSemarang@dipo.com
                    </span>
                    <span class="d-flex flex-row align-items-center gap-2">
                        <i class="fa-solid fa-phone text-white"></i>
                        +62 859-4138-420
                    </span>
                    <span class="d-flex flex-row align-items-center gap-2">
                        <i class="fa-solid fa-location-dot text-white"></i>
                        Sraten Satu, Kec. Tuntang, Kabupaten Semarang, Jawa Tengah 50773
                    </span>
                </div>
                <div class="social-container mb-xl-0 mb-3">
                    <a href="https://www.facebook.com" class="social-item">
                        <i class="fa-brands fa-xs fa-facebook-f"></i>
                    </a>
                    <a href="https://www.twitter.com" class="social-item">
                        <i class="fa-brands fa-xs fa-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com" class="social-item">
                        <i class="fa-brands fa-xs fa-instagram"></i>
                    </a>
                    <a href="https://www.youtube.com" class="social-item">
                        <i class="fa-brands fa-xs fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <header class="sticky-top bg-accent-primary">
        <div class="r-container">
            <nav class="navbar navbar-expand-xl">
                <div class="container-fluid ps-3">
                    <div class="logo-container">
                        <a class="navbar-brand" href="#"><img src="<?= base_url('assets/'); ?>image/logo/logo.png"
                                alt="" class="img-fluid"></a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars-staggered accent-color-2"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto mb-2 mb-xl-0 gap-xl-4 gap-1">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    About Us
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="about.html">About Us</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact Us</a>
                            </li>
                        </ul>
                        <div class="mb-xl-0 mb-3">
                            <a href="contact.html" class="btn btn-accent rounded-pill d-flex flex-row gap-2 px-4 py-2">
                                <span>Login</span>
                                <i class="rtmicon rtmicon-arrow-up-right fs-6 fw-semibold"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- End Header -->