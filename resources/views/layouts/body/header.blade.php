

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
    <div class="logo me-auto">
        <!-- <h1><a href="index.html">PAL</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{ url('master_home') }}"><img src="{{asset('/frontend/assets/img/pal_logo.png')}}" alt="" class="img-fluid"></a>
    </div>

    <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#services">Our Services</a></li>
            <li><a class="nav-link scrollto" href="#portfolio">News and Events</a></li>
            <li><a class="nav-link scrollto" href="#about">About us</a></li>
            <li><a class="nav-link scrollto" href="#contact">Contact us</a></li>
            <li><a class="nav-link scrollto" href="#ourclient">Our Client</a></li>
            <li><a class="nav-link scrollto" href="{{route('login')}}" target="_blank">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    <div class="header-social-links d-flex align-items-center">
        <a href="#" class="telephone"><i class="bi bi-telephone"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
    </div>

    </div>
</header><!-- End Header -->
