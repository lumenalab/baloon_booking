<!-- ======================= Tour Guide Section ======================= -->
<section class="tour-guide-section">
    <div class="container">
        <!-- Section Titles -->
        <div class="text-center">
            <h2 class="guide-cursive-title">Meet with Guide</h2>
            <h3 class="guide-subtitle">TOUR GUIDE</h3>
        </div>

        <!-- Guide Images -->
        <div class="row">
            <!-- Guide 1 -->
            <div class="col-lg-3 col-md-6 mb-4">
                <img src="{{ asset('img/about/team/team_1.jpg') }}" alt="Tour Guide 1" class="guide-image">
            </div>
            <!-- Guide 2 -->
            <div class="col-lg-3 col-md-6 mb-4">
                <img src="{{ asset('img/about/team/team_2.jpg') }}" alt="Tour Guide 2" class="guide-image">
            </div>
            <!-- Guide 3 -->
            <div class="col-lg-3 col-md-6 mb-4">
                <img src="{{ asset('img/about/team/team_3.jpg') }}" alt="Tour Guide 3" class="guide-image">
            </div>
            <!-- Guide 4 -->
            <div class="col-lg-3 col-md-6 mb-4">
                <img src="{{ asset('img/about/team/team_4.jpg') }}" alt="Tour Guide 4" class="guide-image">
            </div>
        </div>
    </div>
</section>

<style>
/* 
===============================================
UNIQUE STYLES FOR THE "TOUR GUIDE" SECTION
===============================================
*/
/* Import a cursive font for the subtitle */
@import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap');
/* Assumes you have a primary sans-serif like Montserrat loaded globally */

.tour-guide-section {
    padding: 80px 0;
    font-family: 'Montserrat', sans-serif;
    background-color: #fff;
}

/* Cursive Title Styling */
.tour-guide-section .guide-cursive-title {
    font-family: 'Dancing Script', cursive;
    font-size: 2.25rem; /* 36px */
    color: #e74c3c; /* Red color */
    margin-bottom: 0.25rem;
    text-align: left;
}

/* Subtitle Styling */
.tour-guide-section .guide-subtitle {
    font-weight: 900; /* Extra-bold */
    font-size: 1.75rem; /* 28px */
    color: #f39c12; /* Orange color */
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 3rem; /* Space between titles and images */
    text-align: left;
}

/* Guide Image Styling */
.tour-guide-section .guide-image {
    width: 100%;
    height: auto;
    /* This creates the rounded corners from the design */
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    /* This ensures images scale nicely within their container */
    object-fit: cover;
    aspect-ratio: 3 / 4; /* Gives the images a consistent portrait shape */
}

</style>