<div class="dropdown main-header--one__top d-flex flex-row">
    <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        اللغه| language
    </button>
    <ul class="dropdown-menu">
        <li>
            <p> <a href="/">English <img src="{{ asset('images/backgrounds/united-kingdom.png') }}" alt="" />
            </p>
        </li>
        <li>
            <p><a href="#">العربيه <img src="{{ asset('images/backgrounds/egypt.png') }}" alt="" />
            </p>
        </li>

    </ul>
</div>


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
                                    <h2 class="main-slider__title">عبد الدايم للحاصلات الزراعية<br> حيث تلتقي الجودة
                                        بالنكهة <span><span class="leaf"></h2>
                                    <p class="main-slider__text"> من المزرعة إلى الأسواق العالمية <br> عبد الدايم، شريكك
                                        الموثوق في التصدير</p>
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
                <div class="about-one__content" style="margin-right: 0px !important">
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
                    <p class="about-one__content-text" style="color: white">
                        مرحبًا بكم في شركة عبد الدايم للمحاصيل الزراعية، اسم موثوق به في مجال تصدير واستيراد الفواكه
                        والخضروات الطازجة منذ عام 1995. من خلال التزامنا بتوفير حاصلات زراعية عالية الجودة للعملاء في
                        جميع أنحاء العالم، أثبتنا أنفسنا كواحدة من أكبر الشركات في هذا المجال
                    </p>

                    <p class="about-one__content-text">في شركة عبد الدايم، ندرك أهمية توفير منتجات تلبي المعايير
                        المطلوبة. من خلال فهمنا الجيد لديناميات السوق والالتزام بالتشريعات والبروتوكولات الحكومية، نعرف
                        كيفية تلبية متطلبات عملائنا المتغيرة</p>



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
            <span class="sec-title__tagline">ماذا نقدم</span>
            <h2 class="sec-title__title">منتجاتنا</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-one__content" style="font-size: larger">
                    <p class="contact-one__text">استكشف مجموعتنا الواسعة من الفواكه والخضروات، المختارة بعناية لتلبية
                        أعلى معايير الجودة. نحن نقدم تشكيلة متنوعة تشمل جميع أنواع الحاصلات الحمضية مثل الليمون
                        والبرتقال والعنب والرمان والخوخ والمانجو، لنلبي جميع الأذواق. تأتي منتجاتنا مباشرة من المزارع
                        والبساتين، مما يضمن الحصول على أفضل ما تقدمه الطبيعة.
                        نصدر منتجاتنا إلى المملكة العربية السعودية ودبي ومسقط والكويت وروسيا وأوروبا والهند وأوكرانيا
                        والأردن والعراق وبنغلاديش وماليزيا والصين، وفي المستقبل القريب، ستكون منتجاتنا متاحة في جميع
                        أنحاء العالم.

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




<div class="container" style="padding-bottom: 30px">
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
            <h2 class="sec-title__title">ضمان الجودة</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-one__content" style="font-size: larger">
                    <p class="contact-one__text" style="color: white">نحن ندرك أهمية تقديم حاصلات تلبي المعايير
                        الدولية. لهذا السبب، لدينا عمليات دقيقة لضمان الجودة.
                        يتولى فريق من الخبراء فحص كل شحنة بعناية للتأكد من أنها تفي بمعاييرنا فيما يتعلق المذاق والمظهر
                        والجودة


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
                            <a href="#" class="thm-btn">إكتشف المزيد</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>








<section class="contact-one">
    <div class="container" style="padding-top: 45px">
        <div class="sec-title text-center">
            <div class="icon">
                <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="">
            </div>
            <span class="sec-title__tagline">Facilities</span>
            <h2 class="sec-title__title">التعبئة والتغليف</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-one__content" style="font-size: larger">
                    <p class="contact-one__text">نحن نستخدم أحدث آلات التعبئة والتغليف (sizer) لضمان تعبئة منتجات عالية
                        الجودة بكفاءة ودقة. تم تصميم هذه الآلات المتطورة خصيصًا للتعامل مع مجموعتنا المتنوعة من الفواكه
                        والخضروات، وتوفير حلول تعبئة مثلى تحافظ على المنتجات وتطيل فترة الصلاحية. بالتالي، يمكننا توصيل
                        منتجاتنا بثقة للعملاء في جميع أنحاء العالم، ضامنين أن كل منتج سيصل إلى وجهته في حالة مثالية
                        الحاصلات الزراعية تمر عبر خط غسيل حيث يتم تنظيفها وتعقيمها. ثم يتم تصويرها لضمان الجودة والتأكد
                        من عدم وجود أي عيوب في الفواكه. يتم فرز الفواكه لضمان جودتها النهائية، ونستخدم أجهزة فحص الحجم
                        لتحديد حجم الإنتاج. في النهاية، نصدر منتجات عالية الجودة للعالم بأسره.
                        توفر عبد الدايم للحاصلات الزراعية أيضًا خيارًا للشركات الأخرى للاستفادة من آلة سيزر لغسل وفرز
                        محاصيلها الزراعية الخاصة. وهذا يتيح لهذه الشركات التحقق وضمان جودة منتجاتها الزراعية

                    </p>
                </div><!-- /.contact-one__content -->
            </div><!-- /.col-lg-6 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact-one -->













