<section class="topics-section section-padding pb-0" id="section_3">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12">
                <div class="section-title-wrap mb-5">
                    <h4 class="section-title" style="font-family: geneva">Products</h4>
                </div>
            </div>
            @foreach ($products->take(4) as $item)
                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="custom-block custom-block-overlay">
                        <a href="{{ route('catalouge.detail', $item->id) }}" class="custom-block-image-wrap"
                            style="font-family:'Helvetica'">
                            <img src="{{ asset('storage/' . $item->photo) }}" class="custom-block-image img-fluid"
                                alt="">
                        </a>

                        <div class="custom-block-info custom-block-overlay-info">
                            <h5 class="mb-1">
                                <a href="listing-page.html" style="font-family:'Franklin Gothic Medium'">
                                    {{ $item->name }}
                                </a>
                            </h5>

                            <p class="badge mb-0">{{ $item->fkProductDetail->unit }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
