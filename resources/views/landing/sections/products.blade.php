<!-- START ALL PRODUCTS -->
<section class="section slide2 all-products" id="all-products">
    <div class="container expand-container position-relative">
        <div class="row align-items-center mb-3 mb-md-5 section-heading">
            <div class="col-12 col-md-10 section2left wow" data-wow-delay=".8s">
                <h2 class="main-font"> تیهوتک <span class="d-block main-color"> نمونه کار ها </span></h2>
            </div>
        </div>

        <!-- Products -->
        <div class="row products-fade wow" data-wow-delay=".8s">
            <div class="owl-products owl-carousel owl-theme wow fadeInUp">

                @foreach ($products as $product)
                    <div class="team-box item">
                        <div class="team-image">
                            <img src="{{asset($product->image)}}" alt="{{$product->title}}">
                        </div>
                        <div class="team-text">
                            <h5 class="main-font">{{$product->title}}</h5>
                            <a onclick="morphic_window('morphic-window-{{$product->id}}');" class="btn btn-medium btn-rounded btn-trans text-capitalize mt-3 mb-5 mb-md-0">
                                مشاهده جزییات
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <!--Owl Nav-->
        <a class='circle' id="team-circle-left"><i class="lni lni-chevron-left"></i></a>
        <a class='circle' id="team-circle-right"><i class="lni lni-chevron-right"></i></a>
    </div>
</section>
<!-- END ALL PRODUCTS -->


<div id="data-modal">

    @foreach ($products as $product)
        <div class="modal-window" id="morphic-window-{{$product->id}}">
            <div class="modal-body">
                <header>
                    <span class="close-modal"><i></i><i></i></span>
                </header>
                <div class="morphic-body">
                    <div class="container">
                        <div class="row main-morphic-body align-items-center">
                            <div class="morphic-img col-12 col-md-6">
                                <!-- Main Image -->
                                <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                                    <!--Slides-->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="{{asset($product->image)}}" alt="{{$product->title}}">
                                        </div>
                                    </div>
                                </div>
                                <!--/.Carousel Wrapper-->
                            </div>
                            <div class="morphic-title col-12 col-md-6">
                                <h5 class="mb-3">طراحی شده توسط مجموعه تیهوتک</h5>
                                <h3>{{$product->title}}</h3>
                                <p>{{$product->info}}</p>

                                <a target="_blank" href="{{$product->link}}" class="btn btn-medium btn-rounded btn-trans text-capitalize">
                                    مشاهده وبسایت
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endforeach

</div>
