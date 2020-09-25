<!-- START CONTACT -->
<section class="section slide5 contact-sec" id="contact">
    <div class="container expand-container">
        <div class="row">
            <div class="col-12 col-lg-6 section4left wow" data-wow-delay=".8s">
                <h4 class="heading text-center text-md-right main-font">
                    سوالی دارید؟<span class="d-block main-color"> با ما در تماس باشید </span>
                </h4>
                <div class="contact-details wow fadeInRight">
                    <ul>
                        <li>
                            <i aria-hidden="true" class="fas fa-map-marker-alt"></i>
                            {{$website->address}}
                        </li>
                        <li>
                            <i aria-hidden="true" class="fas fa-phone-volume"></i>
                            @foreach (explode(',', $website->phones) as $phone)
                                <a href="tel:{{$phone}}"> {{prettyPhone($phone)}} </a>
                            @endforeach
                        </li>
                    </ul>
                </div>
                <div class="">

                </div>
                <div class="slider-social side-icons contact-social">
                    <ul class="list-unstyled d-flex">
                        <li><a class="social-icon" href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="social-icon" href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
                        <li><a class="social-icon" href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a class="social-icon" href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-5 offset-lg-1 section4left wow text-center text-lg-left d-flex align-items-center" data-wow-delay=".8s">
                <form class="row contact-form wow fadeInLeft" id="contact-form-data" dir="rtl" action="{{route('message.store')}}">
                    <div class="col-12 col-lg-12" id="result"></div>
                    <div class="col-12 col-lg-12">
                        <input type="text" name="name" placeholder="نام شما" class="form-control" required>
                        <input type="text" name="subject" placeholder="موضوع" class="form-control" required>
                        <input type="text" name="phone" placeholder="شماره تماس" class="form-control" required>
                        <textarea class="form-control" name="info" rows="6" placeholder="توضیحات (اختیاری)"></textarea>
                        <button type="submit" class="btn btn-medium btn-rounded btn-red rounded-pill w-100 contact_btn main-font">
                            تایید و ارسال
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- END CONTACT -->
