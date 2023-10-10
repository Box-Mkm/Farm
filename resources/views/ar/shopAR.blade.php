<div class="dropdown main-header--one__top d-flex flex-row">
    <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        اللغه| language
    </button>
    <ul class="dropdown-menu">
        <li>
            <p> <a href="/shop">English <img src="{{ asset('images/backgrounds/united-kingdom.png') }}" alt="" />
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
    style="background-image: url{{ asset('images/backgrounds/page-header-bg.jpg') }});">
    <div class="container">
        <div class="page-header__inner text-center clearfix">
            <ul class="thm-breadcrumb">
                <li><a href="index-main.html">الرئيسية</a></li>
                <li>منتجاتنا</li>
            </ul>
            <h2>منتجاتنا</h2>
        </div>
    </div>
</section>
<!--Page Header End-->






<section class="contact-one" style="padding-bottom: 0px !important">
    <div class="container">
        <div class="sec-title text-center">
            <div class="icon">
                {{-- <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt=""> --}}
            </div>
            {{-- <span class="sec-title__tagline">What we offer</span> --}}
            {{-- <h2 class="sec-title__title">Our products</h2> --}}
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-one__content" style="font-size: larger">
                    <p class="contact-one__text">استكشف مجموعتنا الواسعة من الفواكه والخضروات، المختارة بعناية لتلبية أعلى معايير الجودة. نحن نقدم تشكيلة متنوعة تشمل جميع أنواع الحاصلات الحمضية مثل الليمون والبرتقال والعنب والرمان والخوخ والمانجو، لنلبي جميع الأذواق. تأتي منتجاتنا مباشرة من المزارع والبساتين، مما يضمن الحصول على أفضل ما تقدمه الطبيعة.
                        نصدر منتجاتنا إلى المملكة العربية السعودية ودبي ومسقط والكويت وروسيا وأوروبا والهند وأوكرانيا والأردن والعراق وبنغلاديش وماليزيا والصين، وفي المستقبل القريب، ستكون منتجاتنا متاحة في جميع أنحاء العالم
                        
                    </p>
                </div><!-- /.contact-one__content -->
            </div><!-- /.col-lg-6 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact-one -->


