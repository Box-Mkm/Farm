<p>
    <a href="ar" class="text-danger">العربيه</a>
</p>
@include('layouts.appEN')
<!--Main Slider Start-->
<section class="main-slider main-slider-one">
    <div class="swiper-container thm-swiper__slider"
        data-swiper-options='{"slidesPerView": 1, "loop": true, "effect": "fade", "pagination": {
            "el": "#main-slider-pagination",
            "type": "bullets",
            "clickable": true
            },
            "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
            },
            "autoplay": {
            "delay": 7000
            }}'>

        <div class="swiper-wrapper">
            <!--Start Single Swiper Slide-->
            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url({{ asset('images/backgrounds/main-slider-v1-1.jpg') }});">
                </div>
                <div class="image-layer-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-slider-inner">
                                <div class="main-slider__content">
                                    <span class="main-slider-tagline">We’re producing natural goods</span>
                                    <h2 class="main-slider__title">Abd El-Dayem <br>Where Quality Meets Flavor!
                                        <span><span>
                                    </h2>
                                    <p class="main-slider__text">From Farm to Global Markets<br>Abd El-Dayem, Your
                                        Trusted Export Partner.</p>
                                </div>
                                <div class="main-slider__button-box">
                                    <div class="arrow-icon"><img
                                            src="{{ asset('images/icon/main-slider__button-arrow.png') }}"
                                            alt="" />
                                    </div>
                                    <a href="./about" class="thm-btn">Discover more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Swiper Slide-->

            <!--Start Single Swiper Slide-->
            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url({{ asset('images/backgrounds/main-slider-v1-2.jpg') }});">
                </div>
                <div class="image-layer-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-slider-inner">
                                <div class="main-slider__content">
                                    <span class="main-slider-tagline">We’re producing natural goods</span>
                                    <h2 class="main-slider__title">Welcome to <br> Agriculture <span><span
                                                class="leaf"><img src="{{ asset('images/resources/leaf.png') }}"
                                                    alt="" /></span>Farm</span></h2>
                                    <p class="main-slider__text">There are many of passages of lorem Ipsum, but
                                        the majori have<br> suffered alteration in some form.</p>
                                </div>
                                <div class="main-slider__button-box">
                                    <div class="arrow-icon"><img
                                            src="{{ asset('images/icon/main-slider__button-arrow.png') }}"
                                            alt="" />
                                    </div>
                                    <a href="#" class="thm-btn">Discover more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Swiper Slide-->

            <!--Start Single Swiper Slide-->
            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url({{ asset('images/backgrounds/main-slider-v1-3.jpg') }});">
                    <div class="image-layer-overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-slider-inner">
                                    <div class="main-slider__content">
                                        <span class="main-slider-tagline">We’re producing natural goods</span>
                                        <h2 class="main-slider__title">Welcome to <br> Agriculture <span><span
                                                    class="leaf"><img src="{{ asset('images/resources/leaf.png') }}"
                                                        alt="" /></span>Farm</span></h2>
                                        <p class="main-slider__text">There are many of passages of lorem Ipsum,
                                            but
                                            the majori have<br> suffered alteration in some form.</p>
                                    </div>
                                    <div class="main-slider__button-box">
                                        <div class="arrow-icon"><img
                                                src="{{ asset('images/icon/main-slider__button-arrow.png') }}"
                                                alt="" />
                                        </div>
                                        <a href="#" class="thm-btn">Discover more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Swiper Slide-->
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-pagination" id="main-slider-pagination"></div>

            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <span class="icon-right-arrow-2"></span>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <span class="icon-right-arrow-2"></span>
                </div>
            </div>
        </div>
</section>
<!--Main Slider End-->


