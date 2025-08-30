<section class="booking-section-wrapper">
    <div class="container">
        <div class="booking-component-outer-wrapper">
            
            <!-- The main container now has a pseudo-element for its background -->
            <div class="booking-form-container" data-background-image="{{ asset('img/packages/bg.jpg') }}">
                
                <div class="booking-form-card">
                    <h2 class="form-title">Leave us your info</h2>
                    
                    <form action="#" method="POST">
                        <div class="row g-3">
                            <div class="col-lg-6"><input type="text" class="form-control custom-input" placeholder="Name"></div>
                            <div class="col-lg-6"><input type="email" class="form-control custom-input" placeholder="Email"></div>
                            <div class="col-lg-3 col-md-6"><input type="tel" class="form-control custom-input" placeholder="Phone/ Whatsapp"></div>
                            <div class="col-lg-3 col-md-6"><input type="text" class="form-control custom-input" placeholder="Pickup Location"></div>
                            <div class="col-lg-3 col-md-6"><input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control custom-input" placeholder="Tour Date"></div>
                            <div class="col-lg-3 col-md-6">
                                <select class="form-select custom-input"><option selected disabled>Payment Method</option><option value="1">Credit Card</option><option value="2">Cash</option></select>
                            </div>
                            <div class="col-lg-6">
                                <select class="form-select custom-input"><option selected disabled>Adult</option><option value="1">1 Adult</option><option value="2">2 Adults</option></select>
                            </div>
                            <div class="col-lg-6">
                                <select class="form-select custom-input"><option selected disabled>Child</option><option value="0">0 Children</option><option value="1">1 Child</option></select>
                            </div>
                            <div class="col-12"><textarea class="form-control custom-input" rows="5" placeholder="Leave notes"></textarea></div>
                            <div class="col-12 text-end"><button type="submit" class="btn btn-book-now">Book Now</button></div>
                        </div>
                    </form>
                </div>
            </div>

            <img src="{{ asset('img/packages/small_balloon.png') }}" alt="Small hot air balloon" class="small-balloon-decoration">
        </div>
    </div>
</section>

<style>
/* You may need to import a font like Poppins if it isn't loaded globally */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap');

.booking-section-wrapper {
    font-family: 'Poppins', sans-serif;
    padding: 80px 0;
}

.booking-component-outer-wrapper {
    position: relative;
    max-width: 1599px;
    margin: 0 auto;
}

.booking-form-container {
    position: relative;
    aspect-ratio: 1599 / 882; 
    border-radius: 21px;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 40px;
    background-color: #333; /* Fallback background */
}

/* NEW: Using a pseudo-element for the background image with opacity */
.booking-form-container::before {
    content: '';
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    /* The background is applied here */
    background-image: url('{{ asset('img/packages/bg.jpg') }}');
    background-size: cover;
    background-position: center;
    /* This is where you control the image opacity */
    opacity: 0.4; 
    z-index: 1;
}

.booking-form-card {
    width: 100%;
    max-width: 800px;
    padding: 40px;
    background: rgba(255, 255, 255, 0.75);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border-radius: 21px;
    border: 1px solid rgba(255, 255, 255, 0.25);
    position: relative; /* Ensure it stays above the pseudo-element */
    z-index: 2;
}

.small-balloon-decoration {
    position: absolute;
    bottom: -50px; 
    left: -60px;  
    width: 140px;
    height: auto;
    z-index: 10;
}

.form-title {
    text-align: center; font-size: 2rem; font-weight: 700;
    color: #2c3e50; margin-bottom: 35px;
}

/* --- Input styling --- */
.custom-input {
    background-color: #EAECEE; border: none; border-radius: 12px;
    padding: 15px 20px; font-size: 15px; font-weight: 500;
    color: #555; width: 100%;
}
.custom-input:focus {
    box-shadow: 0 0 0 4px rgba(243, 156, 18, 0.3); outline: none;
}
.form-select.custom-input {
    -webkit-appearance: none; -moz-appearance: none; appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%23888' stroke-width='2.5' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 20px center;
    background-size: 18px;
}

/* --- Button Styling --- */
.btn-book-now {
    background-color: #f39c12; color: #fff; border: none;
    border-radius: 12px; padding: 15px 50px; font-weight: 700;
    font-size: 16px; transition: background-color 0.3s, transform 0.2s;
}
.btn-book-now:hover {
    background-color: #e67e22; transform: translateY(-3px);
}

/* --- RESPONSIVENESS --- */
@media (max-width: 991px) {
    .booking-form-container {
        /* On tablets, use a less wide aspect ratio */
        aspect-ratio: 4 / 3;
    }
    .small-balloon-decoration {
        width: 100px; left: -40px; bottom: -30px;
    }
}
@media (max-width: 768px) {
    .booking-form-container {
        /* On mobile, remove aspect-ratio and let height be auto */
        height: auto;
        aspect-ratio: unset;
        padding: 20px;
    }
    .booking-form-card {
        padding: 30px;
    }
    .small-balloon-decoration {
        display: none;
    }
}
</style>