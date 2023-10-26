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
  .br-m {
    background-image: url(../assets/img/services/Mobile\ App\ Development\ Slider.jpg);
}
  </style>

      <!-- Content Wrapper Start -->
      <div class="content-wrapper">
        <!-- Breadcrumb start -->
        <div class="breadcrumb-wrap bg-f br-m">
          <div class="overlay bg-vulcan op-9"></div>
          <div class="container">
            <div class="row">
              <div class="col-xl-12">
                <div class="breadcrumb-title">
                  <h2>Mobile Application Development</h2>
                  <ul class="breadcrumb-menu list-style">
                    <li><a href="../index.html">Home </a></li>
                    <li><a href="../services-one.html">Services </a></li>
                    <li>Mobile Application Development</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Breadcrumb end -->
        <!-- Portfolio Details section start -->
        <section class="service-details-wrap pt-100 pb-70">
          <div class="container">
            <div class="row gx-5">
              <div class="col-xl-8">
                <div class="service-desc">
                  <h1>Mobile Application Deveplopment</h1>
                  <div class="service-img">
                    <img
                      src="../assets/img/services/mobile-slider.webp"
                      alt="Image"
                    />
                  </div>
                  <p>
                    Our web design and development services are tailored to meet
                    the unique needs of businesses and individuals looking to
                    establish a strong online presence. Our team of skilled
                    professionals combines creativity with technical expertise
                    to create visually appealing, user-friendly, and responsive
                    websites that not only look great but also perform
                    exceptionally well. Whether you need a brand-new website
                    from scratch, a redesign of your existing site, or custom
                    web application development, we have the knowledge and
                    experience to deliver solutions that align with your goals.
                    From front-end design to back-end development, we strive to
                    provide a seamless user experience, optimized for search
                    engines, and equipped with the latest web technologies. Let
                    us help you transform your online vision into a reality with
                    our top-notch web design and development services.
                  </p>
                </div>
                <h1 class="mt-2 mb-2">Technology Stack</h1>
                <div class="row justify-content-center">
                  <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="service-card style4">
                      <div class="service-img">
                        <img
                          src="../assets/img/services/STACK IMAGES/Mobile App Development/Flutter.webp"
                          alt="Image"
                        />
                      </div>
                      <div class="service-info">
                        <div class="service-icon">
                          <i class="fa-solid fa-f"></i>
                        </div>
                        <h3 class="service-title">
                          <a href="service-details.html">Flutter</a>
                        </h3>
                        <p>
                          Flutter is an open-source UI software development kit created by Google for building natively compiled applications for mobile, web, and desktop from a single codebase, using the Dart programming language. It offers a rich set of pre-designed widgets and a fast, expressive development workflow.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="service-card style4">
                      <div class="service-img">
                        <img
                          src="../assets/img/services/STACK IMAGES/Mobile App Development/React NATIVE.webp"
                          alt="Image"
                        />
                      </div>
                      <div class="service-info">
                        <div class="service-icon">
                          <i class="fa-solid fa-r"></i>
                        </div>
                        <h3 class="service-title">
                          <a href="service-details.html">React Native</a>
                        </h3>
                        <p>
                          React Native is an open-source framework developed by Facebook that enables the creation of mobile applications for iOS and Android platforms using JavaScript and React, allowing developers to write code once and run it on multiple platforms, with native-like performance and appearance.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4">
                <div class="sidebar style2">
                  <div class="sidebar-widget search-box">
                    <div class="form-group">
                      <input type="search" placeholder="Search By Keywords" />
                      <button type="submit">
                        <i class="flaticon-loupe-1"></i>
                      </button>
                    </div>
                  </div>
                  <div class="sidebar-widget categories">
                    <h4>Service Category</h4>
                    <div class="category-box">
                      <ul class="list-style">
                        <li>
                          <a href="#"
                            ><i class="flaticon-next"></i> Web Design and Development</a
                          >
                        </li>
                        <li>
                          <a href="#"
                            ><i class="flaticon-next"></i>Mobile Application Development</a
                          >
                        </li>
                        <li>
                          <a href="#"
                            ><i class="flaticon-next"></i>Social Media Marketing</a
                          >
                        </li>
                        <li>
                          <a href="#"
                            ><i class="flaticon-next"></i>Search Engine Optimization</a
                          >
                        </li>
                        <li>
                          <a href="#"
                            ><i class="flaticon-next"></i>Graphic Design</a
                          >
                        </li>
                        <li>
                          <a href="#"
                            ><i class="flaticon-next"></i> Data Analysis
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="sidebar-widget contact-widget bg-f hero-bg-1">
                    <div class="overlay bg-vulcan op-9"></div>
                    <p>Let's Work Together</p>
                    <h3>Need A Successful Project?</h3>
                    <a href="tel:13454567877">(331) 725-2780</a>
                    <a href="mailto:Info@daamsolutions.com">
                      Info@daamsolutions.com</a
                    >
                    <a href="../contact.html" class="btn style3">Contact us</a>
                  </div>
                  <div class="sidebar-widget schedule-widget sidebar-widget">
                    <ul class="list-style">
                      <li>
                        <p>Mon to Fri</p>
                        <p>9:00 am to 6:00 pm</p>
                      </li>
                      <!-- <li>
                        <p>Sat</p>
                        <p>Closed</p>
                      </li>
                      <li>
                        <p>Sun</p>
                        <p>Closed</p>
                      </li> -->
                    </ul>
                  </div>
                </div>
              </div>
            </div>
         
            <div class="row pt-100">
              <div class="col-md-12">
                <div class="section-title style1 text-center mb-40">
                  <span>Related Services</span>
                  <h2>Explore More Services</h2>
                </div>
              </div>
            </div>

            <div class="row justify-content-center">
              <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="service-card style4">
                  <div class="service-img">
                    <img
                      src="../assets/img/services/WB SQUARE.webp"
                      alt="Image"
                    />
                  </div>
                  <div class="service-info">
                    <div class="service-icon">
                      <i class="fa-solid fa-w"></i>
                    </div>
                    <h3 class="service-title">
                      <a href="/web">Web Development</a>
                    </h3>
                    <p>
                      Web development refer to the process of creating a
                      website, from the initial concept to the final product.
                    </p>
                    <a href="/web" class="link style1"
                    >Read More</a
                  >
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="service-card style4">
                  <div class="service-img">
                    <img
                      src="../assets/img/services/DA SQAURE.webp"
                      alt="Image"
                    />
                  </div>
                  <div class="service-info">
                    <div class="service-icon">
                      <i class="fa-solid fa-d"></i>
                    </div>
                    <h3 class="service-title">
                      <a href="/data-analysis">Data Analytics</a>
                    </h3>
                    <p>
                      Data analytics involves the use of statistical and
                      computational methods to extract meaning from raw data.
                    </p>
                    <a href="/data-analysis" class="link style1"
                      >Read More</a
                    >
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="service-card style4">
                  <div class="service-img">
                    <img
                      src="../assets/img/services/SMM SQAURE.webp"
                      alt="Image"
                    />
                  </div>
                  <div class="service-info">
                    <div class="service-icon">
                      <i class="fa-solid fa-s"></i>
                    </div>
                    <h3 class="service-title">
                      <a href="/social-media-marketing">Social Media Marketing</a>
                    </h3>
                    <p>
                      (SMM) refers to the use of social media platforms such as
                      Facebook, Twitter, Instagram, LinkedIn, and other.
                    </p>
                    <a href="/social-media-marketing" class="link style1"
                      >Read More</a
                    >
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="service-card style4">
                  <div class="service-img">
                    <img
                      src="../assets/img/services/SEO SQAURE.webp"
                      alt="Image"
                    />
                  </div>
                  <div class="service-info">
                    <div class="service-icon">
                      <i class="fa-solid fa-s"></i>
                    </div>
                    <h3 class="service-title">
                      <a href="/seo">SEO Services</a>
                    </h3>
                    <p>
                      SEO services enhance online visibility through various
                      practices and techniques.
                    </p>
                    <a href="/seo" class="link style1"
                      >Read More</a
                    >
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="service-card style4">
                  <div class="service-img">
                    <img
                      src="../assets/img/services/MAD SQAURE.webp"
                      alt="Image"
                    />
                  </div>
                  <div class="service-info">
                    <div class="service-icon">
                      <i class="fa-solid fa-m"></i>
                    </div>
                    <h3 class="service-title">
                      <a href="/mobile">Mobile App Development</a>
                    </h3>
                    <p>
                      Mobile app development is the creation of software
                      applications for mobile devices.
                    </p>
                    <a href="/mobile" class="link style1"
                      >Read More</a
                    >
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="service-card style4">
                  <div class="service-img">
                    <img
                      src="../assets/img/services/GD SQUARE.webp"
                      alt="Image"
                    />
                  </div>
                  <div class="service-info">
                    <div class="service-icon">
                      <i class="fa-solid fa-g"></i>
                    </div>
                    <h3 class="service-title">
                      <a href="/graphic-design">Graphic Design</a>
                    </h3>
                    <p>
                      Graphic design visually communicates ideas and information
                      through design elements.
                    </p>
                    <a href="/graphic-design" class="link style1"
                      >Read More</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Service Details section end -->
      </div>
      <!-- Content Wrapper End -->
     @endsection