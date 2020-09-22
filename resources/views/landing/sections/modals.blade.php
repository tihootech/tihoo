<div id="data-modal">
    <!-- Modal Window 1 Start -->
    <div class="modal-window" id="morphic-window1">
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
                                        <img class="d-block w-100" src="images/modal-img.png" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/modal-img.png" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/modal-img.png" alt="Third slide">
                                    </div>
                                </div>
                                <!--/.Slides-->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-thumb" data-slide-to="0" class="active">
                                        <img class="d-block w-100 img-fluid" src="images/modal-sub.png" alt="First slide">
                                    </li>
                                    <li data-target="#carousel-thumb" data-slide-to="1">
                                        <img class="d-block w-100 img-fluid" src="images/modal-sub.png" alt="Second slide">
                                    </li>
                                    <li data-target="#carousel-thumb" data-slide-to="2">
                                        <img class="d-block w-100 img-fluid" src="images/modal-sub.png" alt="Third slide">
                                    </li>
                                </ol>
                            </div>
                            <!--/.Carousel Wrapper-->
                        </div>
                        <div class="morphic-title col-12 col-md-6">
                            <h5>Article PZ-1000-23</h5>
                            <h3>Salomon Sneakers</h3>
                            <p>Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy. </p>

                            <div class="row pb-md-4">
                                <!-- Sizes -->
                                <div class="col-3 col-md-2 d-flex align-items-start">
                                    <div class="color-selection">
                                        <h6 class="text-center text-md-left">Size:</h6>
                                    </div>
                                </div>
                                <div class="col-9 col-md-10">
                                    <div class="color-picker text-center text-md-left">
                                        <div class="size__item">
                                            <h6 class="active">38</h6>
                                            <h6>39</h6>
                                            <h6>40</h6>
                                            <h6>41</h6>
                                            <h6>42</h6>
                                            <h6>43</h6>
                                            <h6>44</h6>
                                            <h6>45</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row pb-4">
                                <!-- Quantity -->
                                <div class="col-6 col-md-1 col-lg-2 d-flex align-items-start">
                                    <div class="color-selection">
                                        <h6 class="text-center text-md-left">Qty:</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-md-5 col-lg-4 input_plus_mins">
                                    <div class="qty">
                                        <span class="minus bg-dark"><i class="lni-minus"></i></span>
                                        <input type="number" class="count" name="qty" value="1">
                                        <span class="plus bg-dark"><i class="lni-plus"></i></span>
                                    </div>
                                </div>
                                <!-- Color-Picker -->
                                <div class="col-6 col-md-2 d-flex align-items-start">
                                    <div class="color-selection">
                                        <h6 class="text-center text-md-left">Color:</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="color-picker text-center text-md-left">
                                        <!-- Color-1 -->
                                        <div class="color-picker__item">
                                            <input id="input1" type="radio" class="color-picker__input" name="color-input" value="1"/>
                                            <label for="input1" class="color-picker__color  color-picker__color--white"></label>
                                        </div>
                                        <!-- Color-2 -->
                                        <div class="color-picker__item">
                                            <input id="input2" type="radio" class="color-picker__input" name="color-input" value="4"/>
                                            <label for="input2" class="color-picker__color color-picker__color--color2"></label>
                                        </div>
                                        <!-- Color-3 -->
                                        <div class="color-picker__item">
                                            <input id="input3" type="radio" class="color-picker__input" name="color-input" value="7"/>
                                            <label for="input3" class="color-picker__color color-picker__color--color5"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 price-modal"><h1>$299.00</h1></div>
                                <div class="col-12 modal-btn"><a target="_blank" href="https://www.amazon.com/" class="btn btn-medium btn-rounded btn-trans text-capitalize">Buy Now</a></div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Next & Prev  -->
                    <div class="row justify-content-end">
                        <div class="d-none d-md-block left-arrow-sec text-center mt-auto mb-auto">
                            <a class="d-flex justify-content-center" onclick="prev_window('morphic-window6');"><i class="fa fa-angle-left"></i></a>
                        </div>
                        <div class="d-none d-md-block right-arrow-sec text-center mt-auto mb-auto">
                            <a class="d-flex justify-content-center" onclick="next_window('morphic-window2');"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Window 1 End -->

    <!-- Modal Window 2 Start -->
    <div class="modal-window" id="morphic-window2">
        <div class="modal-body">
            <header>
                <span class="close-modal"><i></i><i></i></span>
            </header>
            <div class="morphic-body">
                <div class="container">
                    <div class="row main-morphic-body align-items-center">
                        <div class="morphic-img col-12 col-md-6">
                            <!-- Main Image -->
                            <div id="carousel-thumb2" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                                <!--Slides-->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="images/modal-img.png" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/modal-img.png" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/modal-img.png" alt="Third slide">
                                    </div>
                                </div>
                                <!--/.Slides-->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-thumb2" data-slide-to="0" class="active">
                                        <img class="d-block w-100 img-fluid" src="images/modal-sub.png" alt="First slide">
                                    </li>
                                    <li data-target="#carousel-thumb2" data-slide-to="1">
                                        <img class="d-block w-100 img-fluid" src="images/modal-sub.png" alt="Second slide">
                                    </li>
                                    <li data-target="#carousel-thumb2" data-slide-to="2">
                                        <img class="d-block w-100 img-fluid" src="images/modal-sub.png" alt="Third slide">
                                    </li>
                                </ol>
                            </div>
                            <!--/.Carousel Wrapper-->
                        </div>
                        <div class="morphic-title col-12 col-md-6">
                            <h5>Article PZ-1000-23</h5>
                            <h3>Nike Air Max</h3>
                            <p>Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy. </p>

                            <div class="row pb-md-4">
                                <!-- Sizes -->
                                <div class="col-3 col-md-2 d-flex align-items-start">
                                    <div class="color-selection">
                                        <h6 class="text-center text-md-left">Size:</h6>
                                    </div>
                                </div>
                                <div class="col-9 col-md-10">
                                    <div class="color-picker text-center text-md-left">
                                        <div class="size__item">
                                            <h6 class="active">38</h6>
                                            <h6>39</h6>
                                            <h6>40</h6>
                                            <h6>41</h6>
                                            <h6>42</h6>
                                            <h6>43</h6>
                                            <h6>44</h6>
                                            <h6>45</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row pb-4">
                                <!-- Quantity -->
                                <div class="col-6 col-md-1 col-lg-2 d-flex align-items-start">
                                    <div class="color-selection">
                                        <h6 class="text-center text-md-left">Qty:</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-md-5 col-lg-4 input_plus_mins">
                                    <div class="qty">
                                        <span class="minus bg-dark"><i class="lni-minus"></i></span>
                                        <input type="number" class="count" name="qty" value="1">
                                        <span class="plus bg-dark"><i class="lni-plus"></i></span>
                                    </div>
                                </div>
                                <!-- Color-Picker -->
                                <div class="col-6 col-md-2 d-flex align-items-start">
                                    <div class="color-selection">
                                        <h6 class="text-center text-md-left">Color:</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="color-picker text-center text-md-left">
                                        <!-- Color-1 -->
                                        <div class="color-picker__item">
                                            <input id="input4" type="radio" class="color-picker__input" name="color-input" value="1"/>
                                            <label for="input4" class="color-picker__color  color-picker__color--white"></label>
                                        </div>
                                        <!-- Color-2 -->
                                        <div class="color-picker__item">
                                            <input id="input5" type="radio" class="color-picker__input" name="color-input" value="4"/>
                                            <label for="input5" class="color-picker__color color-picker__color--color2"></label>
                                        </div>
                                        <!-- Color-3 -->
                                        <div class="color-picker__item">
                                            <input id="input6" type="radio" class="color-picker__input" name="color-input" value="7"/>
                                            <label for="input6" class="color-picker__color color-picker__color--color5"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 price-modal"><h1>$180.00</h1></div>
                                <div class="col-12 modal-btn"><a target="_blank" href="https://www.amazon.com/" class="btn btn-medium btn-rounded btn-trans text-capitalize">Buy Now</a></div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Next & Prev  -->
                    <div class="row justify-content-end">
                        <div class="d-none d-md-block left-arrow-sec text-center mt-auto mb-auto">
                            <a class="d-flex justify-content-center" onclick="prev_window('morphic-window1');"><i class="fa fa-angle-left"></i></a>
                        </div>
                        <div class="d-none d-md-block right-arrow-sec text-center mt-auto mb-auto">
                            <a class="d-flex justify-content-center" onclick="next_window('morphic-window3');"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Window 2 End -->

    <!-- Modal Window 3 Start -->
    <div class="modal-window" id="morphic-window3">
        <div class="modal-body">
            <header>
                <span class="close-modal"><i></i><i></i></span>
            </header>
            <div class="morphic-body">
                <div class="container">
                    <div class="row main-morphic-body align-items-center">
                        <div class="morphic-img col-12 col-md-6">
                            <!-- Main Image -->
                            <div id="carousel-thumb3" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                                <!--Slides-->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="images/modal-img.png" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/modal-img.png" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/modal-img.png" alt="Third slide">
                                    </div>
                                </div>
                                <!--/.Slides-->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-thumb3" data-slide-to="0" class="active">
                                        <img class="d-block w-100 img-fluid" src="images/modal-sub.png" alt="First slide">
                                    </li>
                                    <li data-target="#carousel-thumb3" data-slide-to="1">
                                        <img class="d-block w-100 img-fluid" src="images/modal-sub.png" alt="Second slide">
                                    </li>
                                    <li data-target="#carousel-thumb3" data-slide-to="2">
                                        <img class="d-block w-100 img-fluid" src="images/modal-sub.png" alt="Third slide">
                                    </li>
                                </ol>
                            </div>
                            <!--/.Carousel Wrapper-->
                        </div>
                        <div class="morphic-title col-12 col-md-6">
                            <h5>Article PZ-1000-23</h5>
                            <h3>Air Jordan</h3>
                            <p>Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy. </p>

                            <div class="row pb-md-4">
                                <!-- Sizes -->
                                <div class="col-3 col-md-2 d-flex align-items-start">
                                    <div class="color-selection">
                                        <h6 class="text-center text-md-left">Size:</h6>
                                    </div>
                                </div>
                                <div class="col-9 col-md-10">
                                    <div class="color-picker text-center text-md-left">
                                        <div class="size__item">
                                            <h6 class="active">38</h6>
                                            <h6>39</h6>
                                            <h6>40</h6>
                                            <h6>41</h6>
                                            <h6>42</h6>
                                            <h6>43</h6>
                                            <h6>44</h6>
                                            <h6>45</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row pb-4">
                                <!-- Quantity -->
                                <div class="col-6 col-md-1 col-lg-2 d-flex align-items-start">
                                    <div class="color-selection">
                                        <h6 class="text-center text-md-left">Qty:</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-md-5 col-lg-4 input_plus_mins">
                                    <div class="qty">
                                        <span class="minus bg-dark"><i class="lni-minus"></i></span>
                                        <input type="number" class="count" name="qty" value="1">
                                        <span class="plus bg-dark"><i class="lni-plus"></i></span>
                                    </div>
                                </div>
                                <!-- Color-Picker -->
                                <div class="col-6 col-md-2 d-flex align-items-start">
                                    <div class="color-selection">
                                        <h6 class="text-center text-md-left">Color:</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="color-picker text-center text-md-left">
                                        <!-- Color-1 -->
                                        <div class="color-picker__item">
                                            <input id="input7" type="radio" class="color-picker__input" name="color-input" value="1"/>
                                            <label for="input7" class="color-picker__color  color-picker__color--white"></label>
                                        </div>
                                        <!-- Color-2 -->
                                        <div class="color-picker__item">
                                            <input id="input8" type="radio" class="color-picker__input" name="color-input" value="4"/>
                                            <label for="input8" class="color-picker__color color-picker__color--color2"></label>
                                        </div>
                                        <!-- Color-3 -->
                                        <div class="color-picker__item">
                                            <input id="input9" type="radio" class="color-picker__input" name="color-input" value="7"/>
                                            <label for="input9" class="color-picker__color color-picker__color--color5"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 price-modal"><h1>$220.00</h1></div>
                                <div class="col-12 modal-btn"><a target="_blank" href="https://www.amazon.com/" class="btn btn-medium btn-rounded btn-trans text-capitalize">Buy Now</a></div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Next & Prev  -->
                    <div class="row justify-content-end">
                        <div class="d-none d-md-block left-arrow-sec text-center mt-auto mb-auto">
                            <a class="d-flex justify-content-center" onclick="prev_window('morphic-window2');"><i class="fa fa-angle-left"></i></a>
                        </div>
                        <div class="d-none d-md-block right-arrow-sec text-center mt-auto mb-auto">
                            <a class="d-flex justify-content-center" onclick="next_window('morphic-window4');"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Window 3 End -->

    <!-- Modal Window 4 Start -->
    <div class="modal-window" id="morphic-window4">
        <div class="modal-body">
            <header>
                <span class="close-modal"><i></i><i></i></span>
            </header>
            <div class="morphic-body">
                <div class="container">
                    <div class="row main-morphic-body align-items-center">
                        <div class="morphic-img col-12 col-md-6">
                            <!-- Main Image -->
                            <div id="carousel-thumb4" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                                <!--Slides-->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="images/modal-img.png" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/modal-img.png" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/modal-img.png" alt="Third slide">
                                    </div>
                                </div>
                                <!--/.Slides-->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-thumb4" data-slide-to="0" class="active">
                                        <img class="d-block w-100 img-fluid" src="images/modal-sub.png" alt="First slide">
                                    </li>
                                    <li data-target="#carousel-thumb4" data-slide-to="1">
                                        <img class="d-block w-100 img-fluid" src="images/modal-sub.png" alt="Second slide">
                                    </li>
                                    <li data-target="#carousel-thumb4" data-slide-to="2">
                                        <img class="d-block w-100 img-fluid" src="images/modal-sub.png" alt="Third slide">
                                    </li>
                                </ol>
                            </div>
                            <!--/.Carousel Wrapper-->
                        </div>
                        <div class="morphic-title col-12 col-md-6">
                            <h5>Article PZ-1000-23</h5>
                            <h3>Adidas Consortium</h3>
                            <p>Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy. </p>

                            <div class="row pb-md-4">
                                <!-- Sizes -->
                                <div class="col-3 col-md-2 d-flex align-items-start">
                                    <div class="color-selection">
                                        <h6 class="text-center text-md-left">Size:</h6>
                                    </div>
                                </div>
                                <div class="col-9 col-md-10">
                                    <div class="color-picker text-center text-md-left">
                                        <div class="size__item">
                                            <h6 class="active">38</h6>
                                            <h6>39</h6>
                                            <h6>40</h6>
                                            <h6>41</h6>
                                            <h6>42</h6>
                                            <h6>43</h6>
                                            <h6>44</h6>
                                            <h6>45</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row pb-4">
                                <!-- Quantity -->
                                <div class="col-6 col-md-1 col-lg-2 d-flex align-items-start">
                                    <div class="color-selection">
                                        <h6 class="text-center text-md-left">Qty:</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-md-5 col-lg-4 input_plus_mins">
                                    <div class="qty">
                                        <span class="minus bg-dark"><i class="lni-minus"></i></span>
                                        <input type="number" class="count" name="qty" value="1">
                                        <span class="plus bg-dark"><i class="lni-plus"></i></span>
                                    </div>
                                </div>
                                <!-- Color-Picker -->
                                <div class="col-6 col-md-2 d-flex align-items-start">
                                    <div class="color-selection">
                                        <h6 class="text-center text-md-left">Color:</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="color-picker text-center text-md-left">
                                        <!-- Color-1 -->
                                        <div class="color-picker__item">
                                            <input id="input10" type="radio" class="color-picker__input" name="color-input" value="1"/>
                                            <label for="input10" class="color-picker__color  color-picker__color--white"></label>
                                        </div>
                                        <!-- Color-2 -->
                                        <div class="color-picker__item">
                                            <input id="input11" type="radio" class="color-picker__input" name="color-input" value="4"/>
                                            <label for="input11" class="color-picker__color color-picker__color--color2"></label>
                                        </div>
                                        <!-- Color-3 -->
                                        <div class="color-picker__item">
                                            <input id="input12" type="radio" class="color-picker__input" name="color-input" value="7"/>
                                            <label for="input12" class="color-picker__color color-picker__color--color5"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 price-modal"><h1>$160.00</h1></div>
                                <div class="col-12 modal-btn"><a target="_blank" href="https://www.amazon.com/" class="btn btn-medium btn-rounded btn-trans text-capitalize">Buy Now</a></div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Next & Prev  -->
                    <div class="row justify-content-end">
                        <div class="d-none d-md-block left-arrow-sec text-center mt-auto mb-auto">
                            <a class="d-flex justify-content-center" onclick="prev_window('morphic-window3');"><i class="fa fa-angle-left"></i></a>
                        </div>
                        <div class="d-none d-md-block right-arrow-sec text-center mt-auto mb-auto">
                            <a class="d-flex justify-content-center" onclick="next_window('morphic-window5');"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Window 4 End -->

    <!-- Modal Window 5 Start -->
    <div class="modal-window" id="morphic-window5">
        <div class="modal-body">
            <header>
                <span class="close-modal"><i></i><i></i></span>
            </header>
            <div class="morphic-body">
                <div class="container">
                    <div class="row main-morphic-body align-items-center">
                        <div class="morphic-img col-12 col-md-6">
                            <!-- Main Image -->
                            <div id="carousel-thumb5" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                                <!--Slides-->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="images/modal-img.png" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/modal-img.png" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/modal-img.png" alt="Third slide">
                                    </div>
                                </div>
                                <!--/.Slides-->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-thumb5" data-slide-to="0" class="active">
                                        <img class="d-block w-100 img-fluid" src="images/modal-sub.png" alt="First slide">
                                    </li>
                                    <li data-target="#carousel-thumb5" data-slide-to="1">
                                        <img class="d-block w-100 img-fluid" src="images/modal-sub.png" alt="Second slide">
                                    </li>
                                    <li data-target="#carousel-thumb5" data-slide-to="2">
                                        <img class="d-block w-100 img-fluid" src="images/modal-sub.png" alt="Third slide">
                                    </li>
                                </ol>
                            </div>
                            <!--/.Carousel Wrapper-->
                        </div>
                        <div class="morphic-title col-12 col-md-6">
                            <h5>Article PZ-1000-23</h5>
                            <h3>Nike Air Mag</h3>
                            <p>Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy. </p>

                            <div class="row pb-md-4">
                                <!-- Sizes -->
                                <div class="col-3 col-md-2 d-flex align-items-start">
                                    <div class="color-selection">
                                        <h6 class="text-center text-md-left">Size:</h6>
                                    </div>
                                </div>
                                <div class="col-9 col-md-10">
                                    <div class="color-picker text-center text-md-left">
                                        <div class="size__item">
                                            <h6 class="active">38</h6>
                                            <h6>39</h6>
                                            <h6>40</h6>
                                            <h6>41</h6>
                                            <h6>42</h6>
                                            <h6>43</h6>
                                            <h6>44</h6>
                                            <h6>45</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row pb-4">
                                <!-- Quantity -->
                                <div class="col-6 col-md-1 col-lg-2 d-flex align-items-start">
                                    <div class="color-selection">
                                        <h6 class="text-center text-md-left">Qty:</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-md-5 col-lg-4 input_plus_mins">
                                    <div class="qty">
                                        <span class="minus bg-dark"><i class="lni-minus"></i></span>
                                        <input type="number" class="count" name="qty" value="1">
                                        <span class="plus bg-dark"><i class="lni-plus"></i></span>
                                    </div>
                                </div>
                                <!-- Color-Picker -->
                                <div class="col-6 col-md-2 d-flex align-items-start">
                                    <div class="color-selection">
                                        <h6 class="text-center text-md-left">Color:</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="color-picker text-center text-md-left">
                                        <!-- Color-1 -->
                                        <div class="color-picker__item">
                                            <input id="input13" type="radio" class="color-picker__input" name="color-input" value="1"/>
                                            <label for="input13" class="color-picker__color  color-picker__color--white"></label>
                                        </div>
                                        <!-- Color-2 -->
                                        <div class="color-picker__item">
                                            <input id="input14" type="radio" class="color-picker__input" name="color-input" value="4"/>
                                            <label for="input14" class="color-picker__color color-picker__color--color2"></label>
                                        </div>
                                        <!-- Color-3 -->
                                        <div class="color-picker__item">
                                            <input id="input15" type="radio" class="color-picker__input" name="color-input" value="7"/>
                                            <label for="input15" class="color-picker__color color-picker__color--color5"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 price-modal"><h1>$199.00</h1></div>
                                <div class="col-12 modal-btn"><a target="_blank" href="https://www.amazon.com/" class="btn btn-medium btn-rounded btn-trans text-capitalize">Buy Now</a></div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Next & Prev  -->
                    <div class="row justify-content-end">
                        <div class="d-none d-md-block left-arrow-sec text-center mt-auto mb-auto">
                            <a class="d-flex justify-content-center" onclick="prev_window('morphic-window4');"><i class="fa fa-angle-left"></i></a>
                        </div>
                        <div class="d-none d-md-block right-arrow-sec text-center mt-auto mb-auto">
                            <a class="d-flex justify-content-center" onclick="next_window('morphic-window6');"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Window 5 End -->

    <!-- Modal Window 6 Start -->
    <div class="modal-window" id="morphic-window6">
        <div class="modal-body">
            <header>
                <span class="close-modal"><i></i><i></i></span>
            </header>
            <div class="morphic-body">
                <div class="container">
                    <div class="row main-morphic-body align-items-center">
                        <div class="morphic-img col-12 col-md-6">
                            <!-- Main Image -->
                            <div id="carousel-thumb6" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                                <!--Slides-->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="images/modal-img.png" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/modal-img.png" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/modal-img.png" alt="Third slide">
                                    </div>
                                </div>
                                <!--/.Slides-->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-thumb6" data-slide-to="0" class="active">
                                        <img class="d-block w-100 img-fluid" src="images/modal-sub.png" alt="First slide">
                                    </li>
                                    <li data-target="#carousel-thumb6" data-slide-to="1">
                                        <img class="d-block w-100 img-fluid" src="images/modal-sub.png" alt="Second slide">
                                    </li>
                                    <li data-target="#carousel-thumb6" data-slide-to="2">
                                        <img class="d-block w-100 img-fluid" src="images/modal-sub.png" alt="Third slide">
                                    </li>
                                </ol>
                            </div>
                            <!--/.Carousel Wrapper-->
                        </div>
                        <div class="morphic-title col-12 col-md-6">
                            <h5>Article PZ-1000-23</h5>
                            <h3>Nike Syracuse</h3>
                            <p>Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy. </p>

                            <div class="row pb-md-4">
                                <!-- Sizes -->
                                <div class="col-3 col-md-2 d-flex align-items-start">
                                    <div class="color-selection">
                                        <h6 class="text-center text-md-left">Size:</h6>
                                    </div>
                                </div>
                                <div class="col-9 col-md-10">
                                    <div class="color-picker text-center text-md-left">
                                        <div class="size__item">
                                            <h6 class="active">38</h6>
                                            <h6>39</h6>
                                            <h6>40</h6>
                                            <h6>41</h6>
                                            <h6>42</h6>
                                            <h6>43</h6>
                                            <h6>44</h6>
                                            <h6>45</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row pb-4">
                                <!-- Quantity -->
                                <div class="col-6 col-md-1 col-lg-2 d-flex align-items-start">
                                    <div class="color-selection">
                                        <h6 class="text-center text-md-left">Qty:</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-md-5 col-lg-4 input_plus_mins">
                                    <div class="qty">
                                        <span class="minus bg-dark"><i class="lni-minus"></i></span>
                                        <input type="number" class="count" name="qty" value="1">
                                        <span class="plus bg-dark"><i class="lni-plus"></i></span>
                                    </div>
                                </div>
                                <!-- Color-Picker -->
                                <div class="col-6 col-md-2 d-flex align-items-start">
                                    <div class="color-selection">
                                        <h6 class="text-center text-md-left">Color:</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="color-picker text-center text-md-left">
                                        <!-- Color-1 -->
                                        <div class="color-picker__item">
                                            <input id="input16" type="radio" class="color-picker__input" name="color-input" value="1"/>
                                            <label for="input16" class="color-picker__color  color-picker__color--white"></label>
                                        </div>
                                        <!-- Color-2 -->
                                        <div class="color-picker__item">
                                            <input id="input17" type="radio" class="color-picker__input" name="color-input" value="4"/>
                                            <label for="input17" class="color-picker__color color-picker__color--color2"></label>
                                        </div>
                                        <!-- Color-3 -->
                                        <div class="color-picker__item">
                                            <input id="input18" type="radio" class="color-picker__input" name="color-input" value="7"/>
                                            <label for="input18" class="color-picker__color color-picker__color--color5"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 price-modal"><h1>$350.00</h1></div>
                                <div class="col-12 modal-btn"><a target="_blank" href="https://www.amazon.com/" class="btn btn-medium btn-rounded btn-trans text-capitalize">Buy Now</a></div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Next & Prev  -->
                    <div class="row justify-content-end">
                        <div class="d-none d-md-block left-arrow-sec text-center mt-auto mb-auto">
                            <a class="d-flex justify-content-center" onclick="prev_window('morphic-window5');"><i class="fa fa-angle-left"></i></a>
                        </div>
                        <div class="d-none d-md-block right-arrow-sec text-center mt-auto mb-auto">
                            <a class="d-flex justify-content-center" onclick="next_window('morphic-window1');"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Window 6 End -->
</div>
