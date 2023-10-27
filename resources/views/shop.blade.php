@include('layouts.appEN')
<!--Page Header Start-->
<section class="page-header clearfix"
    style="background-image: url({{ asset('images/backgrounds/page-header-bg3.jpg') }});">
    <div class="container">
        <div class="page-header__inner text-center clearfix">
            <ul class="thm-breadcrumb">
                <li><a href="عربي">Home</a></li>
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
        <div class="row">

            <div class="col-lg-12">
                <div class="row">

                </div><!-- /.row -->
                <div class="row ">
                    <div class="col-md-6 col-lg-3">
                        <div class="shop-one__item"
                            style="background-color: seagreen; border-radius:30px; padding-bottom:20px; height:412px">
                            <div class="shop-one__image">
                                {{-- <span class="shop-one__sale">sale</span><!-- /.shop-one__sale --> --}}
                                <img src="{{ asset('images/neworange.png') }}" alt="">
                                {{-- <a class="shop-one__cart" href="cart.html"><i class=" icon-shopping-cart"></i></> --}}
                            </div><!-- /.shop-one__image -->
                            <div class="shop-one__content text-center card"
                                style="background-color: seagreen; border-radius:30px">
                                <h3 class="shop-one__title"><a href="shop">Orange</a>
                                </h3>

                                <p>Packing: Boxes - Cartoon</p>
                                <p>Season: March - April</p>
                                <p>Weight: 8kg - 15kg</p>
                            </div><!-- /.shop-one__content -->
                        </div><!-- /.shop-one__item -->
                    </div><!-- /.col-md-6 col-lg-3 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="shop-one__item"
                            style="background-color: seagreen; border-radius:30px; padding-bottom:20px; height:412px">
                            <div class="shop-one__image">

                                <img src="{{ asset('images/mandarin.png') }}" alt="">
                                {{-- <a class="shop-one__cart" href="cart.html"><i class=" icon-shopping-cart"></i></a> --}}
                            </div><!-- /.shop-one__image -->
                            <div class="shop-one__content text-center card"
                                style="background-color: seagreen; border-radius:30px">
                                <h3 class="shop-one__title"><a href="shop">Mandarin</a>
                                </h3>
                                {{-- <p class="shop-one__price">$33.00</p><!-- /.shop-one__price --> --}}
                                <p>Packing: Boxes - Cartoon</p>
                                <p>Season: February - March</p>
                                <p>Weight: 10KG - 5KG - 8KG - 3KG</p>
                            </div><!-- /.shop-one__content -->
                        </div><!-- /.shop-one__item -->
                    </div><!-- /.col-md-6 col-lg-3 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="shop-one__item"
                            style="background-color: seagreen; border-radius:30px; padding-bottom:20px; height:412px">
                            <div class="shop-one__image">

                                <img src="{{ asset('images/grape.png') }}" alt="">
                                {{-- <a class="shop-one__cart" href="cart.html"><i class=" icon-shopping-cart"></i></a> --}}
                            </div><!-- /.shop-one__image -->
                            <div class="shop-one__content text-center card"
                                style="background-color: seagreen; border-radius:30px;">
                                <h3 class="shop-one__title"><a href="shop">Grape</a>
                                </h3>

                                <p>Packing: Boxes - Cartoon - Bag</p>
                                <p>Season: June - August</p>
                                <p>Weight: 5KG - 9KG - 3KG</p>
                            </div><!-- /.shop-one__content -->
                        </div><!-- /.shop-one__item -->
                    </div><!-- /.col-md-6 col-lg-3 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="shop-one__item"
                            style="background-color: seagreen; border-radius:30px; padding-bottom:20px; height:412px">
                            <div class="shop-one__image">

                                <img src="{{ asset('images/pomegranate.png') }}" alt="">
                                {{-- <a class="shop-one__cart" href="cart.html"><i class=" icon-shopping-cart"></i></a> --}}
                            </div><!-- /.shop-one__image -->
                            <div class="shop-one__content text-center card"
                                style="background-color: seagreen; border-radius:30px">
                                <h3 class="shop-one__title"><a href="shop">pomegranate</a>
                                </h3>
                                <p>Packing: Boxes - Cartoon</p>
                                <p>Season: July - August</p>
                                <p>Weight: 5KG - 10KG - 15KG</p>
                            </div><!-- /.shop-one__content -->
                        </div><!-- /.shop-one__item -->
                    </div><!-- /.col-md-6 col-lg-3 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="shop-one__item"
                            style="background-color: seagreen; border-radius:30px; padding-bottom:20px; height:412px">
                            <div class="shop-one__image">

                                <img src="{{ asset('images/mango.png') }}" alt="">
                                {{-- <a class="shop-one__cart" href="cart.html"><i class=" icon-shopping-cart"></i></a> --}}
                            </div><!-- /.shop-one__image -->
                            <div class="shop-one__content text-center card"
                                style="background-color: seagreen; border-radius:30px">
                                <h3 class="shop-one__title"><a href="shop">Mango</a>
                                </h3>
                                <p>Packing: Boxes - Cartoon</p>
                                <p>Season: June - September</p>
                                <p>Weight: 4KG - 8KG</p>
                            </div><!-- /.shop-one__content -->
                        </div><!-- /.shop-one__item -->
                    </div><!-- /.col-md-6 col-lg-3 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="shop-one__item"
                            style="background-color: seagreen; border-radius:30px; padding-bottom:20px; height:412px">
                            <div class="shop-one__image">

                                <img src="{{ asset('images/garlic.png') }}" alt="">
                                {{-- <a class="shop-one__cart" href="cart.html"><i class=" icon-shopping-cart"></i></a> --}}
                            </div><!-- /.shop-one__image -->
                            <div class="shop-one__content text-center card"
                                style="background-color: seagreen; border-radius:30px">
                                <h3 class="shop-one__title"><a href="shop">Garlic</a>
                                </h3>
                                <p>Packing: Boxes - Baskets</p>
                                <p>Season: February - April</p>
                                <p>Weight: 10KG - 15KG</p>
                            </div><!-- /.shop-one__content -->
                        </div><!-- /.shop-one__item -->
                    </div><!-- /.col-md-6 col-lg-3 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="shop-one__item"
                            style="background-color: seagreen; border-radius:30px; padding-bottom:20px; height:412px">
                            <div class="shop-one__image">
                                {{-- <span class="shop-one__sale">sale</span><!-- /.shop-one__sale --> --}}
                                <img src="{{ asset('images/onion.png') }}" alt="">
                                {{-- <a class="shop-one__cart" href="cart.html"><i class=" icon-shopping-cart"></i></a> --}}
                            </div><!-- /.shop-one__image -->
                            <div class="shop-one__content text-center card"
                                style="background-color: seagreen; border-radius:30px">
                                <h3 class="shop-one__title"><a href="shop">Onion</a>
                                </h3>
                                <p>Packing: Bag</p>
                                <p>Season: January - June</p>
                                <p>Weight: 5KG - 25KG</p>
                            </div><!-- /.shop-one__content -->
                        </div><!-- /.shop-one__item -->
                    </div><!-- /.col-md-6 col-lg-3 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="shop-one__item"
                            style="background-color: seagreen; border-radius:30px; padding-bottom:20px; height:412px">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/potato.png') }}" alt="">
                                {{-- <a class="shop-one__cart" href="cart.html"><i class=" icon-shopping-cart"></i></a> --}}
                            </div><!-- /.shop-one__image -->
                            <div class="shop-one__content text-center card"
                                style="background-color: seagreen; border-radius:30px">
                                <h3 class="shop-one__title"><a href="shop">Potato</a>
                                </h3>
                                <p>Packing: Shawwal</p>
                                <p>Season: January - June</p>
                                <p>Weight: 5KG - 25KG</p>
                            </div><!-- /.shop-one__content -->
                        </div><!-- /.shop-one__item -->
                    </div><!-- /.col-md-6 col-lg-3 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="shop-one__item"
                            style="background-color: seagreen; border-radius:30px; padding-bottom:20px; height:412px">
                            <div class="shop-one__image">
                                {{-- <span class="shop-one__sale">sale</span><!-- /.shop-one__sale --> --}}
                                <img src="{{ asset('images/tomato.png') }}" alt="">
                                {{-- <a class="shop-one__cart" href="cart.html"><i class=" icon-shopping-cart"></i></a> --}}
                            </div><!-- /.shop-one__image -->
                            <div class="shop-one__content text-center card"
                                style="background-color: seagreen; border-radius:30px">
                                <h3 class="shop-one__title"><a href="shop">Tomato</a>
                                </h3>
                                <p>Packing: Boxes - Baskets</p>
                                <p>Season: January - December</p>
                                <p>Weight: 5KG - 10KG - 15KG</p>
                            </div><!-- /.shop-one__content -->
                        </div><!-- /.shop-one__item -->
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="shop-one__item"
                            style="background-color: seagreen; border-radius:30px; padding-bottom:20px; height:412px">
                            <div class="shop-one__image">
                                {{-- <span class="shop-one__sale">sale</span><!-- /.shop-one__sale --> --}}
                                <img src="{{ asset('images/Lettuce.png') }}" alt="">
                                {{-- <a class="shop-one__cart" href="cart.html"><i class=" icon-shopping-cart"></i></a> --}}
                            </div><!-- /.shop-one__image -->
                            <div class="shop-one__content text-center card"
                                style="background-color: seagreen; border-radius:30px">
                                <h3 class="shop-one__title"><a href="shop">Lettuce</a>
                                </h3>
                                <p>Packing: Boxes - Baskets</p>
                                <p>Season: January - December</p>
                                <p>Weight: 5KG - 10KG - 15KG</p>
                            </div><!-- /.shop-one__content -->
                        </div><!-- /.shop-one__item -->
                    </div>
                </div><!-- /.row -->
            </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.shop-one -->


@include('layouts.footerEN')
