<section class="latest-podcast-section section-padding pb-0" id="section_2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-12">
                <div class="section-title-wrap mb-5">
                    <h4 class="section-title" style="font-family: Geneva;">Promo</h4>
                </div>
            </div>

            <!-- Slider Wrapper -->
            <div class="scroll-snap-container">
                @foreach ($posts as $page)
                    <div class="scroll-snap-item">
                        <div class="custom-block d-flex"
                            style="border: 1px solid #ccc; border-radius: 10px; padding: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <div>
                                <div class="custom-block-icon-wrap">
                                    <a href="detail-page.html" class="custom-block-image-wrap">
                                        <img src="{{ asset('storage/' . $page->photo) }}"
                                            class="custom-block-image img-fluid" alt=""
                                            style="border-radius: 10px; width: 100px; height: 100px; object-fit: cover;">
                                    </a>
                                </div>
                            </div>
                            <div class="custom-block-info ms-3">
                                <div class="custom-block-top d-flex mb-1">
                                    <small class="me-4">
                                        <i class="bi-clock-fill custom-icon"></i>
                                        50 Minutes ago
                                    </small>
                                    <small><span class="badge"
                                            style="background-color: #007bff; color: white;">New!!</span></small>
                                </div>
                                <h5 class="mb-2">
                                    <a href="detail-page.html" style="font-family: 'Franklin Gothic Medium';">
                                        {{ $page->title }}
                                    </a>
                                </h5>
                                <div class="profile-block d-flex align-items-center">
                                    <img src="{{ asset('frontend/images/profile/user.png') }}"
                                        class="profile-block-image img-fluid me-2"
                                        style="width: 35px; height: 35px; border-radius: 50%;" alt="">
                                    <p style="margin: 0; font-size: 14px;">
                                        Farel
                                        <img src="{{ asset('frontend/images/verified.png') }}"
                                            class="verified-image img-fluid" alt=""
                                            style="width: 15px; margin-left: 5px;">
                                        <strong>Staff</strong>
                                    </p>
                                </div>
                                <p class="mt-2 mb-2">{{ $page->description }}</p>
                                <div class="custom-block-bottom d-flex justify-content-between">
                                    <a href="#" class="bi-cursor me-1"><span>120k</span></a>
                                    <a href="#" class="bi-heart me-1"><span>42.5k</span></a>
                                    <a href="#" class="bi-chat me-1"><span>11k</span></a>
                                    <a href="#" class="bi-download"><span>50k</span></a>
                                </div>
                            </div>
                            <div class="d-flex flex-column ms-auto align-items-center">
                                <a href="#" class="badge ms-auto mb-2"><i class="bi-heart"></i></a>
                                <a href="#" class="badge ms-auto"><i class="bi-bookmark"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- CSS -->
<style>
    /* Container Scroll Snap */
    .scroll-snap-container {
        display: flex;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        gap: 20px;
        padding: 10px 0;
        scrollbar-width: none;
        /* Hide scrollbar (Firefox) */
    }

    .scroll-snap-container::-webkit-scrollbar {
        display: none;
        /* Hide scrollbar (Chrome, Safari) */
    }

    /* Item Scroll Snap */
    .scroll-snap-item {
        scroll-snap-align: center;
        flex: 0 0 calc(50% - 10px);
        /* Tampilkan 2 card sekaligus */
    }

    /* Responsive: 1 card di layar kecil */
    @media (max-width: 768px) {
        .scroll-snap-item {
            flex: 0 0 100%;
        }
    }
</style>

<!-- JavaScript: Auto Scroll -->
<script>
    const scrollContainer = document.querySelector('.scroll-snap-container');
    let scrollInterval;

    // Function to scroll automatically
    function autoScroll() {
        scrollInterval = setInterval(() => {
            if (scrollContainer.scrollLeft + scrollContainer.offsetWidth >= scrollContainer.scrollWidth) {
                scrollContainer.scrollTo({
                    left: 0,
                    behavior: 'smooth'
                }); // Kembali ke awal
            } else {
                scrollContainer.scrollBy({
                    left: scrollContainer.offsetWidth,
                    behavior: 'smooth'
                });
            }
        }, 3000); // Scroll setiap 3 detik
    }

    // Start Auto Scroll
    autoScroll();

    // Pause scrolling saat user menggeser secara manual
    scrollContainer.addEventListener('scroll', () => {
        clearInterval(scrollInterval);
        autoScroll(); // Restart auto scroll setelah selesai
    });
</script>
