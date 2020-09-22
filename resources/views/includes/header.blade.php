<!-- START LOADER -->
<div class="loader-bg">
    <div id="container">
        <svg viewBox="0 0 100 100">
            <defs>
                <filter id="shadow">
                    <feDropShadow dx="0" dy="0" stdDeviation="0.5" flood-color="#dabd1d"/>
                </filter>
            </defs>
            <circle id="spinner" style="fill:transparent;stroke:#ed2d34;stroke-width: 8px;stroke-linecap: round;filter:url(#shadow);" cx="50" cy="50" r="45"/>
        </svg>
    </div>
</div>
<!-- END LOADER -->

<!-- START HEADER -->
<div class="wrap_container cursor-light">
    <div class="main_container">
        <div class="side_nav">
            <div class="my-sticky-nav">
                <div class="side_menu text-center">
                    <a class="brand-logo link" href="index-product-hotspot.html">
                        <img src="images/logo-white.svg" alt="logo" width="150px" height="150px"/>
                    </a>
                    <div id="my_tog" class="my_tog link" onmouseover="my_click();">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <!-- Sticky Nav -->
                    <nav class="side-nav-menu">
                        <ul class="nav-menu nav-fill" id="menu">
                            <li class="nav-item">
                                <a data-menuanchor="home-banner" class="nav-link link active line" href="#home-banner"> خانه </a>
                            </li>
                            <li class="nav-item">
                                <a data-menuanchor="all-products" class="nav-link link line" href="#all-products"> نمونه کار ها </a>
                            </li>
                            <li class="nav-item">
                                <a data-menuanchor="reviews" class="nav-link link line" href="#reviews"> اعضای تیم </a>
                            </li>
                            <li class="nav-item">
                                <a data-menuanchor="contact" class="nav-link link line" href="#contact"> تماس با ما </a></li>
                            </ul>
                            <div class="slider-social side-icons">
                                <ul class="list-unstyled">
                                    <li><a class="facebook-bg-hvr" href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a class="twitter-bg-hvr" href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
                                    <li><a class="linkedin-bg-hvr" href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a class="instagram-bg-hvr" href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Nav-Bar -->
            <header id="home">
                <nav class="navbar navbar-light bg-light cursor-light d-md-none">
                    <div class="my_nav_tog d-block d-md-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <a class="navbar-brand ml-auto" href="index-product-hotspot.html">
                        <img src="images/logo-white.svg" alt="logo" width="40px" height="40px"/>
                    </a>
                </nav>
                <div class="broad">
                    <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
                    <nav class="side-nav-menu">
                        <a class="brand-logo" href="index-product-hotspot.html">
                            <img src="images/logo-white.svg" alt="logo" width="85px" height="85px"/>
                        </a>
                        <ul class="nav-menu nav-fill">
                            <li class="nav-item">
                                <a class="nav-link" href="#home-banner">خانه</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#all-products">نمونه کار ها</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#reviews">اعضای تیم</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">تماس با ما</a>
                            </li>
                        </ul>
                        <div class="social-icons">
                            <span><a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a></span>
                            <span><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></span>
                            <span><a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a></span>
                            <span><a href="javascript:void(0);"><i class="fab fa-instagram"></i></a></span>
                        </div>
                    </nav>
                </div>
            </header>
        </div>
    </div>
    <!-- END HEADER -->
