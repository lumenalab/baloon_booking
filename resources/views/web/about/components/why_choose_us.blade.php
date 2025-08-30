<!-- ======================= Why Choose Us Section ======================= -->
<section class="why-choose-us-section">
    <div class="container">
        <!-- Section Title -->
        <h2 class="section-title">WHY CHOOSE US</h2>

        <div class="row text-center">
            
            <!-- Feature 1: Ultimate Flexibility -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="feature-item">
                    <img src="{{ asset('img/about/why/ticket.png') }}" alt="Ticket Icon" class="feature-icon">
                    <h4 class="feature-title">Ultimate Flexibility</h4>
                    <p class="feature-description">
                        You're in control, with free cancellation and payment options to satisfy any plan or budget.
                    </p>
                </div>
            </div>

            <!-- Feature 2: Memorable Experiences -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="feature-item">
                    <img src="{{ asset('img/about/why/hot-air-balloon.png') }}" alt="Hot Air Balloon Icon" class="feature-icon">
                    <h4 class="feature-title">Memorable Experiences</h4>
                    <p class="feature-description">
                        Browse and book tours and activities so incredible, you'll want to tell your friends.
                    </p>
                </div>
            </div>

            <!-- Feature 3: Quality at our Core -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="feature-item">
                    <img src="{{ asset('img/about/why/diamond.png') }}" alt="Diamond Icon" class="feature-icon">
                    <h4 class="feature-title">Quality at our Core</h4>
                    <p class="feature-description">
                        High-quality standards. Millions of reviews.
                    </p>
                </div>
            </div>

            <!-- Feature 4: Award-Winning Support -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="feature-item">
                    <img src="{{ asset('img/about/why/medal.png') }}" alt="Medal Icon" class="feature-icon">
                    <h4 class="feature-title">Award-Winning Support</h4>
                    <p class="feature-description">
                        New price? New plan? No problem. We're here to help, 24/7.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
/* 
===============================================
UNIQUE STYLES FOR THE "WHY CHOOSE US" SECTION
===============================================
These styles are now scoped and will not conflict with other sections.
*/

.why-choose-us-section {
    font-family: 'Montserrat', sans-serif;
    padding: 80px 0;
    background-color: #fff;
}

/* Scoped Section Title */
.why-choose-us-section .section-title {
    text-align: center;
    font-weight: 700;
    font-size: 1.75rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #222;
    margin-bottom: 4rem;
}

/* Scoped Feature Item */
.why-choose-us-section .feature-item {
    /* No specific styles needed here as content is centered by parent */
}

/* Scoped Feature Icon */
.why-choose-us-section .feature-icon {
    height: 60px;
    width: auto;
    margin-bottom: 1.5rem;
}

/* Scoped Feature Title */
.why-choose-us-section .feature-title {
    font-weight: 700;
    font-size: 1.1rem; /* Slightly smaller for balance */
    text-transform: uppercase;
    letter-spacing: 0.5px;
    color: #222;
    margin-bottom: 0.75rem;
}

/* Scoped Feature Description */
.why-choose-us-section .feature-description {
    font-size: 0.95rem;
    line-height: 1.7;
    color: #555;
    max-width: 250px; 
    margin-left: auto;
    margin-right: auto;
}
</style>