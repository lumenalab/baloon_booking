<!-- Top Selling Tours Section -->
<section class="top-tours-section py-5">
    <div class="container-fluid px-4">
        <!-- Section Header -->
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="section-title">TOP SELLING <span class="text-primary-custom">TOURS</span></h2>
            </div>
        </div>

        <!-- Tours Grid with extra padding for star overflow -->
        <div class="row g-4" style="padding: 25px 15px; margin: 0; overflow: visible;">
            <!-- Tour 1 - Standard Hot Air Balloon -->
            <div class="col-lg-3 col-md-6 col-sm-6" style="padding: 20px; overflow: visible; position: relative;">
                <div class="tour-card">
                    <div class="tour-image-container">
                        <img src="{{ asset('img/home-1.jpg') }}" alt="Standard Hot Air Balloon" class="tour-image">
                        <!-- Star Price Badge - MUST extend outside card -->
                        <div class="star-price-badge">
                            <span class="price-label">Just</span>
                            <span class="price-amount">999</span>
                            <span class="price-currency">AED</span>
                        </div>
                        <!-- Tour Title Overlay on Image -->
                        <div class="tour-overlay">
                            <h4 class="tour-title-overlay">STANDARD HOT<br>AIR BALLOON</h4>
                        </div>
                    </div>
                    <!-- Orange Bottom Section -->
                    <div class="tour-bottom">
                         <h4>BOOK NOW</h4>
                    </div>
                </div>
            </div>

            <!-- Tour 2 - Deluxe Hot Air Balloon -->
            <div class="col-lg-3 col-md-6 col-sm-6" style="padding: 20px; overflow: visible; position: relative;">
                <div class="tour-card">
                    <div class="tour-image-container">
                        <img src="{{ asset('img/home-2.jpg') }}" alt="Deluxe Hot Air Balloon" class="tour-image">
                        <!-- Star Price Badge - MUST extend outside card -->
                        <div class="star-price-badge">
                            <span class="price-label">Just</span>
                            <span class="price-amount">1250</span>
                            <span class="price-currency">AED</span>
                        </div>
                        <!-- Tour Title Overlay on Image -->
                        <div class="tour-overlay">
                            <h4 class="tour-title-overlay">DELUXE HOT<br>AIR BALLOON</h4>
                        </div>
                    </div>
                    <!-- Orange Bottom Section -->
                    <div class="tour-bottom">
                         <h4>BOOK NOW</h4>
                    </div>
                </div>
            </div>

            <!-- Tour 3 - Desert Safari Hot Air Balloon -->
            <div class="col-lg-3 col-md-6 col-sm-6" style="padding: 20px; overflow: visible; position: relative;">
                <div class="tour-card">
                    <div class="tour-image-container">
                        <img src="{{ asset('img/home-3.jpg') }}" alt="Desert Safari Hot Air Balloon" class="tour-image">
                        <!-- Star Price Badge - MUST extend outside card -->
                        <div class="star-price-badge">
                            <span class="price-label">Just</span>
                            <span class="price-amount">2100</span>
                            <span class="price-currency">AED</span>
                        </div>
                        <!-- Tour Title Overlay on Image -->
                        <div class="tour-overlay">
                            <h4 class="tour-title-overlay">DESERT SAFARI<br>HOT AIR BALLOON<br>FLIGHT</h4>
                        </div>
                    </div>
                    <!-- Orange Bottom Section -->
                    <div class="tour-bottom">
                        <h4>BOOK NOW</h4>
                    </div>
                </div>
            </div>

            <!-- Tour 4 - Premium Desert Safari -->
            <div class="col-lg-3 col-md-6 col-sm-6" style="padding: 20px; overflow: visible; position: relative;">
                <div class="tour-card">
                    <div class="tour-image-container">
                        <img src="{{ asset('img/home-4.jpg') }}" alt="Premium Desert Safari Hot Air Balloon" class="tour-image">
                        <!-- Star Price Badge - MUST extend outside card -->
                        <div class="star-price-badge">
                            <span class="price-label">Just</span>
                            <span class="price-amount">2400</span>
                            <span class="price-currency">AED</span>
                        </div>
                        <!-- Tour Title Overlay on Image -->
                        <div class="tour-overlay">
                            <h4 class="tour-title-overlay">DESERT SAFARI<br>HOT AIR BALLOON<br>FLIGHT</h4>
                        </div>
                    </div>
                    <!-- Orange Bottom Section -->
                    <div class="tour-bottom">
                        <h4>BOOK NOW</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* ===================================
   CRITICAL: CONTAINER OVERFLOW FIXES
   =================================== */
.top-tours-section {
    background: #f8f9fa;
    padding: 4rem 0;
    overflow: visible !important;
}

.container-fluid {
    overflow: visible !important;
}

/* ===================================
   SECTION TITLE - LEFT ALIGNED
   =================================== */
.section-title {
    font-size: 2.8rem;
    font-weight: 800;
    color: #333;
    margin-bottom: 0;
    letter-spacing: 2px;
    text-align: left;
    line-height: 1.2;
}