<!--About One Start-->
<section class="about-one">
    <div class="about-one__bg wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
        <img class="float-bob-y" src="{{ asset('images/backgrounds/about-v1-bg.png') }}" alt="" />
    </div>
    <div class="container">
        <div class="row">
            <!--Start About One Left-->
            <div class="col-xl-6">
                <div class="about-one__left">
                    <div class="about-one__left-img">
                        <div class="about-one__left-img-inner">
                            <img src="{{ asset('images/about/about-v1-img1.jpg') }}" alt="" />
                        </div>
                    </div>
                    <div class="about-one__left-overlay wow slideInLeft" data-wow-delay="100ms"
                        data-wow-duration="1500ms">
                        <div class="icon">
                            <span class="icon-investment"></span>
                        </div>
                        <div class="title">
                            <h2><span class="odometer" data-count="87600">00</span></h2>
                            <p>Successfully Project Completed</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End About One Left-->

            <!--Start About One Content-->
            <div class="col-xl-6">
                <div class="about-one__content">
                    <div class="sec-title">
                        <div class="icon">
                            <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="" />
                        </div>
                        <span class="sec-title__tagline">Our introduction</span>
                        <h2 class="sec-title__title">Pure Agriculture and <br>Organic Form</h2>
                    </div>

                    <h2 class="about-one__content-title">We are Leader in Agriculture Market</h2>
                    <p class="about-one__content-text" style="color: white">Welcome to Abdel Dayem Agricultural Crops
                        Company, a trusted
                        name in the export and import of fresh fruits and vegetables since 1995. With our commitment to
                        providing high-quality fruits and vegetables to customers worldwide, we have established
                        ourselves as one of the largest companies in the industry.</p>
                    <ul class="about-one__content-list">
                        <li>
                            {{-- <div class="icon">
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                            </div> --}}
                            <div class="text">
                                <p style="color: rgb(177, 166, 166)">At Abdel Dayem Agricultural Crops Company, we
                                    understand the importance of providing
                                    our customers with products that meet their specific preferences and the required
                                    standards. With a deep understanding of market dynamics and adherence to government
                                    legislation and protocols, we continuously adapt to meet the evolving needs of our
                                    customers.</p>
                            </div>
                        </li>

                        {{-- <li>
                            <div class="icon">
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <p>If you are going to use a passage</p>
                            </div>
                        </li>

                        <li>
                            <div class="icon">
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <p>Making this the first true generator on the Internet</p>
                            </div>
                        </li>

                        <li>
                            <div class="icon">
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <p>Various versions have evolved over the years</p>
                            </div>
                        </li> --}}
                    </ul>

                    {{-- <div class="about-one__content-video-box">
                        <div class="about-one__content-video-box-img-wrapper">
                            <div class="about-one__content-video-box-img">
                                <img src="{{ asset('images/resources/about-v1-video-img.jpg') }}" alt="" />
                                <div class="icon">
                                    <a class="video-popup wow zoomIn animated animated animated"
                                        data-wow-delay="300ms" data-wow-duration="1500ms" title=" Video"
                                        href="https://www.youtube.com/watch?v=8DP4NgupAhI">
                                        <span class="icon-play-button-1"></span>
                                    </a>
                                </div>
                            </div>
                        </div><!-- /.about-one__content-video-box-img-wrapper -->
                        <div class="about-one__content-video-box-title">
                            <p>Watch our video</p>
                            <h3>Tips for Ripening your Fruits</h3>
                        </div>
                    </div> --}}
                </div>
            </div>
            <!--End About One Content-->
        </div>
    </div>
</section>
<!--About One End-->



<section class="contact-one">
    <div class="container">
        <div class="sec-title text-center">
            <div class="icon">
                <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="">
            </div>
            <span class="sec-title__tagline">What we offer</span>
            <h2 class="sec-title__title">Our products</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-one__content" style="font-size: larger">
                    <p class="contact-one__text">Explore our wide range of fruits and vegetables, carefully selected to
                        meet the highest standards of quality and freshness. From all types of citrus crops like Lemon
                        orange, grape, pomegranate, peach, plum, mango, we offer a diverse selection that caters to
                        every palate. Our produce is sourced directly from farms and orchards, guaranteeing that you
                        receive the best nature has to offer.
                        We export to Saudi Arabia, Dubai, Muscat, Kuwait, Russia, Europe, India, Ukraine, Jordan, Iraq,
                        Bangladesh, Malaysia, China, and in the near future, our products will be available all over the
                        world.
                    </p>
                </div><!-- /.contact-one__content -->
            </div><!-- /.col-lg-6 -->
    
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact-one -->

<div class="col-lg-12">

    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="shop-one__item">
                <div class="shop-one__image">
                    <span class="shop-one__sale">sale</span><!-- /.shop-one__sale -->
                    <img src="http://farm.test/images/update-14-09-2021/shop/shop-1-1.png" alt="">
                    <a class="shop-one__cart" href="cart.html"><i class=" icon-shopping-cart"></i></a>
                </div><!-- /.shop-one__image -->
                <div class="shop-one__content text-center">
                    <h3 class="shop-one__title"><a href="product-details.html">Brown
                            Bread</a>
                    </h3>
                    <p class="shop-one__price">$23.00</p><!-- /.shop-one__price -->
                    <div class="shop-one__rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div><!-- /.shop-one__rating -->
                </div><!-- /.shop-one__content -->
            </div><!-- /.shop-one__item -->
        </div><!-- /.col-md-6 col-lg-3 -->
        <div class="col-md-6 col-lg-3">
            <div class="shop-one__item">
                <div class="shop-one__image">

                    <img src="http://farm.test/images/update-14-09-2021/shop/shop-1-2.png" alt="">
                    <a class="shop-one__cart" href="cart.html"><i class=" icon-shopping-cart"></i></a>
                </div><!-- /.shop-one__image -->
                <div class="shop-one__content text-center">
                    <h3 class="shop-one__title"><a href="product-details.html">Red Onion</a>
                    </h3>
                    <p class="shop-one__price">$33.00</p><!-- /.shop-one__price -->
                    <div class="shop-one__rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div><!-- /.shop-one__rating -->
                </div><!-- /.shop-one__content -->
            </div><!-- /.shop-one__item -->
        </div><!-- /.col-md-6 col-lg-3 -->
        <div class="col-md-6 col-lg-3">
            <div class="shop-one__item">
                <div class="shop-one__image">

                    <img src="http://farm.test/images/update-14-09-2021/shop/shop-1-3.png" alt="">
                    <a class="shop-one__cart" href="cart.html"><i class=" icon-shopping-cart"></i></a>
                </div><!-- /.shop-one__image -->
                <div class="shop-one__content text-center">
                    <h3 class="shop-one__title"><a href="product-details.html">Broccoli</a>
                    </h3>
                    <p class="shop-one__price">$18.00</p><!-- /.shop-one__price -->
                    <div class="shop-one__rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div><!-- /.shop-one__rating -->
                </div><!-- /.shop-one__content -->
            </div><!-- /.shop-one__item -->
        </div><!-- /.col-md-6 col-lg-3 -->
        <div class="col-md-6 col-lg-3">
            <div class="shop-one__item">
                <div class="shop-one__image">

                    <img src="http://farm.test/images/update-14-09-2021/shop/shop-1-4.png" alt="">
                    <a class="shop-one__cart" href="cart.html"><i class=" icon-shopping-cart"></i></a>
                </div><!-- /.shop-one__image -->
                <div class="shop-one__content text-center">
                    <h3 class="shop-one__title"><a href="product-details.html">Fresh
                            Potato</a>
                    </h3>
                    <p class="shop-one__price">$16.00</p><!-- /.shop-one__price -->
                    <div class="shop-one__rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div><!-- /.shop-one__rating -->
                </div><!-- /.shop-one__content -->
            </div><!-- /.shop-one__item -->
        </div><!-- /.col-md-6 col-lg-3 -->



    </div><!-- /.row -->
