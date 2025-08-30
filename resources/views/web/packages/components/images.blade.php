<!-- Standard Package Section -->
<section class="package-section">
    <div class="container">
        <div class="package-card">
            <!-- Top Row: Details and Booking Button -->
            <div class="package-header">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-7">
                        <h2 class="package-title">
                            <span class="light">STANDARD</span> <span class="bold">HOT AIR BALLOON</span>
                        </h2>
                        <div class="package-meta">
                            <!-- SVG Stars for precise size control -->
                            <div class="package-stars">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279L12 19.449l-7.416 4.01L6.064 15.134 0 9.306l8.332-1.151L12 .587z"/></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279L12 19.449l-7.416 4.01L6.064 15.134 0 9.306l8.332-1.151L12 .587z"/></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279L12 19.449l-7.416 4.01L6.064 15.134 0 9.306l8.332-1.151L12 .587z"/></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279L12 19.449l-7.416 4.01L6.064 15.134 0 9.306l8.332-1.151L12 .587z"/></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279L12 19.449l-7.416 4.01L6.064 15.134 0 9.306l8.332-1.151L12 .587z"/></svg>
                            </div>
                            <div class="package-reviews">455 Reviews | UAE, Dubai</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 text-md-end mt-3 mt-md-0">
                        <a href="#" class="btn btn-book-now">Book Now</a>
                    </div>
                </div>
            </div>

            <!-- Bottom Row: Asymmetrical Image Gallery -->
            <div class="package-gallery-grid">
                <!-- All image tags remain the same -->
                <div class="gallery-item" id="gallery-item-1"><img src="{{ asset('img/packages/top/packages1.jpg') }}" alt="Balloon in clouds"></div>
                <div class="gallery-item" id="gallery-item-2"><img src="{{ asset('img/packages/top/packages2.png') }}" alt="Balloon inflating at dawn"></div>
                <div class="gallery-item" id="gallery-item-3"><img src="{{ asset('img/packages/top/packages3.png') }}" alt="Woman enjoying the view"></div>
                <div class="gallery-item" id="gallery-item-4"><img src="{{ asset('img/packages/top/packages4.jpg') }}" alt="Couple celebrating with balloons"></div>
                <div class="gallery-item" id="gallery-item-5"><img src="{{ asset('img/packages/top/packages5.jpg') }}" alt="Couple in balloon basket"></div>
                <div class="gallery-item" id="gallery-item-6"><img src="{{ asset('img/packages/top/packages6.png') }}" alt="Balloon close-up"></div>
            </div>
        </div>
    </div>
</section>

<style>
/* You may need to import a font like Montserrat if you don't have it globally */
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap');

.package-section {
    font-family: 'Montserrat', sans-serif;
    /* ADJUST THIS VALUE for more or less space above the section */
    margin-top: 8rem; 
    margin-bottom: 4rem;
}

.package-card {
    /* REMOVED background and shadow to make it flat */
    padding: 0; /* Padding is no longer needed on the main container */
}

.package-header {
    margin-bottom: 25px;
}

.package-title {
    /* UPDATED font properties */
    font-size: 48px;
    font-weight: 900; /* Base weight set to Black */
    line-height: 1; /* Equivalent to 100% */
    letter-spacing: 0; /* Equivalent to 0% */
    text-transform: uppercase;
    margin: 0;
}

/* Both parts of the title now share the same weight */
.package-title .light { color: #F39C12; }
.package-title .bold { 
    
    font-weight: 150;
    
    color: #E67E22; }

.package-meta {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-top: 10px;
}

.package-stars { 
    display: flex;
    gap: 4px; /* Space between stars */
}

.package-stars svg {
    /* UPDATED star size */
    width: 40px;
    height: 39px;
    fill: #FFC107;
    color: #FFC107;
}

.package-reviews { font-size: 1rem; color: #555; font-weight: 600; }

.btn-book-now {
    background-color: #F39C12;
    color: #ffffff;
    border: none;
    border-radius: 8px;
    padding: 12px 35px;
    font-weight: 700;
    font-size: 1rem;
    text-transform: uppercase;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.btn-book-now:hover {
    background-color: #E67E22;
    color: #ffffff;
    transform: translateY(-2px);
}

/* --- CSS Grid for the Asymmetrical Gallery --- */
.package-gallery-grid {
    display: grid;
    grid-template-columns: 443fr 253fr 407fr 443fr;
    grid-template-rows: 1fr 1fr;
    gap: 18px; 
}

.gallery-item {
    width: 100%;
    height: 100%;
}

.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 15px;
    display: block;
    /* ADJUST THIS VALUE to make images shorter or taller */
    aspect-ratio: 21 / 9;
}

/* Grid placement remains the same */
#gallery-item-1 { grid-column: 1 / 2; grid-row: 1 / 2; }
#gallery-item-2 { grid-column: 2 / 4; grid-row: 1 / 2; }
#gallery-item-3 { grid-column: 4 / 5; grid-row: 1 / 3; }
#gallery-item-4 { grid-column: 1 / 2; grid-row: 2 / 3; }
#gallery-item-5 { grid-column: 2 / 3; grid-row: 2 / 3; }
#gallery-item-6 { grid-column: 3 / 4; grid-row: 2 / 3; }


/* --- Responsive Adjustments --- */
@media (max-width: 1200px) {
    .package-gallery-grid {
        grid-template-columns: 1fr 1fr 1fr;
        grid-template-rows: auto;
    }
    #gallery-item-1, #gallery-item-2, #gallery-item-3, 
    #gallery-item-4, #gallery-item-5, #gallery-item-6 {
        grid-column: auto;
        grid-row: auto;
    }
    #gallery-item-3 {
        grid-column: span 2;
    }
}

@media (max-width: 767px) {
    .package-title { 
        /* UPDATED: Reduced font-size for mobile */
        font-size: 32px; 
    }
    .package-header .text-md-end { text-align: left !important; }

    .package-gallery-grid {
        grid-template-columns: 1fr;
    }
     #gallery-item-3 {
        grid-column: auto;
    }
}
</style>