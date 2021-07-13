@php
$sliders = DB::table('sliders')->get();
@endphp


<!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                @foreach ($sliders as $key => $slider )
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <img src="{{$slider->image}}" class="d-block w-100" alt="...">
                </div>
                @endforeach
            </div>
        </div>
    </section>
<!-- End Hero -->