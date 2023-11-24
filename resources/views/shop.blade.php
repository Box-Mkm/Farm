@include('layouts.appEN')
<!--Page Header Start-->
<section class="page-header clearfix"
    style="background-image: url({{ asset('images/backgrounds/page-header-bg3.jpg') }});">
    <div class="container">
        <div class="page-header__inner text-center clearfix">
            <ul class="thm-breadcrumb">
                <li><a href="/home">Home</a></li>
                <li>Products</li>
            </ul>
            <h2>Products</h2>
        </div>
    </div>
</section>
<!--Page Header End-->



<section class="contact-one" style="padding-bottom: 0px !important">
    <div class="container">
        <div class="sec-title text-center">
            <div class="icon">
            </div>

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
                    <h2 class="sec-title__title">Check Our Products:</h2>
                </div>

                <div class="container ps-5 ms-5">
                    <div class="row">
                        <div class="card col-lg-3 text-center" style="background-color:transparent; border: none;">
                            <button style="background-color: coral; width:50%; border-radius:15px"> <a href="#peach">
                                    <p>peach</p>
                                </a> </button>
                            <button style="background-color: coral; width:50%; border-radius:15px; margin-top: 15px"><a
                                    href="#plum">
                                    <p>plum</p>
                                </a></button>
                            <button style="background-color: coral; width:50%; border-radius:15px; margin-top: 15px"><a
                                    href="#strawberry">
                                    <p>Strawberry</p>
                                </a></button>
                            <button style="background-color: coral; width:50%; border-radius:15px; margin-top: 15px"> <a
                                    href="#grape">
                                    <p>grapes</p>
                                </a></button>
                            <button style="background-color: coral; width:50%; border-radius:15px; margin-top: 15px"> <a
                                    href="#orange">
                                    <p>Orange</p>
                                </a></button>
                        </div>

                        <div class="card col-lg-3 text-center" style="background-color:transparent; border: none;">
                            <button style="background-color: coral; width:50%; border-radius:15px;"><a href="#morket">
                                    <p>Mandarin</p>
                                </a></button>
                            <button style="background-color: coral; width:50%; border-radius:15px; margin-top: 15px"> <a
                                    href="#guava">
                                    <p>Guava</p>
                                </a></button>
                            <button style="background-color: coral; width:50%; border-radius:15px; margin-top: 15px"> <a
                                    href="#onion">
                                    <p>onion</p>
                                </a></button>
                            <button style="background-color: coral; width:50%; border-radius:15px; margin-top: 15px"><a
                                    href="#tomato">
                                    <p>tomatoes</p>
                                </a></button>
                            <button style="background-color: coral; width:50%; border-radius:15px; margin-top: 15px"><a
                                    href="#garlic">
                                    <p>garlic</p>
                                </a></button>

                        </div>

                        <div class="card col-lg-3 text-center" style="background-color:transparent; border: none;">
                            <button style="background-color: coral; width:50%; border-radius:15px;"><a href="#capucci">
                                    <p>Capucci</p>
                                </a></button>
                                <button style="background-color: coral; width:50%; border-radius:15px; margin-top: 15px"><a
                                    href="#broccoli">
                                    <p>Broccoli</p>
                                </a></button>

                            <button style="background-color: coral; width:50%; border-radius:15px; margin-top: 15px"><a
                                    href="#mango">
                                    <p>mango</p>
                                </a></button>
                            <button style="background-color: coral; width:50%; border-radius:15px; margin-top: 15px"><a
                                    href="#pomegranate">
                                    <p>pomegranate</p>
                                </a></button>
                            <button style="background-color: coral; width:50%; border-radius:15px; margin-top: 15px"><a
                                    href="#lemon">
                                    <p>Lemon</p>
                                </a></button>
                        </div>
                        <div class="card col-lg-3 text-center" style="background-color:transparent; border: none;">
                            <button style="background-color: coral; width:50%; border-radius:15px;"> <a href="#eggplant">
                                    <p>eggplant</p>
                                </a></button>
                            
                            <button style="background-color: coral; width:50%; border-radius:15px; margin-top: 15px"><a
                                    href="#chili">
                                    <p>Chili pepper</p>
                                </a></button>
                                <button style="background-color: coral; width:50%; border-radius:15px; margin-top: 15px"><a
                                    href="#zucchini">
                                    <p>Zucchini</p>
                                </a></button>
                                <button style="background-color: coral; width:60%; border-radius:15px; margin-top: 15px"><a
                                    href="#pepper">
                                    <p>Colored Pepper</p>
                                </a></button>
                            <button style="background-color: coral; width:60%; border-radius:15px; margin-top: 15px"> <a
                                    href="#cherry">
                                    <p>Cherry tomatoes</p>
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
                    <h2 class="sec-title__title">Peach</h2>
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
                    <h2 class="sec-title__title">Plum</h2>
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
                    <h2 class="sec-title__title">Strawberry</h2>
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
                    <h2 class="sec-title__title">Grapes</h2>
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
                    <h2 class="sec-title__title">Orange</h2>
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
                    <h2 class="sec-title__title">Mandarin</h2>
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
                    <h2 class="sec-title__title">Guava</h2>
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
                    <h2 class="sec-title__title">Onion</h2>
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
                    <h2 class="sec-title__title">Tomato</h2>
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
                    <h2 class="sec-title__title">Mango</h2>
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
                    <h2 class="sec-title__title">Pomegranate</h2>
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
                    <h2 class="sec-title__title">Garlic</h2>
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
                    <h2 class="sec-title__title">Capucci</h2>
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
                    <h2 class="sec-title__title">Colored pepper</h2>
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
                    <h2 class="sec-title__title">Lemon</h2>
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
                    <h2 class="sec-title__title">Chili Pepper</h2>
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
                    <h2 class="sec-title__title">Broccoli</h2>
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
                    <h2 class="sec-title__title">Cherry Tomato</h2>
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
                    <h2 class="sec-title__title">eggplant</h2>
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
                    <h2 class="sec-title__title">Zucchini</h2>
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


@include('layouts.footerEN')
