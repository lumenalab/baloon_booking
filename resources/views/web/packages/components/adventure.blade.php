<!-- Adventure Section -->
<section class="adventure-section">
    <div class="container">
        <div class="row align-items-center">
            
            <!-- Left Column: Image Collage -->
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="adventure-image-collage">
                    <img src="{{ asset('img/packages/adventure/adventure_1.jpg') }}" alt="Hot air balloons over clouds" class="collage-img collage-img-1">
                    <img src="{{ asset('img/packages/adventure/adventure_2.png') }}" alt="Couple camping at dusk" class="collage-img collage-img-2">
                    <img src="{{ asset('img/packages/adventure/adventure_baloon.png') }}" alt="Floating hot air balloon" class="collage-img collage-img-floating">
                </div>
            </div>

            <!-- Right Column: Text Content -->
            <div class="col-lg-6">
                <div class="adventure-content">
                    <p class="cursive-subtitle">Let's Go Together</p>
                    <h2 class="main-title">
                        Great opportunity for
                        <span class="highlight">ADVENTURE</span>
                    </h2>

                    <div class="features-list">
                        <!-- Feature 1 -->
                        <div class="feature-item">
                            <div class="feature-circle"></div>
                            <div class="feature-text-content">
                                <h4>SAFETY FIRST ALWAYS</h4>
                                <p>Prioritizing your safety with expert pilots and regular inspections.</p>
                            </div>
                        </div>
                        <!-- Feature 2 -->
                        <div class="feature-item">
                            <div class="feature-circle"></div>
                            <div class="feature-text-content">
                                <h4>PROFESSIONAL GUIDE</h4>
                                <p>Experienced guides offering insightful commentary throughout your journey.</p>
                            </div>
                        </div>
                        <!-- Feature 3 -->
                        <div class="feature-item">
                            <div class="feature-circle"></div>
                            <div class="feature-text-content">
                                <h4>UNMATCHED VIEWS</h4>
                                <p>Breathtaking views of Dubai's desert and iconic skyline.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
/* Google Font imports remain the same */
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&family=Ms+Madi&display=swap');

.adventure-section {
    font-family: 'Montserrat', sans-serif;
    background-color: #fff;
    padding: 80px 0;
    overflow: hidden;
}

/* --- Image Collage (Left Column) --- */
.adventure-image-collage {
    position: relative;
    aspect-ratio: 4 / 3; 
}
.collage-img {
    position: absolute; border-radius: 12px;
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1); object-fit: cover;
}
.collage-img-1 { top: 0; left: 0; width: 65%; z-index: 1; }
.collage-img-2 { bottom: 0; right: 0; width: 70%; z-index: 2; }
.collage-img-floating {
    bottom: -50px; left: 5%; width: 28%; z-index: 3; box-shadow: none;
}

/* --- Text Content (Right Column) --- */
.adventure-content {
    padding-left: 3rem;
}

/* UPDATED: "Let's Go Together" styling (Smaller) */
.cursive-subtitle {
    font-family: 'Ms Madi', cursive;
    font-weight: 400;
    font-size: 36px; /* Was 64px */
    line-height: 1;
    color: #d9534f;
    margin-bottom: 0.5rem;
}

/* UPDATED: "Great opportunity for" styling (Smaller) */
.main-title {
    font-family: 'Montserrat', sans-serif;
    font-weight: 400;
    font-size: 48px; /* Was 64px */
    line-height: 1.1;
    color: #2c3e50;
    margin-bottom: 2.5rem; /* Adjusted margin */
}

/* UPDATED: "ADVENTURE" styling (Smaller) */
.main-title .highlight {
    display: block;
    font-weight: 900;
    font-size: 48px; /* Was 64px */
    text-transform: uppercase;
    color: #f0ad4e;
}

.feature-item {
    display: flex; align-items: flex-start;
    gap: 20px; margin-bottom: 2rem;
}
.feature-circle {
    width: 40px; /* Made circle slightly smaller */
    height: 40px;
    border-radius: 50%;
    background-color: #f0ad4e;
    flex-shrink: 0;
}

/* UPDATED: Feature heading styling (Smaller) */
.feature-text-content h4 {
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
    font-size: 20px; /* Was 32px */
    line-height: 1.2;
    text-transform: uppercase;
    color: #2c3e50;
    margin: 0 0 0.25rem 0;
}

/* UPDATED: Feature paragraph styling (Smaller) */
.feature-text-content p {
    font-family: 'Montserrat', sans-serif;
    font-weight: 400;
    font-size: 16px; /* Was 24px */
    line-height: 1.6;
    color: #555;
    margin: 0;
}

/* --- Responsive Adjustments --- */
@media (max-width: 1200px) {
    /* Adjusted responsive sizes */
    .main-title, .main-title .highlight { font-size: 40px; }
    .cursive-subtitle { font-size: 32px; }
    .feature-text-content h4 { font-size: 18px; }
    .feature-text-content p { font-size: 15px; }
}

@media (max-width: 991.98px) {
    .adventure-content {
        padding-left: 0; text-align: center;
    }
    .adventure-image-collage {
        position: static; aspect-ratio: auto; display: flex;
        flex-direction: column; align-items: center; gap: 1rem;
    }
    .collage-img {
        position: static; width: 90%;
    }
    .collage-img-floating {
        display: none;
    }
    .feature-item {
        justify-content: center;
    }
}

@media (max-width: 576px) {
    /* Adjusted responsive sizes */
    .main-title, .main-title .highlight { font-size: 32px; }
    .cursive-subtitle { font-size: 28px; }
    .feature-text-content h4 { font-size: 16px; }
    .feature-text-content p { font-size: 14px; }
}
</style>