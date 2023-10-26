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
    .br-p {
    background-image: url(assets/img/hero/Portfolio\ Slider.webp);
}
    </style>

        <!-- Content Wrapper Start -->
        <div class="content-wrapper">
            <!-- Breadcrumb start -->
            <div class="breadcrumb-wrap bg-f br-p">
                <div class="overlay bg-vulcan op-9"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-title">
                                <h2>Portfolio</h2>
                                <ul class="breadcrumb-menu list-style">
                                    <li><a href="index.html">Home </a></li>
                                    <li>Portfolio</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb end -->
            <!-- Portfolio Section Start -->
           <!-- Portfolio Section Start -->
        <section class="portfolio-wrap ptb-100" >
            <div class="container">
                <div class="section-title style1 text-center mb-40">
                    <span>OUR PORTFOLIO</span>
                    <h2>See Our Popular Project</h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs portfolio-tablist" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab_1"
                                    type="button" role="tab">All</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link " data-bs-toggle="tab" data-bs-target="#tab_2" type="button"
                                    role="tab">Web Development</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link " data-bs-toggle="tab" data-bs-target="#tab_3" type="button"
                                    role="tab">Graphic Design</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link " data-bs-toggle="tab" data-bs-target="#tab_4" type="button"
                                    role="tab">Social Media Marketing</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content news-tabcontent">
                    <div class="tab-pane fade show active" id="tab_1" role="tabpanel">
                        <div class="row justify-content-center gx-0">
                            <div class="col-lg-4 col-md-6">
                                <div class="portfolio-item style2" style="margin: 10px;">
                                    <div class="portfolio-img">
                                        <img src="assets/img/services/GD SQUARE.webp" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/services/GD SQUARE.webp">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info">

                                        <h3><a href="services/graphic-design.html">Graphic Designing </a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="portfolio-item style2" style="margin: 10px;">
                                    <div class="portfolio-img">
                                        <img src="assets/img/services/WB SQUARE.webp" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/services/WB SQUARE.webp">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info">
                                        <!-- <p>By Tony Stark</p> -->
                                        <h3><a href="services/web.html">Web Design and Development</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="portfolio-item style2" style="margin: 10px;">
                                    <div class="portfolio-img">
                                        <img src="assets/img/services/SMM SQAURE.webp" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/services/SMM SQAURE.webp">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info">
                                        <!-- <p>By Jhon Dow</p> -->
                                        <h3><a href="services/social-media-marketing.html">Social Media Marketing</a></h3>
                                    </div>
                                </div>
                            </div>
                         
                        
                        </div>
                    </div>
                    <div class="tab-pane fade " id="tab_2" role="tabpanel">
                        <div class="row justify-content-center gx-0">
                 
                            <div class="col-lg-4 col-md-6">
                                <div class="portfolio-item style2">
                                    <div class="overlay_shine"></div>
                                    <div class="portfolio-img">
                                        <img src="assets/img/portfolios/web/BTMG.png" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/portfolios/web/BTMG.png">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info">
                                        <!-- <p>By Lisa Ann</p> -->
                                        <h3><a href="portfolio-details.html">BTMG USA</a></h3>
                                    </div>
                                </div>
                            </div>
                        
                   
                            <div class="col-lg-4 col-md-6">
                                <div class="portfolio-item style2">
                                    <div class="portfolio-img">
                                        <img src="assets/img/portfolios/web/CB Portfolio.png" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/portfolios/web/CB Portfolio.png">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info">
                                        <!-- <p>By Tony Stark</p> -->
                                        <h3><a href="portfolio-details.html">Clear Business</a></h3>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="col-lg-4 col-md-6">
                                <div class="portfolio-item style2">
                                    <div class="portfolio-img">
                                        <img src="assets/img/portfolios/web/earn with pride.png" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/portfolios/web/earn with pride.png">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info">
                                        <!-- <p>By Tony Stark</p> -->
                                        <h3><a href="portfolio-details.html">Earn With Pride</a></h3>
                                    </div>
                                </div>
                            </div>
                         
                            <div class="col-lg-6 col-md-6">
                                <div class="portfolio-item style2">
                                    <div class="portfolio-img">
                                        <img src="assets/img/portfolios/web/Gfmf.png" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/portfolios/web/Gfmf.png">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info">
                                        <!-- <p>By Tony Stark</p> -->
                                        <h3><a href="portfolio-details.html">GGFMF</a></h3>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-lg-6 col-md-6">
                                <div class="portfolio-item style2">
                                    <div class="portfolio-img">
                                        <img src="assets/img/portfolios/web/" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/portfolios/web/HANDYMAN.png">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info">
                                        <p>By Tony Stark</p> 
                                        <h3><a href="portfolio-details.html">Ineedhandymen</a></h3>
                                    </div>
                                </div>
                            </div> -->
                          
                            <div class="col-lg-6 col-md-6">
                                <div class="portfolio-item style2">
                                    <div class="portfolio-img">
                                        <img src="assets/img/portfolios/web/Love Your skin clinic.png" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/portfolios/web/Love Your skin clinic.png">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info">
                                        <!-- <p>By Tony Stark</p> -->
                                        <h3><a href="portfolio-details.html">Love Your Skin Clinic</a></h3>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-lg-6 col-md-6">
                                <div class="portfolio-item style2">
                                    <div class="portfolio-img">
                                        <img src="assets/img/portfolios/web/Next ebikes.png" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/portfolios/web/Next ebikes.png">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info">
                                        <!-- <p>By Tony Stark</p> -->
                                        <h3><a href="portfolio-details.html">Next E bike</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="portfolio-item style2">
                                    <div class="portfolio-img">
                                        <img src="assets/img/portfolios/web/Madinah Market.png" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/portfolios/web/Madinah Market.png">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info">
                                        <!-- <p>By Tony Stark</p> -->
                                        <h3><a href="portfolio-details.html">Madinah Market</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="portfolio-item style2">
                                    <div class="portfolio-img">
                                        <img src="assets/img/portfolios/web/Virasat.png" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/portfolios/web/Virasat.png">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info">
                                        <!-- <p>By Tony Stark</p> -->
                                        <h3><a href="portfolio-details.html">Virasat</a></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="portfolio-item style2">
                                    <div class="portfolio-img">
                                        <img src="assets/img/portfolios/web/Gift baskets.png" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/portfolios/web/Gift baskets.png">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info">
                                        <!-- <p>By Tony Stark</p> -->
                                        <h3><a href="portfolio-details.html">Gift Baskets</a></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="portfolio-item style2">
                                    <div class="portfolio-img">
                                        <img src="assets/img/portfolios/web/Handyman.png" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/portfolios/web/Handyman.png">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info">
                                        <!-- <p>By Tony Stark</p> -->
                                        <h3><a href="portfolio-details.html">I Need HANDYMAN</a></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="portfolio-item style2">
                                    <div class="portfolio-img">
                                        <img src="assets/img/portfolios/web/Creatice Arches.png" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/portfolios/web/Creatice Arches.png">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info">
                                        <!-- <p>By Tony Stark</p> -->
                                        <h3><a href="portfolio-details.html">Creative Arches</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="tab_3" role="tabpanel">
                        <div class="row justify-content-center gx-0">
                            <div class="col-lg-4 col-md-6">
                                <div class="portfolio-item style2">
                                    <div class="portfolio-img">
                                        <img src="assets/img/portfolios/ghrapics/creative arches BC front.jpg" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/portfolios/ghrapics/creative arches BC front.jpg">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info">
                                        <!-- <p>By Cristiano</p> -->
                                        <h3><a href="portfolio-details.html">Creative Arches Front</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="portfolio-item style2">
                                    <div class="portfolio-img">
                                        <img src="assets/img/portfolios/ghrapics/creative arches BC back.jpg" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/portfolios/ghrapics/creative arches BC back.jpg">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info">
                                        <!-- <p>By Tony Stark</p> -->
                                        <h3><a href="portfolio-details.html">Creative Arches Back</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="portfolio-item style2">
                                    <div class="portfolio-img">
                                        <img src="assets/img/portfolios/ghrapics/daam business card front.png" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/portfolios/ghrapics/daam business card front.png">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info">
                                        <!-- <p>By Mark Stark</p> -->
                                        <h3><a href="portfolio-details.html">DAAM Solutions Front</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="portfolio-item style2">
                                    <div class="portfolio-img">
                                        <img src="assets/img/portfolios/ghrapics/daam business card back.png" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/portfolios/ghrapics/daam business card back.png">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info">
                                        <!-- <p>By Jhon Dow</p> -->
                                        <h3><a href="portfolio-details.html">DAAM Solutions Back</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="portfolio-item style2">
                                    <div class="portfolio-img">
                                        <img src="assets/img/portfolios/ghrapics/next ebike FRONT.jpg" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/portfolios/ghrapics/next ebike FRONT.jpg">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info">
                                       
                                        <h3><a href="portfolio-details.html">Next E Bike Front</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="portfolio-item style2">
                                    <div class="overlay_shine"></div>
                                    <div class="portfolio-img">
                                        <img src="assets/img/portfolios/ghrapics/next ebikes BACK.jpg" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/portfolios/ghrapics/next ebikes BACK.jpg">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info">
                                        <!-- <p>By Lisa Ann</p> -->
                                        <h3><a href="portfolio-details.html">Next E Bike Back</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="portfolio-item style2">
                                    <div class="overlay_shine"></div>
                                    <div class="portfolio-img">
                                        <img src="assets/img/portfolios/ghrapics/5.jpg" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/portfolios/ghrapics/1 (2).jpg">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info">
                                        <!-- <p>By Lisa Ann</p> -->
                                        <h3><a href="portfolio-details.html">GGFMF</a></h3>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="col-lg-4 col-md-6">
                                <div class="portfolio-item style2">
                                    <div class="overlay_shine"></div>
                                    <div class="portfolio-img">
                                        <img src="assets/img/portfolios/ghrapics/4.jpg" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/portfolios/ghrapics/FLYER - Copy.jpg">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info">
                                        <!-- <p>By Lisa Ann</p> -->
                                        <h3><a href="portfolio-details.html">Flyer</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="portfolio-item style2">
                                    <div class="overlay_shine"></div>
                                    <div class="portfolio-img">
                                        <img src="assets/img/portfolios/ghrapics/3.jpg" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/portfolios/ghrapics/ROCK AWARD.jpg">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info">
                                        <!-- <p>By Lisa Ann</p> -->
                                        <h3><a href="portfolio-details.html">Rock Award</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="portfolio-item style2">
                                    <div class="overlay_shine"></div>
                                    <div class="portfolio-img">
                                        <img src="assets/img/portfolios/ghrapics/1 (3).jpg" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/portfolios/ghrapics/CB Letter Head .png">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info">
                                        <!-- <p>By Lisa Ann</p> -->
                                        <h3><a href="portfolio-details.html">Clear Business Letter Head</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="portfolio-item style2">
                                    <div class="overlay_shine"></div>
                                    <div class="portfolio-img">
                                        <img src="assets/img/portfolios/ghrapics/2 (4).jpg" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/portfolios/ghrapics/UAH-7.jpg">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-info">
                                        <!-- <p>By Lisa Ann</p> -->
                                        <h3><a href="portfolio-details.html">UAH</a></h3>
                                    </div>
                                </div>
                            </div>
                         
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab_4" role="tabpanel">
                        <div class="row justify-content-center gx-0">
                            <div class="col-lg-4 col-md-6">
                                <div class="portfolio-item style2">
                                    <div class="portfolio-img">
                                        <img src="assets/img/portfolios/socailmedia/1.jpg" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/portfolios/socailmedia/1.jpg">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <!-- <div class="portfolio-info">
                                        <p>By Cristiano</p>
                                        <h3><a href="portfolio-details.html">Mobile App</a></h3>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="portfolio-item style2">
                                    <div class="portfolio-img">
                                        <img src="assets/img/portfolios/socailmedia/10.jpg" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/portfolios/socailmedia/10.png">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <!-- <div class="portfolio-info">
                                        <p>By Tony Stark</p>
                                        <h3><a href="portfolio-details.html">Web Design</a></h3>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="portfolio-item style2">
                                    <div class="portfolio-img">
                                        <img src="assets/img/portfolios/socailmedia/12.jpg" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/portfolios/socailmedia/12.png">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <!-- <div class="portfolio-info">
                                        <p>By Jhon Dow</p>
                                        <h3><a href="portfolio-details.html">Digtal Marketing</a></h3>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="portfolio-item style2">
                                    <div class="portfolio-img">
                                        <img src="assets/img/portfolios/socailmedia/14.png" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/portfolios/socailmedia/14.png">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <!-- <div class="portfolio-info">
                                        <p>By Aljandreo</p>
                                        <h3><a href="portfolio-details.html">Software Testing</a></h3>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="portfolio-item style2">
                                    <div class="overlay_shine"></div>
                                    <div class="portfolio-img">
                                        <img src="assets/img/portfolios/socailmedia/15.jpg" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/portfolios/socailmedia/15.png">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <!-- <div class="portfolio-info">
                                        <p>By Lisa Ann</p>
                                        <h3><a href="portfolio-details.html">Online Support</a></h3>
                                    </div> -->
                                </div>
                            </div>


                            <div class="col-lg-4 col-md-6">
                                <div class="portfolio-item style2">
                                    <div class="overlay_shine"></div>
                                    <div class="portfolio-img">
                                        <img src="assets/img/portfolios/socailmedia/17.png" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/portfolios/socailmedia/17.png">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <!-- <div class="portfolio-info">
                                        <p>By Lisa Ann</p>
                                        <h3><a href="portfolio-details.html">Online Support</a></h3>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="portfolio-item style2">
                                    <div class="overlay_shine"></div>
                                    <div class="portfolio-img">
                                        <img src="assets/img/portfolios/socailmedia/2.jpg" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/portfolios/socailmedia/2.png">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <!-- <div class="portfolio-info">
                                        <p>By Lisa Ann</p>
                                        <h3><a href="portfolio-details.html">Online Support</a></h3>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="portfolio-item style2">
                                    <div class="overlay_shine"></div>
                                    <div class="portfolio-img">
                                        <img src="assets/img/portfolios/socailmedia/20.png" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/portfolios/socailmedia/20.png">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <!-- <div class="portfolio-info">
                                        <p>By Lisa Ann</p>
                                        <h3><a href="portfolio-details.html">Online Support</a></h3>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="portfolio-item style2">
                                    <div class="overlay_shine"></div>
                                    <div class="portfolio-img">
                                        <img src="assets/img/portfolios/socailmedia/26.png" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/portfolios/socailmedia/26.png">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <!-- <div class="portfolio-info">
                                        <p>By Lisa Ann</p>
                                        <h3><a href="portfolio-details.html">Online Support</a></h3>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="portfolio-item style2">
                                    <div class="overlay_shine"></div>
                                    <div class="portfolio-img">
                                        <img src="assets/img/portfolios/socailmedia/27.png" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/portfolios/socailmedia/27.png">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <!-- <div class="portfolio-info">
                                        <p>By Lisa Ann</p>
                                        <h3><a href="portfolio-details.html">Online Support</a></h3>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="portfolio-item style2">
                                    <div class="overlay_shine"></div>
                                    <div class="portfolio-img">
                                        <img src="assets/img/portfolios/socailmedia/3.jpg" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/portfolios/socailmedia/3.png">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <!-- <div class="portfolio-info">
                                        <p>By Lisa Ann</p>
                                        <h3><a href="portfolio-details.html">Online Support</a></h3>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="portfolio-item style2">
                                    <div class="overlay_shine"></div>
                                    <div class="portfolio-img">
                                        <img src="assets/img/portfolios/socailmedia/30.png" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/portfolios/socailmedia/30.png">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <!-- <div class="portfolio-info">
                                        <p>By Lisa Ann</p>
                                        <h3><a href="portfolio-details.html">Online Support</a></h3>
                                    </div> -->
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="portfolio-item style2">
                                    <div class="overlay_shine"></div>
                                    <div class="portfolio-img">
                                        <img src="assets/img/portfolios/socailmedia/5.png" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/portfolios/socailmedia/5.png">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <!-- <div class="portfolio-info">
                                        <p>By Lisa Ann</p>
                                        <h3><a href="portfolio-details.html">Online Support</a></h3>
                                    </div> -->
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="portfolio-item style2">
                                    <div class="overlay_shine"></div>
                                    <div class="portfolio-img">
                                        <img src="assets/img/portfolios/socailmedia/31.png" alt="Image">
                                        <a data-fancybox="gallery" href="assets/img/portfolios/socailmedia/31.png">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                    <!-- <div class="portfolio-info">
                                        <p>By Lisa Ann</p>
                                        <h3><a href="portfolio-details.html">Online Support</a></h3>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Section End -->
            <!-- Portfolio Section End -->
        </div>
        <!-- Content Wrapper End -->
        @endsection