</div>


<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="video-one__wrpper" style="justify-content: center">
                <div class="video-one__left">

                    <div class="video-one__btn">
                        <a href="#" class="thm-btn">Discover more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="row">
    <div class="col-xl-12">
        <div class="projects-one__carousel owl-carousel owl-theme owl-dot-type1">
            <!--Start Single Projects One-->
            <div class="projects-one__single wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="projects-one__single-img">
                    <img src="{{ asset('images/project/projects-v1-img1.jpg') }}" alt="" />
                    <div class="overlay-content">
                        <p>Agriculture</p>
                        <h3><a href="projects-details.html">Harvest Innovations</a></h3>
                    </div>
                </div>
            </div>
            <!--End Single Projects One-->

            <!--Start Single Projects One-->
            <div class="projects-one__single wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="projects-one__single-img">
                    <img src="{{ asset('images/project/projects-v1-img2.jpg') }}" alt="" />
                    <div class="overlay-content">
                        <p>Agriculture</p>
                        <h3><a href="projects-details.html">Harvest Innovations</a></h3>
                    </div>
                </div>
            </div>
            <!--End Single Projects One-->

            <!--Start Single Projects One-->
            <div class="projects-one__single wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                <div class="projects-one__single-img">
                    <img src="{{ asset('images/project/projects-v1-img3.jpg') }}" alt="" />
                    <div class="overlay-content">
                        <p>Agriculture</p>
                        <h3><a href="projects-details.html">Harvest Innovations</a></h3>
                    </div>
                </div>
            </div>
            <!--End Single Projects One-->

            <!--Start Single Projects One-->
            <div class="projects-one__single wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                <div class="projects-one__single-img">
                    <img src="{{ asset('images/project/projects-v1-img4.jpg') }}" alt="" />
                    <div class="overlay-content">
                        <p>Agriculture</p>
                        <h3><a href="projects-details.html">Harvest Innovations</a></h3>
                    </div>
                </div>
            </div>
            <!--End Single Projects One-->

            <!--Start Single Projects One-->
            <div class="projects-one__single wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="projects-one__single-img">
                    <img src="{{ asset('images/project/projects-v1-img1.jpg') }}" alt="" />
                    <div class="overlay-content">
                        <p>Agriculture</p>
                        <h3><a href="projects-details.html">Harvest Innovations</a></h3>
                    </div>
                </div>
            </div>
            <!--End Single Projects One-->

            <!--Start Single Projects One-->
            <div class="projects-one__single wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="projects-one__single-img">
                    <img src="{{ asset('images/project/projects-v1-img2.jpg') }}" alt="" />
                    <div class="overlay-content">
                        <p>Agriculture</p>
                        <h3><a href="projects-details.html">Harvest Innovations</a></h3>
                    </div>
                </div>
            </div>
            <!--End Single Projects One-->

            <!--Start Single Projects One-->
            <div class="projects-one__single wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                <div class="projects-one__single-img">
                    <img src="{{ asset('images/project/projects-v1-img3.jpg') }}" alt="" />
                    <div class="overlay-content">
                        <p>Agriculture</p>
                        <h3><a href="projects-details.html">Harvest Innovations</a></h3>
                    </div>
                </div>
            </div>
            <!--End Single Projects One-->

            <!--Start Single Projects One-->
            <div class="projects-one__single wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                <div class="projects-one__single-img">
                    <img src="{{ asset('images/project/projects-v1-img4.jpg') }}" alt="" />
                    <div class="overlay-content">
                        <p>Agriculture</p>
                        <h3><a href="projects-details.html">Harvest Innovations</a></h3>
                    </div>
                </div>
            </div>
            <!--End Single Projects One-->

            <!--Start Single Projects One-->
            <div class="projects-one__single wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="projects-one__single-img">
                    <img src="{{ asset('images/project/projects-v1-img1.jpg') }}" alt="" />
                    <div class="overlay-content">
                        <p>Agriculture</p>
                        <h3><a href="projects-details.html">Harvest Innovations</a></h3>
                    </div>
                </div>
            </div>
            <!--End Single Projects One-->

            <!--Start Single Projects One-->
            <div class="projects-one__single wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="projects-one__single-img">
                    <img src="{{ asset('images/project/projects-v1-img2.jpg') }}" alt="" />
                    <div class="overlay-content">
                        <p>Agriculture</p>
                        <h3><a href="projects-details.html">Harvest Innovations</a></h3>
                    </div>
                </div>
            </div>
            <!--End Single Projects One-->

            <!--Start Single Projects One-->
            <div class="projects-one__single wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                <div class="projects-one__single-img">
                    <img src="{{ asset('images/project/projects-v1-img3.jpg') }}" alt="" />
                    <div class="overlay-content">
                        <p>Agriculture</p>
                        <h3><a href="projects-details.html">Harvest Innovations</a></h3>
                    </div>
                </div>
            </div>
            <!--End Single Projects One-->

            <!--Start Single Projects One-->
            <div class="projects-one__single wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                <div class="projects-one__single-img">
                    <img src="{{ asset('images/project/projects-v1-img4.jpg') }}" alt="" />
                    <div class="overlay-content">
                        <p>Agriculture</p>
                        <h3><a href="projects-details.html">Harvest Innovations</a></h3>
                    </div>
                </div>
            </div>
            <!--End Single Projects One-->
        </div>
    </div>
