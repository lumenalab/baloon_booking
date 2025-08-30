<!-- ======================= Experiences & Instagram Section ======================= -->
<section class="experience-gallery-section">
    <div class="container">
        <!-- Part 1: Our Successful Experiences Carousel -->
        <div class="text-center">
            <h2 class="section-title">
                <span style="font-weight: 800;">OUR SUCCESSFUL</span> 
                <span style="font-weight: 400;">EXPERIENCES</span>
            </h2>
        </div>

        <div class="experience-carousel-wrapper">
            <div class="experience-carousel-track">
                <!-- Slides will be cloned by JavaScript for the infinite effect -->
                <div class="carousel-slide"><img src="{{ asset('img/experience/1.jpg') }}" alt="Experience 1"></div>
                <div class="carousel-slide"><img src="{{ asset('img/experience/2.jpg') }}" alt="Experience 2"></div>
                <div class="carousel-slide"><img src="{{ asset('img/experience/3.jpg') }}" alt="Experience 3"></div>
                <div class="carousel-slide"><img src="{{ asset('img/experience/4.jpg') }}" alt="Experience 4"></div>
                <div class="carousel-slide"><img src="{{ asset('img/experience/5.jpg') }}" alt="Experience 5"></div>
            </div>

            <!-- Navigation Buttons -->
            <button class="carousel-button carousel-button--left">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
            </button>
            <button class="carousel-button carousel-button--right">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </button>
        </div>

        <!-- Part 2: Instagram Gallery (remains the same) -->
        <div class="text-center mt-5 pt-4">
            <h2 class="section-title">
                <span style="font-weight: 800;">INSTAGRAM</span> 
                <span style="font-weight: 400;">GALLERY</span>
            </h2>
        </div>
        <div class="row instagram-grid g-3">
            <div class="col-lg-2 col-md-4 col-6"><div class="insta-placeholder"></div></div>
            <div class="col-lg-2 col-md-4 col-6"><div class="insta-placeholder"></div></div>
            <div class="col-lg-2 col-md-4 col-6"><div class="insta-placeholder"></div></div>
            <div class="col-lg-2 col-md-4 col-6"><div class="insta-placeholder"></div></div>
            <div class="col-lg-2 col-md-4 col-6"><div class="insta-placeholder"></div></div>
            <div class="col-lg-2 col-md-4 col-6"><div class="insta-placeholder"></div></div>
        </div>
    </div>
</section>

<style>
/* Assumes you have a font like Montserrat loaded globally */
.experience-gallery-section {
    padding: 80px 0;
    font-family: 'Montserrat', sans-serif;
    overflow-x: hidden;
}

.section-title {
    font-size: 1.75rem; color: #222; text-transform: uppercase;
    letter-spacing: 1px; margin-bottom: 50px;
}

/* --- Experiences Carousel --- */
.experience-carousel-wrapper {
    position: relative;
    width: 100%;
    max-width: 1400px;
    margin: 0 auto;
    overflow: hidden; /* This hides the cloned slides */
}
.experience-carousel-track {
    display: flex;
    align-items: center;
}
.experience-carousel-track.is-transitioning {
    transition: transform 0.6s cubic-bezier(0.25, 1, 0.5, 1);
}

.carousel-slide {
    flex: 0 0 30%; /* Base width for each slide */
    min-width: 0;
    padding: 0 10px; /* Controls the small gap between images */
    transform: scale(0.65); /* Side images are smaller */
    opacity: 0.6;
    transition: transform 0.6s ease, opacity 0.6s ease;
}
.carousel-slide.is-active {
    transform: scale(1);
    opacity: 1;
}

.carousel-slide img {
    width: 100%; height: auto;
    aspect-ratio: 1 / 1; 
    object-fit: cover;
    display: block;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    border-radius: 12px;
}

/* Navigation Buttons */
.carousel-button {
    position: absolute; top: 50%;
    transform: translateY(-50%);
    background: none; border: none;
    padding: 0; cursor: pointer; z-index: 10;
}
.carousel-button svg {
    color: #333; width: 48px; height: 48px;
    filter: drop-shadow(0 1px 3px rgba(0,0,0,0.4));
}
/* New position between images */
.carousel-button--left { left: 22%; }
.carousel-button--right { right: 22%; }

