<p> <a href="en" class="text-danger">English</a>
</p>
@include('layouts.appAR')

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
                                    <span class="main-slider-tagline">نحن ننتج سلعًا طبيعية</span>
                                    <h2 class="main-slider__title">مرحبا بكم في <br> الزراعة <span><span
                                                class="leaf"><img src="{{ asset('images/resources/leaf.png') }}"
                                                    alt="" /></span>مزرعة</span></h2>
                                    <p class="main-slider__text">هناك العديد من مقاطع لوريم إيبسوم ، لكن
                                        الميجوري قد <br> تعرضت للتغيير بشكل ما.</p>
                                </div>
                                <div class="main-slider__button-box">
                                    <div class="arrow-icon"><img
                                            src="{{ asset('images/icon/main-slider__button-arrow.png') }}"
                                            alt="" />
                                    </div>
                                    <a href="#" class="thm-btn">إكتشف أكثر</a>
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
                                    <span class="main-slider-tagline">نحن ننتج سلعًا طبيعية</span>
                                    <h2 class="main-slider__title">مرحبا بكم في <br> الزراعة <span><span
                                                class="leaf"><img src="{{ asset('images/resources/leaf.png') }}"
                                                    alt="" /></span>مزرعة</span></h2>
                                    <p class="main-slider__text">هناك العديد من مقاطع لوريم إيبسوم ، لكن
                                        الميجوري قد <br> تعرضت للتغيير بشكل ما.</p>
                                </div>
                                <div class="main-slider__button-box">
                                    <div class="arrow-icon"><img
                                            src="{{ asset('images/icon/main-slider__button-arrow.png') }}"
                                            alt="" />
                                    </div>
                                    <a href="#" class="thm-btn">إكتشف أكثر</a>
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
                </div>
                <div class="image-layer-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-slider-inner">
                                <div class="main-slider__content">
                                    <span class="main-slider-tagline">نحن ننتج سلعًا طبيعية</span>
                                    <h2 class="main-slider__title">مرحبا بكم في <br> الزراعة <span><span
                                                class="leaf"><img src="{{ asset('images/resources/leaf.png') }}"
                                                    alt="" /></span>مزرعة</span></h2>
                                    <p class="main-slider__text">هناك العديد من مقاطع لوريم إيبسوم ، لكن
                                        الميجوري قد <br> تعرضت للتغيير بشكل ما.</p>
                                </div>
                                <div class="main-slider__button-box">
                                    <div class="arrow-icon"><img
                                            src="{{ asset('images/icon/main-slider__button-arrow.png') }}"
                                            alt="" />
                                    </div>
                                    <a href="#" class="thm-btn">إكتشف أكثر</a>
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
                        <span class="sec-title__tagline"> مقدمتنا </span>
                        <h2 class="sec-title__title">

                            الزراعة النقية
                            <br>

                            والشكل العضوي

                        </h2>
                    </div>

                    <h2 class="about-one__content-title">

                        نحن شركة رائدة في سوق الزراعة

                    </h2>
                    <p class="about-one__content-text">

                        هناك العديد من الاختلافات في المقاطع المتوفرة
                        ولكن الغالبية عانت من تغيير في شكل ما ، عن طريق إدخال الفكاهة أو الكلمات
                        العشوائية التي يمكن تصديقها قليلاً.

                    </p>
                    <ul class="about-one__content-list">
                        <li>
                            <div class="icon">
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <p>

                                    لوريم إيبسوم ليس مجرد نص عشوائي


                                </p>
                            </div>
                        </li>

                        <li>
                            <div class="icon">
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <p>

                                    إذا كنت ستستخدم ممرًا

                                </p>
                            </div>
                        </li>

                        <li>
                            <div class="icon">
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <p>

                                    جعل هذا أول مولد حقيقي على
                                    الإنترنت

                                </p>
                            </div>
                        </li>

                        <li>
                            <div class="icon">
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <p>

                                    تطورت إصدارات مختلفة على مر
                                    السنين

                                </p>
                            </div>
                        </li>
                    </ul>

                    <div class="about-one__content-video-box">
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
                            <p>شاهد الفيديو الخاص بنا</p>
                            <h3>نصائح لإنضاج الفاكهة</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!--End About One Content-->
        </div>
    </div>
