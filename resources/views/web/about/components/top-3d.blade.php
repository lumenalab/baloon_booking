<!-- ======================= About Section with 3D Collage ======================= -->
<section class="about-collage-section">
    <div class="container">
        <div class="row align-items-start">
            
            <!-- Left Column: Text Content -->
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="about-text-content">
                    <h2 class="about-title">ABOUT DUBAI BALLOONING</h2>
                    <p class="about-text">
                     Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                    </p>
                </div>
            </div>

            <!-- Right Column: Interactive 3D Image Collage -->
            <div class="col-lg-6">
                <div class="image-collage-wrapper">
                    <div class="collage-image-container">
                        <img src="{{ asset('img/about/about_top_1.jpg') }}" alt="Woman looking at hot air balloons" class="collage-image is-left">
                        <img src="{{ asset('img/about/about_top_2.png') }}" alt="Couple sitting on a scenic overlook" class="collage-image is-center is-active">
                        <img src="{{ asset('img/about/about_top_3.png') }}" alt="Wedding couple with hot air balloons" class="collage-image is-right">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
/* Assumes you have Montserrat font loaded globally */
.about-collage-section {
    font-family: 'Montserrat', sans-serif;
    background-color: #fff;
    padding: 80px 0;
    overflow-x: hidden;
    position: relative;
    z-index: 1; /* Prevents overlap with sticky navbars */
    /* CHANGED: Added significant margin-top */
    margin-top: 5rem;
}

/* --- Text Content Styling --- */
.about-title {
    font-weight: 900; font-size: 2.5rem;
    margin-bottom: 1.5rem; color: #222;
}
.about-text {
    font-size: 1rem; line-height: 1.8; color: #555;
    padding-right: 1rem;
}

/* --- 3D Image Collage Styling --- */
.image-collage-wrapper {
    position: relative; width: 100%;
    max-width: 550px;
    margin: 0 auto;
    aspect-ratio: 4 / 3;
}
.collage-image-container {
    position: relative; width: 100%; height: 100%;
    perspective: 1200px;
}

.collage-image {
    position: absolute;
    width: 65%;
    top: 50%; left: 50%;
    aspect-ratio: 375 / 482;
    border-radius: 28px;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.3);
    cursor: pointer;
    object-fit: cover;
    transition: transform 0.6s cubic-bezier(0.25, 1, 0.5, 1);
}

.collage-image::after {
    content: ''; position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background-color: rgba(0, 0, 0, 0.35);
    border-radius: 28px; opacity: 1;
    transition: opacity 0.6s ease;
}

.collage-image.is-active::after {
    opacity: 0;
}

/* Positional Styles for Desktop */
.is-left {
    transform: translate(-90%, -50%) rotate(-15deg) scale(0.8);
    z-index: 1;
}
.is-center {
    transform: translate(-50%, -50%) scale(1);
    z-index: 2;
}
.is-right {
    transform: translate(-10%, -50%) rotate(15deg) scale(0.8);
    z-index: 1;
}

/* --- Responsive Adjustments --- */
@media (max-width: 991.98px) {
    .about-text-content { text-align: center; padding-right: 0; }
    
    .image-collage-wrapper {
        margin-top: 3rem;
        max-width: 450px; /* Make collage smaller on tablets */
    }
    
    /* NEW: Simpler 3D effect for tablets */
    .is-left {
        transform: translate(-70%, -50%) rotate(-10deg) scale(0.8);
    }
    .is-center {
        transform: translate(-50%, -50%) scale(0.95);
    }
    .is-right {
        transform: translate(-30%, -50%) rotate(10deg) scale(0.8);
    }
}

@media (max-width: 767px) {
    /* On mobile, switch to a simple vertical stack */
    .image-collage-wrapper {
        aspect-ratio: auto; /* Remove fixed aspect ratio */
    }
    .collage-image-container {
        display: flex; flex-direction: column;
        align-items: center; gap: 1rem;
        position: static; perspective: none;
    }
    .collage-image {
        position: static; width: 80%; height: auto;
        transform: none !important; z-index: auto !important;
        box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }
    .collage-image::after {
        display: none; /* No overlay on the simple stack */
    }
}
</style>

<script>
// The JavaScript does not need to be changed.
document.addEventListener('DOMContentLoaded', function() {
    const collageContainer = document.querySelector('.collage-image-container');
    if (!collageContainer) return;

    // A check to prevent the script from running on mobile where it's not needed
    const isMobile = () => window.innerWidth < 768;

    collageContainer.addEventListener('click', function(e) {
        if (isMobile()) return; // Don't run the 3D logic on small mobile screens

        const clickedImage = e.target.closest('.collage-image');
        if (!clickedImage || clickedImage.classList.contains('is-center')) {
            return;
        }

        const centerImage = collageContainer.querySelector('.is-center');
        const leftImage = collageContainer.querySelector('.is-left');
        const rightImage = collageContainer.querySelector('.is-right');
        
        centerImage.classList.remove('is-active');

        if (clickedImage.classList.contains('is-left')) {
            clickedImage.classList.remove('is-left');
            clickedImage.classList.add('is-center', 'is-active');
            centerImage.classList.remove('is-center');
            centerImage.classList.add('is-right');
            rightImage.classList.remove('is-right');
            rightImage.classList.add('is-left');
        } else if (clickedImage.classList.contains('is-right')) {
            clickedImage.classList.remove('is-right');
            clickedImage.classList.add('is-center', 'is-active');
            centerImage.classList.remove('is-center');
            centerImage.classList.add('is-left');
            leftImage.classList.remove('is-left');
            leftImage.classList.add('is-right');
        }
    });
});
</script>