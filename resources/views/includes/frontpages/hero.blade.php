<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="text-center mb-5 pb-2">
                    <h1 class="text-white" style="font-family: 'Geneva';">Katalog Produk</h1>
                    <p class="text-white" style="font-family: 'Arial'; font-size:30px;">Ca' Amang's Cafe</p>
                </div>

                <div class="owl-carousel owl-theme">
                    <!-- Card 1 -->
                    <div class="owl-carousel-info-wrap item">
                        <img src="{{ asset('frontend/images/ruangan/1.jpg') }}" class="owl-carousel-image img-fluid"
                            alt="Photo 1" style="object-fit: cover; width: 100%; height: 100%; aspect-ratio: 1 / 1;">
                        <div class="social-share">
                            <ul class="social-icon">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-three-dots-vertical"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="owl-carousel-info-wrap item">
                        <img src="{{ asset('frontend/images/ruangan/2.jpg') }}" class="owl-carousel-image img-fluid"
                            alt="Photo 2" style="object-fit: cover; width: 100%; height: 100%; aspect-ratio: 1 / 1;">
                        <div class="social-share">
                            <ul class="social-icon">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-three-dots-vertical"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="owl-carousel-info-wrap item">
                        <img src="{{ asset('frontend/images/ruangan/3.jpeg') }}" class="owl-carousel-image img-fluid"
                            alt="Photo 3" style="object-fit: cover; width: 100%; height: 100%; aspect-ratio: 1 / 1;">
                        <div class="social-share">
                            <ul class="social-icon">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-three-dots-vertical"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="owl-carousel-info-wrap item">
                        <img src="{{ asset('frontend/images/ruangan/4.jpeg') }}" class="owl-carousel-image img-fluid"
                            alt="Photo 4" style="object-fit: cover; width: 100%; height: 100%; aspect-ratio: 1 / 1;">
                        <div class="social-share">
                            <ul class="social-icon">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-three-dots-vertical"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="owl-carousel-info-wrap item">
                        <img src="{{ asset('frontend/images/ruangan/5.jpg') }}" class="owl-carousel-image img-fluid"
                            alt="Photo 5" style="object-fit: cover; width: 100%; height: 100%; aspect-ratio: 1 / 1;">
                        <div class="social-share">
                            <ul class="social-icon">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-three-dots-vertical"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Include Owl Carousel CSS and JS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- Initialize Owl Carousel -->
<script>
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 5
                }
            }
        });
    });
</script>
