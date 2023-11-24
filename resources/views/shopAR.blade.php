@include('layouts.appAR')



<section class="page-header clearfix" style="background-image: url({{ asset('images/new-bg4.jpg') }});">
    <div class="container">
        <div class="page-header__inner text-center clearfix">
            <ul class="thm-breadcrumb">
                <li><a href="/home/ar">الرئيسية</a></li>
                <li>منتجاتنا</li>
            </ul>
            <h2>منتجاتنا</h2>
        </div>
    </div>
</section>




<section class="contact-one" style="padding-bottom: 0px !important">
    <div class="container">
        <div class="sec-title text-center">
            <div class="icon">
                {{-- <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt=""> --}}
            </div>

        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-one__content" style="font-size: larger">
                    <p class="contact-one__text">استكشف مجموعتنا الواسعة من الفواكه والخضروات، المختارة بعناية لتلبية
                        أعلى معايير الجودة. نحن نقدم تشكيلة متنوعة تشمل جميع أنواع الحاصلات الحمضية مثل الليمون
                        والبرتقال والعنب والرمان والطماطم و البصل و الثوم و الخوخ والمانجو، لنلبي جميع الأذواق. تأتي
                        منتجاتنا مباشرة من المزارع
                        والبساتين، مما يضمن الحصول على أفضل ما تقدمه الطبيعة.
                        نصدر منتجاتنا إلى المملكة العربية السعودية ودبي ومسقط والكويت وروسيا وأوروبا والهند وأوكرانيا
                        والأردن والعراق وبنغلاديش وماليزيا والصين، وفي المستقبل القريب، ستكون منتجاتنا متاحة في جميع
                        أنحاء العالم

                    </p>
                </div><!-- /.contact-one__content -->
            </div><!-- /.col-lg-6 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact-one -->