</section>
<!--About One End-->


<!--Features One Start-->
<section class="features-one clearfix">
    <div class="container">
        <div class="row">
            <!--Start Single Features One-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp animated animated">
                <div class="features-one__single">
                    <div class="features-one__single-img">
                        <img src="{{ asset('images/feauters/features-v1-img1.jpg') }}" alt="" />
                        <div class="features-one__single-title text-center">
                            <h3><a href="#">
                                    أفضل <br> معايير الجودة
                                </a></h3>
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
                            <h3><a href="#">
                                    الخدمات
                                    <br>
                                    العضوية الذكية
                                </a></h3>
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
                        style="background-image: url({{ asset('images/backgrounds/features-one-single-bg.png)') }};">
                    </div>
                    <div class="features-one__single-img">
                        <img src="{{ asset('images/feauters/features-v1-img3.jpg') }}" alt="" />
                    </div>
                    <div class="features-one__single-title text-center">
                        <h3><a href="#">المنتجات <br> الزراعية</a></h3>
                    </div>
                    <div class="button">
                        <a href="#" class="thm-btn">إكتشف أكثر</a>
                    </div>
                </div>
            </div>
            <!--End Single Features One-->
        </div>
    </div>
</section>
<!--Features One End-->

<!--Video One Start-->
<section class="video-one jarallax clearfix" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
    style="background-image: url({{ asset('images/backgrounds/video-one-bg.jpg') }});">
    <div class="video-one-border"></div>
    <div class="video-one-border video-one-border-two"></div>
    <div class="video-one-border video-one-border-three"></div>
    <div class="video-one-border video-one-border-four"></div>
    <div class="video-one-border video-one-border-five"></div>
    <div class="video-one-border video-one-border-six"></div>

    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="video-one__wrpper">
                    <div class="video-one__left">
                        <div class="video-one__leaf"></div><!-- /.video-one__leaf -->
                        <h2 class="video-one__title">الزراعة <br>مهمة لمستقبل التنمية</h2>
                        <div class="video-one__btn">
                            <a href="#" class="thm-btn">إكتشف أكثر</a>
                        </div>
                    </div>
                    <div class="video-one__right">
                        <div class="icon wow zoomIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <a class="video-popup" title=" Video" href="https://www.youtube.com/watch?v=8DP4NgupAhI">
                                <span class="icon-play-button-1"></span>
                            </a>
                            <span class="border-animation border-1"></span>
                            <span class="border-animation border-2"></span>
                            <span class="border-animation border-3"></span>
                        </div>
                        <div class="title">
                            <h2>
                                شاهد الفيديو
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Video One End-->

