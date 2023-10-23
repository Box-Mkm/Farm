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
                <div class="image-layer" style="background-image: url({{ asset('images/backgrounds/autumn2.jpg') }});">
                </div>
                <div class="image-layer-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-slider-inner">
                                <div class="main-slider__content">
                                    <span class="main-slider-tagline">نحن ننتج سلعًا طبيعية</span>
                                    <h2 class="main-slider__title" style="word-spacing: -15px">عبدالدايم للحاصلات
                                        الزراعية<br> حيث تلتقي الجودة
                                        بالنكهة <span><span class="leaf"></h2>
                                    <p class="main-slider__text"> من المزرعة إلى الأسواق العالمية <br> عبدالدايم، شريكك
                                        الموثوق في التصدير</p>
                                </div>
                                <div class="main-slider__button-box">
                                    <div class="arrow-icon"><img
                                            src="{{ asset('images/icon/main-slider__button-arrow.png') }}"
                                            alt="" />
                                    </div>
                                    <a href="عن" class="thm-btn">إكتشف أكثر</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Swiper Slide-->

            <!--Start Single Swiper Slide-->
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url({{ asset('images/backgrounds/autumn3.jpg') }});">
                </div>
                <div class="image-layer-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-slider-inner">
                                <div class="main-slider__content">
                                    <span class="main-slider-tagline">نحن ننتج سلعًا طبيعية</span>
                                    <h2 class="main-slider__title">عبدالدايم للحاصلات الزراعية<br> حيث تلتقي الجودة
                                        بالنكهة <span><span class="leaf"></h2>
                                    <p class="main-slider__text"> من المزرعة إلى الأسواق العالمية <br> عبدالدايم، شريكك
                                        الموثوق في التصدير</p>
                                </div>
                                <div class="main-slider__button-box">
                                    <div class="arrow-icon"><img
                                            src="{{ asset('images/icon/main-slider__button-arrow.png') }}"
                                            alt="" />
                                    </div>
                                    <a href="عن" class="thm-btn">إكتشف أكثر</a>
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
                                    <h2 class="main-slider__title">عبدالدايم للحاصلات الزراعية<br> حيث تلتقي الجودة
                                        بالنكهة <span><span class="leaf"></h2>
                                    <p class="main-slider__text"> من المزرعة إلى الأسواق العالمية <br> عبدالدايم، شريكك
                                        الموثوق في التصدير</p>
                                </div>
                                <div class="main-slider__button-box">
                                    <div class="arrow-icon"><img
                                            src="{{ asset('images/icon/main-slider__button-arrow.png') }}"
                                            alt="" />
                                    </div>
                                    <a href="عن" class="thm-btn">إكتشف أكثر</a>
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
                        مرحبًا بكم في شركة عبدالدايم للمحاصيل الزراعية، اسم موثوق به في مجال تصدير واستيراد الفواكه
                        والخضروات الطازجة منذ عام 1995. من خلال التزامنا بتوفير حاصلات زراعية عالية الجودة للعملاء في
                        جميع أنحاء العالم، أثبتنا أنفسنا كواحدة من أكبر الشركات في هذا المجال
                    </p>
                    <p class="about-one__content-text">في شركة عبدالدايم، ندرك أهمية توفير منتجات تلبي المعايير
                        المطلوبة. من خلال فهمنا الجيد لديناميكيات السوق والالتزام بالتشريعات والبروتوكولات الحكومية،
                        نعرف
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
                        والبرتقال والعنب والرمان و الطماطم و البصل و الثوم و البطاطس والخوخ والمانجو، لنلبي جميع
                        الأذواق. تأتي منتجاتنا مباشرة من المزارع
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
                    {{-- <span class="shop-one__sale">sale</span><!-- /.shop-one__sale --> --}}
                    <img src="{{ asset('images/grape.png') }}" alt="">
                </div><!-- /.shop-one__image -->
                <div class="shop-one__content text-center">
                    <h3 class="shop-one__title"><a href="اشتري">عنب</a>
                    </h3>
                    <p class="shop-one__price"></p><!-- /.shop-one__price -->
                    <div class="shop-one__rating">
                    </div><!-- /.shop-one__rating -->
                </div><!-- /.shop-one__content -->
            </div><!-- /.shop-one__item -->
        </div><!-- /.col-md-6 col-lg-3 -->
        <div class="col-md-6 col-lg-3">
            <div class="shop-one__item">
                <div class="shop-one__image">
                    <img src="{{ asset('images/neworange.png') }}" alt="">
                </div><!-- /.shop-one__image -->
                <div class="shop-one__content text-center">
                    <h3 class="shop-one__title"><a href="اشتري">برتقال</a>
                    </h3>
                    <p class="shop-one__price"></p><!-- /.shop-one__price -->
                    <div class="shop-one__rating">
                    </div><!-- /.shop-one__rating -->
                </div><!-- /.shop-one__content -->
            </div><!-- /.shop-one__item -->
        </div><!-- /.col-md-6 col-lg-3 -->
        <div class="col-md-6 col-lg-3">
            <div class="shop-one__item">
                <div class="shop-one__image">

                    <img src="{{ asset('images/pomegranate.png') }}" alt="">
                </div><!-- /.shop-one__image -->
                <div class="shop-one__content text-center">
                    <h3 class="shop-one__title"><a href="اشتري">رمان</a>
                    </h3>
                    <p class="shop-one__price"></p><!-- /.shop-one__price -->
                    <div class="shop-one__rating">





                    </div><!-- /.shop-one__rating -->
                </div><!-- /.shop-one__content -->
            </div><!-- /.shop-one__item -->
        </div><!-- /.col-md-6 col-lg-3 -->
        <div class="col-md-6 col-lg-3">
            <div class="shop-one__item">
                <div class="shop-one__image">

                    <img src="{{ asset('images/mandarin.png') }}" alt="">
                </div><!-- /.shop-one__image -->
                <div class="shop-one__content text-center">
                    <h3 class="shop-one__title"><a href="اشتري">ماندرين</a>
                    </h3>
                    <p class="shop-one__price"></p><!-- /.shop-one__price -->
                    <div class="shop-one__rating">





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
                        <a href="اشتري" class="thm-btn">اكتشف اكثر</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<section class="video-one jarallax clearfix" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
    style="background-image: url({{ asset('images/backgrounds/video-one-bg.jpg') }});">
    {{-- <div class="video-one-border"></div> --}}

    <div class="container">
        <div class="sec-title text-center">

            <div class="video-one__leaf"></div><!-- /.video-one__leaf -->
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
                            <a href="مرافق" class="thm-btn">إكتشف المزيد</a>
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
                        توفر عبدالدايم للحاصلات الزراعية أيضًا خيارًا للشركات الأخرى للاستفادة من آلة سيزر لغسل وفرز
                        محاصيلها الزراعية الخاصة. وهذا يتيح لهذه الشركات التحقق وضمان جودة منتجاتها الزراعية

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
            <h2 class="sec-title__title">تعرف على مجلس الإدارة التنفيذي</h2>
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
                        <h2><a href="اشتري">أحمد سليم عبدالدايم</a></h2>
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
                    {{-- <div class="meet-farmers-one__single-img">
                        <img src="{{ asset('images/resources/meet-farmers-v1-img2.jpg') }}" alt="" />
                    </div> --}}
                    <div class="meet-farmers-one__single-title text-center"
                        style="    background-color: seagreen;
                    border-radius: 36px; margin-top:40px">
                        <p>CEO</p>
                        <h2><a href="اشتري">سليم سليم عبدالدايم</a></h2>
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
                    {{-- <div class="meet-farmers-one__single-img">
                        <img src="{{ asset('images/resources/meet-farmers-v1-img3.jpg') }}" alt="" />
                    </div> --}}
                    <div class="meet-farmers-one__single-title text-center"
                        style="    background-color: seagreen;
                    border-radius: 36px; margin-top:40px">
                        <p>CEO</p>
                        <h2><a href="اشتري">محمود حسن عبدالدايم</a></h2>
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
                    {{-- <div class="meet-farmers-one__single-img">
                        <img src="{{ asset('images/resources/meet-farmers-v1-img4.jpg') }}" alt="" />
                    </div> --}}
                    <div class="meet-farmers-one__single-title text-center"
                        style="    background-color: seagreen;
                    border-radius: 36px; margin-top:40px">
                        <p>CEO</p>
                        <h2><a href="اشتري">محجوب حسن عبدالدايم</a></h2>
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
            <div class="col-xl-12 col-lg-12 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms">

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
                                    <p class="testimonials-one__single-text">شركة عبدالدايم للمحاصيل الزراعية كانت
                                        شريكنا الموثوق منذ سنوات. التزامهم بتقديم منتجات عالية الجودة لا مثيل لها. نحن
                                        دائما معجبون بجودة ومذاق فواكههم وخضرواتهم." </p>
                                    <div class="testimonials-one__single-client-info">
                                        <div class="testimonials-one__single-client-info-img">
                                            {{-- <div class="testimonials-one__single-client-info-img-inner">
                                                <img src="{{ asset('images/testimonial/testimonials-v1-img1.jpg') }}"
                                                    alt="" />
                                            </div> --}}
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
                                        عبدالدايم للمحاصيل الزراعية لفترة طويلة. فاهتمامهم بديناميكيات السوق والالتزام
                                        بالتشريعات الحكومية يستحق الإشادة. إنهم دائما يبذلون قصارى جهدهم لتلبية
                                        تفضيلاتنا ومتطلباتنا الخاصة</p>
                                    <div class="testimonials-one__single-client-info">
                                        <div class="testimonials-one__single-client-info-img">
                                            {{-- <div class="testimonials-one__single-client-info-img-inner">
                                                <img src="{{ asset('images/testimonial/testimonials-v1-img2.jpg') }}"
                                                    alt="" />
                                            </div> --}}
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
                                            {{-- <div class="testimonials-one__single-client-info-img-inner">
                                                <img src="{{ asset('images/testimonial/testimonials-v1-img1.jpg') }}"
                                                    alt="" />
                                            </div> --}}
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
                                    <p class="testimonials-one__single-text">لا تقدم شركة عبدالدايم للمحاصيل الزراعية
                                        منتجات ممتازة فقط، بل احترافيتهم في التعامل مع جميع المتطلبات متميزة. إنهم
                                        يجعلون التجارة الدولية سهلة، والتسليم في الوقت المحدد</p>
                                    <div class="testimonials-one__single-client-info">
                                        <div class="testimonials-one__single-client-info-img">
                                            {{-- <div class="testimonials-one__single-client-info-img-inner">
                                                <img src="{{ asset('images/testimonial/testimonials-v1-img2.jpg') }}"
                                                    alt="" />
                                            </div> --}}
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
    <div class="providing-quality-one__bg"></div>

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
                                <p>نحن نقوم بتقديم العديد من المنتجات الصحية المتنوعة </p>
                            </div>
                        </li>

                        <li class="providing-quality-one__content-box-list-item">
                            <div class="icon">
                                <span class="icon-farm"></span>
                            </div>
                            <div class="text">
                                <h3>نمو زراعتنا</h3>
                                <p>يوجد لدينا العديد من المنتجات التي تساعدنا في النمو و التقدم</p>
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
                            <a href="مدونه"><span class="icon-plus"></span></a>
                        </div>
                    </div>

                    <div class="blog-one__single-content">
                        <ul class="meta-info">
                            <li><a href="#"><i class="far fa-user-circle"></i>جيسيكا</a></li>
                            <li><a href="#"><i class="far fa-comments"></i>2 تعليقات</a></li>
                        </ul>
                        <h2><a href="مدونه">أ. من المزرعة إلى المائدة: استكشاف رحلة المنتجات الطازجة</a>
                        </h2>
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
                            <a href="مدونه"><span class="icon-plus"></span></a>
                        </div>
                    </div>

                    <div class="blog-one__single-content">
                        <ul class="meta-info">
                            <li><a href="#"><i class="far fa-user-circle"></i>جيسيكا</a></li>
                            <li><a href="#"><i class="far fa-comments"></i>2 تعليقات</a></li>
                        </ul>
                        <h2><a href="مدونه">سلوكيات الزراعة المستدامة: الحفاظ على البيئة للأجيال القادمة
                            </a></h2>
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
                            <a href="مدونه"><span class="icon-plus"></span></a>
                        </div>
                    </div>

                    <div class="blog-one__single-content">
                        <ul class="meta-info">
                            <li><a href="#"><i class="far fa-user-circle"></i>جيسيكا</a></li>
                            <li><a href="#"><i class="far fa-comments"></i>2 تعليقات</a></li>
                        </ul>
                        <h2 style="color: white"><a href="مدونه"></a>استكشاف أفضل الفواكه والخضروات في كل
                            فصل</h2>
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
                    <p class="contact-one__text">نحن ملتزمون بتقديم خدمة استثنائية لعملائنا مع توفير أفضل
                        التدريبات لموظفينا.</p>
                    <ul class="list-unstyled ml-0 contact-one__lists">
                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span class="icon-phone-call-2"></span>

                            <span><a href="tel:123456789">&nbsp; 048 2630215</a></span>
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span class="icon-email-1"></span>
                            <span><a href="mailto:needhelp@company.com">&nbsp; Info@abdeldayemcompany.com</a></span>

                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span class="icon-map"></span>
                            <span>مدينة السادات - المنطقه الصناعية السابعة -<br> قطعة ٧١٨٧ - خلف مصنع تويوتا</span>
                        </li>
                    </ul><!-- /.list-unstyled ml-0 -->
                    <div class="contact-one__images">
                        <div class="contact-one__images__shape"></div><!-- /.contact-one__images__shape -->
                        <img src="{{ asset('images/resources/oranges.png') }}" alt=""
                            class="contact-one__images-1">
                        <img src="{{ asset('images/resources/services-v1-img2.jpg') }}" alt=""
                            class="contact-one__images-2">
                    </div><!-- /.contact-one__images -->
                </div><!-- /.contact-one__content -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6 position-relative">
                <a href="اتصل" class="thm-btn position-absolute top-50 start-50 translate-middle">ارسل رساله</a>
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact-one -->




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
                            <h2>
                                نحن شركة رائدة في سوق الزراعة
                            </h2>
                        </div>
                    </div>
                    <div class="cta-one__right">
                        <div class="cta-one__right-btn">
                            <a href="اشتري" class="thm-btn">إكتشف أكثر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Cta One End-->


@include('layouts.footerAR')