{{-- 
<section class="shop-one">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="row">

                </div>
                <div class="row ">
                    <div class="col-md-6 col-lg-3">
                        <div class="shop-one__item"
                            style="background-color: seagreen; border-radius:30px; padding-bottom:20px; height:412px">
                            <div class="shop-one__image">
                                
                                <img src="{{ asset('images/neworange.png') }}" alt="">
                                
                            </div>
                            <div class="shop-one__content text-center card"
                                style="background-color: seagreen; border-radius:30px">
                                <h3 class="shop-one__title"><a href="/shop/ar">برتقال</a>
                                </h3>

                                <p>التعبئة: صناديق - كرتون</p>
                                <p>الموسم: مارس - أبريل</p>
                                <p>الوزن: 8 كجم - 15 كجم</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="shop-one__item"
                            style="background-color: seagreen; border-radius:30px; padding-bottom:20px; height:412px">
                            <div class="shop-one__image">

                                <img src="{{ asset('images/mandarin.png') }}" alt="">
                                
                            </div>
                            <div class="shop-one__content text-center card"
                                style="background-color: seagreen; border-radius:30px">
                                <h3 class="shop-one__title"><a href="/shop/ar">يوسفي</a>
                                </h3>
                                
                                <p>التعبئة: صناديق - كرتون</p>
                                <p>الموسم: فبراير - مارس</p>
                                <p>الوزن: 10 كجم - 5 كجم - 8 كجم - 3 كجم</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="shop-one__item"
                            style="background-color: seagreen; border-radius:30px; padding-bottom:20px; height:412px">
                            <div class="shop-one__image">

                                <img src="{{ asset('images/grape.png') }}" alt="">
                                
                            </div>
                            <div class="shop-one__content text-center card"
                                style="background-color: seagreen; border-radius:30px;">
                                <h3 class="shop-one__title"><a href="/shop/ar">عنب</a>
                                </h3>

                                <p>التعبئة: صناديق - كرتون - حقيبة</p>
                                <p>الموسم: يونيو - أغسطس</p>
                                <p>الوزن: 5 كجم - 9 كجم - 3 كجم</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="shop-one__item"
                            style="background-color: seagreen; border-radius:30px; padding-bottom:20px; height:412px">
                            <div class="shop-one__image">

                                <img src="{{ asset('images/pomegranate.png') }}" alt="">
                                
                            </div>
                            <div class="shop-one__content text-center card"
                                style="background-color: seagreen; border-radius:30px">
                                <h3 class="shop-one__title"><a href="/shop/ar">رمان</a>
                                </h3>
                                <p>التعبئة: صناديق - كرتون</p>
                                <p>الموسم: يوليو - أغسطس</p>
                                <p>الوزن: 5 كجم - 10 كجم - 15 كجم</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="shop-one__item"
                            style="background-color: seagreen; border-radius:30px; padding-bottom:20px; height:412px">
                            <div class="shop-one__image">

                                <img src="{{ asset('images/mango.png') }}" alt="">
                                
                            </div>
                            <div class="shop-one__content text-center card"
                                style="background-color: seagreen; border-radius:30px">
                                <h3 class="shop-one__title"><a href="/shop/ar">مانجا</a>
                                </h3>
                                <p>التعبئة: صناديق - كرتون</p>
                                <p>الموسم: يونيو - سبتمبر</p>
                                <p>الوزن: 4 كجم - 8 كجم</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="shop-one__item"
                            style="background-color: seagreen; border-radius:30px; padding-bottom:20px; height:412px">
                            <div class="shop-one__image">

                                <img src="{{ asset('images/garlic.png') }}" alt="">
                                
                            </div>
                            <div class="shop-one__content text-center card"
                                style="background-color: seagreen; border-radius:30px">
                                <h3 class="shop-one__title"><a href="/shop/ar">ثوم</a>
                                </h3>
                                <p>التعبئة: صناديق - سلال</p>
                                <p>الموسم: فبراير - أبريل</p>
                                <p>الوزن: 10 كجم - 15 كجم</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="shop-one__item"
                            style="background-color: seagreen; border-radius:30px; padding-bottom:20px; height:412px">
                            <div class="shop-one__image">
                                
                                <img src="{{ asset('images/onion.png') }}" alt="">
                                
                            </div>
                            <div class="shop-one__content text-center card"
                                style="background-color: seagreen; border-radius:30px">
                                <h3 class="shop-one__title"><a href="/shop/ar">بصل</a>
                                </h3>
                                <p>التعبئة: حقيبة</p>
                                <p>الموسم: يناير - يونيو</p>
                                <p>الوزن: 5 كجم - 25 كجم</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="shop-one__item"
                            style="background-color: seagreen; border-radius:30px; padding-bottom:20px; height:412px">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/potato.png') }}" alt="">
                                
                            </div>
                            <div class="shop-one__content text-center card"
                                style="background-color: seagreen; border-radius:30px">
                                <h3 class="shop-one__title"><a href="/shop/ar">بطاطس</a>
                                </h3>
                                <p>التعبئة: شوال</p>
                                <p>الموسم: يناير - يونيو</p>
                                <p>الوزن: 5 كجم - 25 كجم</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="shop-one__item"
                            style="background-color: seagreen; border-radius:30px; padding-bottom:20px; height:412px">
                            <div class="shop-one__image">
                                
                                <img src="{{ asset('images/tomato.png') }}" alt="">
                                
                            </div>
                            <div class="shop-one__content text-center card"
                                style="background-color: seagreen; border-radius:30px">
                                <h3 class="shop-one__title"><a href="/shop/ar">طماطم</a>
                                </h3>
                                <p>التعبئة: صناديق - سلال</p>
                                <p>الموسم: يناير - ديسمبر</p>
                                <p>الوزن: 5 كجم - 10 كجم - 15 كجم</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="shop-one__item"
                            style="background-color: seagreen; border-radius:30px; padding-bottom:20px; height:412px">
                            <div class="shop-one__image">
                                
                                <img src="{{ asset('images/Lettuce.png') }}" alt="">
                                
                            </div>
                            <div class="shop-one__content text-center card"
                                style="background-color: seagreen; border-radius:30px">
                                <h3 class="shop-one__title"><a href="/shop/ar">خَسّ</a>
                                </h3>
                                <p>التعبئة: صناديق - سلال</p>
                                <p>الموسم: يناير - ديسمبر</p>
                                <p>الوزن: 5 كيلوجرام - 10 كيلوجرام - 15 كيلوجرام</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container -->
</section> --}}

