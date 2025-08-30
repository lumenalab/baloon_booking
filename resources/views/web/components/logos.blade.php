<!-- Awards & Certifications Section -->
<section class="awards-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <!-- 
                    The wrapper now has padding to create a "safe zone" for hover effects,
                    and a negative margin to keep it visually edge-to-edge.
                -->
                <div class="awards-wrapper">
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
    /* background-color: #f8f9fa;  */
    padding: 3rem 0;
}

/* --- Wrapper & Track --- */
.awards-wrapper {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;

    /* 
     * THIS IS THE FIX:
     * 1. Padding creates a "safe zone" inside the scrollable area. The hover
     *    effects (shadow, transform) will now happen safely within this padding.
     * 2. Negative margin is used to counteract the padding, so the scrollable
     *    area still appears to be edge-to-edge within its parent column.
    */
    padding: 20px;
    margin: -20px;
}

.awards-wrapper::-webkit-scrollbar {
    display: none;
}

.awards-track {
    display: flex;
    flex-wrap: nowrap;
    justify-content: center;
    align-items: center;
    gap: 30px;
}

/* ===================================
   COMPONENT: AWARD ITEM
   =================================== */
.award-item {
    width: 160px;
    height: 100px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 15px;
    /* Margin is no longer needed here */
    background: white;
    border: 1px solid #e0e0e0;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
}

.award-item:hover {
    transform: translateY(-5px);
    border-color: #f79321;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
}

.award-logo {
    max-width: 100%;
    max-height: 100%;
    width: auto;
    object-fit: contain;
}

/* ===================================
   RESPONSIVE ADJUSTMENTS
   =================================== */
@media (max-width: 767.98px) {
    .awards-track {
        justify-content: flex-start; 
        gap: 20px;
    }
    .award-item {
        width: 140px;
        height: 90px;
    }
}
</style>