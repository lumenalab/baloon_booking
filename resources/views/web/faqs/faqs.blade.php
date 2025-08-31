@extends('web.layout.app')
@section('content')

<!-- ======================= FAQ Section ======================= -->
<section class="faq-section">
    <div class="container">
        <!-- Section Title -->
        <div class="text-center mb-5">
            <h1 class="page-title">Frequently Asked Questions</h1>
            <p class="page-subtitle">Find answers to common questions about our ballooning experiences.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion">

                    <!-- FAQ Item 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What is the best time of year to fly in a hot air balloon in Dubai?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                The ballooning season in Dubai typically runs from September to May. During these months, the weather is cooler and more stable, providing ideal conditions for a safe and scenic flight. We do not operate during the peak summer months due to the extreme heat.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How long does the entire experience last?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                The entire experience, from hotel pickup to drop-off, lasts approximately 4 to 5 hours. The actual flight time is about one hour, but the adventure also includes travel to the launch site, a pre-flight briefing, and post-flight refreshments.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What should I wear for the balloon ride?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We recommend wearing comfortable, layered clothing. It can be cool in the desert before sunrise, but it will warm up as the sun rises. Flat, closed-toe shoes are essential (no sandals or high heels). A hat and sunglasses are also recommended to protect you from the sun.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Are there any age or health restrictions?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                For safety reasons, children under the age of 5 and pregnant women are not permitted to fly. Passengers should be in good physical health and able to stand for at least one hour. If you have any significant health concerns, such as back or knee problems, please consult your doctor and inform us before booking.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* 
===============================================
FAQ Page Styles
===============================================
*/
.faq-section {
    padding: 80px 0;
    background-color: #f8f9fa;
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
    max-width: 600px;
    margin: 0.5rem auto 0;
}

.accordion-item {
    border: 1px solid #dee2e6;
    border-radius: 8px;
    margin-bottom: 1rem;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    overflow: hidden; /* Ensures border-radius is respected */
}

.accordion-header {
    margin: 0;
}

.accordion-button {
    font-weight: 700;
    font-size: 1.1rem;
    color: #333;
    background-color: #fff;
    padding: 1.25rem 1.5rem;
    text-align: left;
    width: 100%;
    border: none;
    box-shadow: none;
}

.accordion-button:not(.collapsed) {
    color: #000;
    background-color: #fff;
    box-shadow: inset 0 -1px 0 rgba(0,0,0,.125);
}

.accordion-button:focus {
    box-shadow: none;
    border-color: rgba(0,0,0,.125);
}

.accordion-button::after {
    /* Custom accordion icon */
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23f39c12'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
    transition: transform .2s ease-in-out;
}

.accordion-button:not(.collapsed)::after {
    transform: rotate(-180deg);
}

.accordion-body {
    padding: 1.5rem;
    font-size: 1rem;
    line-height: 1.7;
    color: #555;
    background-color: #fff;
}
</style>

@endsection