.text-primary-custom {
    color: #f79321 !important;
}

/* ===================================
   TOUR CARD - UPDATED
   =================================== */
.tour-card {
    position: relative;
    width: 100%;
    max-width: 359px; /* UPDATED - To match Canva spec */
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    overflow: visible !important;
    background: transparent;
    border-radius: 31px;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.25);
    transition: all 0.3s ease;
}

.tour-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 25px 50px rgba(0,0,0,0.35);
}

/* ===================================
   IMAGE CONTAINER
   =================================== */
.tour-image-container {
    position: relative;
    width: 100%;
    height: 340px;
    overflow: visible;
}

.tour-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
    border-radius: 31px 31px 0 0;
}

/* ===================================
   STAR PRICE BADGE
   =================================== */
.star-price-badge {
    position: absolute;
    top: -15px;
    right: -15px;
    width: 100px;
    height: 100px;
    background-image: url('{{ asset("shapes/Star.png") }}');
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: bold;
    z-index: 100;
    filter: drop-shadow(0 6px 20px rgba(247, 147, 33, 0.5));
}

.star-price-badge .price-label,
.star-price-badge .price-amount,
.star-price-badge .price-currency {
    color: black;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
}

.star-price-badge .price-label {
    font-size: 0.75rem;
    line-height: 1;
    margin-bottom: 2px;
    text-transform: uppercase;
    font-weight: 20;
}

.star-price-badge .price-amount {
    font-size: 1.6rem;
    font-weight: 900;
    line-height: 0.9;
    margin-bottom: 0px;
}

.star-price-badge .price-currency {
    font-size: 0.8rem;
    font-weight: 20;
    line-height: 1;
    margin-top: -2px;
    
}

/* ===================================
   TOUR TITLE OVERLAY ON IMAGE
   =================================== */
.tour-overlay {
    position: absolute;
    bottom: 25px;
    left: 25px;
    right: 25px;
    z-index: 10;
}

.tour-title-overlay {
    font-size: 20px;
    font-weight: 800;
    color: white;
    text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.8);
    line-height: 1.3;
    margin: 0;
    text-align: left;
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* ===================================
   ORANGE BOTTOM SECTION - UPDATED
   =================================== */
.tour-bottom {
    height: 82px; /* UPDATED - To match Canva spec */
    background: #f79321;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    flex-shrink: 0;
    border-radius: 0 0 31px 31px; /* Correctly rounds only the bottom corners */
}

/* ===================================
   "BOOK NOW" TEXT STYLE - NEW
   =================================== */
.tour-bottom h4 {
    /* Styles from your Canva specification */
    font-family: 'Montserrat', sans-serif; /* Added sans-serif as a fallback */
    font-weight: 900;
    font-size: 26px;
    line-height: 1; /* Equivalent to 100% */
    letter-spacing: 0; /* Equivalent to 0% */
    text-transform: uppercase;
    color: #000;
    margin: 0; /* Removes default heading margin */
}

/* ===================================
   RESPONSIVE DESIGN - CLEANED UP
   =================================== */
@media (max-width: 1199.98px) {
    /* REMOVED fixed height from .tour-card */
    .tour-image-container { height: 350px; }
    .star-price-badge { width: 85px; height: 85px; top: -12px; right: -12px; }
}
@media (max-width: 991.98px) {
    .section-title { font-size: 2.4rem; }
    /* REMOVED fixed height from .tour-card */
    .tour-image-container { height: 300px; }
    .star-price-badge { width: 75px; height: 75px; top: -10px; right: -10px; }
    .star-price-badge .price-amount { font-size: 1.3rem; }
    .tour-title-overlay { font-size: 16px; }
    .tour-bottom h3 { font-size: 28px; } /* Adjusted font for smaller screens */
}
@media (max-width: 767.98px) {
    .section-title { font-size: 2rem; text-align: center; }
    /* REMOVED fixed height from .tour-card */
    .tour-image-container { height: 260px; }
    .star-price-badge { width: 70px; height: 70px; top: -8px; right: -8px; }
    .star-price-badge .price-amount { font-size: 1.1rem; }
    .tour-title-overlay { font-size: 14px; bottom: 20px; left: 20px; }
    .tour-bottom h3 { font-size: 24px; } /* Adjusted font for smaller screens */
}
@media (max-width: 575.98px) {
    .section-title { font-size: 1.8rem; }
    /* REMOVED fixed height from .tour-card */
    .tour-image-container { height: 230px; }
    .star-price-badge { width: 65px; height: 65px; top: -6px; right: -6px; }
    .star-price-badge .price-amount { font-size: 1rem; }
}

/* ===================================
   CRITICAL: ENSURE NO CLIPPING
   =================================== */
* { box-sizing: border-box; }
body { overflow-x: auto !important; }
.container-fluid { overflow: visible !important; position: relative; }
.row { overflow: visible !important; }
[class*="col-"] { overflow: visible !important; position: relative !important; }
</style>