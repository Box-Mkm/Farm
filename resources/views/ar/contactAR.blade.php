<div class="dropdown main-header--one__top d-flex flex-row">
    <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        اللغه| language
    </button>
    <ul class="dropdown-menu">
        <li>
            <p> <a href="/contact">English <img src="{{ asset('images/backgrounds/united-kingdom.png') }}"
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
<section class="page-header clearfix"
    style="background-image: url({{ asset('images/backgrounds/page-header-bg.jpg') }});">
    <div class="container">
        <div class="page-header__inner text-center clearfix">
            <ul class="thm-breadcrumb">
                <li><a href="index-main.html">الرئيسية</a></li>
                <li>اتصل</li>
            </ul>
            <h2>أتصل بنا</h2>
        </div>
    </div>
</section>
<!--Page Header End-->


<!--Start Contact Page-->
<section class="contact-page">
    <div class="container">
        <div class="row">
            <!--Start Contact Page Left-->
            <div class="col-xl-4 col-lg-4">
                <div class="contact-page__left">
                    <div class="sec-title">
                        <div class="icon">
                            <img src="{{ asset('images/resources/sec-title-icon1.png') }}" alt="">
                        </div>
                        <span class="sec-title__tagline">أتصل بنا</span>
                        <h2 class="sec-title__title">تواصل معنا</h2>
                    </div>
                    <p class="contact-page__left-text">نحن ملتزمون بتقديم خدمة استثنائية لعملائنا مع توفير أفضل
                        التدريبات لموظفينا.</p>
                    <div class="contact-page__social-link">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--End Contact Page Right-->

            <!--Start Contact Page Right-->
            <div class="col-xl-8 col-lg-8">
                <div class="contact-page__right">
                    <form action="https://layerdrops.com/agriox/assets/inc/sendemail.php"
                        class="comment-one__form contact-form-validated" novalidate="novalidate">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="الأسم" name="name">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="comment-form__input-box">
                                    <input type="email" placeholder="الايميل" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="رقم الهاتف" name="phone">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="comment-form__input-box">
                                    <input type="email" placeholder="الموضوع" name="Subject">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="comment-form__input-box">
                                    <textarea name="message" placeholder="محتوي الرساله"></textarea>
                                </div>
                                <button type="submit" class="thm-btn comment-form__btn">ارسل رسالتك</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--End Contact Page Right-->
        </div>
    </div>
</section>
<!--End Contact Page-->


<!--Start Contact Page Contact Info-->
<section class="contact-page__contact-info clearfix">
    <div class="auto-container">
        <div class="row">
            <div class="col-xl-12">
                <div class="contact-page__contact-info-wrapper">
                    <div class="contact-page__contact-info-title">
                        <h2>تواصل معانا</h2>
                    </div>

                    <div class="contact-page__contact-info-list">
                        <ul>
                            <li>
                                <div class="icon">
                                    <span class="icon-map"></span>
                                </div>
                                <div class="title">
                                    <span>عنواننا</span>
                                    <p>مدينة السادات - المنطقه الصناعية السابعة -<br> قطعة ٧١٨٧ - خلف مصنع تويوتا</p>
                                </div>
                            </li>

                            <li>
                                <div class="icon">
                                    <span class="icon-email-1"></span>
                                </div>
                                <div class="title">
                                    <span>البريد الالكتروني</span>
                                    <p><a href="mailto:needhelp@company.com">needhelp@company.com</a></p>
                                </div>
                            </li>

                            <li>
                                <div class="icon phone">
                                    <span class="icon-phone-call-2"></span>
                                </div>
                                <div class="title">
                                    <span>اتصل بنا</span>
                                    <p><a href="tel:123456789">048 2630215</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Contact Page Contact Info-->


<!--Contact Page Google Map Start-->
<section class="contact-page-google-map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3439.593809835973!2d30.629013075569254!3d30.447614674723038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzDCsDI2JzUxLjQiTiAzMMKwMzcnNTMuNyJF!5e0!3m2!1sen!2seg!4v1697072242018!5m2!1sen!2seg"
        class="contact-page-google-map__one" allowfullscreen></iframe>
</section>
<!--Contact Page Google Map End-->
@include('layouts.footerAR')