<section class="shop-one">
    <div class="container">
        {{-- <div class="row">

            <div class="col-lg-12">
                <div class="row">

                </div>
                <div class="row ">
                    <div class="col-md-6 col-lg-3">
                        <div class="shop-one__item"
                            style="background-color: seagreen; border-radius:30px; padding-bottom:20px; height:412px">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/neworange.png') }}" alt="">
                            </div>
                            <div class="shop-one__content text-center card"
                                style="background-color: seagreen; border-radius:30px">
                                <h3 class="shop-one__title"><a href="shop">Orange</a>
                                </h3>

                                <p>Packing: Boxes - Cartoon</p>
                                <p>Season: March - April</p>
                                <p>Weight: 8kg - 15kg</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="shop-one__item"
                            style="background-color: seagreen; border-radius:30px; padding-bottom:20px; height:412px">
                            <div class="shop-one__image">

                                <img src="{{ asset('images/mandarin.png') }}" alt="">
                            </div>
                            <div class="shop-one__content text-center card"
                                style="background-color: seagreen; border-radius:30px">
                                <h3 class="shop-one__title"><a href="shop">Mandarin</a>
                                </h3>
                                <p>Packing: Boxes - Cartoon</p>
                                <p>Season: February - March</p>
                                <p>Weight: 10KG - 5KG - 8KG - 3KG</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="shop-one__item"
                            style="background-color: seagreen; border-radius:30px; padding-bottom:20px; height:412px">
                            <div class="shop-one__image">

                                <img src="{{ asset('images/grape.png') }}" alt="">
                            </div>
                            <div class="shop-one__content text-center card"
                                style="background-color: seagreen; border-radius:30px;">
                                <h3 class="shop-one__title"><a href="shop">Grape</a>
                                </h3>

                                <p>Packing: Boxes - Cartoon - Bag</p>
                                <p>Season: June - August</p>
                                <p>Weight: 5KG - 9KG - 3KG</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="shop-one__item"
                            style="background-color: seagreen; border-radius:30px; padding-bottom:20px; height:412px">
                            <div class="shop-one__image">

                                <img src="{{ asset('images/pomegranate.png') }}" alt="">
                            </div>
                            <div class="shop-one__content text-center card"
                                style="background-color: seagreen; border-radius:30px">
                                <h3 class="shop-one__title"><a href="shop">pomegranate</a>
                                </h3>
                                <p>Packing: Boxes - Cartoon</p>
                                <p>Season: July - August</p>
                                <p>Weight: 5KG - 10KG - 15KG</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="shop-one__item"
                            style="background-color: seagreen; border-radius:30px; padding-bottom:20px; height:412px">
                            <div class="shop-one__image">

                                <img src="{{ asset('images/mango.png') }}" alt="">
                            </div>
                            <div class="shop-one__content text-center card"
                                style="background-color: seagreen; border-radius:30px">
                                <h3 class="shop-one__title"><a href="shop">Mango</a>
                                </h3>
                                <p>Packing: Boxes - Cartoon</p>
                                <p>Season: June - September</p>
                                <p>Weight: 4KG - 8KG</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="shop-one__item"
                            style="background-color: seagreen; border-radius:30px; padding-bottom:20px; height:412px">
                            <div class="shop-one__image">

                                <img src="{{ asset('images/garlic.png') }}" alt="">
                            </div>
                            <div class="shop-one__content text-center card"
                                style="background-color: seagreen; border-radius:30px">
                                <h3 class="shop-one__title"><a href="shop">Garlic</a>
                                </h3>
                                <p>Packing: Boxes - Baskets</p>
                                <p>Season: February - April</p>
                                <p>Weight: 10KG - 15KG</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="shop-one__item"
                            style="background-color: seagreen; border-radius:30px; padding-bottom:20px; height:412px">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/onion.png') }}" alt="">
                            </div>
                            <div class="shop-one__content text-center card"
                                style="background-color: seagreen; border-radius:30px">
                                <h3 class="shop-one__title"><a href="shop">Onion</a>
                                </h3>
                                <p>Packing: Bag</p>
                                <p>Season: January - June</p>
                                <p>Weight: 5KG - 25KG</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="shop-one__item"
                            style="background-color: seagreen; border-radius:30px; padding-bottom:20px; height:412px">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/potato.png') }}" alt="">
                            </div>
                            <div class="shop-one__content text-center card"
                                style="background-color: seagreen; border-radius:30px">
                                <h3 class="shop-one__title"><a href="shop">Potato</a>
                                </h3>
                                <p>Packing: Shawwal</p>
                                <p>Season: January - June</p>
                                <p>Weight: 5KG - 25KG</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="shop-one__item"
                            style="background-color: seagreen; border-radius:30px; padding-bottom:20px; height:412px">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/tomato.png') }}" alt="">
                            </div>
                            <div class="shop-one__content text-center card"
                                style="background-color: seagreen; border-radius:30px">
                                <h3 class="shop-one__title"><a href="shop">Tomato</a>
                                </h3>
                                <p>Packing: Boxes - Baskets</p>
                                <p>Season: January - December</p>
                                <p>Weight: 5KG - 10KG - 15KG</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="shop-one__item"
                            style="background-color: seagreen; border-radius:30px; padding-bottom:20px; height:412px">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/Lettuce.png') }}" alt="">
                            </div>
                            <div class="shop-one__content text-center card"
                                style="background-color: seagreen; border-radius:30px">
                                <h3 class="shop-one__title"><a href="shop">Lettuce</a>
                                </h3>
                                <p>Packing: Boxes - Baskets</p>
                                <p>Season: January - December</p>
                                <p>Weight: 5KG - 10KG - 15KG</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}





        <section class="contact-one">
            <div class="container" style="padding-top: 45px; ">
                <div class="sec-title text-center">
                    <div class="icon">
                        <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="">
                    </div>
                    <h2 class="sec-title__title">إكتشف منتجاتنا:</h2>
                </div>

                <div class="container pe-5 me-5">
                    <div class="row">
                        <div class="card col-lg-3 text-center" style="background-color:transparent; border: none;">
                            <button style="background-color: coral; width:50%; border-radius:15px"> <a href="#peach">
                                    <p>خوخ</p>
                                </a> </button>
                            <button style="background-color: coral; width:50%; border-radius:15px; margin-top: 15px"><a
                                    href="#plum">
                                    <p>برقوق</p>
                                </a></button>
                            <button style="background-color: coral; width:50%; border-radius:15px; margin-top: 15px"><a
                                    href="#strawberry">
                                    <p>فراولة</p>
                                </a></button>
                            <button style="background-color: coral; width:50%; border-radius:15px; margin-top: 15px"> <a
                                    href="#grape">
                                    <p>عنب</p>
                                </a></button>
                            <button style="background-color: coral; width:50%; border-radius:15px; margin-top: 15px"> <a
                                    href="#orange">
                                    <p>برتقال</p>
                                </a></button>
                        </div>

                        <div class="card col-lg-3 text-center" style="background-color:transparent; border: none;">
                            <button style="background-color: coral; width:50%; border-radius:15px;"><a href="#morket">
                                    <p>يوسفي</p>
                                </a></button>
                            <button style="background-color: coral; width:50%; border-radius:15px; margin-top: 15px"> <a
                                    href="#guava">
                                    <p>جوافة</p>
                                </a></button>
                            <button style="background-color: coral; width:50%; border-radius:15px; margin-top: 15px"> <a
                                    href="#onion">
                                    <p>بصل</p>
                                </a></button>
                            <button style="background-color: coral; width:50%; border-radius:15px; margin-top: 15px"><a
                                    href="#tomato">
                                    <p>طماطم</p>
                                </a></button>
                            <button style="background-color: coral; width:50%; border-radius:15px; margin-top: 15px"><a
                                    href="#garlic">
                                    <p>ثوم</p>
                                </a></button>

                        </div>

                        <div class="card col-lg-3 text-center" style="background-color:transparent; border: none;">
                            <button style="background-color: coral; width:50%; border-radius:15px;"><a href="#capucci">
                                    <p>كابوتشى</p>
                                </a></button>
                                <button style="background-color: coral; width:50%; border-radius:15px; margin-top: 15px"><a
                                    href="#broccoli">
                                    <p>بروكلي</p>
                                </a></button>

                            <button style="background-color: coral; width:50%; border-radius:15px; margin-top: 15px"><a
                                    href="#mango">
                                    <p>مانجا</p>
                                </a></button>
                            <button style="background-color: coral; width:50%; border-radius:15px; margin-top: 15px"><a
                                    href="#pomegranate">
                                    <p>رمان</p>
                                </a></button>
                            <button style="background-color: coral; width:50%; border-radius:15px; margin-top: 15px"><a
                                    href="#lemon">
                                    <p>ليمون</p>
                                </a></button>
                        </div>
                        <div class="card col-lg-3 text-center" style="background-color:transparent; border: none;">
                            <button style="background-color: coral; width:50%; border-radius:15px;"> <a href="#eggplant">
                                    <p>باذنجان</p>
                                </a></button>
                            
                            <button style="background-color: coral; width:50%; border-radius:15px; margin-top: 15px"><a
                                    href="#chili">
                                    <p>فلفل شطة</p>
                                </a></button>
                                <button style="background-color: coral; width:50%; border-radius:15px; margin-top: 15px"><a
                                    href="#zucchini">
                                    <p>كوسة</p>
                                </a></button>
                                <button style="background-color: coral; width:60%; border-radius:15px; margin-top: 15px"><a
                                    href="#pepper">
                                    <p>فلفل ألوان</p>
                                </a></button>
                            <button style="background-color: coral; width:60%; border-radius:15px; margin-top: 15px"> <a
                                    href="#cherry">
                                    <p>طماطم شيري</p>
                                </a></button>
                        </div>

                    </div>
                </div>

            </div><!-- /.container -->
        </section><!-- /.contact-one -->







        <section class="contact-one">
            <div class="container" id="peach" style="padding-top: 45px">
                <div class="sec-title text-center">
                    <div class="icon">
                        <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="">
                    </div>
                    <h2 class="sec-title__title">خوخ</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/peach1.jpeg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/peach2.jpg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/peach3.jpg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->

                    </div><!-- /.row -->
                </div>
            </div><!-- /.container -->
        </section><!-- /.contact-one -->





        <section class="contact-one">
            <div class="container" id="plum" style="padding-top: 45px">
                <div class="sec-title text-center">
                    <div class="icon">
                        <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="">
                    </div>
                    <h2 class="sec-title__title">برقوق</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/plum4.jpeg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/plum2.jpeg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/plum3.jpeg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->

                    </div><!-- /.row -->
                </div>
            </div><!-- /.container -->
        </section><!-- /.contact-one -->






        <section class="contact-one">
            <div class="container" id="strawberry" style="padding-top: 45px">
                <div class="sec-title text-center">
                    <div class="icon">
                        <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="">
                    </div>
                    <h2 class="sec-title__title">فراولة</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/straw1.jpg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/straw2.jpg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/straw3.jpg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->

                    </div><!-- /.row -->
                </div>
            </div><!-- /.container -->
        </section><!-- /.contact-one -->


        <section class="contact-one">
            <div class="container" id="grape" style="padding-top: 45px">
                <div class="sec-title text-center">
                    <div class="icon">
                        <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="">
                    </div>
                    <h2 class="sec-title__title">عنب</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/grape1.jpg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/grape2.jpg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/grape3.jpg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->

                    </div><!-- /.row -->
                </div>
            </div><!-- /.container -->
        </section><!-- /.contact-one -->




        <section class="contact-one">
            <div class="container" id="orange" style="padding-top: 45px">
                <div class="sec-title text-center">
                    <div class="icon">
                        <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="">
                    </div>
                    <h2 class="sec-title__title">برتقال</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/orange1.jpeg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/orange2.jpeg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/orange3.jpeg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->

                    </div><!-- /.row -->
                </div>
            </div><!-- /.container -->
        </section><!-- /.contact-one -->





        <section class="contact-one">
            <div class="container" id="morket" style="padding-top: 45px">
                <div class="sec-title text-center">
                    <div class="icon">
                        <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="">
                    </div>
                    <h2 class="sec-title__title">يوسفي</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/yosefy1.jpeg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/yosefy2.jpg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/yosefy3.jpg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->

                    </div><!-- /.row -->
                </div>
            </div><!-- /.container -->
        </section><!-- /.contact-one -->



        <section class="contact-one">
            <div class="container" id="guava" style="padding-top: 45px">
                <div class="sec-title text-center">
                    <div class="icon">
                        <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="">
                    </div>
                    <h2 class="sec-title__title">جوافة</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/guava1.jpeg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/guava2.jpg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/guava3.jpg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->

                    </div><!-- /.row -->
                </div>
            </div><!-- /.container -->
        </section><!-- /.contact-one -->





        <section class="contact-one">
            <div class="container" id="onion" style="padding-top: 45px">
                <div class="sec-title text-center">
                    <div class="icon">
                        <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="">
                    </div>
                    <h2 class="sec-title__title">بصل</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/onion1.jpg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/onion2.jpg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/onion3.jpg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->

                    </div><!-- /.row -->
                </div>
            </div><!-- /.container -->
        </section><!-- /.contact-one -->





        <section class="contact-one">
            <div class="container" id="tomato" style="padding-top: 45px">
                <div class="sec-title text-center">
                    <div class="icon">
                        <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="">
                    </div>
                    <h2 class="sec-title__title">طماطم</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/tomato1.jpeg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/tomato2.jpeg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/tomato3.jpg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->

                    </div><!-- /.row -->
                </div>
            </div><!-- /.container -->
        </section><!-- /.contact-one -->






        <section class="contact-one">
            <div class="container" id="mango" style="padding-top: 45px">
                <div class="sec-title text-center">
                    <div class="icon">
                        <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="">
                    </div>
                    <h2 class="sec-title__title">مانجا</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/mango1.jpg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/mango2.jpeg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/mango3.jpeg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->

                    </div><!-- /.row -->
                </div>
            </div><!-- /.container -->
        </section><!-- /.contact-one -->







        <section class="contact-one">
            <div class="container" id="pomegranate" style="padding-top: 45px">
                <div class="sec-title text-center">
                    <div class="icon">
                        <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="">
                    </div>
                    <h2 class="sec-title__title">رمان</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/pomegranate1.jpeg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/pomegranate2.jpeg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/pomegranate3.jpeg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->

                    </div><!-- /.row -->
                </div>
            </div><!-- /.container -->
        </section><!-- /.contact-one -->






        <section class="contact-one">
            <div class="container" id="garlic" style="padding-top: 45px">
                <div class="sec-title text-center">
                    <div class="icon">
                        <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="">
                    </div>
                    <h2 class="sec-title__title">ثوم</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/garlic1.jpg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/garlic2.jpeg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/garlic3.jpeg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->

                    </div><!-- /.row -->
                </div>
            </div><!-- /.container -->
        </section><!-- /.contact-one -->











        <section class="contact-one">
            <div class="container" id="capucci" style="padding-top: 45px">
                <div class="sec-title text-center">
                    <div class="icon">
                        <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="">
                    </div>
                    <h2 class="sec-title__title">كابوتشى</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/cap1.jpeg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/cap2.jpg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/cap3.jpg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->

                    </div><!-- /.row -->
                </div>
            </div><!-- /.container -->
        </section><!-- /.contact-one -->




        <section class="contact-one">
            <div class="container" id="pepper" style="padding-top: 45px">
                <div class="sec-title text-center">
                    <div class="icon">
                        <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="">
                    </div>
                    <h2 class="sec-title__title">فلفل ألوان</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/pep4.jpeg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/pep2.jpeg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/pep3.jpeg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->

                    </div><!-- /.row -->
                </div>
            </div><!-- /.container -->
        </section><!-- /.contact-one -->









        <section class="contact-one">
            <div class="container" id="lemon" style="padding-top: 45px">
                <div class="sec-title text-center">
                    <div class="icon">
                        <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="">
                    </div>
                    <h2 class="sec-title__title">ليمون</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/lemon1.jpeg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/lemon2.jpg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/lemon3.jpeg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->

                    </div><!-- /.row -->
                </div>
            </div><!-- /.container -->
        </section><!-- /.contact-one -->









        <section class="contact-one">
            <div class="container" id="chili" style="padding-top: 45px">
                <div class="sec-title text-center">
                    <div class="icon">
                        <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="">
                    </div>
                    <h2 class="sec-title__title">فلفل شطة</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/chili1.jpg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/chili2.jpg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/chili3.jpg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->

                    </div><!-- /.row -->
                </div>
            </div><!-- /.container -->
        </section><!-- /.contact-one -->





        




        <section class="contact-one">
            <div class="container" id="broccoli" style="padding-top: 45px">
                <div class="sec-title text-center">
                    <div class="icon">
                        <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="">
                    </div>
                    <h2 class="sec-title__title">بروكلي</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/broc1.jpg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/broc2.jpg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/broc3.jpg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->

                    </div><!-- /.row -->
                </div>
            </div><!-- /.container -->
        </section><!-- /.contact-one -->








        <section class="contact-one">
            <div class="container" id="cherry" style="padding-top: 45px">
                <div class="sec-title text-center">
                    <div class="icon">
                        <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="">
                    </div>
                    <h2 class="sec-title__title">طماطم شيري</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/cherry1.jpg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/cherry2.jpg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/cherry3.jpg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->

                    </div><!-- /.row -->
                </div>
            </div><!-- /.container -->
        </section><!-- /.contact-one -->









        <section class="contact-one">
            <div class="container" id="eggplant" style="padding-top: 45px">
                <div class="sec-title text-center">
                    <div class="icon">
                        <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="">
                    </div>
                    <h2 class="sec-title__title">باذنجان</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/eggplant1.jpg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/eggplant2.jpg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/eggplant3.jpg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->

                    </div><!-- /.row -->
                </div>
            </div><!-- /.container -->
        </section><!-- /.contact-one -->





        <section class="contact-one">
            <div class="container" id="zucchini" style="padding-top: 45px">
                <div class="sec-title text-center">
                    <div class="icon">
                        <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="">
                    </div>
                    <h2 class="sec-title__title">كوسة</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/zucchini1.jpg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/zucchini2.jpg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/zucchini3.jpg') }}" alt="">
                            </div>
                        </div><!-- /.col-lg-6 -->

                    </div><!-- /.row -->
                </div>
            </div><!-- /.container -->
        </section><!-- /.contact-one -->




    </div><!-- /.container -->
</section><!-- /.shop-one -->


@include('layouts.footerAR')
