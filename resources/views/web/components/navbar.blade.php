<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="#">
            <div class="logo-container">
                <img src="{{ asset('dubai_logo.png') }}" alt="Dubai Ballooning Logo" class="logo-image">
            </div>
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact us</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#">Packages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Gift Voucher</a>
                </li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="experienceDropdown" role="button" data-bs-toggle="dropdown">
                        Experience
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Hot Air Balloon</a></li>
                        <li><a class="dropdown-item" href="#">Desert Safari</a></li>
                        <li><a class="dropdown-item" href="#">City Tours</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="coupleDropdown" role="button" data-bs-toggle="dropdown">
                        Couple Experience
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Romantic Flight</a></li>
                        <li><a class="dropdown-item" href="#">Sunset Experience</a></li>
                        <li><a class="dropdown-item" href="#">Private Balloon</a></li>
                    </ul>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#">Group Flight</a>
                </li> --}}
            </ul>

            <!-- Contact Info & Social -->
            <div class="d-flex align-items-center navbar-contact">
                <div class="contact-info me-3 d-none d-lg-block">
                    <small class="text-muted d-block">24/7 WhatsApp Support:</small>
                    <a href="tel:+971502828445" class="contact-phone">+971 50 2828 445</a>
                </div>
                <div class="social-links">
                    <a href="#" class="social-link whatsapp-icon"><i class="fab fa-whatsapp"></i></a>
                    <a href="#" class="social-link twitter-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-link instagram-icon"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</nav>