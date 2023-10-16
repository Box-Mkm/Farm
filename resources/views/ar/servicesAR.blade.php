<div class="dropdown main-header--one__top d-flex flex-row">
    <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        اللغه| language
    </button>
    <ul class="dropdown-menu">
        <li>
            <p> <a href="/facilities">English <img src="{{ asset('images/backgrounds/united-kingdom.png') }}"
                        alt="" />
            </p>
        </li>
        <li>
            <p><a href="#">العربيه <img src="{{ asset('images/backgrounds/egypt.png') }}" alt="" />
            </p>
        </li>

    </ul>
</div>

@include('layouts.appAR')

<!--Page Header Start-->
<section class="page-header clearfix"
    style="background-image: url({{ asset('images/backgrounds/page-header-bg.jpg') }});">
    <div class="container">
        <div class="page-header__inner text-center clearfix">
            <ul class="thm-breadcrumb">
                <li><a href="index-main.html">الرئيسية</a></li>
                <li>المرافق</li>
            </ul>
            <h2>المرافق</h2>
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
            <span class="sec-title__tagline">ماذا نقدم</span>
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
                        <div class="services-one__single-img-icon">
                            <span class="icon-agriculture"></span>
                        </div>
                    </div>
                    <div class="services-one__single-content text-center">
                        <h3><a href="عن">المنتجات<br> الزراعية</a></h3>
                        <p>منتجاتنا الزراعية تلبي احتياجاتنا الغذائية وتسهم في توفير الأمن الغذائي</p>
                        <a href="عن" class="read-more-btn"><span class="icon-right-arrow-2"></span></a>
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
                        <h3><a href="عن">الخضروات <br>الطازجة</a></h3>
                        <p>الخضروات الطازجة تعزز صحتنا وتوفر لنا تغذية غنية بالعناصر الغذائية</p>
                        <a href="عن" class="read-more-btn"><span class="icon-right-arrow-2"></span></a>
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
                        <h3><a href="عن">منتجات <br>عضوية</a></h3>
                        <p>توفر لنا خيارًا صحيًا ومستدامًا حيث تزرع وتنتج بدون استخدام المبيدات والأسمدة </p>
                        <a href="عن" class="read-more-btn"><span class="icon-right-arrow-2"></span></a>
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
                        <h3><a href="عن">منتجات<br> الألبان</a></h3>
                        <p>توفر لنا مصدرًا غنيًا بالكالسيوم والبروتين الضروريين لصحة العظام </p>
                        <a href="عن" class="read-more-btn"><span class="icon-right-arrow-2"></span></a>
                    </div>
                </div>
            </div>
            <!--End Single Services One-->
        </div>
    </div>
</section>






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
            <span class="sec-title__tagline">المرافق</span>
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
                        <span class="sec-title__tagline">الزراعة الحديثة</span>
                        <h2 class="sec-title__title">نقدم المنتجات بأعلي جودة</h2>
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
                            <a href="اشتري" class="thm-btn">إكتشف أكثر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@include('layouts.footerAR')