<!--Services One Start-->
<section class="services-one">
    <div class="services-one__bg wow slideInDown" data-wow-delay="100ms" data-wow-duration="2500ms"></div>
    <div class="container">
        <div class="sec-title text-center">
            <div class="icon">
                <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="">
            </div>
            <span class="sec-title__tagline"> ما كانوا يفعلون </span>
            <h2 class="sec-title__title">الخدمات التي نقدمها</h2>
        </div>
        <div class="row">
            <!--Start Single Services One-->
            <div class="col-xl-3 col-lg-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                <div class="services-one__single">
                    <div class="services-one__single-img">
                        <div class="services-one__single-img-inner">
                            <img src="{{ asset('images/services/services-v1-img1.jpg') }}" alt="" />
                        </div>
                    </div>
                    <div class="services-one__single-content text-center">
                        <div class="services-one__single-img-icon">
                            <span class="icon-الزراعة"></span>
                        </div>
                        <h3><a href="services-details.html">منتجات <br> الألبان</a></h3>
                        <p> تجدون نموذجًا جديدًا من نمط ما ، من تغيير شكل ما ، عن طريق إدخال </p>
                        <a href="services-details.html" class="read-more-btn"><span
                                class="icon-right-arrow-2"></span></a>
                    </div>
                </div>
            </div>
            <!--End Single Services One-->

            <!--Start Single Services One-->
            <div class="col-xl-3 col-lg-6 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
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
                        <h3><a href="services-details.html">المنتجات <br>العضوية</a></h3>
                        <p> تجدون نموذجًا جديدًا من نمط ما ، من تغيير شكل ما ، عن طريق إدخال </p>
                        <a href="services-details.html" class="read-more-btn"><span
                                class="icon-right-arrow-2"></span></a>
                    </div>
                </div>
            </div>
            <!--End Single Services One-->

            <!--Start Single Services One-->
            <div class="col-xl-3 col-lg-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
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
                        <h3><a href="services-details.html">طازجة <br>خضروات </a></h3>
                        <p> تجدون نموذجًا جديدًا من نمط ما ، من تغيير شكل ما ، عن طريق إدخال </p>
                        <a href="services-details.html" class="read-more-btn"><span
                                class="icon-right-arrow-2"></span></a>
                    </div>
                </div>
            </div>
            <!--End Single Services One-->

            <!--Start Single Services One-->
            <div class="col-xl-3 col-lg-6 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms">
                <div class="services-one__single">
                    <div class="services-one__single-img">
                        <div class="services-one__single-img-inner">
                            <img src="{{ asset('images/services/services-v1-img4.jpg') }}" alt="" />
                        </div>
                    </div>
                    <div class="services-one__single-content text-center">
                        <div class="services-one__single-img-icon">
                            <span class="icon-dairy-products"></span>
                        </div>
                        <h3><a href="services-details.html">المنتجات <br> الزراعية</a></h3>
                        <p> تجدون نموذجًا جديدًا من نمط ما ، من تغيير شكل ما ، عن طريق إدخال </p>
                        <a href="services-details.html" class="read-more-btn"><span
                                class="icon-right-arrow-2"></span></a>
                    </div>
                </div>
            </div>
            <!--End Single Services One-->
        </div>
    </div>
</section>
<!--Services One End-->



