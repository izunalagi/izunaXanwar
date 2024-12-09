<section class="latest-podcast-section section-padding pb-0" id="section_2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <div class="section-title-wrap mb-5">
                    <h4 class="section-title">Detail</h4>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-12">
                        <div class="custom-block-icon-wrap">
                            <div class="custom-block-image-wrap custom-block-image-detail-page">
                                <img src="{{ asset('storage/' . $products->photo) }}"
                                    class="custom-block-image img-fluid" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9 col-12">
                        <div class="custom-block-info">
                            <div class="custom-block-top d-flex mb-1">
                                <small>
                                    <i class="bi-clock-fill custom-icon"></i>
                                    50 Minutes
                                </small>
                            </div>

                            <h2 class="mb-2">{{ $products->name }}</h2>

                            <p>Menu ini tersedia anda dapat datang langsung secara offline di cafe Ca' Amaang's.</p>

                            <p>Jangan lupa untuk melihat-lihat promo yang ada!!</p>
                            {{-- 
                            <p>.</p> --}}

                            <div class="profile-block profile-detail-block d-flex flex-wrap align-items-center mt-5">
                                <div class="d-flex mb-3 mb-lg-0 mb-md-0">
                                    <img src="{{ asset('frontend/images/profile/user.png') }}"
                                        class="profile-block-image img-fluid" alt="">

                                    <p>
                                        Farel
                                        <img src="images/verified.png" class="verified-image img-fluid" alt="">
                                        <strong>Staff</strong>
                                    </p>
                                </div>

                                <ul class="social-icon ms-lg-auto ms-md-auto">
                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-instagram"></a>
                                    </li>

                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-twitter"></a>
                                    </li>

                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-whatsapp"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