<section class="shop-one">
    <div class="container">
        <div class="row">
            {{-- <div class="col-lg-3">
                <div class="shop-one__sidebar">
                    <div class="shop-one__sidebar__item shop-one__sidebar__search">
                        <form action="#">
                            <input type="text" placeholder="Search here">
                            <button type="submit"><i class=" icon-search "></i></button>
                        </form>

                    </div><!-- /.shop-one__sidebar__item -->
                    <div class="shop-one__sidebar__item shop-one__sidebar__price">
                        <h3 class="shop-one__sidebar__item__title">Price</h3>
                        <!-- /.shop-one__sidebar__item__title -->
                        <div class="shop-one__sidebar__price-range">
                            <div class="range-slider-price" data-range-min="10" data-range-max="200" data-limit="200"
                                data-start-min="30" data-start-max="150" id="range-slider-price"></div>
                            <div class="form-group">
                                <div class="left">
                                    <p>$<span id="min-value-rangeslider"></span></p>
                                    <span>-</span>
                                    <p>$<span id="max-value-rangeslider"></span></p>
                                </div><!-- /.left -->
                                <div class="right">
                                    <button class="thm-btn">
                                        Filter
                                    </button>
                                </div><!-- /.right -->
                            </div>
                        </div>
                    </div><!-- /.shop-one__sidebar__item -->
                    <div class="shop-one__sidebar__item shop-one__sidebar__category">
                        <h3 class="shop-one__sidebar__item__title">Categories</h3>
                        <!-- /.shop-one__sidebar__item__title -->
                        <ul class="list-unstyled shop-one__sidebar__category__list">
                            <li><a href="#">Agriculture</a></li>
                            <li><a href="#">Dairy Farm</a></li>
                            <li><a href="#">Economy Solution</a></li>
                            <li><a href="#">Harvests Innovations</a></li>
                            <li><a href="#">Organic Food</a></li>
                            <li><a href="#">Fresh Vegetables</a></li>
                        </ul>
                    </div><!-- /.shop-one__sidebar__item -->
                </div><!-- /.shop-one__sidebar -->
            </div><!-- /.col-lg-3 --> --}}
            <div class="col-lg-12">
                <div class="row">
                    {{-- <div class="col-lg-12 shop-one__sorter">
                        <p class="shop-one__product-count">Showing 1–9 of 12 results</p>
                        <select class="shop-one__product-sorter" name="" id="">
                            <option value="">Sort by Popular</option>
                            <option value="">Sort by Popular</option>
                            <option value="">Sort by Popular</option>
                        </select>
                    </div><!-- /.col-lg-12 --> --}}
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="shop-one__item">
                            <div class="shop-one__image">
                                {{-- <span class="shop-one__sale">sale</span><!-- /.shop-one__sale --> --}}
                                <img src="{{ asset('images/update-14-09-2021/shop/shop-1-1.png') }}" alt="">
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

                                <img src="{{ asset('images/update-14-09-2021/shop/shop-1-2.png') }}" alt="">
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

                                <img src="{{ asset('images/update-14-09-2021/shop/shop-1-3.png') }}" alt="">
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

                                <img src="{{ asset('images/update-14-09-2021/shop/shop-1-4.png') }}" alt="">
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
                    <div class="col-md-6 col-lg-3">
                        <div class="shop-one__item">
                            <div class="shop-one__image">

                                <img src="{{ asset('images/update-14-09-2021/shop/shop-1-5.png') }}" alt="">
                                <a class="shop-one__cart" href="cart.html"><i class=" icon-shopping-cart"></i></a>
                            </div><!-- /.shop-one__image -->
                            <div class="shop-one__content text-center">
                                <h3 class="shop-one__title"><a href="product-details.html">Tomatos</a>
                                </h3>
                                <p class="shop-one__price">$26.00</p><!-- /.shop-one__price -->
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

                                <img src="{{ asset('images/update-14-09-2021/shop/shop-1-6.png') }}" alt="">
                                <a class="shop-one__cart" href="cart.html"><i class=" icon-shopping-cart"></i></a>
                            </div><!-- /.shop-one__image -->
                            <div class="shop-one__content text-center">
                                <h3 class="shop-one__title"><a href="product-details.html">Lemons</a>
                                </h3>
                                <p class="shop-one__price">$19.00</p><!-- /.shop-one__price -->
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
                                {{-- <span class="shop-one__sale">sale</span><!-- /.shop-one__sale --> --}}
                                <img src="{{ asset('images/update-14-09-2021/shop/shop-1-7.png') }}" alt="">
                                <a class="shop-one__cart" href="cart.html"><i class=" icon-shopping-cart"></i></a>
                            </div><!-- /.shop-one__image -->
                            <div class="shop-one__content text-center">
                                <h3 class="shop-one__title"><a href="product-details.html">Red
                                        Chillis</a>
                                </h3>
                                <p class="shop-one__price">$9.00</p><!-- /.shop-one__price -->
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
                                <img src="{{ asset('images/update-14-09-2021/shop/shop-1-8.png') }}" alt="">
                                <a class="shop-one__cart" href="cart.html"><i class=" icon-shopping-cart"></i></a>
                            </div><!-- /.shop-one__image -->
                            <div class="shop-one__content text-center">
                                <h3 class="shop-one__title"><a href="product-details.html">Carrots</a>
                                </h3>
                                <p class="shop-one__price">$8.00</p><!-- /.shop-one__price -->
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
                                {{-- <span class="shop-one__sale">sale</span><!-- /.shop-one__sale --> --}}
                                <img src="{{ asset('images/update-14-09-2021/shop/shop-1-1.png') }}" alt="">
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
                    </div>
                </div><!-- /.row -->
            </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.shop-one -->

