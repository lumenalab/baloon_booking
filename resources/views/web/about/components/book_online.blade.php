<!-- ======================= Book Tour Section ======================= -->
<section class="book-tour-section">
    <div class="container">
        <div class="book-tour-card">
            <div class="row align-items-center">
                
                <!-- Left Column: Content -->
                <div class="col-lg-6">
                    <div class="tour-content">
                        <p class="cursive-subtitle">Are you ready to travel?</p>
                        <h2 class="main-title">BOOK YOUR TOUR ONLINE</h2>
                        <p class="description-text">
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                        </p>

                        <div class="features-list">
                            <!-- Feature 1 -->
                            <div class="feature-item">
                                <div class="icon-circle">
                                    <img src="{{ asset('img/about/online_logo_1.png') }}" alt="Adventure Icon">
                                </div>
                                <span>Most Adventure Tour Ever</span>
                            </div>
                            <!-- Feature 2 -->
                            <div class="feature-item">
                                <div class="icon-circle">
                                    <img src="{{ asset('img/about/online_logo_2.png') }}" alt="Tour Starts Icon">
                                </div>
                                <span>Real Tour Starts from Here</span>
                            </div>
                        </div>

                        <a href="#" class="btn btn-contact-us">Contact Us</a>
                    </div>
                </div>

                <!-- Right Column: Image with background shapes -->
                <div class="col-lg-6">
                    <div class="tour-image-wrapper">
                        <img src="{{ asset('img/about/online_person.png') }}" alt="Happy traveler with suitcase" class="traveler-image">
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<style>
/* 
===============================================
UNIQUE STYLES FOR THE "BOOK YOUR TOUR" SECTION
===============================================
These styles are now scoped and will not conflict with other sections.
*/
/* Import a cursive font for the subtitle */
@import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap');
/* Assumes you have a primary sans-serif like Montserrat loaded globally */

.book-tour-section {
    padding: 80px 0;
    font-family: 'Montserrat', sans-serif;
}

.book-tour-section .book-tour-card {
    background-color: #efefef;
    border-radius: 20px;
    padding: 40px;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
}

.book-tour-section .tour-content {
    /* Content is aligned left by default */
}

.book-tour-section .cursive-subtitle {
    font-family: 'Dancing Script', cursive;
    font-size: 1.75rem;
    color: #e74c3c;
    margin-bottom: 0.5rem;
}

.book-tour-section .main-title {
    font-weight: 900;
    font-size: 2rem;
    color: #f39c12;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 1.5rem;
}

.book-tour-section .description-text {
    font-size: 0.95rem;
    color: #6c757d;
    line-height: 1.8;
    margin-bottom: 2rem;
}

.book-tour-section .features-list {
    margin-bottom: 2.5rem;
}

.book-tour-section .feature-item {
    display: flex;
    align-items: center;
    gap: 15px;
}
.book-tour-section .feature-item:not(:last-child) {
    margin-bottom: 1.5rem;
}

.book-tour-section .icon-circle {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background-color: #f39c12;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}
.book-tour-section .icon-circle img {
    width: 32px;
    height: 32px;
}
.book-tour-section .feature-item span {
    font-weight: 700;
    font-size: 1.1rem;
    color: #212529;
}

.book-tour-section .btn-contact-us {
    background-color: #f39c12;
    color: #fff;
    border-radius: 10px;
    padding: 12px 30px;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 0.9rem;
    transition: background-color 0.3s, transform 0.2s;
}
.book-tour-section .btn-contact-us:hover {
    background-color: #e67e22;
    transform: translateY(-2px);
    color: #fff;
}

/* --- Image Wrapper with background blobs --- */
.book-tour-section .tour-image-wrapper {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
}
.book-tour-section .traveler-image {
    position: relative;
    z-index: 2;
    max-width: 100%;
}
.book-tour-section .tour-image-wrapper::before {
    content: '';
    position: absolute;
    width: 80%;
    padding-top: 80%;
    background-color: #eaf6f6;
    border-radius: 50%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 0;
}
.book-tour-section .tour-image-wrapper::after {
    content: '';
    position: absolute;
    width: 110%;
    height: 60%;
    background-color: #fff;
    border-radius: 40% 60% 60% 40% / 70% 50% 50% 30%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) rotate(-15deg);
    z-index: 1;
}

/* --- Responsive Adjustments --- */
@media (max-width: 991.98px) {
    .book-tour-section .tour-content {
        text-align: center;
    }
    .book-tour-section .feature-item {
        justify-content: center;
    }
    .book-tour-section .tour-image-wrapper {
        margin-top: 3rem;
    }
}
</style>