

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
    <div class="logo me-auto">
        <!-- <h1><a href="index.html">PAL</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html"><img src="{{asset('/frontend/assets/img/pal_logo.png')}}" alt="" class="img-fluid"></a>
    </div>

    <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
        <li class="dropdown"><a href="#services"><span>Our Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li><a href="#">Air Quality Analysis</a></li>
            <li><a href="#">Water Quality Analysis</a></li>
            <li><a href="#">Noise Level Measurement</a></li>
            <li><a href="#">Calibration Services</a></li>
            <li><a href="#">Sediment And Soil Analysis</a></li>
            <li><a href="#">Vibration Measurement</a></li>
            </ul>
        </li>
        <li><a class="nav-link scrollto " href="#portfolio">News and Events</a></li>
        <li><a class="nav-link scrollto" href="#about">About us</a></li>
        <li><a class="nav-link scrollto" href="#{{route('contact')}}">Contact us</a></li>
        <li><a class="nav-link scrollto" href="#ourclient">Our Client</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    <div class="header-social-links d-flex align-items-center">
        <a href="#" class="telephone"><i class="bi bi-telephone"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
    </div>

    </div>
</header><!-- End Header -->
