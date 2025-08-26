<!-- Awards & Certifications Section -->
<section class="awards-section py-5">
    <div class="container">
        <!-- Optional: Add a title for the section if you like -->
        <!-- 
        <div class="row justify-content-center text-center mb-4">
            <div class="col-lg-8">
                <h2 class="section-title">AWARDS & CERTIFICATIONS</h2>
            </div>
        </div> 
        -->
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <!-- This wrapper enables horizontal scrolling on small screens -->
                <div class="awards-wrapper">
                    <!-- This track holds the logos and scrolls within the wrapper -->
                    <div class="awards-track">
                        <div class="award-item">
                            <img src="{{ asset('img/logos/logo_1.png') }}" alt="Travelers' Choice 2023" class="award-logo">
                        </div>
                        <div class="award-item">
                            <img src="{{ asset('img/logos/logo_2.png') }}" alt="Dubai Quality Award" class="award-logo">
                        </div>
                        <div class="award-item">
                            <img src="{{ asset('img/logos/logo_3.png') }}" alt="Luxury Lifestyle Awards Winner" class="award-logo">
                        </div>
                        <div class="award-item">
                            <img src="{{ asset('img/logos/logo_4.png') }}" alt="The New York Times" class="award-logo">
                        </div>
                        <div class="award-item">
                            <img src="{{ asset('img/logos/logo_5.png') }}" alt="World Travel Awards Winner" class="award-logo">
                        </div>
                        <div class="award-item">
                            <img src="{{ asset('img/logos/logo_6.png') }}" alt="TripAdvisor Certificate of Excellence" class="award-logo">
                        </div>
                        <div class="award-item">
                            <img src="{{ asset('img/logos/logo_7.png') }}" alt="BBC Travel" class="award-logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* ===================================
   SECTION: AWARDS & CERTIFICATIONS
   =================================== */
.awards-section {
    background-color: #f8f9fa; /* A light grey background to separate from white sections */
    padding-top: 3rem;
    padding-bottom: 3rem;
}

/* --- Wrapper & Track --- */
.awards-wrapper {
    overflow-x: auto; /* CRITICAL: Enables horizontal scrolling */
    -webkit-overflow-scrolling: touch; /* Smooth scrolling on iOS */
    padding-bottom: 1rem; /* Adds space for the scrollbar so it doesn't overlap content */
}

/* Hide scrollbar for a cleaner look, but keep it functional */
.awards-wrapper::-webkit-scrollbar {
    display: none;
}

.awards-track {
    display: flex; /* Lays out logos in a row */
    flex-wrap: nowrap; /* Ensures logos stay in a single line */
    justify-content: center; /* Centers the logos on larger screens */
    align-items: center;
    gap: 30px; /* Space between logos */
    padding: 0 10px; /* A little space on the sides */
}

/* ===================================
   COMPONENT: AWARD ITEM
   =================================== */
.award-item {
    /* Sizing & Layout */
    width: 160px;
    height: 100px;
    flex-shrink: 0; /* Prevents logos from shrinking */
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 15px;

    /* Styling */
    background: white;
    border: 1px solid #e0e0e0;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
}

.award-item:hover {
    transform: translateY(-5px);
    border-color: #f79321; /* Use your brand's primary color */
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
}

.award-logo {
    max-width: 100%;
    max-height: 100%;
    width: auto; /* Maintain aspect ratio */
    object-fit: contain; /* Scale without stretching */
}

/* ===================================
   RESPONSIVE ADJUSTMENTS
   =================================== */
@media (max-width: 767.98px) {
    .awards-track {
        /* On mobile, align logos to the start for a natural scrolling experience */
        justify-content: flex-start; 
        gap: 20px; /* Reduce space between logos */
    }

    .award-item {
        /* Make the logo boxes slightly smaller on mobile */
        width: 140px;
        height: 90px;
    }
}
</style>