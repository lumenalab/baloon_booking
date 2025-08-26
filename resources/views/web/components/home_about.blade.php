<!-- About Us Section -->
<section class="about-dubai-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Column: Text Content -->
            <div class="col-lg-7">
                <div class="about-content">
                    <!-- Main Title -->
                    <h2 class="about-title">
                        ABOUT <span class="title-regular">DUBAI BALLOONING'S</span>
                    </h2>

                    <!-- Description Paragraph -->
                    <p class="about-description">
                        so & with that in mind, Our experienced team have tailored our Hot Air Balloon flight packages to be a fresh, more interactive and adventurous filled with all amenities that will create golden memories to last a lifetime. We are not only offering you a hot air balloon tour, Dubai Ballooning offer you a complete thrilling hot air ballooning experience. Our professional Pilots have over 45 years of combined piloting experience of hot air balloons in all types of weather. We have flown in 25 countries and are considered Dubai’s Premier Hot Air Balloon tour company. Dubai Ballooning have a passion for ballooning! For us everyone’s first hot air balloon tour is a magical moment in their lives and our team never lose sight of that fact. Dubai Ballooning and it’s team love what we do and thoroughly enjoy providing our respected guests with the opportunity to experience the joy & thrill of hot air ballooning.
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

                    <!-- Signature Text -->
                    <p class="signature-text">
                        Come Fly with us
                    </p>
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
/* Import Google Fonts: Montserrat (400, 600, 800) and Ms Madi (400) */
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800&family=Ms+Madi&display=swap');

/* =======================================================
   STYLING FOR THE "ABOUT US" SECTION
   ======================================================= */

/* --- 1. Overall Layout & Background --- */
.about-dubai-section {
    background-color: #ffffff; /* Pure white background for max contrast */
    overflow: hidden; /* Prevents large elements from breaking layout */
}

.about-content {
    padding-right: 2rem; /* Whitespace between text and image on large screens */
}

/* --- 2. Typography (as per your analysis) --- */

/* Main Title ("ABOUT DUBAI BALLOONING'S") */
.about-title {
    font-family: 'Montserrat', sans-serif;
    font-weight: 800; /* ExtraBold for "ABOUT" */
    font-size: 40px;
    line-height: 1.2;
    text-transform: uppercase;
    color: #333333; /* Dark gray for softer text */
    margin-bottom: 2rem;
}

.about-title .title-regular {
    font-weight: 400; /* Regular for "DUBAI BALLOONING'S" */
}

/* Description Paragraph */
.about-description {
    font-family: 'Montserrat', sans-serif;
    font-weight: 400;
    font-size: 20px;
    line-height: 1.6; /* Generous line height for readability */
    color: #555555;
    margin-bottom: 3rem;
}

/* Cursive Signature Text */
.signature-text {
    font-family: 'Ms Madi', cursive;
    font-weight: 400;
    font-size: 72px;
    line-height: 1;
    color: #f79321; /* Vibrant orange accent color */
    text-align: center;
    margin-top: 2rem;
}

/* --- 3. Iconography (Features Grid) --- */

.features-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between; /* Spreads items evenly */
    gap: 1.5rem 1rem; /* Row and column gap */
}

.feature-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    flex-basis: 100px; /* Base width for each item */
    flex-grow: 1;
}

.feature-icon {
    width: 61px;
    height: 61px;
    object-fit: contain;
    margin-bottom: 0.75rem;
}

.feature-text {
    font-family: 'Montserrat', sans-serif;
    font-weight: 600; /* SemiBold */
    font-size: 13px;
    line-height: 1.4; /* Adjusted for two lines of text */
    color: #333333;
    margin: 0;
}

/* --- 4. Imagery --- */
.about-image-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
}

/* --- 5. Responsiveness --- */

/* For Tablets (where columns stack) */
@media (max-width: 991.98px) {
    .about-content {
        padding-right: 0; /* Remove padding as there's no adjacent image */
        text-align: center; /* Center all text content */
    }
    .features-grid {
        justify-content: center; /* Center icons when they wrap */
    }
    .about-image-wrapper {
        margin-top: 3rem; /* Add space above the image */
    }
}

/* For Mobile */
@media (max-width: 767.98px) {
    .about-title {
        font-size: 32px; /* Slightly smaller title */
    }
    .about-description {
        font-size: 16px; /* Smaller, more mobile-friendly paragraph text */
    }
    .signature-text {
        font-size: 60px; /* Adjust signature text size */
    }
}
</style>