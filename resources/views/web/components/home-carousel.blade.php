<div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
    <!-- Carousel Indicators -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
    </div>

    <!-- Carousel Inner -->
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="hero-slide" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('{{ asset('images/balloon-1.jpg') }}');">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-6">
                            <div class="hero-content">
                                <h1 class="hero-title">Experience Dubai from Above</h1>
                                <p class="hero-subtitle">Soar through the skies in a magical hot air balloon adventure over the stunning Dubai desert landscape.</p>
                                <div class="hero-buttons">
                                    <a href="" class="btn btn-primary btn-lg me-3">Book Now</a>
                                    <a href="#" class="btn btn-outline-light btn-lg" data-bs-toggle="modal" data-bs-target="#videoModal">
                                        <i class="fas fa-play me-2"></i>Watch Video
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- Chat Widget -->
                            <div class="chat-widget">
                                <div class="chat-header">
                                    <h5>Hi! Nice to see you.</h5>
                                    <p>How can we help you today</p>
                                </div>
                                <form class="chat-form">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Reply here...">
                                        <button class="btn btn-primary" type="submit">
                                            <i class="fas fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <div class="hero-slide" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('{{ asset('images/balloon-2.jpg') }}');">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-8">
                            <div class="hero-content">
                                <h1 class="hero-title">Romantic Couple Experience</h1>
                                <p class="hero-subtitle">Create unforgettable memories with your loved one as you float peacefully over the golden dunes at sunrise.</p>
                                <div class="hero-buttons">
                                    <a href="" class="btn btn-primary btn-lg me-3">Couple Packages</a>
                                    <a href="" class="btn btn-outline-light btn-lg">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
            <div class="hero-slide" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('{{ asset('images/balloon-3.jpg') }}');">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-8">
                            <div class="hero-content">
                                <h1 class="hero-title">Group Adventures</h1>
                                <p class="hero-subtitle">Perfect for families, friends, or corporate groups. Share the wonder of ballooning with those who matter most.</p>
                                <div class="hero-buttons">
                                    <a href="" class="btn btn-primary btn-lg me-3">Group Bookings</a>
                                    <a href="" class="btn btn-outline-light btn-lg">Gift Vouchers</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Carousel Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<!-- Video Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-body p-0">
                <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3 z-index-1" data-bs-dismiss="modal"></button>
                <div class="ratio ratio-16x9">
                    <iframe src="" id="videoFrame" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>