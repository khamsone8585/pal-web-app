
@extends('layouts.master_home')

@section('home_content')
        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container">

                <div class="section-title">
                <h2>Our Services</h2>
                </div>

                <div class="row">
                <div class="col-md-6">
                    <div class="icon-box">
                    <div class="logo">
                        <img src="./assets/img/Ourservice/1.png" alt="" srcset="">
                    </div>
                    <div class="content">
                        <h4><a href="#Air">Air Quality Analysis</a></h4>
                        <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-lg-0">
                    <div class="icon-box">
                    <div class="logo">
                        <img src="./assets/img/Ourservice/2.png" alt="" srcset="">
                    </div>
                    <div class="content">
                        <h4><a href="#">Water Quality Analysis</a></h4>
                    <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="icon-box">
                    <div class="logo">
                        <img src="./assets/img/Ourservice/3.png" alt="" srcset="">
                    </div>
                    <div class="content">
                        <h4><a href="#">Noise Level Measurement</a></h4>
                    <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="icon-box">
                    <div class="logo">
                        <img src="./assets/img/Ourservice/4.png" alt="" srcset="">
                    </div>
                    <div class="content">
                        <h4><a href="#">Calibration Services</a></h4>
                    <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="icon-box">
                    <div class="logo">
                        <img src="./assets/img/Ourservice/5.png" alt="" srcset="">
                    </div>
                    <div class="content">
                        <h4><a href="#">Sediment And Soil Analysis</a></h4>
                    <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="icon-box">
                    <div class="logo">
                        <img src="./assets/img/Ourservice/6.png" alt="" srcset="">
                    </div>
                    <div class="content">
                        <h4><a href="#">Vibration Measurement</a></h4>
                    <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                    </div>
                    </div>
                </div>

            </div>
            </section><!-- End Services Section -->

            <!-- ======= Portfolio Section ======= -->
            <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title">
                <h2>News and Events</h2>
                </div>

                <div class="row">
                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-air">Air</li>
                    <li data-filter=".filter-Water">Water</li>
                    <li data-filter=".filter-Noise">Noise</li>
                    <li data-filter=".filter-Calibration">Calibration</li>
                    <li data-filter=".filter-Sediment">Sediment</li>
                    <li data-filter=".filter-Vibration">Vibration</li>
                    </ul>
                </div>
                </div>

                <div class="row portfolio-container">

                <div class="col-lg-4 col-md-6 portfolio-item filter-air wow fadeInUp">
                    <div class="portfolio-wrap">
                    <figure>
                        <img src="assets/img/Ourservice/Air/1-4.png" class="img-fluid" alt="" id="Air">
                        <a href="assets/img/Ourservice/Air/1-4.png" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="portfolio-details.html">Air Quality Analysis</a></h4>
                    </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-Water wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-wrap">
                    <figure>
                        <img src="assets/img/Ourservice/Water/9-1.png" class="img-fluid" alt="">
                        <a href="assets/img/Ourservice/Water/9-1.png" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="portfolio-details.html">Water Quality Analysis</a></h4>
                    </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-Calibration wow fadeInUp" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                    <figure>
                        <img src="assets/img/Ourservice/Cailbration/1.png" class="img-fluid" alt="">
                        <a href="assets/img/Ourservice/Cailbration/1.png" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="portfolio-details.html">Calibration</a></h4>
                    </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-Sediment wow fadeInUp">
                    <div class="portfolio-wrap">
                    <figure>
                        <img src="assets/img/Ourservice/Sediment/2-2.png" class="img-fluid" alt="">
                        <a href="assets/img/Ourservice/Sediment/2-2.png" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="portfolio-details.html">Sediment</a></h4>
                    </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-Vibration wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-wrap">
                    <figure>
                        <img src="assets/img/Ourservice/Vibration/1-3.png" class="img-fluid" alt="">
                        <a href="assets/img/Ourservice/Vibration/1-3.png" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="portfolio-details.html">Vibration</a></h4>
                        <p>Web</p>
                    </div>
                    </div>
                </div>


                </div>

            </div>
            </section><!-- End Portfolio Section -->

            <!-- ======= About Section ======= -->
            <section id="about" class="about">
            <div class="container">
                <div class="row">
                <div class="col-lg-6 align-self-center">
                    <img src="assets/img/about.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <div class="section-title">
                    <h2>About us</h2>
                    </div>
                    <p>
                        {{ $abouts->content }}
                    </p>
                    <div class="row icon-boxes">
                    <div class="col-md-6">
                        <i class="bi bi-eye-fill"></i>
                        <h4>Vision</h4>
                        <p>
                            {{ $abouts->vision }}
                        </p>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <i class="bi bi-bullseye"></i>
                        <h4>Mission</h4>
                        <p>
                            {{ $abouts->mission }}
                        </p>
                    </div>
                    </div>
                </div>

                <div class="col-lg-12 text-end">
                    <p class="text-muted">
                    <a href="#" class="text-reset">Have a question?</a>.
                    </p>
                    <p class="text-muted">
                    <a href="#" class="text-reset">Need a quote?</a>.

                    </p>
                </div>
                </div>

            </div>
            </section><!-- End About Section -->

            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact section-bg">
            <div class="container">
                <div class="section-title">
                <h2>Contact us</h2>
                </div>

                <div class="row mt-5 justify-content-center">

                <div class="col-lg-10">

                    <div class="info-wrap">
                    <div class="row">
                        <div class="col-lg-3 info">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>No. 122, Unit 5, Dongpalane Thong Village<br>Sisattanak District, Vientiane Capital
                            Lao PRD</p>
                        </div>

                        <div class="col-lg-3 info mt-3 mt-lg-0">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>info@example.com<br>contact@example.com</p>
                        </div>

                        <div class="col-lg-3 info mt-3 mt-lg-0">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p>+856 21 263962<br>+856 20 22222204</p>
                        </div>

                        <div class="col-lg-3 info mt-3 mt-lg-0">
                        <i class="bi bi-clock"></i>
                        <h4>Open:</h4>
                        <p>9.00 – 18.00 Mon – Fri</p>
                        </div>
                    </div>
                    </div>

                </div>

                </div>

                @if(session('success'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong> {{ session('success') }}!</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                @endif

                <div class="row mt-5 justify-content-center">
                    <div class="col-lg-10">
                        <form action="{{route('contact.form')}}" method="post">
                            @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                            <button type="submit" class="btn btn-success text-center my-3">Send Message</button>
                        </form>
                    </div>

                </div>

            </div>
            </section><!-- End Contact Section -->

            <!-- ======= ourclient Section ======= -->
            <section id="ourclient" class="our-client">
            <div class="container" id="id-sponsors">
                <div class="section-title">
                    <h2>Our Client</h2>
                </div>
                <div id="sponsor-carousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="row">
                                @foreach ($brands as $brand)
                                <div class="col-sm-3 col-xs-6">
                                    <div class="sponsor-feature"><img alt="" src="{{ $brand->brand_image }}" style="width: 200px;" /></div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- ======= End ourclient Section ======= -->
@endsection
