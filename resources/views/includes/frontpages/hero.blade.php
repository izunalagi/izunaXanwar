<section class="hero-section">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12">
                <div class="text-center mb-5 pb-2">
                    <h1 class="text-white">Catalouge</h1>

                    <p class="text-white">KasirQ</p>

                    {{-- <a href="#section_2" class="btn custom-btn smoothscroll mt-3">Start listening</a> --}}
                </div>

                <div class="owl-carousel owl-theme">
                    @foreach ($products->take(6) as $hero)
                        <div class="owl-carousel-info-wrap item">
                            <img src="{{ asset('storage/' . $hero->photo) }}" class="owl-carousel-image img-fluid"
                                alt="">

                            {{-- <div class="owl-carousel-info mb-6">
                                <h4 class="mb-2">
                                    {{ $hero->name }}
                                </h4>

                                <span class="badge">{{ $hero->fkCategory->name }}</span>

                                <span class="badge">{{ $hero->fkProductDetail->brand }}</span>
                            </div> --}}

                            <div class="social-share">
                                <ul class="social-icon">

                                    <li class="social-icon-item">
                                        <a href="{{ route('catalouge.detail', $hero->id) }}"
                                            class="social-icon-link bi-three-dots-vertical"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endforeach

                    {{-- <div class="owl-carousel-info-wrap item">
                        <img src="{{ asset('frontend/images/profile/handsome-asian-man-listening-music-through-headphones.jpg') }}"
                            class="owl-carousel-image img-fluid" alt="">

                        <div class="owl-carousel-info">
                            <h4 class="mb-2">
                                William
                                <img src="{{ asset('frontend/images/verified.png') }}"
                                    class="owl-carousel-verified-image img-fluid" alt="">
                            </h4>

                            <span class="badge">Creative</span>

                            <span class="badge">Design</span>
                        </div>

                        <div class="social-share">
                            <ul class="social-icon">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-twitter"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-facebook"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-pinterest"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="owl-carousel-info-wrap item">
                        <img src="{{ asset('frontend/images/profile/cute-smiling-woman-outdoor-portrait.jpg') }}"
                            class="owl-carousel-image img-fluid" alt="">

                        <div class="owl-carousel-info">
                            <h4 class="mb-2">Taylor</h4>

                            <span class="badge">Modeling</span>

                            <span class="badge">Fashion</span>
                        </div>

                        <div class="social-share">
                            <ul class="social-icon">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-twitter"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-facebook"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-pinterest"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="owl-carousel-info-wrap item">
                        <img src="{{ asset('frontend/images/profile/man-portrait.jpg') }}"
                            class="owl-carousel-image img-fluid" alt="">

                        <div class="owl-carousel-info">
                            <h4 class="mb-2">Nick</h4>

                            <span class="badge">Acting</span>
                        </div>

                        <div class="social-share">
                            <ul class="social-icon">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-instagram"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-youtube"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="owl-carousel-info-wrap item">
                        <img src="{{ asset('frontend/images/profile/woman-posing-black-dress-medium-shot.jpg') }}"
                            class="owl-carousel-image img-fluid" alt="">

                        <div class="owl-carousel-info">
                            <h4 class="mb-2">
                                Elsa
                                <img src="{{ asset('frontend/images/verified.png') }}"
                                    class="owl-carousel-verified-image img-fluid" alt="">
                            </h4>

                            <span class="badge">Influencer</span>
                        </div>

                        <div class="social-share">
                            <ul class="social-icon">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-instagram"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-youtube"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="owl-carousel-info-wrap item">
                        <img src="{{ asset('frontend/images/profile/smart-attractive-asian-glasses-male-standing-smile-with-freshness-joyful-casual-blue-shirt-portrait-white-background.jpg') }}"
                            class="owl-carousel-image img-fluid" alt="">

                        <div class="owl-carousel-info">
                            <h4 class="mb-2">Chan</h4>

                            <span class="badge">Education</span>
                        </div>

                        <div class="social-share">
                            <ul class="social-icon">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-linkedin"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-whatsapp"></a>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>

        </div>
    </div>
</section>
