<!-- Signature Experiences Section -->
<section class="signature-experiences-section py-5">
    <div class="container">
        <!-- Section Header -->
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-8">
                <h2 class="section-title">
                    SIGNATURE <span class="title-regular">EXPERIENCES</span>
                </h2>
                <p class="section-subtitle">
                    simply dummy text of the printing and typesetting industry. lorem ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
            </div>
        </div>

        <!-- Experiences Grid -->
        <div class="row">
            <!-- Experience Card 1: Couple Tour -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="experience-card">
                    <img src="{{ asset('img/exp/exp_1.jpg') }}" alt="Couple Tour" class="experience-bg-image">
                    <div class="experience-overlay">
                        <h3 class="experience-title">COUPLE TOUR</h3>
                        <div class="experience-footer">
                            <p class="experience-description">Private Couple Hot Air Balloon Flight with Vitage land Rover wild Life conservation</p>
                            <a href="#" class="experience-link">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Experience Card 2: Group Tour -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="experience-card">
                    <img src="{{ asset('img/exp/exp_2.jpg') }}" alt="Group Tour" class="experience-bg-image">
                    <div class="experience-overlay">
                        <h3 class="experience-title">GROUP TOUR</h3>
                        <div class="experience-footer">
                            <p class="experience-description">Collage, University, Office, and Family Groups</p>
                            <a href="#" class="experience-link">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Experience Card 3: Luxury Tour -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="experience-card">
                    <img src="{{ asset('img/exp/exp_3.jpg') }}" alt="Luxury Tour" class="experience-bg-image">
                     <div class="experience-overlay">
                        <h3 class="experience-title">LUXURY TOUR</h3>
                        <div class="experience-footer">
                            <p class="experience-description">Royal Luxury Private Hot Air Balloon Ride with Al Forsan Breakfast in Luxury Mercedes AMG&S</p>
                            <a href="#" class="experience-link">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Import Montserrat font from Google Fonts (includes all needed weights) */
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800;900&display=swap');

/* ===================================
   SECTION: SIGNATURE EXPERIENCES
   =================================== */
.signature-experiences-section {
    background-color: #ffffff;
}

/* --- Section Header --- */
.signature-experiences-section .section-title {
    font-family: 'Montserrat', sans-serif;
    font-weight: 800;
    font-size: 48px;
    line-height: 1;
    letter-spacing: 0;
    text-transform: uppercase;
    text-align: center;
    margin-bottom: 1rem;
    color: #333;
}

.section-title .title-regular {
    font-weight: 400;
}

.section-subtitle {
    text-align: center;
    font-size: 1rem;
    color: #6c757d;
    line-height: 1.6;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
}

/* --- Spacing Adjustment --- */
/* NEW: Reduces the space between cards by overriding Bootstrap's gutter */
.signature-experiences-section .row {
    --bs-gutter-x: 1.25rem; /* Default is 1.5rem */
}

/* ===================================
   COMPONENT: EXPERIENCE CARD
   =================================== */
.experience-card {
    position: relative;
    max-width: 340px; /* UPDATED: Reduced from 359px */
    height: 430px;    /* UPDATED: Reduced from 456px */
    border-radius: 31px;
    overflow: hidden;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    transition: all 0.3s ease-in-out;
    margin: 0 auto;
}

.experience-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
}

.experience-bg-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 1;
}

/* --- Card Content Overlay --- */
.experience-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 2;
    background: #f79321;
    padding: 20px;
    border-radius: 0 0 31px 31px;
}

.experience-title {
    font-family: 'Montserrat', sans-serif;
    font-weight: 900;
    font-size: 24px;
    line-height: 1;
    letter-spacing: 0;
    text-transform: uppercase;
    color: #000;
    margin: 0 0 10px 0;
}

.experience-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 15px;
}

.experience-description {
    font-family: 'Montserrat', sans-serif;
    font-weight: 500;
    font-size: 11px;
    line-height: 1.3;
    letter-spacing: 0;
    color: #000;
    margin: 0;
}

.experience-link {
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
    font-size: 16px;
    line-height: 1;
    letter-spacing: 0;
    text-decoration: none;
    white-space: nowrap;
    color: #000;
    transition: color 0.3s ease;
}

.experience-link:hover {
    text-decoration: underline;
}

/* ===================================
   NEW: RESPONSIVE ADJUSTMENTS
   =================================== */
@media (max-width: 991.98px) {
    /* For Tablets - 2 column layout */
    .experience-card {
        max-width: 330px;
        height: 420px;
    }
}

@media (max-width: 767.98px) {
    /* For Mobile - 1 column layout */
    .experience-card {
        height: 410px;
    }
    .experience-title {
        font-size: 22px; /* Slightly smaller title */
    }
    .experience-description {
        font-size: 10.5px; /* Slightly smaller description */
    }
    .experience-link {
        font-size: 15px; /* Slightly smaller link */
    }
}

</style>