@extends('layouts.landing-page')
@section('title', 'Home')
@section('contentLandingPage')

    <!-- slider Area Start-->
    <div class="container-fluid">
        <div class="slider-area position-relative">
            <div class="slider-active dot-style">
                <!-- Single Slider -->
                <div class="single-slider hero-overly slider-height slider-bg1 d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9 col-lg-11 col-md-11">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".2s">Car Wash</h1>
                                    <div class="hero-details">
                                        <div class="stock-text" data-animation="fadeInUp" data-delay=".8s">
                                            <h2>& Detailing</h2>
                                            <h2>& Detailing</h2>
                                        </div>
                                        <P data-animation="fadeInUp" data-delay=".4s">Duis aute irure dolor inasfa
                                            reprehenderit in voluptate
                                            velit esse cillum reeut cupidatatfug.</P>
                                        <!-- Hero-btn -->
                                        <div class="hero__btn">
                                            <a href="{{ asset('industries.html') }}" class="btn mb-10"
                                                data-animation="fadeInUp" data-delay=".8s">Our Services</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!--? Pricing Card Start -->
    <section class="pricing-card-area fix section-padding30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10">
                    <div class="section-tittle text-center mb-90">
                        <h2>We offer best services to our customer</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                    <div class="single-card text-center mb-30">
                        <div class="card-top">
                            <img src="{{ asset('landing-page/assets/img/icon/price1.svg') }}" alt="">
                            <h4>Car wash</h4>
                            <p>Starting at</p>
                        </div>
                        <div class="card-mid">
                            <h4>$50.00</h4>
                        </div>
                        <div class="card-bottom">
                            <ul>
                                <li>2 TB of space</li>
                                <li>unlimited bandwidth</li>
                                <li>full backup systems</li>
                                <li>free domain</li>
                                <li>unlimited database</li>
                            </ul>
                            <a href="{{ asset('#') }}" class="borders-btn">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                    <div class="single-card text-center mb-30">
                        <div class="card-top">
                            <img src="{{ asset('landing-page/assets/img/icon/price1.svg') }}" alt="">
                            <h4>Detailing</h4>
                            <p>Starting at</p>
                        </div>
                        <div class="card-mid">
                            <h4>$100.00</h4>
                        </div>
                        <div class="card-bottom">
                            <ul>
                                <li>2 TB of space</li>
                                <li>unlimited bandwidth</li>
                                <li>full backup systems</li>
                                <li>free domain</li>
                                <li>unlimited database</li>
                            </ul>
                            <a href="{{ asset('#') }}" class="borders-btn">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                    <div class="single-card text-center mb-30">
                        <div class="card-top">
                            <img src="{{ asset('landing-page/assets/img/icon/price1.svg') }}" alt="">
                            <h4>Wash & Detailing</h4>
                            <p>Starting at</p>
                        </div>
                        <div class="card-mid">
                            <h4>$200.00</h4>
                        </div>
                        <div class="card-bottom">
                            <ul>
                                <li>2 TB of space</li>
                                <li>unlimited bandwidth</li>
                                <li>full backup systems</li>
                                <li>free domain</li>
                                <li>unlimited database</li>
                            </ul>
                            <a href="{{ asset('#') }}" class="borders-btn">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Card End -->
    <!--? Testimonial Area Start -->
    <section class="testimonial-area testimonial-padding fix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="about-caption pb-bottom">
                        <!-- Testimonial Start -->
                        <div class="h1-testimonial-active dot-style">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial position-relative">
                                <div class="testimonial-caption">
                                    <img src="{{ asset('landing-page/assets/img/icon/quotes-sign.svg') }}" alt=""
                                        class="quotes-sign">
                                    <p>"The automated process starts as soon as your clothe go into the machine.
                                        This site outcome is gleaming clothe to the placeholder text commonly</p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center">
                                    <div class="founder-img">
                                        <img src="{{ asset('landing-page/assets/img/icon/testimonial.svg') }}"
                                            alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Robart Brown</span>
                                        <p>Creative designer at Colorlib</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial position-relative">
                                <div class="testimonial-caption">
                                    <img src="{{ asset('landing-page/assets/img/icon/quotes-sign.svg') }}" alt=""
                                        class="quotes-sign">
                                    <p>"The automated process starts as soon as your clothe go into the machine.
                                        This site outcome is gleaming clothe to the placeholder text commonly</p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center">
                                    <div class="founder-img">
                                        <img src="{{ asset('landing-page/assets/img/icon/testimonial.svg') }}"
                                            alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Robart Brown</span>
                                        <p>Creative designer at Colorlib</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Testimonial End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonial-right img -->
        <div class="testimonial-right-img">
            <img src="{{ asset('landing-page/assets/img/gallery/testimonial-right-img.png') }}" alt="">
        </div>
    </section>
    <!--? Testimonial Area End -->
    <!--? Services Area Start -->
    <section class="categories-area section-padding40">
        <div class="container">
            <!-- section Tittle -->
            <div class="row">
                <div class="col-xl-6 col-lg-7 col-md-10 col-sm-11">
                    <div class="section-tittle mb-60">
                        <h2>Why take our services?</h2>
                        <p>Duis aute irure dolor inasfa reprehenderit in voluptate velit esse cillum reeut
                            cupidatatfug nulla pariatur. Excepteur sintxsdfas occaecat.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="cat-icon">
                            <img src="{{ asset('landing-page/assets/img/icon/services1.svg') }}" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5>Car wash 100% without detergents</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in
                                eros elementum tristique.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="cat-icon">
                            <img src="{{ asset('landing-page/assets/img/icon/services2.svg') }}" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5>Efficient surface drying machines</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in
                                eros elementum tristique.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="cat-icon">
                            <img src="{{ asset('landing-page/assets/img/icon/services3.svg') }}" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5>We have an application</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in
                                eros elementum tristique.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="cat-icon">
                            <img src="{{ asset('landing-page/assets/img/icon/services4.svg') }}" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5>Safe lacquer protection</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in
                                eros elementum tristique.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--? Services Area End -->
    <!--? video_start -->
    <div class="video-area section-bg2 d-flex align-items-center"
        data-background="{{ asset('landing-page/assets/img/gallery/video-bg.png') }}">
        <div class="container">
            <div class="row">
                <div class="offset-xl-4 offset-lg-5 offset-md-2 col-xl-6 col-lg-6 offset-sm-1 col-sm-11">
                    <div class="video-wrap">
                        <!-- Video icon -->
                        <div class="video-icon">
                            <a class="popup-video btn-icon"
                                href="{{ url('https://www.youtube.com/watch?v=up68UAfH0d0') }}"><i
                                    class="fas fa-play"></i></a>
                        </div>
                    </div>
                    <div class="section-tittle section-tittle2 mb-90">
                        <h2>Your car will look as your new one</h2>
                        <p>Duis aute irure dolor inasfa reprehenderit in voluptate velit esse cillum reeut
                            cupidatatfug.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- video_end -->
    <div class="maps-area">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-7 col-md-7 col-sm-7">
                    <img src="{{ asset('landing-page/assets/img/gallery/map.png') }}" alt="" class="w-100">
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5">
                    <img src="{{ asset('landing-page/assets/img/gallery/map-left.png') }}" alt=""
                        class="w-100">
                </div>
            </div>
        </div>
    </div>


@endsection