<!--Projects One Start-->
<section class="projects-one">
    <div class="auto-container">
        <div class="sec-title text-center">
            <div class="icon">
                <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="">
            </div>
            <span class="sec-title__tagline"> العمل المنجز مؤخرا </span>
            <h2 class="sec-title__title">اكتشف مشاريعنا</h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="projects-one__carousel owl-carousel owl-theme owl-dot-type1">
                    <!--Start Single Projects One-->
                    <div class="projects-one__single wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="projects-one__single-img">
                            <img src="{{ asset('images/project/projects-v1-img1.jpg') }}" alt="" />
                            <div class="overlay-content">
                                <p>الزراعة</p>
                                <h3><a href="projects-details.html">ابتكارات الحصاد</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Projects One-->

                    <!--Start Single Projects One-->
                    <div class="projects-one__single wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="projects-one__single-img">
                            <img src="{{ asset('images/project/projects-v1-img2.jpg') }}" alt="" />
                            <div class="overlay-content">
                                <p>الزراعة</p>
                                <h3><a href="projects-details.html">ابتكارات الحصاد</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Projects One-->

                    <!--Start Single Projects One-->
                    <div class="projects-one__single wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="projects-one__single-img">
                            <img src="{{ asset('images/project/projects-v1-img3.jpg') }}" alt="" />
                            <div class="overlay-content">
                                <p>الزراعة</p>
                                <h3><a href="projects-details.html">ابتكارات الحصاد</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Projects One-->

                    <!--Start Single Projects One-->
                    <div class="projects-one__single wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="projects-one__single-img">
                            <img src="{{ asset('images/project/projects-v1-img4.jpg') }}" alt="" />
                            <div class="overlay-content">
                                <p>الزراعة</p>
                                <h3><a href="projects-details.html">ابتكارات الحصاد</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Projects One-->

                    <!--Start Single Projects One-->
                    <div class="projects-one__single wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="projects-one__single-img">
                            <img src="{{ asset('images/project/projects-v1-img1.jpg') }}" alt="" />
                            <div class="overlay-content">
                                <p>الزراعة</p>
                                <h3><a href="projects-details.html">ابتكارات الحصاد</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Projects One-->

                    <!--Start Single Projects One-->
                    <div class="projects-one__single wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="projects-one__single-img">
                            <img src="{{ asset('images/project/projects-v1-img2.jpg') }}" alt="" />
                            <div class="overlay-content">
                                <p>الزراعة</p>
                                <h3><a href="projects-details.html">ابتكارات الحصاد</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Projects One-->

                    <!--Start Single Projects One-->
                    <div class="projects-one__single wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="projects-one__single-img">
                            <img src="{{ asset('images/project/projects-v1-img3.jpg') }}" alt="" />
                            <div class="overlay-content">
                                <p>الزراعة</p>
                                <h3><a href="projects-details.html">ابتكارات الحصاد</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Projects One-->

                    <!--Start Single Projects One-->
                    <div class="projects-one__single wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="projects-one__single-img">
                            <img src="{{ asset('images/project/projects-v1-img4.jpg') }}" alt="" />
                            <div class="overlay-content">
                                <p>الزراعة</p>
                                <h3><a href="projects-details.html">ابتكارات الحصاد</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Projects One-->

                    <!--Start Single Projects One-->
                    <div class="projects-one__single wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="projects-one__single-img">
                            <img src="{{ asset('images/project/projects-v1-img1.jpg') }}" alt="" />
                            <div class="overlay-content">
                                <p>الزراعة</p>
                                <h3><a href="projects-details.html">ابتكارات الحصاد</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Projects One-->

                    <!--Start Single Projects One-->
                    <div class="projects-one__single wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="projects-one__single-img">
                            <img src="{{ asset('images/project/projects-v1-img2.jpg') }}" alt="" />
                            <div class="overlay-content">
                                <p>الزراعة</p>
                                <h3><a href="projects-details.html">ابتكارات الحصاد</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Projects One-->

                    <!--Start Single Projects One-->
                    <div class="projects-one__single wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="projects-one__single-img">
                            <img src="{{ asset('images/project/projects-v1-img3.jpg') }}" alt="" />
                            <div class="overlay-content">
                                <p>الزراعة</p>
                                <h3><a href="projects-details.html">ابتكارات الحصاد</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Projects One-->

                    <!--Start Single Projects One-->
                    <div class="projects-one__single wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="projects-one__single-img">
                            <img src="{{ asset('images/project/projects-v1-img4.jpg') }}" alt="" />
                            <div class="overlay-content">
                                <p>الزراعة</p>
                                <h3><a href="projects-details.html">ابتكارات الحصاد</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Projects One-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--Projects One End-->

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
                        <span class="sec-title__tagline"> شهاداتنا </span>
                        <h2 class="sec-title__title">ماذا <br>يتحدثون عن <br> Agriox</h2>
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
                                    <p class="testimonials-one__single-text">Lorem ipsum هو ببساطة نص حر لا
                                        يجلس
                                        عليه ، مع ملاحظة أنه لا يوجد أي نص.</p>
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
                                            <h4>كيفن مارتن</h4>
                                            <p>عملاء</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Start Single Testimonials One-->

                                <!--Start Single Testimonials One-->
                                <div class="testimonials-one__single">
                                    <p class="testimonials-one__single-text">Lorem ipsum هو ببساطة نص حر لا
                                        يجلس
                                        عليه ، مع ملاحظة أنه لا يوجد أي نص.</p>
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
                                            <h4>كريستين إيف</h4>
                                            <p>عملاء</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Start Single Testimonials One-->

                                <!--Start Single Testimonials One-->
                                <div class="testimonials-one__single">
                                    <p class="testimonials-one__single-text">Lorem ipsum هو ببساطة نص حر لا
                                        يجلس
                                        عليه ، مع ملاحظة أنه لا يوجد أي نص.</p>
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
                                            <h4>كيفن مارتن</h4>
                                            <p>عملاء</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Start Single Testimonials One-->

                                <!--Start Single Testimonials One-->
                                <div class="testimonials-one__single">
                                    <p class="testimonials-one__single-text">Lorem ipsum هو ببساطة نص حر لا
                                        يجلس
                                        عليه ، مع ملاحظة أنه لا يوجد أي نص.</p>
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
                                            <h4>كريستين إيف</h4>
                                            <p>عملاء</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Start Single Testimonials One-->

                                <!--Start Single Testimonials One-->
                                <div class="testimonials-one__single">
                                    <p class="testimonials-one__single-text">Lorem ipsum هو ببساطة نص حر لا
                                        يجلس
                                        عليه ، مع ملاحظة أنه لا يوجد أي نص.</p>
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
                                            <h4>كيفن مارتن</h4>
                                            <p>عملاء</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Start Single Testimonials One-->

                                <!--Start Single Testimonials One-->
                                <div class="testimonials-one__single">
                                    <p class="testimonials-one__single-text">Lorem ipsum هو ببساطة نص حر لا
                                        يجلس
                                        عليه ، مع ملاحظة أنه لا يوجد أي نص.</p>
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
                                            <h4>كريستين إيف</h4>
                                            <p>عملاء</p>
                                        </div>
                                    </div>
                                </div>
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
                        <span class="sec-title__tagline"> الزراعة الحديثة </span>
                        <h2 class="sec-title__title">تقديم منتجات عالية الجودة</h2>
                    </div>

                    <ul class="providing-quality-one__content-box-list">
                        <li class="providing-quality-one__content-box-list-item">
                            <div class="icon">
                                <span class="icon-agriculture"></span>
                            </div>
                            <div class="text">
                                <h3>صنع أغذية صحية</h3>
                                <p>هناك العديد من أنواع التصاريح المتاحة ولكن الغالبية لديها نص مجاني.</p>
                            </div>
                        </li>

                        <li class="providing-quality-one__content-box-list-item">
                            <div class="icon">
                                <span class="icon-farm"></span>
                            </div>
                            <div class="text">
                                <h3>نمو زراعتنا</h3>
                                <p>هناك العديد من أنواع التصاريح المتاحة ولكن الغالبية لديها نص مجاني.</p>
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
    <div class="blog-one__shape"></div><!-- /.blog-one__shape -->
    <div class="container">
        <div class="sec-title text-center">
            <div class="icon">
                <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="">
            </div>
            <span class="sec-title__tagline"> من المدونة </span>
            <h2 class="sec-title__title">مقالات إخبارية</h2>
        </div>
        <div class="row">
            <!--Start Single Blog One-->
            <div class="col-xl-4 col-lg-4  wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="blog-one__single">
                    <div class="blog-one__single-img">
                        <img src="{{ asset('images/blog/blog-v1-img1.jpg') }}" alt="" />
                        <div class="date-box">
                            <span> 30 يوليو 2021 </span>
                        </div>
                        <div class="overlay-icon">
                            <a href="news-details.html"><span class="icon-plus"></span></a>
                        </div>
                    </div>

                    <div class="blog-one__single-content">
                        <ul class="meta-info">
                            <li><a href="#"><i class="far fa-user-circle"></i>جيسيكا</a></li>
                            <li><a href="#"><i class="far fa-comments"></i>2 تعليقات</a></li>
                        </ul>
                        <h2><a href="news-details.html">الاستفادة من الأطر الرشيقة لتوفير ملخص قوي</a></h2>
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
                            <span> 30 يوليو 2021 </span>
                        </div>
                        <div class="overlay-icon">
                            <a href="news-details.html"><span class="icon-plus"></span></a>
                        </div>
                    </div>

                    <div class="blog-one__single-content">
                        <ul class="meta-info">
                            <li><a href="#"><i class="far fa-user-circle"></i>جيسيكا</a></li>
                            <li><a href="#"><i class="far fa-comments"></i>2 تعليقات</a></li>
                        </ul>
                        <h2><a href="news-details.html">جلب إلى الطاولة استراتيجيات البقاء على قيد الحياة لكسب
                                الجميع </a></h2>
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
                            <span> 30 يوليو 2021 </span>
                        </div>
                        <div class="overlay-icon">
                            <a href="news-details.html"><span class="icon-plus"></span></a>
                        </div>
                    </div>

                    <div class="blog-one__single-content">
                        <ul class="meta-info">
                            <li><a href="#"><i class="far fa-user-circle"></i>جيسيكا</a></li>
                            <li><a href="#"><i class="far fa-comments"></i>2 تعليقات</a></li>
                        </ul>
                        <h2><a href="news-details.html">لماذا البيئة والمشي أو الزراعة من أجل البيئة؟</a></h2>
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
            <span class="sec-title__tagline"> اتصل بنا </span>
            <h2 class="sec-title__title">هل تبحث عن الزراعة والخدمات <br> البيئية العضوية؟</h2>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-one__content">
                    <p class="contact-one__text">هناك العديد من الاختلافات في المقاطع المتاحة ولكن الغالبية
                        عانت
                        من تغيير في شكل ما ، عن طريق حقن الدخان أو الكلمات العشوائية التي يمكن تصديقها.</p>
                    <ul class="list-unstyled ml-0 contact-one__lists">
                        <li>
                            <i class="fa fa-check-circle"></i>
                            جعل هذا أول مولد حقيقي على الإنترنت
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>

                            لوريم إيبسوم ليس مجرد نص عشوائي
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>

                            إذا كنت ستستخدم ممرًا
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
                                <input type="text" placeholder="اسمك" name="name">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="comment-form__input-box">
                                <input type="email" placeholder="عنوان البريد الالكترونى" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="comment-form__input-box">
                                <textarea name="message" placeholder="اكتب رسالة"></textarea>
                            </div>
                            <button type="submit" class="thm-btn comment-form__btn">ارسل رسالة</button>
                        </div>
                    </div>
                </form>
                <div class="result"></div><!-- /.result -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact-one -->

