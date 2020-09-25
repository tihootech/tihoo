<!-- START REVIEWS -->
<section class="section slide4 reviews" id="reviews">
    <div class="container expand-container">
        <div class="row align-items-center mb-3 mb-md-5 section-heading">
            <div class="col-12 section3zoom text-center wow" data-wow-delay=".8s">
                <h4 class="main-font"> اعضای مجموعه </h4>
                <h2 class="main-font main-color">تیهوتک</h2>
            </div>
        </div>

        <!-- Testimonial Slider -->
        <div id="testimonial-carousal" class="owl-carousel owl-theme testimonial-owl text-center wow fadeIn" data-wow-delay="300ms">
            @foreach ($members as $member)
                <div class="item review-zoom1In wow" data-wow-delay=".2s">
                    <div class="icon-quotes mb-4">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <div class="description">
                        <p class="text-grey paragraph">{{$member->quote}}</p>
                    </div>
                    <div class="testimonial-img mt-4">
                        <img src="{{asset($member->avatar)}}" alt="{{$member->name}}">
                    </div>
                    <div class="testimonial-tittle mt-3 mb-3">
                        <h3 class="mb-0 text-grey alt-font">{{$member->name}}</h3>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- END REVIEWS -->