{{-- 
<section class="shop-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="shop-one__sidebar">
                    <div class="shop-one__sidebar__item shop-one__sidebar__search">
                        <form action="#">
                            <input type="text" placeholder="Search here">
                            <button type="submit"><i class=" icon-search "></i></button>
                        </form>

                    </div><!-- /.shop-one__sidebar__item -->
                    <div class="shop-one__sidebar__item shop-one__sidebar__price">
                        <h3 class="shop-one__sidebar__item__title">Price</h3>
                        <!-- /.shop-one__sidebar__item__title -->
                        <div class="shop-one__sidebar__price-range">
                            <div class="range-slider-price" data-range-min="10" data-range-max="200" data-limit="200"
                                data-start-min="30" data-start-max="150" id="range-slider-price"></div>
                            <div class="form-group">
                                <div class="left">
                                    <p>$<span id="min-value-rangeslider"></span></p>
                                    <span>-</span>
                                    <p>$<span id="max-value-rangeslider"></span></p>
                                </div><!-- /.left -->
                                <div class="right">
                                    <button class="thm-btn">
                                        Filter
                                    </button>
                                </div><!-- /.right -->
                            </div>
                        </div>
                    </div><!-- /.shop-one__sidebar__item -->
                    <div class="shop-one__sidebar__item shop-one__sidebar__category">
                        <h3 class="shop-one__sidebar__item__title">Categories</h3>
                        <!-- /.shop-one__sidebar__item__title -->
                        <ul class="list-unstyled shop-one__sidebar__category__list">
                            <li><a href="#">Agriculture</a></li>
                            <li><a href="#">Dairy Farm</a></li>
                            <li><a href="#">Economy Solution</a></li>
                            <li><a href="#">Harvests Innovations</a></li>
                            <li><a href="#">Organic Food</a></li>
                            <li><a href="#">Fresh Vegetables</a></li>
                        </ul>
                    </div><!-- /.shop-one__sidebar__item -->
                </div><!-- /.shop-one__sidebar -->
            </div><!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12 shop-one__sorter">
                        <p class="shop-one__product-count">Showing 1–9 of 12 results</p>
                        <select class="shop-one__product-sorter" name="" id="">
                            <option value="">Sort by Popular</option>
                            <option value="">Sort by Popular</option>
                            <option value="">Sort by Popular</option>
                        </select>
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="shop-one__item">
                            <div class="shop-one__image">
                                <span class="shop-one__sale">sale</span><!-- /.shop-one__sale -->
                                <img src="{{ asset('images/update-14-09-2021/shop/shop-1-1.png') }}" alt="">
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
                    <div class="col-md-6 col-lg-4">
                        <div class="shop-one__item">
                            <div class="shop-one__image">

                                <img src="{{ asset('images/update-14-09-2021/shop/shop-1-2.png') }}" alt="">
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
                    <div class="col-md-6 col-lg-4">
                        <div class="shop-one__item">
                            <div class="shop-one__image">

                                <img src="{{ asset('images/update-14-09-2021/shop/shop-1-3.png') }}" alt="">
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
                    <div class="col-md-6 col-lg-4">
                        <div class="shop-one__item">
                            <div class="shop-one__image">

                                <img src="{{ asset('images/update-14-09-2021/shop/shop-1-4.png') }}" alt="">
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
                    <div class="col-md-6 col-lg-4">
                        <div class="shop-one__item">
                            <div class="shop-one__image">

                                <img src="{{ asset('images/update-14-09-2021/shop/shop-1-5.png') }}" alt="">
                                <a class="shop-one__cart" href="cart.html"><i class=" icon-shopping-cart"></i></a>
                            </div><!-- /.shop-one__image -->
                            <div class="shop-one__content text-center">
                                <h3 class="shop-one__title"><a href="product-details.html">Tomatos</a>
                                </h3>
                                <p class="shop-one__price">$26.00</p><!-- /.shop-one__price -->
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
                    <div class="col-md-6 col-lg-4">
                        <div class="shop-one__item">
                            <div class="shop-one__image">

                                <img src="{{ asset('images/update-14-09-2021/shop/shop-1-6.png') }}" alt="">
                                <a class="shop-one__cart" href="cart.html"><i class=" icon-shopping-cart"></i></a>
                            </div><!-- /.shop-one__image -->
                            <div class="shop-one__content text-center">
                                <h3 class="shop-one__title"><a href="product-details.html">Lemons</a>
                                </h3>
                                <p class="shop-one__price">$19.00</p><!-- /.shop-one__price -->
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
                    <div class="col-md-6 col-lg-4">
                        <div class="shop-one__item">
                            <div class="shop-one__image">
                                <span class="shop-one__sale">sale</span><!-- /.shop-one__sale -->
                                <img src="{{ asset('images/update-14-09-2021/shop/shop-1-7.png') }}" alt="">
                                <a class="shop-one__cart" href="cart.html"><i class=" icon-shopping-cart"></i></a>
                            </div><!-- /.shop-one__image -->
                            <div class="shop-one__content text-center">
                                <h3 class="shop-one__title"><a href="product-details.html">Red
                                        Chillis</a>
                                </h3>
                                <p class="shop-one__price">$9.00</p><!-- /.shop-one__price -->
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
                    <div class="col-md-6 col-lg-4">
                        <div class="shop-one__item">
                            <div class="shop-one__image">
                                <img src="{{ asset('images/update-14-09-2021/shop/shop-1-8.png') }}" alt="">
                                <a class="shop-one__cart" href="cart.html"><i class=" icon-shopping-cart"></i></a>
                            </div><!-- /.shop-one__image -->
                            <div class="shop-one__content text-center">
                                <h3 class="shop-one__title"><a href="product-details.html">Carrots</a>
                                </h3>
                                <p class="shop-one__price">$8.00</p><!-- /.shop-one__price -->
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
                    <div class="col-md-6 col-lg-4">
                        <div class="shop-one__item">
                            <div class="shop-one__image">
                                <span class="shop-one__sale">sale</span><!-- /.shop-one__sale -->
                                <img src="{{ asset('images/update-14-09-2021/shop/shop-1-1.png') }}" alt="">
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
                    </div>
                </div><!-- /.row -->
            </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.shop-one --> --}}

@include('layouts.footerAR')
