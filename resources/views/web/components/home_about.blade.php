<!-- About Us Section -->
<section class="about-dubai-section py-5">
    <div class="container">
        <div class="row align-items-center" style="background-color:#F6F6F6;">
            <!-- Left Column: Text Content -->
            <div class="col-lg-7" >
                <div class="about-content">
                    <!-- Main Title -->
                    <h2 class="about-title">
                        ABOUT <span class="title-regular">DUBAI BALLOONING'S</span>
                    </h2>

                    <!-- Description Paragraph -->
                    <p class="about-description">
                        so & with that in mind, Our experienced team have tailored our Hot Air Balloon flight packages to be a fresh, more interactive and adventurous filled with all amenities that will create golden memories to last a lifetime. We are not only offering you a hot air balloon tour, Dubai Ballooning offer you a complete thrilling hot air ballooning experience. Our professional Pilots have over 45 years of combined piloting experience of hot air balloons in all types of weather. We have flown in 25 countries and are considered Dubai’s Premier Hot Air Balloon tour company. Dubai Ballooning have a passion for ballooning! For us everyone’s first hot air balloon tour is a magical moment in their lives and our team never lose sight of that fact. Dubai Ballooning and it’s team love what we do and thoroughly enjoy providing our respected guests with the opportunity to experience the joy & thrill of hot air ballooning.
                    </p>
                    <!-- Signature Text -->
                    <p class="signature-text">
                        Come Fly with us
                    </p>
                    <!-- Features Grid -->
                    <div class="features-grid">
                        <div class="feature-item">
                            <img src="{{ asset('img/home_about/1.png') }}" alt="Best Service" class="feature-icon">
                            <p class="feature-text">Top Rated Company<br>Best Service Guaranteed</p>
                        </div>
                        <div class="feature-item">
                            <img src="{{ asset('img/home_about/2.png') }}" alt="Easy Booking" class="feature-icon">
                            <p class="feature-text">Simple & Easy Book<br>Direct booking service</p>
                        </div>
                        <div class="feature-item">
                            <img src="{{ asset('img/home_about/3.png') }}" alt="Pick on Time" class="feature-icon">
                            <p class="feature-text">99% Pick on Time<br>4x4 Land Cruiser</p>
                        </div>
                        <div class="feature-item">
                            <img src="{{ asset('img/home_about/4.png') }}" alt="Secure Payment" class="feature-icon">
                            <p class="feature-text">Safe & Secure Payment<br>Card / Cash in AED - USD</p>
                        </div>
                        <div class="feature-item">
                            <img src="{{ asset('img/home_about/5.png') }}" alt="24/7 Support" class="feature-icon">
                            <p class="feature-text">24/7 Customer Support<br>Phone, Email, Whatsapp</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Image -->
            <div class="col-lg-5">
                <div class="about-image-wrapper">
                    <img src="{{ asset('img/home_about/baloon.png') }}" alt="Hot Air Balloon" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* =======================================================
   FONTS
   ======================================================= */
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800&family=Ms+Madi&display=swap');

/* =======================================================
   STYLING FOR THE "ABOUT US" SECTION - REVISED & RESPONSIVE
   ======================================================= */
.about-dubai-section {
    background-color: #ffffff;
    overflow: hidden;
}

.about-content {
    padding: 1rem;
}
@media (min-width: 992px) {
    .about-content {
        padding-right: 2rem;
    }
}

/* --- Typography --- */
.about-title {
    font-family: 'Montserrat', sans-serif;
    font-weight: 800; font-size: 40px;
    line-height: 1.2; text-transform: uppercase;
    color: #333333; margin-bottom: 2rem;
}
.about-title .title-regular {
    font-weight: 400;
}
.about-description {
    font-family: 'Montserrat', sans-serif;
    font-weight: 400; font-size: 1rem;
    line-height: 1.7; color: #555555;
    margin-bottom: 2rem;
    text-align: justify; /* Justified text on desktop looks cleaner */
}
.signature-text {
    font-family: 'Ms Madi', cursive;
    font-weight: 400; font-size: 72px;
    line-height: 1; color: #f79321;
    text-align: right; margin-top: 1rem; margin-bottom: 2rem;
}

/* --- REVISED Features Grid --- */
.features-grid {
    display: flex;
    flex-wrap: wrap; /* CRITICAL: Allows items to wrap on smaller screens */
    gap: 1.5rem 1rem; /* Consistent spacing for rows and columns */
    justify-content: space-between;
}
.feature-item {
    display: flex;
    align-items: center;
    gap: 12px;
    /* Flex-grow allows items to expand and fill space */
    flex: 1 1 180px; /* Grow, shrink, with a base width of 180px */
}
.feature-icon {
    width: 40px; height: 40px;
    object-fit: contain; flex-shrink: 0;
}
.feature-text {
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
    font-size: 12px; /* CHANGED: Increased from 8px for readability */
    line-height: 1.4; color: #333333; margin: 0;
}

/* --- Imagery --- */
.about-image-wrapper {
    display: flex; justify-content: center; align-items: center;
}

/* --- RESPONSIVENESS --- */
@media (max-width: 991.98px) {
    .about-content {
        text-align: center;
    }
    .about-description {
        text-align: center; /* Center description on tablets/mobile */
    }
    .signature-text {
        text-align: center; /* Center signature text */
    }
    .features-grid {
        justify-content: center; /* Center the feature items */
    }
    .about-image-wrapper {
        margin-top: 3rem;
    }
}

@media (max-width: 767.98px) {
    .about-title { font-size: 32px; }
    .about-description { font-size: 0.9rem; }
    .signature-text { font-size: 60px; }
    
    .feature-item {
        /* On small screens, make items take up more space for a 2-column layout */
        flex-basis: 45%;
    }
}

@media (max-width: 480px) {
    .feature-item {
        /* On very small screens, stack to a single column */
        flex-basis: 100%;
        justify-content: center;
    }
}
</style>