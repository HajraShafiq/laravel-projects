@extends('layouts.layout')
@section('content')
  
  <style>
        .header-wrap.style2 .header-top .header-top-right .social-profile li a i {
        color: #fff;
        /* background-color: white; */
        padding: 8px 8px 4px 8px;
    }
    .header-wrap.style2 .header-top .header-top-right .social-profile li a i:hover {
        color: #fff;
        background-color: #FF0000;
        border-radius: 5px;
        padding: 8px 8px 4px 8px;
    }
    .br-s {
    background-image: url(assets/img/hero/Services\ Slider.webp);
}
    </style>

        <!-- Content Wrapper Start -->
        <div class="content-wrapper">
            <!-- Breadcrumb start -->
            <div class="breadcrumb-wrap bg-f br-s">
                <div class="overlay bg-vulcan op-9"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-title">
                                <h2>Services</h2>
                                <ul class="breadcrumb-menu list-style">
                                    <li><a href="index.html">Home </a></li>
                                    <li>Services</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb end -->
            <!-- Service Section Start -->
            <section class="service-wrap pt-100 pb-70">
                <div class="container">
                    <div class="row mb-40 align-items-center">
                        <div class="col-xl-6">
                            <div class="section-title style1">
                                <span>OUR SERVICES</span>
                                <h2>Take Business Services From Our Experienced Stuff</h2>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <p class="section-para">Unlock the full potential of your business by tapping into the expertise of our seasoned staff. Our experienced team is well-equipped to provide comprehensive business services that drive success, whether it's strategic consulting, marketing, or operational support. Let us be your trusted partners in achieving your business goals.</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="service-card style1">
                                <div class="service-img">
                                    <img src="assets/img/services/WB SQUARE.webp" alt="Image">
                                </div>
                                <div class="service-info">
                                    <div class="service-icon">
                                        <i class="fa-solid fa-w"></i>
                                    </div>
                                    <h3 class="service-title"><a href="/services/web.html">Web Development</a></h3>
                                    <p>Web development refer to the process of creating a website, from the initial concept to the final product.</p>
                                    <a href="/web" class="link style1">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="service-card style1">
                                <div class="service-img">
                                    <img src="assets/img/services/DA SQAURE.webp" alt="Image">
                                </div>
                                <div class="service-info">
                                    <div class="service-icon">
                                        <i class="fa-solid fa-d"></i>
                                    </div>
                                    <h3 class="service-title"><a href="/services/data-analysis.html">Data Analytics</a></h3>
                                    <p>Data analytics involves the use of statistical and computational methods to extract meaning from raw data.</p>
                                    <a href="/data-analysis" class="link style1">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="service-card style1">
                                <div class="service-img">
                                    <img src="assets/img/services/SMM SQAURE.webp" alt="Image">
                                </div>
                                <div class="service-info">
                                    <div class="service-icon">
                                        <i class="fa-solid fa-s"></i>
                                    </div>
                                    <h3 class="service-title"><a href="/services/social-media-marketing.html">Social Media Marketing</a></h3>
                                    <p>(SMM) refers to the use of social media platforms such as Facebook, Twitter, Instagram, LinkedIn, and other.</p>
                                    <a href="/social-media-marketing" class="link style1">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="service-card style1">
                                <div class="service-img">
                                    <img src="assets/img/services/SEO SQAURE.webp" alt="Image">
                                </div>
                                <div class="service-info">
                                    <div class="service-icon">
                                        <i class="fa-solid fa-s"></i>
                                    </div>
                                    <h3 class="service-title"><a href="/services/seo.html">
                                        SEO Services</a></h3>
                                        <p>SEO services enhance online visibility through various practices and techniques.</p>
                                    <a href="/seo" class="link style1">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="service-card style1">
                                <div class="service-img">
                                    <img src="assets/img/services/MAD SQAURE.webp" alt="Image">
                                </div>
                                <div class="service-info">
                                    <div class="service-icon">
                                        <i class="fa-solid fa-m"></i>
                                    </div>
                                    <h3 class="service-title"><a href="/services/mobile.html">
                                            Mobile App Development</a></h3>
                                    <p>Mobile app development is the creation of software applications for mobile devices.</p>
                                    <a href="/mobile" class="link style1">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="service-card style1">
                                <div class="service-img">
                                    <img src="assets/img/services/GD SQUARE.webp" alt="Image">
                                </div>
                                <div class="service-info">
                                    <div class="service-icon">
                                        <i class="fa-solid fa-g"></i>
                                     
                                    </div>
                                    <h3 class="service-title"><a href="/services/graphic-design.html">
                                            Graphic Design</a></h3>
                                    <p>Graphic design visually communicates ideas and information through design elements.</p>
                                    <a href="/graphic-design" class="link style1">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Service Section End -->
        </div>
        <!-- Content Wrapper End -->
        @endsection