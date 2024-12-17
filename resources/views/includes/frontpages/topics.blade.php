<section class="topics-section section-padding pb-0" id="section_3">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12">
                <div class="section-title-wrap mb-5">
                    <h4 class="section-title" style="font-family: geneva">Menu Yang Tersedia</h4>
                </div>
            </div>

            <div class="owl-carousel owl-theme">
                @foreach ($products as $item)
                    <div class="item">
                        <div class="custom-block custom-block-overlay">
                            <img src="{{ asset('storage/' . $item->photo) }}" class="custom-block-image img-fluid"
                                alt="">

                            <div class="custom-block-info custom-block-overlay-info">

                                <p class="badge mb-0">
                                    {{ $item->fkProductDetail ? $item->fkProductDetail->unit : 'No Unit Available' }}
                                </p>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</section>
