<div class="dropdown main-header--one__top d-flex flex-row">
    <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        اللغه| language
    </button>
    <ul class="dropdown-menu">
        <li>
            <p> <a href="#">English <img src="{{ asset('images/backgrounds/united-kingdom.png') }}" alt="" />
            </p>
        </li>
        <li>
            <p><a href="/عن">العربيه <img src="{{ asset('images/backgrounds/egypt.png') }}" alt="" />
            </p>
        </li>

    </ul>
</div>

@include('layouts.appEN')
<!--Page Header Start-->
<section class="page-header clearfix"
    style="background-image: url({{ asset('images/backgrounds/page-header-bg.jpg') }});">
    <div class="container">
        <div class="page-header__inner text-center clearfix">
            <ul class="thm-breadcrumb">
                <li><a href="عربي">Home</a></li>
                <li>About</li>
            </ul>
            <h2>About Us</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--About Three Start-->
<section>
    <section class="contact-one">
        <div class="container">
            <div class="sec-title text-center">
                <div class="icon">
                    <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="">
                </div>
                <span class="sec-title__tagline">get to know about us</span>
                <h2 class="sec-title__title">We Sell High-Quality <br>Organic Products</h2>

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-one__content" style="font-size: larger">
                        <p class="contact-one__text" style="color: white">Welcome to Abdel Dayem Agricultural Crops
                            Company, a trusted
                            name in the export and import of fresh fruits and vegetables since 1995. With our commitment
                            to
                            providing high-quality fruits and vegetables to customers worldwide, we have established
                            ourselves as one of the largest companies in the industry.
                        </p>
                        <p>At Abdel Dayem Agricultural Crops Company, we understand the importance of providing our
                            customers with products that meet their specific preferences and the required standards.
                            With a deep understanding of market dynamics and adherence to government legislation and
                            protocols, we continuously adapt to meet the evolving needs of our customers.</p>
                        <p class="about-one__content-text" style="color: white">Our dedicated team ensures that our
                            fruits and vegetables are handled with utmost care, maintaining their peak condition until
                            they reach our customers. We adhere to international standards, ensuring that our products
                            are of the highest quality, just as if they were freshly picked.</p>


                    </div><!-- /.contact-one__content -->
                    <div class="about-three__products-list"
                        style="justify-content: center;
                    display: flex;
                    margin-bottom: 20px;
                }">
                        <ul>
                            <li>
                                <div class="icon">
                                    <span class="icon-investment"></span>
                                </div>
                                <h3><a href="#">Natural Products</a></h3>
                                {{-- <p>Duis aute irure dolor simply free in voluptate velit.</p> --}}
                            </li>

                            <li style="margin-left: 30px">
                                <div class="icon">
                                    <span class="icon-harvest"></span>
                                </div>
                                <h3><a href="#">Healthy Food</a></h3>
                                {{-- <p>Duis aute irure dolor simply free in voluptate velit.</p> --}}
                            </li>
                        </ul>
                    </div>
                </div><!-- /.col-lg-6 -->

            </div><!-- /.row -->
        </div><!-- /.container -->
        <div class="row">
            <!--Start About Three Img Box-->
            <div class="col-xl-6 col-lg-5 m-auto">
                <div class="about-three__img-box">
                    {{-- <img src="{{ asset('images/resources/about-3-icon-1-1.png') }}" class="about-three__img-icon"
                            alt=""> --}}
                    <div class="">
                        <div class="about-three__img-box-img-inner">
                            <img src="{{ asset('images/about/about-v3-img1.jpg') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <!--End About Three Img Box-->
        </div>
    </section><!-- /.contact-one -->



</section>
<!--About Three End-->






