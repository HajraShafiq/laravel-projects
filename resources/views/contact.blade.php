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
    .br-con {
    background-image: url(assets/img/hero/Contact\ Us\ Slider.webp);
}
    </style>


        <!-- Content Wrapper Start -->
        <div class="content-wrapper">

            <!-- Breadcrumb start -->
            <div class="breadcrumb-wrap bg-f br-con">
                <div class="overlay bg-vulcan op-9"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-title">
                                <h2>Contact Us</h2>
                                <ul class="breadcrumb-menu list-style">
                                    <li><a href="index.html">Home </a></li>
                                    <li>Contact Us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb end -->

            <!-- Contact Us section start -->
            <section class="contact-us-wrap pt-100 pb-75">
                <div class="container">
                    <div class="section-title text-left style1 mb-40">
                        <span>SEND MESSAGES</span>
                        <h2>We Are Here To Help You</h2>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="contact-box">
                                <div class="contact-icon"><i class="flaticon-clock"></i></div>
                                <div class="contact-info">
                                    <h5>Our Timing</h5>
                                    <p>Mon to Fri 9:00 am to 6:00 pm</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="contact-box">
                                <div class="contact-icon"><i class="flaticon-email"></i></div>
                                <div class="contact-info">
                                    <h5>Email</h5>
                                    <a href="mailto:Info@daamsolutions.com">Info@daamsolutions.com</a>
                                    <!-- <a href="mailto:support@misa.com">support@misa.com</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="contact-box">
                                <div class="contact-icon"><i class="flaticon-call-1"></i></div>
                                <div class="contact-info">
                                    <h5>Phone</h5>
                                    <a href="tel:13454567877">(331) 725-2780</a>
                                    <!-- <a href="tel:13454567878">+1-3454-5678-78</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <!-- <div class="col-xl-4">
                            <div class="comp-map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8385385572983!2d144.95358331584498!3d-37.81725074201705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4dd5a05d97%3A0x3e64f855a564844d!2s121%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2sbd!4v1612419490850!5m2!1sen!2sbd"></iframe>
                            </div>
                        </div> -->
                        <div class="col-xl-12">
                            <div class="contact-form">
                                <form class="form-wrap" id="contactForm">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="name" placeholder="Your Full Name*" id="name"
                                                    required data-error="Please enter your name">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="email" name="email" id="email" required
                                                    placeholder="Email Address*" data-error="Please enter your email">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="phone_number" placeholder="Phone Number"
                                                    id="phone_number" required
                                                    data-error="Please enter your phone number">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="msg_subject" placeholder="Subject"
                                                    id="msg_subject" required data-error="Please enter your subject">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group v1">
                                                <textarea name="message" id="message" placeholder="Your Messages.."
                                                    cols="30" rows="10" required
                                                    data-error="Please enter your message"></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn style1">Send Message</button>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Contact Us section end -->

        </div>
        <!-- Content Wrapper End -->

        @endsection