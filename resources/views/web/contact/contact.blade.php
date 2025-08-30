@extends('web.layout.app')
@section('content')
    <!-- Page Banner Section -->
    <section class="page-banner">
        <div class="banner-background" style="background-image: url('{{ asset('img/contact/bg.png') }}');"></div>
        <div class="banner-overlay"></div>
        <div class="container">
            <h1 class="banner-title">
                <span class="font-bold">CONTACT</span> <span class="font-light">US</span>
            </h1>
        </div>
    </section>

    <style>
        /* You may need to import a font like Montserrat if it isn't loaded globally */

        .page-banner {
            position: relative;
            /* This is the positioning context for the layers */
            width: 100%;
            height: 350px;
            /* Adjust height as needed */
            display: flex;
            align-items: center;
            /* Vertically centers the text */
            font-family: 'Montserrat', sans-serif;

            /* Blue borders from the design */
            /* border-top: 3px solid #3498db;
        border-bottom: 3px solid #3498db; */

            /* Ensures layers are clipped correctly */
            overflow: hidden;
        }

        .banner-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            z-index: 1;
        }

        .banner-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;

            /*
         * The gradient is the key effect here.
         * It starts strong orange on the left and fades to transparent.
        */
            background: linear-gradient(to right,
                    rgba(243, 156, 18, 0.95) 0%,
                    rgba(243, 156, 18, 0.8) 40%,
                    rgba(243, 156, 18, 0.1) 70%,
                    transparent 100%);

            z-index: 2;
            /* Sits on top of the background image */
        }

        .page-banner .container {
            position: relative;
            z-index: 3;
            /* Sits on top of the overlay */
        }

        .banner-title {
            font-size: 4rem;
            /* Large text for desktop */
            color: #ffffff;
            text-transform: uppercase;
            line-height: 1;
            margin: 0;
        }

        .banner-title .font-bold {
            font-weight: 900;
            /* Extra-bold for "CONTACT" */
        }

        .banner-title .font-light {
            font-weight: 400;
            /* Regular weight for "US" */
        }

        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .page-banner {
                height: 280px;
            }

            .banner-title {
                font-size: 3rem;
            }
        }

        @media (max-width: 768px) {
            .page-banner {
                height: 200px;
                justify-content: center;
                /* Center text on mobile */
                text-align: center;
            }

            .banner-title {
                font-size: 2.5rem;
            }
        }
    </style>


    @include('web.components.top-selling-tours')
    @include('web.packages.components.booking')



    <!-- ======================= Contact Section ======================= -->
<section class="contact-details-section py-5">
    <div class="container">

        <!-- Middle Section: Details and Image -->
        <div class="row align-items-center mb-5">
            <!-- Left Column: Contact Details -->
            <div class="col-lg-7">
                <h2 class="contact-title">DUBAI BALLOONING</h2>
                
                <!-- HTML STRUCTURE HAS BEEN CORRECTED FOR PROPER ALIGNMENT -->
                <div class="contact-info-grid">
                    <strong>Support:</strong>
                    <div>24 Hours / 7 Day Whatsapp Any time</div>

                    <strong>Mobile:</strong>
                    <div><a href="tel:+971502828485">+971 50 2828 485</a></div>

                    <strong>Whatsapp:</strong>
                    <div><a href="https://wa.me/971502828485">+971 50 2828 485</a></div>

                    <strong>Email:</strong>
                    <div>
                        <a href="mailto:info@dubaiballooning.com">info@dubaiballooning.com</a><br>
                        <a href="mailto:Urgent.dubaiballooning@gmail.com">Urgent.dubaiballooning@gmail.com</a>
                    </div>

                    <strong>Address:</strong>
                    <div>
                        Dubai Ballooning<br>
                        Registered & Licensed Tour Operator<br>
                        Dubai - United Arab Emirates
                    </div>
                </div>
            </div>

            <!-- Right Column: Image -->
            <div class="col-lg-5 mt-4 mt-lg-0">
                <!-- ADDED a wrapper to control image height -->
                <div class="contact-image-wrapper">
                    <img src="{{ asset('img/experience/5.jpg') }}" alt="Hot air balloon glowing at dusk" class="img-fluid">
                </div>
            </div>
        </div>

        <!-- Bottom Section: Map -->
        <div class="row">
            <div class="col-12">
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230896.46362271218!2d55.026084994531224!3d25.278750399999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5d0438a30fcb%3A0xd2ddc58d4b60c7cb!2sBalloon%20Ride%20Dubai!5e0!3m2!1sen!2s!4v1756520167863!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

    </div>
</section>

<style>
/* 
  Assumes you have Montserrat font loaded globally in app.blade.php
*/
.contact-details-section {
    font-family: 'Montserrat', sans-serif;
}

/* --- Main Title Styling --- */
.contact-title {
    font-weight: 900;
    /* CHANGED: Reduced font size */
    font-size: 48px; 
    line-height: 1.1;
    text-transform: uppercase;
    color: #000;
    margin-bottom: 2.5rem;
}

/* --- Contact Info Grid --- */
.contact-info-grid {
    display: grid;
    grid-template-columns: auto 1fr; 
    gap: 1.25rem 2rem; 
}

/* Styling for the labels (Support, Mobile, etc.) */
.contact-info-grid strong {
    font-weight: 700;
    /* CHANGED: Reduced font size */
    font-size: 22px; 
    line-height: 1.5;
    color: #000;
}

/* Styling for the values (the contact details) */
.contact-info-grid div {
    /* CHANGED: Reduced font size */
    font-size: 1rem; 
    line-height: 1.7;
    padding-top: 2px; /* Fine-tune vertical alignment */
}

.contact-info-grid a {
    color: #212529; text-decoration: none; font-weight: 500;
}
.contact-info-grid a:hover { text-decoration: underline; }


/* --- Image Height Control --- */
.contact-image-wrapper {
    width: 100%;
    /* 
     * You can control the image height here.
     * 4 / 3 is a classic photo ratio. 
     * Use 16 / 9 for a wider, shorter image.
    */
    aspect-ratio: 4 / 3;
    border-radius: 0.375rem; /* Matches Bootstrap's .rounded-3 */
    overflow: hidden;
}
.contact-image-wrapper .img-fluid {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Prevents the image from being distorted */
}


/* --- Responsive Map Container --- */
.map-container {
    position: relative; overflow: hidden; width: 100%;
    padding-top: 56.25%; /* 16:9 Aspect Ratio */
    border-radius: 0.375rem;
}
.map-container iframe {
    position: absolute; top: 0; left: 0; bottom: 0; right: 0;
    width: 100%; height: 100%; border: 0;
}

/* --- Responsive Font and Layout Adjustments --- */
@media (max-width: 992px) {
    .contact-title { font-size: 40px; }
    .contact-info-grid strong { font-size: 18px; }
    .contact-info-grid div { font-size: 0.95rem; }
}

@media (max-width: 768px) {
    .contact-title { font-size: 32px; text-align: center; }
    .contact-info-grid {
        text-align: center;
        grid-template-columns: 1fr; /* Single column */
        gap: 0.5rem;
    }
    .contact-info-grid div {
        margin-bottom: 1rem;
        padding-top: 0;
    }
}
</style>
@endsection
