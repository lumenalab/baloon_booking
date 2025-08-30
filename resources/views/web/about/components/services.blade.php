<!-- ======================= Services Section ======================= -->
<section class="services-section">
    <div class="container">

        <!-- Section Titles -->
        <h2 class="services-cursive-title">Services We Provide</h2>
        <h3 class="services-subtitle">EXPERIENCE THE MAGIC OF DUBAI</h3>

        <!-- Two-Column List of Services -->
        <div class="row">
            <!-- Left Column -->
            <div class="col-md-6">
                <ul class="services-list">
                    <li><span class="list-arrow">→</span> Desert Safari Tour</li>
                    <li><span class="list-arrow">→</span> Overnight Desert Safari</li>
                    <li><span class="list-arrow">→</span> Hummer Desert Safari</li>
                    <li><span class="list-arrow">→</span> Dubai City Tour</li>
                    <li><span class="list-arrow">→</span> Abu Dhabi City Tour</li>
                    <li><span class="list-arrow">→</span> Al Ain City Tour</li>
                    <li><span class="list-arrow">→</span> Sharjah / Ajman City Tour</li>
                    <li><span class="list-arrow">→</span> East Coast Tour</li>
                </ul>
            </div>
            <!-- Right Column -->
            <div class="col-md-6">
                <ul class="services-list">
                    <li><span class="list-arrow">→</span> Ferrari World Tour</li>
                    <li><span class="list-arrow">→</span> Dhow Cruise Booking Special</li>
                    <li><span class="list-arrow">→</span> Harte Mountain Adventure</li>
                    <li><span class="list-arrow">→</span> Musandam Adventure</li>
                    <li><span class="list-arrow">→</span> Sea Wings</li>
                    <li><span class="list-arrow">→</span> Burj Khalifa Ticket Booking</li>
                    <li><span class="list-arrow">→</span> Hot Air Balloon Tour</li>
                    <li><span class="list-arrow">→</span> Helicopter Tour</li>
                    <li><span class="list-arrow">→</span> Dolphin Show</li>
                    <li><span class="list-arrow">→</span> Airport Pick up & Drop Service</li>
                </ul>
            </div>
        </div>

    </div>
</section>

<style>
/* Import the specific cursive font from Google Fonts */
@import url('https://fonts.googleapis.com/css2?family=Ms+Madi&display=swap');
/* Assumes you have Montserrat loaded globally */
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;900&display=swap');

.services-section {
    padding: 80px 0;
    font-family: 'Montserrat', sans-serif;
}

/* Cursive Title Styling */
.services-cursive-title {
    font-family: 'Ms Madi', cursive;
    font-weight: 400;
    font-size: 64px;
    line-height: 1; /* 100% */
    letter-spacing: 0;
    color: #d9534f;
    margin-bottom: 0.5rem;
    text-align: left; /* As requested */
}

/* Uppercase Subtitle Styling */
.services-subtitle {
    font-family: 'Montserrat', sans-serif;
    font-weight: 900; /* Black */
    font-size: 40px;
    line-height: 1; /* 100% */
    letter-spacing: 0;
    text-transform: uppercase;
    color: #E67E22;
    margin-bottom: 3rem;
    text-align: left; /* As requested */
}

/* Service List Styling */
.services-list {
    list-style: none;
    padding-left: 0;
    text-align: left;
    margin: 0;
}

.services-list li {
    display: flex;
    align-items: center;
    /* Font styles as per your request */
    font-family: 'Montserrat', sans-serif;
    font-weight: 400; /* Regular */
    font-size: 29px;
    line-height: 1.2; /* Slightly more than 100% for readability */
    letter-spacing: 0;
    color: #333;
    margin-bottom: 1.1rem;
}

.list-arrow {
    color: #E67E22;
    font-weight: 700;
    margin-right: 15px;
    font-size: 2.2rem; /* Adjusted to match larger text */
}

/* --- Responsive Adjustments --- */
@media (max-width: 1200px) {
    /* Reduce font sizes for smaller laptops */
    .services-cursive-title { font-size: 50px; }
    .services-subtitle { font-size: 32px; }
    .services-list li { font-size: 32px; }
}

@media (max-width: 992px) {
    /* Further reduce for tablets */
    .services-cursive-title { font-size: 42px; }
    .services-subtitle { font-size: 24px; }
    .services-list li { font-size: 24px; }
}

@media (max-width: 767px) {
    /* Stack columns and reduce font sizes for mobile */
    .services-cursive-title, .services-subtitle {
        text-align: center; /* Center titles on mobile for better balance */
    }
    .services-list {
        margin: 0 auto; /* Center the list itself */
        display: inline-block;
    }
    .services-list li {
        font-size: 20px;
    }
}
</style>