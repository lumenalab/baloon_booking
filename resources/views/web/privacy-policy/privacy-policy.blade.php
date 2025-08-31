@extends('web.layout.app')
@section('content')

<!-- ======================= Privacy Policy Section ======================= -->
<section class="legal-page-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Page Title -->
                <div class="text-center mb-5">
                    <h1 class="page-title">Privacy Policy</h1>
                    <p class="page-subtitle">Last updated: August 25, 2025</p>
                </div>

                <!-- Policy Content -->
                <div class="legal-content">
                    <p>Dubai Ballooning ("we," "our," or "us") is committed to protecting your privacy. This Privacy Policy explains how your personal information is collected, used, and disclosed by Dubai Ballooning.</p>

                    <h4>1. Information We Collect</h4>
                    <p>We may collect personal information from you, such as your name, email address, phone number, and payment information when you book a tour, contact us with inquiries, or subscribe to our newsletter.</p>

                    <h4>2. How We Use Your Information</h4>
                    <p>We use the information we collect to:</p>
                    <ul>
                        <li>Process your bookings and payments.</li>
                        <li>Communicate with you about your booking, inquiries, and promotions.</li>
                        <li>Improve our website and services.</li>
                        <li>Comply with legal obligations.</li>
                    </ul>

                    <h4>3. Data Security</h4>
                    <p>We implement a variety of security measures to maintain the safety of your personal information. Your personal information is contained behind secured networks and is only accessible by a limited number of persons who have special access rights to such systems, and are required to keep the information confidential.</p>

                    <h4>4. Cookies</h4>
                    <p>Our website may use "cookies" to enhance user experience. You may choose to set your web browser to refuse cookies, or to alert you when cookies are being sent. If you do so, note that some parts of the site may not function properly.</p>
                    
                    <h4>5. Your Rights</h4>
                    <p>You have the right to access, correct, or delete your personal information. If you wish to exercise these rights, please contact us using the contact information provided on our website.</p>
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

.legal-content p, .legal-content ul {
    margin-bottom: 1.5rem;
}

.legal-content ul {
    padding-left: 20px;
}

.legal-content li {
    margin-bottom: 0.5rem;
}
</style>

@endsection