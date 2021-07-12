@php
$sliders = DB::table('sliders')->get();
@endphp


<!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

            <div class="carousel-inner" role="listbox">
                @foreach ($sliders as $key => $slider )
                <!-- Slide  -->
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                            <img src="{{asset($slider->image)}}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
<!-- End Hero -->