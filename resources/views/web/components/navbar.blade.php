<!-- You'll need Font Awesome for the social icons. Add this to your <head> if you don't have it. -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"> -->

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
            <!-- ms-auto pushes the navigation links to the right -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <!-- Use a wildcard (*) to match /packages and any sub-pages like /packages/details -->
                    <a class="nav-link {{ Request::is('packages*') ? 'active' : '' }}" href="/packages">Packages</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="/contact">Contact us</a>
                </li>
            </ul>

            <!-- Contact Info & Social -->
            <div class="d-flex align-items-center navbar-contact">
                <div class="contact-info ms-lg-4 me-3 d-none d-lg-block">
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
<style>
    /* 
===============================================
CSS FOR ACTIVE NAVBAR LINK
===============================================
*/

.navbar-nav .nav-link.active {
    color: #f39c12 !important; 
    font-weight: 700; /* Make it bolder than other links */
}

/* Optional: Add a subtle underline effect to the active link */
.navbar-nav .nav-link.active::after {
    content: '';
    display: block;
    width: 60%; /* Width of the underline */
    margin: 4px auto 0; /* Centered with space above */
    height: 2px;
    background-color: #f39c12;
}

/* --- General Navbar Styling (from previous request) --- */
.navbar-brand .logo-image { max-height: 40px; }
.navbar-nav .nav-link { font-weight: 600; color: #333; padding: 0.5rem 1rem; position: relative; transition: color 0.3s; }
.navbar-nav .nav-link:hover { color: #f39c12; }
.navbar-contact .contact-phone { font-weight: 700; color: black; text-decoration: none; }

/* Social Link Icons */
.social-links { display: flex; gap: 10px; }
.social-link { display: flex; align-items: center; justify-content: center; width: 36px; height: 36px; border-radius: 50%; color: #fff; text-decoration: none; font-size: 16px; transition: transform 0.2s; }
.social-link:hover { transform: scale(1.1); color: #fff; }
.whatsapp-icon { background-color: #25D366; }
.twitter-icon { background-color: #1DA1F2; }
.instagram-icon { background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888); }
    </style>