/* Custom Scrollbar */
.experience-carousel-wrapper {
    scrollbar-width: thin;
    scrollbar-color: #ccc #f1f1f1;
}
.experience-carousel-wrapper::-webkit-scrollbar {
    height: 8px;
}
.experience-carousel-wrapper::-webkit-scrollbar-track {
    background: #f1f1f1;
}
.experience-carousel-wrapper::-webkit-scrollbar-thumb {
    background: #ccc;
    border-radius: 4px;
}
.experience-carousel-wrapper::-webkit-scrollbar-thumb:hover {
    background: #aaa;
}


/* --- Instagram Gallery --- */
.insta-placeholder {
    width: 100%; aspect-ratio: 1 / 1;
    background-color: #e0e0e0; border-radius: 8px;
}

/* --- Responsive Adjustments --- */
@media (max-width: 992px) {
    .carousel-slide { flex-basis: 50%; }
    .carousel-button--left { left: 15%; }
    .carousel-button--right { right: 15%; }
}
@media (max-width: 768px) {
    .carousel-slide { flex-basis: 70%; }
    .carousel-button--left { left: 5%; }
    .carousel-button--right { right: 5%; }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const wrapper = document.querySelector('.experience-carousel-wrapper');
    const track = document.querySelector('.experience-carousel-track');
    if (!track) return;

    const originalSlides = Array.from(track.children);
    const slideCount = originalSlides.length;
    const nextButton = wrapper.querySelector('.carousel-button--right');
    const prevButton = wrapper.querySelector('.carousel-button--left');

    let currentIndex = 0;
    let isMoving = false;

    // 1. Clone slides for the infinite loop effect
    const clonesCount = 2;
    for (let i = 0; i < clonesCount; i++) {
        track.appendChild(originalSlides[i].cloneNode(true));
    }
    for (let i = slideCount - 1; i >= slideCount - clonesCount; i--) {
        track.insertBefore(originalSlides[i].cloneNode(true), originalSlides[0]);
    }

    const allSlides = Array.from(track.children);

    // 2. Initial setup
    const initialPosition = () => {
        const initialOffset = allSlides[clonesCount].offsetLeft - (wrapper.offsetWidth / 2) + (allSlides[clonesCount].offsetWidth / 2);
        track.style.transform = `translateX(-${initialOffset}px)`;
        allSlides[clonesCount].classList.add('is-active');
    };
    initialPosition();

    const moveToSlide = (index) => {
        if (isMoving) return;
        isMoving = true;
        track.classList.add('is-transitioning');
        
        const targetSlide = allSlides[index + clonesCount];
        const amountToMove = targetSlide.offsetLeft - (wrapper.offsetWidth / 2) + (targetSlide.offsetWidth / 2);
        track.style.transform = `translateX(-${amountToMove}px)`;
        
        allSlides.forEach(slide => slide.classList.remove('is-active'));
        targetSlide.classList.add('is-active');
        
        currentIndex = index;
    };

    track.addEventListener('transitionend', () => {
        isMoving = false;
        track.classList.remove('is-transitioning');
        
        if (currentIndex === slideCount) {
            currentIndex = 0;
            const targetSlide = allSlides[currentIndex + clonesCount];
            const amountToMove = targetSlide.offsetLeft - (wrapper.offsetWidth / 2) + (targetSlide.offsetWidth / 2);
            track.style.transform = `translateX(-${amountToMove}px)`;
        }
        
        if (currentIndex === -1) {
            currentIndex = slideCount - 1;
            const targetSlide = allSlides[currentIndex + clonesCount];
            const amountToMove = targetSlide.offsetLeft - (wrapper.offsetWidth / 2) + (targetSlide.offsetWidth / 2);
            track.style.transform = `translateX(-${amountToMove}px)`;
        }
    });

    nextButton.addEventListener('click', () => moveToSlide(currentIndex + 1));
    prevButton.addEventListener('click', () => moveToSlide(currentIndex - 1));

    window.addEventListener('resize', initialPosition);
});
</script>