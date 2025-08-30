<!-- Features Section -->
<section class="features-bar-section">
    <div class="container">
        <div class="features-container">
            <!-- Feature 1 -->
            <div class="feature-item">
                <img src="{{ asset('img/home_about/1.png') }}" alt="Top Rated Company" class="feature-icon">
                <p class="feature-text">Top Rated Company<br>Best Service Guaranteed</p>
            </div>
            <!-- Feature 2 -->
            <div class="feature-item">
                <img src="{{ asset('img/home_about/2.png') }}" alt="Easy Booking" class="feature-icon">
                <p class="feature-text">Simple & Easy Book<br>Direct booking service</p>
            </div>
            <!-- Feature 3 -->
            <div class="feature-item">
                <img src="{{ asset('img/home_about/3.png') }}" alt="Pick on Time" class="feature-icon">
                <p class="feature-text">99% Pick on Time<br>4x4 AC Land Cruiser</p>
            </div>
            <!-- Feature 4 -->
            <div class="feature-item">
                <img src="{{ asset('img/home_about/4.png') }}" alt="Secure Payment" class="feature-icon">
                <p class="feature-text">Safe & Secure Payment<br>Card / Cash in AED - USD</p>
            </div>
            <!-- Feature 5 -->
            <div class="feature-item">
                <img src="{{ asset('img/home_about/5.png') }}" alt="24/7 Support" class="feature-icon">
                <p class="feature-text">24/7 Customer Support<br>Phone, Email, Whatsapp</p>
            </div>
        </div>
    </div>
</section>

<style>
/* You may need to import a font like Montserrat if you don't have it globally */
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap');

.features-bar-section {
    /* CHANGED: Added background color */
    background-color: #F6F6F6;
    
    /* REMOVED borders to match the new background style */
    
    /* CHANGED: Increased top and added bottom margin */
    margin-top: 6rem; 
    margin-bottom: 6rem; 
    
    padding: 25px 0;
    font-family: 'Montserrat', sans-serif;
}

.features-container {
    display: flex;
    justify-content: space-between; 
    align-items: center;
    flex-wrap: wrap; 
    gap: 1rem;
}

.feature-item {
    display: flex;
    align-items: center;
    gap: 12px; 
}

.feature-icon {
    height: 40px; 
    width: auto;
    object-fit: contain;
}

.feature-text {
    font-size: 13px; 
    font-weight: 600;
    line-height: 1.4;
    color: #333;
    margin: 0;
}

/* Responsive Adjustments */
@media (max-width: 1200px) {
    .features-container {
        justify-content: space-around;
    }
}

@media (max-width: 991px) {
    .feature-item {
        flex-basis: calc(50% - 2rem);
        justify-content: center;
    }
}

@media (max-width: 576px) {
    .feature-item {
        flex-basis: 100%;
        justify-content: center;
    }
}
</style>