</div> --}}
<br>


<!--Features One Start-->
{{-- <section class="features-one clearfix">
    <div class="container">
        <div class="row">
            <!--Start Single Features One-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp animated animated">
                <div class="features-one__single">
                    <div class="features-one__single-img">
                        <img src="{{ asset('images/feauters/features-v1-img1.jpg') }}" alt="" />
                        <div class="features-one__single-title text-center">
                            <h3><a href="#">Best Quality <br> Standards</a></h3>
                        </div>
                    </div>
                    <a href="services-details.html" class="features-one__single__more">
                        <span class="icon-right-arrow-2"></span>
                    </a><!-- /.feature-one__single__more -->
                </div>
            </div>
            <!--End Single Features One-->

            <!--Start Single Features One-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp animated animated">
                <div class="features-one__single">
                    <div class="features-one__single-img">
                        <img src="{{ asset('images/feauters/features-v1-img2.jpg') }}" alt="" />
                        <div class="features-one__single-title text-center">
                            <h3><a href="#">Smart Organic <br>Services</a></h3>
                        </div>
                    </div>
                    <a href="services-details.html" class="features-one__single__more">
                        <span class="icon-right-arrow-2"></span>
                    </a><!-- /.feature-one__single__more -->

                </div>
            </div>
            <!--End Single Features One-->

            <!--Start Single Features One-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp animated animated">
                <div class="features-one__single style2 text-center">
                    <div class="features-one__single-bg"
                        style="background-image: url({{ asset('images/backgrounds/features-one-single-bg.png') }});">
                    </div>
                    <div class="features-one__single-img">
                        <img src="{{ asset('images/feauters/features-v1-img3.jpg') }}" alt="" />
                    </div>
                    <div class="features-one__single-title text-center">
                        <h3><a href="#">Agriculture <br>products</a></h3>
                    </div>
                    <div class="button">
                        <a href="#" class="thm-btn">Discover More</a>
                    </div>
                </div>
            </div>
            <!--End Single Features One-->
        </div>
    </div>
</section> --}}
<!--Features One End-->

<!--Video One Start-->
<section class="video-one jarallax clearfix" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
    style="background-image: url({{ asset('images/backgrounds/video-one-bg.jpg') }});">
    {{-- <div class="video-one-border"></div> --}}
    {{-- <div class="video-one-border video-one-border-two"></div>
    <div class="video-one-border video-one-border-three"></div>
    <div class="video-one-border video-one-border-four"></div>
    <div class="video-one-border video-one-border-five"></div>
    <div class="video-one-border video-one-border-six"></div> --}}
    <div class="container">
        <div class="sec-title text-center">
            {{-- <div class="icon">
                <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="">
            </div> --}}
            <div class="video-one__leaf"></div><!-- /.video-one__leaf -->
            {{-- <span class="sec-title__tagline">What we offer</span> --}}
            <h2 class="sec-title__title">Quality Assurance</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-one__content" style="font-size: larger">
                    <p class="contact-one__text" style="color: white">We understand the importance of delivering
                        products that meet international standards. That's why we have a rigorous quality assurance
                        process in place.
                        Our team of experts meticulously inspects every shipment to ensure that it meets our stringent
                        criteria for freshness, taste, and appearance.
                    </p>

                </div><!-- /.contact-one__content -->
            </div><!-- /.col-lg-6 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="video-one__wrpper" style="justify-content: center">
                    <div class="video-one__left">

                        <div class="video-one__btn">
                            <a href="#" class="thm-btn">Discover more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Video One End-->