<!--Video One Start-->
<section class="video-one jarallax clearfix" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
    style="background-image: url({{ asset('images/backgrounds/video-one-bg.jpg') }});">

    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="video-one__wrpper">
                    <div class="video-one__left">
                        <div class="video-one__leaf"></div><!-- /.video-one__leaf -->
                        <h2 class="video-one__title">Our Mission</h2>
                        <p>Our mission is to consistently provide top-notch fruits and vegetables to global markets,
                            ensuring customer satisfaction and building long-lasting relationships. We are committed to
                            sourcing and handling our produce with utmost care, maintaining the highest standards of
                            quality.</p>
                        {{-- <div class="video-one__btn">
                            <a href="#" class="thm-btn">Discover more</a>
                        </div> --}}
                        <h2 class="video-one__title" style="padding-top: 50px">Our Vision</h2>
                        <p>Our mission is to consistently provide top-notch fruits and vegetables to global markets,
                            ensuring customer satisfaction and building long-lasting relationships. We are committed to
                            sourcing and handling our produce with utmost care, maintaining the highest standards of
                            quality.</p>

                    </div>
                    {{-- <div class="video-one__right">
                        <div class="icon wow zoomIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <a class="video-popup" title=" Video" href="https://www.youtube.com/watch?v=8DP4NgupAhI">
                                <span class="icon-play-button-1"></span>
                            </a>
                            <span class="border-animation border-1"></span>
                            <span class="border-animation border-2"></span>
                            <span class="border-animation border-3"></span>
                        </div>
                        <div class="title">
                            <h2>Watch the video</h2>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!--Video One End-->



<!--Testimonials One Start-->








<section class="contact-one">
    <div class="container" style="padding-top: 45px">
        <div class="sec-title text-center">
            <div class="icon">
                <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="">
            </div>
            <span class="sec-title__tagline">Facilities</span>
            <h2 class="sec-title__title">Our Packing House</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-one__content" style="font-size: larger">
                    <p class="contact-one__text">we utilize state-of-the-art filling and packaging machines (Caesar) to
                        ensure high-quality products' efficient and precise packaging. These advanced machines are
                        specifically designed to handle our diverse range of fruits and vegetables, providing optimal
                        packaging solutions that preserve freshness and extend shelf life. So, we can confidently
                        deliver our produce to customers worldwide, ensuring every product reaches its destination in
                        perfect condition.
                    </p>
                </div><!-- /.contact-one__content -->
            </div><!-- /.col-lg-6 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact-one -->






<section class="meet-farmers-one meet-farmers-one--about" style="padding: 0">
    <div class="container" style="border-top: 1px solid;
    padding-top: 40px; padding-bottom: 40px">
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
                <div class="meet-farmers-one__single"
                    style="    background-color: seagreen;
                border-radius: 36px; margin-top:40px">
                    {{-- <div class="meet-farmers-one__single-img">
                        <img src="{{ asset('images/resources/meet-farmers-v1-img1.jpg') }}" alt="" />

                    </div> --}}
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
                <div class="meet-farmers-one__single"
                    style="    background-color: seagreen;
                border-radius: 36px;margin-top:40px">
                    {{-- <div class="meet-farmers-one__single-img">
                        <img src="{{ asset('images/resources/meet-farmers-v1-img2.jpg') }}" alt="" />
                    </div> --}}
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
                <div class="meet-farmers-one__single"
                    style="    background-color: seagreen;
                border-radius: 36px;margin-top:40px">
                    {{-- <div class="meet-farmers-one__single-img">
                        <img src="{{ asset('images/resources/meet-farmers-v1-img3.jpg') }}" alt="" />
                    </div> --}}
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
                <div class="meet-farmers-one__single"
                    style="    background-color: seagreen;
                border-radius: 36px;margin-top:40px">
                    {{-- <div class="meet-farmers-one__single-img">
                        <img src="{{ asset('images/resources/meet-farmers-v1-img4.jpg') }}" alt="" />
                    </div> --}}
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



<!--Cta One Start-->
<section class="cta-one">
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
                            <a href="shop" class="thm-btn">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Cta One End-->


@include('layouts.footerEN')
