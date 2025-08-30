<!-- Testimonials Section -->
<section class="testimonial-section">
    <div class="container">
        <!-- Section Title -->
        <h2 class="section-title">TESTIMONIAL</h2>

        <div class="row">
            <!-- Testimonial Card 1 -->
            <div class="col-lg-4">
                <div class="testimonial-card">
                    <div class="testimonial-img-wrapper">
                        <img src="{{ asset('img/testimonials.jpg')}}" alt="Testimonial Author" class="testimonial-img">
                    </div>
                    <div class="testimonial-content">
                        <p class="testimonial-text">
                            is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        </p>
                        <hr class="testimonial-divider">
                        <h4 class="testimonial-author-name">John Doe</h4>
                        <p class="testimonial-author-title">CEO / Director</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial Card 2 -->
            <div class="col-lg-4">
                <div class="testimonial-card">
                    <div class="testimonial-img-wrapper">
                        <img src="{{ asset('img/testimonials.jpg')}}" alt="Testimonial Author" class="testimonial-img">
                    </div>
                    <div class="testimonial-content">
                        <p class="testimonial-text">
                            is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        </p>
                        <hr class="testimonial-divider">
                        <h4 class="testimonial-author-name">John Doe</h4>
                        <p class="testimonial-author-title">CEO / Director</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial Card 3 -->
            <div class="col-lg-4">
                <div class="testimonial-card">
                    <div class="testimonial-img-wrapper">
                        <img src="{{ asset('img/testimonials.jpg')}}" alt="Testimonial Author" class="testimonial-img">
                    </div>
                    <div class="testimonial-content">
                        <p class="testimonial-text">
                            is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        </p>
                        <hr class="testimonial-divider">
                        <h4 class="testimonial-author-name">John Doe</h4>
                        <p class="testimonial-author-title">CEO / Director</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
/* You may need to import a font like Montserrat if you don't have it globally */
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap');

/* --- Testimonial Section Styling --- */
.testimonial-section {
    background-color: #f7f7f7;
    padding: 80px 0;
    font-family: 'Montserrat', sans-serif;
}

.section-title {
    font-weight: 700;
    font-size: 24px;
    color: #222222;
    text-transform: uppercase;
    /* CHANGED: Increased bottom margin to give images space */
    margin-bottom: 80px; 
    letter-spacing: 1px;
}

.testimonial-card {
    background-color: #ffffff;
    border-radius: 15px;
    box-shadow: 0 5px 25px rgba(0, 0, 0, 0.07);
    text-align: center;
    /* CHANGED: Removed fixed padding value */
    padding: 0; 
    /* ADDED: Position relative to act as an anchor for the image */
    position: relative; 
    /* ADDED: Margin-top to give space between rows on mobile */
    margin-top: 50px;
}

.testimonial-img-wrapper {
    /* REMOVED: margin-top: -50px; */
    /* ADDED: Absolute positioning for precise control */
    position: absolute;
    top: 0;
    left: 50%;
    transform: translate(-50%, -50%); /* Centers the image on the top edge */
}

.testimonial-img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    object-fit: cover;
    border: 4px solid #fff;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
}

.testimonial-content {
    /* CHANGED: Adjusted padding to account for the overlapping image */
    padding: 70px 35px 35px 35px; /* Top padding is increased */
}

.testimonial-text {
    font-size: 14px;
    font-weight: 400;
    line-height: 1.6;
    color: #777777;
    margin: 0;
}

.testimonial-divider {
    border: 0;
    height: 1px;
    background-color: #eeeeee;
    width: 80%;
    margin: 30px auto;
}

.testimonial-author-name {
    font-size: 16px;
    font-weight: 700;
    color: #222222;
    margin: 0 0 5px 0;
}

.testimonial-author-title {
    font-size: 13px;
    font-weight: 400;
    color: #888888;
    margin: 0;
}

/* --- Responsiveness --- */
@media (max-width: 991.98px) {
    .testimonial-card {
        /* CHANGED: Switched to margin-bottom for better stacking behavior */
        margin-bottom: 70px;
        margin-top: 50px; /* Keep consistent top margin */
    }
    .row .col-lg-4:last-child .testimonial-card {
        margin-bottom: 0;
    }
}
</style>