<section class="meet-farmers-one meet-farmers-one--about">
    <div class="container">
        <div class="sec-title text-center">
            <div class="icon">
                <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="">
            </div>
            <span class="sec-title__tagline">professional people</span>
            <h2 class="sec-title__title">Meet our Executive Board</h2>
        </div>
        <div class="row">
            <!--Start Single Meet Farmers One-->
            <div class="col-xl-3 col-lg-6  wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                <div class="meet-farmers-one__single">
                    <div class="meet-farmers-one__single-img">
                        <img src="{{ asset('images/resources/meet-farmers-v1-img1.jpg') }}" alt="" />

                    </div>
                    <div class="meet-farmers-one__single-title text-center">
                        <p>CEO</p>
                        <h2><a href="farmers.html">Ahmed Salim Abdel Dayem</a></h2>
                        <div class="social-link">
                            <ul>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Meet Farmers One-->

            <!--Start Single Meet Farmers One-->
            <div class="col-xl-3 col-lg-6  wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
                <div class="meet-farmers-one__single">
                    <div class="meet-farmers-one__single-img">
                        <img src="{{ asset('images/resources/meet-farmers-v1-img2.jpg') }}" alt="" />
                    </div>
                    <div class="meet-farmers-one__single-title text-center">
                        <p>CEO</p>
                        <h2><a href="farmers.html">Salim Salim Abdel Dayem</a></h2>
                        <div class="social-link">
                            <ul>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Meet Farmers One-->

            <!--Start Single Meet Farmers One-->
            <div class="col-xl-3 col-lg-6  wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                <div class="meet-farmers-one__single">
                    <div class="meet-farmers-one__single-img">
                        <img src="{{ asset('images/resources/meet-farmers-v1-img3.jpg') }}" alt="" />
                    </div>
                    <div class="meet-farmers-one__single-title text-center">
                        <p>CEO</p>
                        <h2><a href="farmers.html">Mahmoud Hassan Abdel Dayem</a></h2>
                        <div class="social-link">
                            <ul>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Meet Farmers One-->

            <!--Start Single Meet Farmers One-->
            <div class="col-xl-3 col-lg-6  wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms">
                <div class="meet-farmers-one__single">
                    <div class="meet-farmers-one__single-img">
                        <img src="{{ asset('images/resources/meet-farmers-v1-img4.jpg') }}" alt="" />
                    </div>
                    <div class="meet-farmers-one__single-title text-center">
                        <p>CEO</p>
                        <h2><a href="farmers.html">Mahjoub Hassan Abdel Dayem</a></h2>
                        <div class="social-link">
                            <ul>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Meet Farmers One-->
        </div>
    </div>
</section>