<!--Company Logos One Start-->
<section class="company-logos-one">
    <div class="container">
        <div class="thm-swiper__slider swiper-container"
            data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                "0": {
                    "spaceBetween": 20,
                    "slidesPerView": 2
                },
                "375": {
                    "spaceBetween": 20,
                    "slidesPerView": 2
                },
                "575": {
                    "spaceBetween": 20,
                    "slidesPerView": 3
                },
                "767": {
                    "spaceBetween": 30,
                    "slidesPerView": 4
                },
                "991": {
                    "spaceBetween": 40,
                    "slidesPerView": 5
                },
                "1199": {
                    "spaceBetween": 40,
                    "slidesPerView": 5
                }
            }}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('images/resources/Company-Logos-v1-logo1.png') }}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{ asset('images/resources/Company-Logos-v1-logo1.png') }}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{ asset('images/resources/Company-Logos-v1-logo1.png') }}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{ asset('images/resources/Company-Logos-v1-logo1.png') }}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{ asset('images/resources/Company-Logos-v1-logo1.png') }}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{ asset('images/resources/Company-Logos-v1-logo1.png') }}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{ asset('images/resources/Company-Logos-v1-logo1.png') }}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{ asset('images/resources/Company-Logos-v1-logo1.png') }}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{ asset('images/resources/Company-Logos-v1-logo1.png') }}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{ asset('images/resources/Company-Logos-v1-logo1.png') }}" alt="">
                </div><!-- /.swiper-slide -->
            </div>
        </div>
    </div>
</section>
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
                            <h2>
                                نحن شركة رائدة في سوق الزراعة
                            </h2>
                        </div>
                    </div>
                    <div class="cta-one__right">
                        <div class="cta-one__right-btn">
                            <a href="#" class="thm-btn">إكتشف أكثر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Cta One End-->


@include('layouts.footerAR')