<section class="meet-farmers-one meet-farmers-one--about">
    <div class="container">
        <div class="sec-title text-center">
            <div class="icon">
                <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="">
            </div>
            <span class="sec-title__tagline">professional people</span>
            <h2 class="sec-title__title">تعرف على مجلس الإدارة التنفيذي</h2>
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
                        <h2><a href="farmers.html">أحمد سليم عبد الدايم</a></h2>
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
                        <h2><a href="farmers.html">سالم سليم عبد الدايم</a></h2>
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
                        <h2><a href="farmers.html">محمود حسن عبد الدايم</a></h2>
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
                        <h2><a href="farmers.html">محجوب حسن عبد الدايم</a></h2>
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








<section class="services-one">
    <div class="services-one__bg wow slideInDown" data-wow-delay="100ms" data-wow-duration="2500ms"></div>
    <div class="container">
        <div class="sec-title text-center">
            <div class="icon">
                <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="">
            </div>
            <span class="sec-title__tagline">عملائنا</span>
            <h2 class="sec-title__title">رضا العملاء</h2>
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
                                <p class="contact-one__text" style="color: white">عملاؤنا هم دائما في أولى اهتماماتنا.
                                    فنسعى جاهدين لتجاوز توقعاتهم من خلال تقديم خدمة استثنائية، والتواصل السريع، والتسعير
                                    التنافسي، سواء كان لديكم متطلبات محددة أو تحتاجون للمساعدة في الطلبات اخرى، فإن
                                    فريقنا يعمل جاهدا لمساعدتكم في كل خطوة.
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
                        <h2 class="sec-title__title">ماذا <br>يتحدثون عننا</h2>
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
                                    <p class="testimonials-one__single-text">شركة عبد الدايم للمحاصيل الزراعية كانت
                                        شريكنا الموثوق منذ سنوات. التزامهم بتقديم منتجات عالية الجودة لا مثيل لها. نحن
                                        دائما معجبون بجودة ومذاق فواكههم وخضرواتهم." </p>
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
                                        <div class="testimonials-one__single-client-info-title" style="margin: auto">
                                            <h4>سارة م</h4>
                                            <p>عملاء</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Start Single Testimonials One-->

                                <!--Start Single Testimonials One-->
                                <div class="testimonials-one__single">
                                    <p class="testimonials-one__single-text">لقد قمت باستيراد الفواكه والخضروات من شركة
                                        عبد الدايم للمحاصيل الزراعية لفترة طويلة. فاهتمامهم بديناميات السوق والالتزام
                                        بالتشريعات الحكومية يستحق الإشادة. إنهم دائما يبذلون قصارى جهدهم لتلبية
                                        تفضيلاتنا ومتطلباتنا الخاصة</p>
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
                                        <div class="testimonials-one__single-client-info-title" style="margin: auto">
                                            <h4>جون د</h4>
                                            <p>عملاء</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Start Single Testimonials One-->

                                <!--Start Single Testimonials One-->
                                <div class="testimonials-one__single">
                                    <p class="testimonials-one__single-text">في كل مرة أستلم فيها طلبية من شركتكم، تكون
                                        في حالة مثالية، كما لو أنها تم حصادها الان</p>
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
                                        <div class="testimonials-one__single-client-info-title" style="margin: auto">
                                            <h4>ليزا ر</h4>
                                            <p>عملاء</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Start Single Testimonials One-->

                                <!--Start Single Testimonials One-->
                                <div class="testimonials-one__single">
                                    <p class="testimonials-one__single-text">لا تقدم شركة عبد الدايم للمحاصيل الزراعية
                                        منتجات ممتازة فقط، بل احترافيتهم في التعامل مع جميع المتطلبات متميزة. إنهم
                                        يجعلون التجارة الدولية سهلة، والتسليم في الوقت المحدد</p>
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
                                        <div class="testimonials-one__single-client-info-title" style="margin: auto">
                                            <h4>ديفيد س</h4>
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