<!--Services One Start-->
<section class="services-one">
    <div class="services-one__bg wow slideInDown" data-wow-delay="100ms" data-wow-duration="2500ms"></div>
    <div class="container">
        <div class="sec-title text-center">
            <div class="icon">
                <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="">
            </div>
            <span class="sec-title__tagline">Our Customers</span>
            <h2 class="sec-title__title">Customer’s Opinions</h2>
        </div>
        <div class="row">
            <!--Start Single Services One-->
            {{-- <div class="col-xl-3 col-lg-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                <div class="services-one__single">
                    <div class="services-one__single-img">
                        <div class="services-one__single-img-inner">
                            <img src="{{ asset('images/services/services-v1-img1.jpg') }}" alt="" />
                        </div>
                    </div>
                    <div class="services-one__single-content text-center">
                        <div class="services-one__single-img-icon">
                            <span class="icon-agriculture"></span>
                        </div>
                        <h3><a href="services-details.html">Agriculture<br> Products</a></h3>
                        <p>Lorem ium dolor sit ametad pisicing elit sed simply do ut.</p>
                        <a href="services-details.html" class="read-more-btn"><span
                                class="icon-right-arrow-2"></span></a>
                    </div>
                </div>
            </div> --}}
            <!--End Single Services One-->

            <!--Start Single Services One-->
            {{-- <div class="col-xl-3 col-lg-6 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
                <div class="services-one__single">
                    <div class="services-one__single-img">
                        <div class="services-one__single-img-inner">
                            <img src="{{ asset('images/services/services-v1-img2.jpg') }}" alt="" />
                        </div>
                    </div>
                    <div class="services-one__single-content text-center">
                        <div class="services-one__single-img-icon">
                            <span class="icon-harvest"></span>
                        </div>
                        <h3><a href="services-details.html">Fresh <br>Vegetables</a></h3>
                        <p>Lorem ium dolor sit ametad pisicing elit sed simply do ut.</p>
                        <a href="services-details.html" class="read-more-btn"><span
                                class="icon-right-arrow-2"></span></a>
                    </div>
                </div>
            </div> --}}
            <!--End Single Services One-->

            <!--Start Single Services One-->
            {{-- <div class="col-xl-3 col-lg-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                <div class="services-one__single">
                    <div class="services-one__single-img">
                        <div class="services-one__single-img-inner">
                            <img src="{{ asset('images/services/services-v1-img3.jpg') }}" alt="" />
                        </div>

                    </div>
                    <div class="services-one__single-content text-center">
                        <div class="services-one__single-img-icon">
                            <span class="icon-growth"></span>
                        </div>
                        <h3><a href="services-details.html">Oragnic <br>Products</a></h3>
                        <p>Lorem ium dolor sit ametad pisicing elit sed simply do ut.</p>
                        <a href="services-details.html" class="read-more-btn"><span
                                class="icon-right-arrow-2"></span></a>
                    </div>
                </div>
            </div> --}}
            <!--End Single Services One-->

            <!--Start Single Services One-->
            <div class="col-xl-12 col-lg-12 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms">
                {{-- <div class="services-one__single">
                    <div class="services-one__single-img">
                        <div class="services-one__single-img-inner">
                            <img src="{{ asset('images/services/services-v1-img4.jpg') }}" alt="" />
                        </div>
                    </div>
                    <div class="services-one__single-content text-center">
                        <div class="services-one__single-img-icon">
                            <span class="icon-dairy-products"></span>
                        </div>
                        <h3><a href="services-details.html">Dairy<br> Products</a></h3>
                        <p>Lorem ium dolor sit ametad pisicing elit sed simply do ut.</p>
                        <a href="services-details.html" class="read-more-btn"><span
                                class="icon-right-arrow-2"></span></a>
                    </div>
                </div> --}}
                <div class="container" style="height: 150px">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contact-one__content" style="font-size: larger">
                                <p class="contact-one__text" style="color: white">We understand the importance of
                                    delivering products that meet international standards. That's why we have a rigorous
                                    quality assurance process in place.
                                    Our team of experts meticulously inspects every shipment to ensure that it meets our
                                    stringent criteria for freshness, taste, and appearance.
                                </p>

                            </div><!-- /.contact-one__content -->
                        </div><!-- /.col-lg-6 -->

                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div>
            <!--End Single Services One-->
        </div>
    </div>
</section>
<!--Services One End-->





<!--Testimonials One Start-->
<section class="testimonials-one jarallax clearfix" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
    style="background-image: url({{ asset('images/backgrounds/Testimonials-v1-bg.jpg') }});">
    <div class="container">
        <div class="row">
            <!--Start Testimonials One Left-->
            <div class="col-xl-4">
                <div class="testimonials-one__left">
                    <div class="testimonials-one__left-bg"></div>
                    <div class="sec-title">
                        <div class="icon">
                            <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="">
                        </div>
                        <span class="sec-title__tagline">Customer reviews</span>
                        <h2 class="sec-title__title">What They’re <br>Talking About <br> Us</h2>
                    </div>
                </div>
            </div>
            <!--End Testimonials One Left-->

            <!--Start Testimonials One Right-->
            <div class="col-xl-8">
                <div class="testimonials-one__right">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="testimonials-one__carousel owl-carousel owl-theme">
                                <!--Start Single Testimonials One-->
                                <div class="testimonials-one__single">
                                    <p class="testimonials-one__single-text">"Abdel Dayem Agricultural Crops Company
                                        has been our trusted partner for years. Their commitment to delivering
                                        high-quality produce is unmatched. We are always impressed with the freshness
                                        and taste of their fruits and vegetables." </p>
                                    <div class="testimonials-one__single-client-info">
                                        <div class="testimonials-one__single-client-info-img">
                                            <div class="testimonials-one__single-client-info-img-inner">
                                                <img src="{{ asset('images/testimonial/testimonials-v1-img1.jpg') }}"
                                                    alt="" />
                                            </div>
                                            <div class="icon">
                                                <span class="icon-right-quotation-mark"></span>
                                            </div>
                                        </div>
                                        <div class="testimonials-one__single-client-info-title">
                                            <h4>Sarah M.</h4>
                                            <p>Customer</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Start Single Testimonials One-->

                                <!--Start Single Testimonials One-->
                                <div class="testimonials-one__single">
                                    <p class="testimonials-one__single-text">I have been importing fruits and vegetables from Abdel Dayem Agricultural Crops Company for quite some time now. Their understanding of market dynamics and adherence to government regulations is commendable. They always go the extra mile to meet our specific preferences and requirements." </p>
                                    <div class="testimonials-one__single-client-info">
                                        <div class="testimonials-one__single-client-info-img">
                                            <div class="testimonials-one__single-client-info-img-inner">
                                                <img src="{{ asset('images/testimonial/testimonials-v1-img2.jpg') }}"
                                                    alt="" />
                                            </div>
                                            <div class="icon">
                                                <span class="icon-right-quotation-mark"></span>
                                            </div>
                                        </div>
                                        <div class="testimonials-one__single-client-info-title">
                                            <h4>John D</h4>
                                            <p>Customer</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Start Single Testimonials One-->

                                <!--Start Single Testimonials One-->
                                <div class="testimonials-one__single">
                                    <p class="testimonials-one__single-text">"The attention to detail and care that Abdel Dayem Agricultural Crops Company puts into handling their produce is remarkable. Every time I receive their fruits and vegetables, they are in perfect condition, as if they were just picked. Their commitment to quality is truly impressive."</p>
                                    <div class="testimonials-one__single-client-info">
                                        <div class="testimonials-one__single-client-info-img">
                                            <div class="testimonials-one__single-client-info-img-inner">
                                                <img src="{{ asset('images/testimonial/testimonials-v1-img1.jpg') }}"
                                                    alt="" />
                                            </div>
                                            <div class="icon">
                                                <span class="icon-right-quotation-mark"></span>
                                            </div>
                                        </div>
                                        <div class="testimonials-one__single-client-info-title">
                                            <h4>Lisa R.</h4>
                                            <p>Customer</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Start Single Testimonials One-->

                                <!--Start Single Testimonials One-->
                                <div class="testimonials-one__single">
                                    <p class="testimonials-one__single-text">"Not only does Abdel Dayem Agricultural Crops Company provide top-notch products, but their professionalism in handling all necessary documentation is outstanding. They make international trade a breeze, ensuring smooth transactions and on-time deliveries." </p>
                                    <div class="testimonials-one__single-client-info">
                                        <div class="testimonials-one__single-client-info-img">
                                            <div class="testimonials-one__single-client-info-img-inner">
                                                <img src="{{ asset('images/testimonial/testimonials-v1-img2.jpg') }}"
                                                    alt="" />
                                            </div>
                                            <div class="icon">
                                                <span class="icon-right-quotation-mark"></span>
                                            </div>
                                        </div>
                                        <div class="testimonials-one__single-client-info-title">
                                            <h4>David S.</h4>
                                            <p>Customer</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Start Single Testimonials One-->

                                <!--Start Single Testimonials One-->
                                
                                <!--Start Single Testimonials One-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Testimonials One Right-->
        </div>
    </div>
