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
            <p><a href="/مرافق">العربيه <img src="{{ asset('images/backgrounds/egypt.png') }}" alt="" />
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
                <li><a href="index-main.html">Home</a></li>
                <li>Facilities</li>
            </ul>
            <h2>Facilities</h2>
        </div>
    </div>
</section>
<!--Page Header End-->





<section class="services-one">
    <div class="services-one__bg wow slideInDown" data-wow-delay="100ms" data-wow-duration="2500ms"></div>
    <div class="container">
        <div class="sec-title text-center">
            <div class="icon">
                <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="">
            </div>
            <span class="sec-title__tagline">What we’re doing</span>
            <h2 class="sec-title__title">Services We Offer</h2>
        </div>
        <div class="row">
            <!--Start Single Services One-->
            <div class="col-xl-3 col-lg-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                <div class="services-one__single">
                    <div class="services-one__single-img">
                        <div class="services-one__single-img-inner">
                            <img src="{{ asset('images/services/services-v1-img1.jpg') }}" alt="" />
                        </div>
                        <div class="services-one__single-img-icon">
                            <span class="icon-agriculture"></span>
                        </div>
                    </div>
                    <div class="services-one__single-content text-center">
                        <h3><a href="/shop">Agriculture<br> Products</a></h3>
                        <p>Lorem ium dolor sit ametad pisicing elit sed simply do ut.</p>
                        <a href="/shop" class="read-more-btn"><span class="icon-right-arrow-2"></span></a>
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
                        <div class="services-one__single-img-icon">
                            <span class="icon-harvest"></span>
                        </div>
                    </div>
                    <div class="services-one__single-content text-center">
                        <h3><a href="/shop">Fresh <br>Vegetables</a></h3>
                        <p>Lorem ium dolor sit ametad pisicing elit sed simply do ut.</p>
                        <a href="/shop" class="read-more-btn"><span class="icon-right-arrow-2"></span></a>
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
                        <div class="services-one__single-img-icon">
                            <span class="icon-growth"></span>
                        </div>
                    </div>
                    <div class="services-one__single-content text-center">
                        <h3><a href="/shop">Oragnic <br>Products</a></h3>
                        <p>Lorem ium dolor sit ametad pisicing elit sed simply do ut.</p>
                        <a href="/shop" class="read-more-btn"><span class="icon-right-arrow-2"></span></a>
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
                        <div class="services-one__single-img-icon">
                            <span class="icon-dairy-products"></span>
                        </div>
                    </div>
                    <div class="services-one__single-content text-center">
                        <h3><a href="/shop">Dairy<br> Products</a></h3>
                        <p>Lorem ium dolor sit ametad pisicing elit sed simply do ut.</p>
                        <a href="/shop" class="read-more-btn"><span class="icon-right-arrow-2"></span></a>
                    </div>
                </div>
            </div>
            <!--End Single Services One-->
        </div>
    </div>
</section>




<!--Features One Start-->
{{-- <section class="features-one features-one--services clearfix">
    <div class="container">
        <div class="row">
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
        </div>
    </div>
</section> --}}
<!--Features One End-->









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
    {{-- <div class="container">
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
    </div> --}}
</section>





















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
                    <p class="contact-one__text">we utilize state-of-the-art filling and packaging machines (SIZER) to
                        ensure high-quality products' efficient and precise packaging. These advanced machines are
                        specifically designed to handle our diverse range of fruits and vegetables, providing optimal
                        packaging solutions that preserve freshness and extend shelf life. So, we can confidently
                        deliver our produce to customers worldwide, ensuring every product reaches its destination in
                        perfect condition.
                        Agricultural crops go through a washing line where they are cleaned and sanitized. Then, they
                        are photographed for quality assurance to ensure that the fruits are free from any defects. The
                        fruits are sorted to ensure their final quality, and we use sizers to determine the size of the
                        produce. Finally, we export the highest quality produce to the whole world.
                        Abdel Dayem Agricultural Crops Company not only exports agricultural crops, but also offers the
                        option for other companies to utilize the Sizer machine for washing and sorting their own
                        agricultural crops. This enables these companies to verify and ensure the quality of their
                        agricultural produce.

                    </p>
                </div><!-- /.contact-one__content -->
            </div><!-- /.col-lg-6 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact-one -->











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

<!--Services One Start-->

<!--Services One End-->

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
