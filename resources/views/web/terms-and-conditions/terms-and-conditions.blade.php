@extends('web.layout.app')
@section('content')

<!-- ======================= Terms and Conditions Section ======================= -->
<section class="legal-page-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Page Title -->
                <div class="text-center mb-5">
                    <h1 class="page-title">Terms & Conditions</h1>
                    <p class="page-subtitle">Please read these terms carefully before booking.</p>
                </div>

                <!-- Terms Content -->
                <div class="legal-content">
                    <h4>1. Booking and Payment</h4>
                    <p>All bookings must be made in advance and are subject to availability. Full payment is required at the time of booking to secure your reservation. We accept major credit cards and online payments.</p>

                    <h4>2. Cancellations and Refunds</h4>
                    <p>Cancellations made by the customer more than 72 hours before the scheduled flight will receive a full refund. Cancellations made within 72 hours are non-refundable. If we need to cancel a flight due to weather conditions or other safety reasons, you will be offered the choice of rescheduling to another date or receiving a full refund.</p>
                    
                    <h4>3. Passenger Responsibility</h4>
                    <p>All passengers must follow the instructions of the pilot and ground crew at all times. Passengers must inform us of any health conditions that may affect their ability to fly safely. Dubai Ballooning is not liable for any pre-existing medical conditions.</p>

                    <h4>4. Limitation of Liability</h4>
                    <p>While we adhere to the highest safety standards, participation in hot air ballooning involves inherent risks. By booking a flight, passengers acknowledge and accept these risks. Our liability is limited to the amount paid for the flight ticket.</p>

                    <h4>5. Changes to Terms</h4>
                    <p>We reserve the right to amend these terms and conditions at any time. The most current version will always be posted on our website. Your continued use of our services after any changes constitutes your acceptance of the new terms.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* 
===============================================
Legal Page Styles (for Privacy & Terms)
===============================================
*/
.legal-page-section {
    padding: 80px 0;
    background-color: #fff;
    margin-top: 5rem; /* Pushes content below the fixed navbar */
    font-family: 'Montserrat', sans-serif;
}

.page-title {
    font-weight: 900;
    font-size: 2.75rem;
    color: #222;
}

.page-subtitle {
    font-size: 1.1rem;
    color: #555;
}

.legal-content {
    font-size: 1rem;
    line-height: 1.8;
    color: #555;
}

.legal-content h4 {
    font-weight: 700;
    font-size: 1.5rem;
    color: #333;
    margin-top: 2.5rem;
    margin-bottom: 1rem;
    padding-bottom: 0.5rem;
    border-bottom: 2px solid #f39c12;
}

.legal-content p {
    margin-bottom: 1.5rem;
}
</style>

@endsection