</section>
<!--Testimonials One End-->


<!--Providing Quality One Start-->
<section class="providing-quality-one clearfix">
    <div class="providing-quality-one__bg"><img src="{{ asset('images/backgrounds/providing-quality-one-bg.png') }}"
            alt="" /></div>

    <div class="providing-quality-one__shape"></div><!-- /.providing-quality-one__shape -->

    <div class="container-fullwidth">
        <div class="row">
            <!--Start Providing Quality One Img-->
            <div class="col-xl-6 providing-quality-one__image-block clearfix">
                <div class="providing-quality-one__image__line float-bob-y"></div>
                <!-- /.providing-quality-one__image__line -->
                <img src="{{ asset('images/resources/providing-quality-v1-img.jpg') }}" alt="">
                <div class="providing-quality-one__logo">
                    <img src="{{ asset('images/resources/providing-quality.png') }}" alt="" />
                </div>
            </div>
            <!--End Providing Quality One Img-->

            <!--Start Providing Quality One Content Box-->
            <div class="col-xl-6">
                <div class="providing-quality-one__content-box">
                    <div class="sec-title">
                        <div class="icon">
                            <img src="{{ asset('images/resources/sec-title-icon2.png') }}" alt="">
                        </div>
                        <span class="sec-title__tagline">Modern Agriculture</span>
                        <h2 class="sec-title__title">Providing High Quality <br>Products</h2>
                    </div>

                    <ul class="providing-quality-one__content-box-list">
                        <li class="providing-quality-one__content-box-list-item">
                            <div class="icon">
                                <span class="icon-agriculture"></span>
                            </div>
                            <div class="text">
                                <h3>Making Healthy Foods</h3>
                                <p>There are many variations of pass available but the majority have simply free
                                    text.</p>
                            </div>
                        </li>

                        <li class="providing-quality-one__content-box-list-item">
                            <div class="icon">
                                <span class="icon-farm"></span>
                            </div>
                            <div class="text">
                                <h3>Our Agriculture Growth</h3>
                                <p>There are many variations of pass available but the majority have simply free
                                    text.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--End Providing Quality One Content Box-->
        </div>
    </div>
</section>
<!--Providing Quality One End-->


<!--Blog One Start-->
<section class="blog-one">
    <div class="blog-one__bg wow slideInDown" data-wow-delay="100ms" data-wow-duration="2500ms"></div>
    {{-- <div class="blog-one__shape"></div><!-- /.blog-one__shape --> --}}
    <div class="container">
        <div class="sec-title text-center">
            <div class="icon">
                <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="">
            </div>
            <span class="sec-title__tagline">from the blog</span>
            <h2 class="sec-title__title">News & Articles</h2>
        </div>
        <div class="row">
            <!--Start Single Blog One-->
            <div class="col-xl-4 col-lg-4  wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="blog-one__single">
                    <div class="blog-one__single-img">
                        <img src="{{ asset('images/blog/blog-v1-img1.jpg') }}" alt="" />
                        <div class="date-box">
                            <span>30 July, 2021</span>
                        </div>
                        <div class="overlay-icon">
                            <a href="news-details.html"><span class="icon-plus"></span></a>
                        </div>
                    </div>

                    <div class="blog-one__single-content">
                        <ul class="meta-info">
                            <li><a href="#"><i class="far fa-user-circle"></i>Jessica</a></li>
                            <li><a href="#"><i class="far fa-comments"></i>2 Comments</a></li>
                        </ul>
                        <h2><a href="news-details.html">A.	Farm-to-Table: Exploring the Journey of Fresh Produce</a></h2>
                    </div>
                </div>
            </div>
            <!--End Single Blog One-->

            <!--Start Single Blog One-->
            <div class="col-xl-4 col-lg-4  wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="blog-one__single">
                    <div class="blog-one__single-img">
                        <img src="{{ asset('images/blog/blog-v1-img2.jpg') }}" alt="" />
                        <div class="date-box">
                            <span>30 July, 2021</span>
                        </div>
                        <div class="overlay-icon">
                            <a href="news-details.html"><span class="icon-plus"></span></a>
                        </div>
                    </div>

                    <div class="blog-one__single-content">
                        <ul class="meta-info">
                            <li><a href="#"><i class="far fa-user-circle"></i>Jessica</a></li>
                            <li><a href="#"><i class="far fa-comments"></i>2 Comments</a></li>
                        </ul>
                        <h2><a href="news-details.html">B.	Sustainable Farming Practices: Preserving the Environment for Future Generations</a></h2>
                    </div>
                </div>
            </div>
            <!--End Single Blog One-->

            <!--Start Single Blog One-->
            <div class="col-xl-4 col-lg-4  wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                <div class="blog-one__single">
                    <div class="blog-one__single-img">
                        <img src="{{ asset('images/blog/blog-v1-img3.jpg') }}" alt="" />
                        <div class="date-box">
                            <span>30 July, 2021</span>
                        </div>
                        <div class="overlay-icon">
                            <a href="news-details.html"><span class="icon-plus"></span></a>
                        </div>
                    </div>

                    <div class="blog-one__single-content">
                        <ul class="meta-info">
                            <li><a href="#"><i class="far fa-user-circle"></i>Jessica</a></li>
                            <li><a href="#"><i class="far fa-comments"></i>2 Comments</a></li>
                        </ul>
                        <h2><a href="news-details.html">C. Seasonal Delights: Exploring the Best Fruits and Vegetables Each Season</a></h2>
                    </div>
                </div>
            </div>
            <!--End Single Blog One-->
        </div>
    </div>
</section>
<!--Blog One End-->

<section class="contact-one">
    <div class="container">
        <div class="sec-title text-center">
            <div class="icon">
                <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="">
            </div>
            <span class="sec-title__tagline">contact with us</span>
            <h2 class="sec-title__title">Looking for Agriculture & <br> Organic Eco Services?</h2>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-one__content">
                    <p class="contact-one__text">There are many variations of passages of available but the
                        majority have suffered alteration in some form, by injected humou or randomised words
                        even believable.</p>
                    <ul class="list-unstyled ml-0 contact-one__lists">
                        <li>
                            <i class="fa fa-check-circle"></i>
                            Making this the first true generator on the Internet
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            Lorem Ipsum is not simply random text
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            If you are going to use a passage
                        </li>
                    </ul><!-- /.list-unstyled ml-0 -->
                    <div class="contact-one__images">
                        <div class="contact-one__images__shape"></div><!-- /.contact-one__images__shape -->
                        <img src="{{ asset('images/resources/contact-1-1.png') }}" alt=""
                            class="contact-one__images-1">
                        <img src="{{ asset('images/resources/contact-1-2.png') }}" alt=""
                            class="contact-one__images-2">
                    </div><!-- /.contact-one__images -->
                </div><!-- /.contact-one__content -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <form action="https://layerdrops.com/agriox/assets/inc/sendemail.php"
                    class="contact-one__form comment-one__form contact-form-validated" novalidate="novalidate">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="comment-form__input-box">
                                <input type="text" placeholder="Your name" name="name">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="comment-form__input-box">
                                <input type="email" placeholder="Email address" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="comment-form__input-box">
                                <textarea name="message" placeholder="Write message"></textarea>
                            </div>
                            <button type="submit" class="thm-btn comment-form__btn">Send a message</button>
                        </div>
                    </div>
                </form>
                <div class="result"></div><!-- /.result -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact-one -->


<!--Company Logos One End-->


<!--Cta One Start-->
<section class="cta-one" style="background-image: url({{ asset('images/backgrounds/cta-v1-bg.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="cta-one__wrapper">
                    <div class="cta-one__left">
                        <div class="cta-one__left-icon">
                            <span class="icon-farm"></span>
                        </div>
                        <div class="cta-one__left-title">
                            <h2>We’re Leader in Agriculture Market</h2>
                        </div>
                    </div>
                    <div class="cta-one__right">
                        <div class="cta-one__right-btn">
                            <a href="#" class="thm-btn">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Cta One End-->

@include('layouts.footerEN')
