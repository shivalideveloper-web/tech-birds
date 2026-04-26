@extends('frontend.layouts.app')
@section('content')

    <!-- Hero Start -->
    <div class="container-fluid pb-5 hero-header bg-light mb-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center mb-5">
                <div class="col-lg-6">
                    {{-- <h1 class="display-1 mb-4 animated slideInRight">Smart  <span class="text-primary">IT Solutions </span>for Growth</h1>
                  
                    <h5 class="d-inline-block border border-2 border-white py-3 px-5 mb-0 animated slideInRight">
                        An Award Winning Studio Since 1990</h5> --}}
                        <h1 class="display-1 mb-4 animated slideInRight">
                            We Build Your <span class="text-primary">Digital</span> Future
                        </h1>

                        <h5 class="d-inline-block border border-2 border-white py-3 px-5 mb-0 animated slideInRight">
                            Innovative IT Solutions for Business
                        </h5>
                </div>
                <div class="col-lg-6">
                    <div class="owl-carousel header-carousel animated fadeIn">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/hero-slider-1.jpg')}}" alt="">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/hero-slider-2.jpg')}}" alt="">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/hero-slider-3.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="row g-5 animated fadeIn">
                <div class="col-md-6 col-lg-3">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 btn-square border border-2 border-white me-3">
                            <i class="fa fa-robot text-primary"></i>
                        </div>
                        <h5 class="lh-base mb-0">Web Designing</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 btn-square border border-2 border-white me-3">
                            <i class="fa fa-robot text-primary"></i>
                        </div>
                        <h5 class="lh-base mb-0">Web Development</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 btn-square border border-2 border-white me-3">
                            <i class="fa fa-robot text-primary"></i>
                        </div>
                        <h5 class="lh-base mb-0">Digital Marketing</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 btn-square border border-2 border-white me-3">
                            <i class="fa fa-robot text-primary"></i>
                        </div>
                        <h5 class="lh-base mb-0">Graphics Designing</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-6 wow fadeIn" data-wow-delay="0.1s">
                            <img class="img-fluid" src="{{asset('frontend/assets/img/about-1.jpg')}}" alt="">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.3s">
                            <img class="img-fluid h-75" src="{{asset('frontend/assets/img/about-2.jpg')}}" alt="">
                            <div class="h-25 d-flex align-items-center text-center bg-primary px-4">
                                <h4 class="text-white lh-base mb-0">We Build Online Presence</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    {{-- <h1 class="mb-5"><span class="text-uppercase text-primary bg-light px-2">History</span> of Our
                        Creation</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                        amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus
                        clita duo justo et tempor eirmod magna dolore erat amet</p>
                    <p class="mb-5">Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no
                        labore lorem sit. Sanctus clita duo justo et tempor.</p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Award Winning</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Professional Staff</h6>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>24/7 Support</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Fair Prices</h6>
                        </div>
                    </div> --}}
                    <h1 class="mb-5">
    <span class="text-uppercase text-primary bg-light px-2">About</span> Our Journey
</h1>

<p class="mb-4">
    We are a passionate IT company delivering innovative web design, development, and digital marketing solutions. 
    Our goal is to help businesses grow through powerful and modern digital technologies.
</p>

<p class="mb-5">
    From startups to enterprises, we create scalable, user-friendly, and result-driven digital experiences that build strong online presence and brand value.
</p>

<div class="row g-3">
    <div class="col-sm-6">
        <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Expert Developers</h6>
        <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Creative Designers</h6>
    </div>
    <div class="col-sm-6">
        <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>24/7 Support</h6>
        <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Affordable Pricing</h6>
    </div>
</div>
                    <div class="d-flex align-items-center mt-5">
                        <a class="btn btn-primary px-4 me-2" href="{{ route('about') }}">Read More</a>
                        <a class="btn btn-outline-primary btn-square border-2 me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary btn-square border-2 me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square border-2 me-2" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-primary btn-square border-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid py-5">
       <div class="container">
    <div class="text-center wow fadeIn" data-wow-delay="0.1s">
        <h1 class="mb-5">Why Clients <span class="text-uppercase text-primary bg-light px-2">Choose Us</span></h1>
    </div>

    <div class="row g-5 align-items-center text-center">

        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
            <i class="fa fa-code fa-5x text-primary mb-4"></i>
            <h4>Expert Development Team</h4>
            <p class="mb-0">We deliver high-quality, scalable and secure web development solutions using modern technologies.</p>
        </div>

        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
            <i class="fa fa-paint-brush fa-5x text-primary mb-4"></i>
            <h4>Creative UI/UX Design</h4>
            <p class="mb-0">We design visually stunning and user-friendly interfaces that enhance user engagement and experience.</p>
        </div>

        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
            <i class="fa fa-lightbulb fa-5x text-primary mb-4"></i>
            <h4>Innovative IT Solutions</h4>
            <p class="mb-0">We build smart digital solutions that help businesses grow and stay ahead in the digital world.</p>
        </div>

        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
            <i class="fa fa-users fa-5x text-primary mb-4"></i>
            <h4>Client Satisfaction</h4>
            <p class="mb-0">We focus on delivering results that meet client expectations with long-term support and trust.</p>
        </div>

        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
            <i class="fa fa-dollar-sign fa-5x text-primary mb-4"></i>
            <h4>Affordable Pricing</h4>
            <p class="mb-0">We offer cost-effective IT services without compromising on quality and performance.</p>
        </div>

        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
            <i class="fa fa-shield-alt fa-5x text-primary mb-4"></i>
            <h4>Reliable & Secure Solutions</h4>
            <p class="mb-0">We ensure secure, stable and reliable digital systems for your business growth.</p>
        </div>

    </div>
</div>
    </div>
    <!-- Feature End -->


    <!-- Project Start -->
    <div class="container-fluid mt-5">
        <div class="container mt-5">
            <div class="row g-0">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column justify-content-center bg-primary h-100 p-5">
                         <h1 class="text-white mb-5">
        Industries We <span class="text-uppercase text-primary bg-light px-2">Serve</span>
    </h1>

    <h4 class="text-white mb-0">
        {{-- <span class="display-1">6</span> key stages of our development process --}}
       Transforming industries with intelligent technology
    </h4>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.2s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{asset('frontend/assets/img/planning.jpg')}}" alt="">
                                <a class="project-overlay text-decoration-none" href="">
                                    <h4 class="text-white">Healthcare</h4>
                                    {{-- <small class="text-white">72 Projects</small> --}}
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{asset('frontend/assets/img/designing.jpg')}}" alt="">
                                <a class="project-overlay text-decoration-none" href="">
                                    <h4 class="text-white">Hospitality & Travel</h4>
                                    {{-- <small class="text-white">67 Projects</small> --}}
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.4s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{asset('frontend/assets/img/development.jpg')}}" alt="">
                                <a class="project-overlay text-decoration-none" href="">
                                    <h4 class="text-white">Manufacturing</h4>
                                    {{-- <small class="text-white">53 Projects</small> --}}
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{asset('frontend/assets/img/testing.jpg')}}" alt="">
                                <a class="project-overlay text-decoration-none" href="">
                                    <h4 class="text-white">E-Commerce</h4>
                                    {{-- <small class="text-white">33 Projects</small> --}}
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.6s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{asset('frontend/assets/img/planning.jpg')}}" alt="">
                                <a class="project-overlay text-decoration-none" href="">
                                    <h4 class="text-white">Real Estate</h4>
                                    {{-- <small class="text-white">87 Projects</small> --}}
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{asset('frontend/assets/img/planning.jpg')}}" alt="">
                                <a class="project-overlay text-decoration-none" href="">
                                    <h4 class="text-white">Education & Training</h4>
                                    {{-- <small class="text-white">69 Projects</small> --}}
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{asset('frontend/assets/img/planning.jpg')}}" alt="">
                                <a class="project-overlay text-decoration-none" href="">
                                    <h4 class="text-white">Automotive Services</h4>
                                    {{-- <small class="text-white">69 Projects</small> --}}
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{asset('frontend/assets/img/planning.jpg')}}" alt="">
                                <a class="project-overlay text-decoration-none" href="">
                                    <h4 class="text-white">Beauty & Personal Care</h4>
                                    {{-- <small class="text-white">69 Projects</small> --}}
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{asset('frontend/assets/img/planning.jpg')}}" alt="">
                                <a class="project-overlay text-decoration-none" href="">
                                    <h4 class="text-white">Fitness & Lifestyle</h4>
                                    {{-- <small class="text-white">69 Projects</small> --}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->


    <!-- Service Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
               <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <h1 class="mb-5">Our Digital <span
            class="text-uppercase text-primary bg-light px-2">Services</span></h1>
<p>We create powerful digital solutions through web design, web development, graphic design, and digital marketing, helping businesses grow online, attract customers and build a strong digital identity.
</p>

<p class="mb-5">
Our focus is on building digital solutions that create measurable impact—improving performance, increasing engagement and helping businesses grow in a competitive market.
</p>

    <div class="d-flex align-items-center bg-light">
        <div class="btn-square flex-shrink-0 bg-primary" style="width: 100px; height: 100px;">
            <i class="fa fa-phone fa-2x text-white"></i>
        </div>
        <div class="px-3">
            <h3>+0123456789</h3>
            <span>Contact us anytime for a free consultation on your digital project</span>
        </div>
    </div>
</div>
             <div class="col-lg-7">
    <div class="row g-0">
        
        <!-- Web Designing -->
        <div class="col-md-6 wow fadeIn" data-wow-delay="0.2s">
            <div class="service-item h-100 d-flex flex-column justify-content-center bg-primary">
                <a href="" class="service-img position-relative mb-4">
                    <img class="img-fluid w-100" src="{{asset('frontend/assets/img/designing.jpg')}}" alt="">
                    <h3>Web Designing</h3>
                </a>
                <p class="mb-0">
                    We create modern, responsive, and user-friendly website designs that enhance user experience and reflect your brand identity.
                </p>
            </div>
        </div>

        <!-- Web Development -->
        <div class="col-md-6 wow fadeIn" data-wow-delay="0.4s">
            <div class="service-item h-100 d-flex flex-column justify-content-center bg-light">
                <a href="" class="service-img position-relative mb-4">
                    <img class="img-fluid w-100" src="{{asset('frontend/assets/img/development.jpg')}}" alt="">
                    <h3>Web Development</h3>
                </a>
                <p class="mb-0">
                    We build fast, secure, and scalable websites using the latest technologies to ensure high performance and reliability.
                </p>
            </div>
        </div>

        <!-- Digital Marketing -->
        <div class="col-md-6 wow fadeIn" data-wow-delay="0.6s">
            <div class="service-item h-100 d-flex flex-column justify-content-center bg-light">
                <a href="" class="service-img position-relative mb-4">
                    <img class="img-fluid w-100" src="{{asset('frontend/assets/img/marketing.jpg')}}" alt="">
                    <h3>Digital Marketing</h3>
                </a>
                <p class="mb-0">
                    Grow your business online with SEO, social media marketing, and targeted campaigns that drive traffic and conversions.
                </p>
            </div>
        </div>

        <!-- Graphic Designing -->
        <div class="col-md-6 wow fadeIn" data-wow-delay="0.8s">
            <div class="service-item h-100 d-flex flex-column justify-content-center bg-primary">
                <a href="" class="service-img position-relative mb-4">
                    <img class="img-fluid w-100" src="{{asset('frontend/assets/img/gr-designing.jpg')}}" alt="">
                    <h3>Graphic Designing</h3>
                </a>
                <p class="mb-0">
                    Creative and eye-catching designs for branding, social media and marketing materials that make your business stand out.
                </p>
            </div>
        </div>

    </div>
</div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Team Start -->
  <div class="container-fluid bg-light py-5">
    <div class="container py-5">
        <h1 class="mb-5">
            Our Expert <span class="text-uppercase text-primary bg-light px-2">IT Team</span>
        </h1>

        <div class="row g-4">

            <!-- Member 1 -->
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{asset('frontend/assets/img/team-1.jpg')}}" alt="">
                    <div class="team-overlay">
                        <small class="mb-2">Website Designer</small>
                        <h4 class="lh-base text-light">Rahul Sharma</h4>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Member 2 -->
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{asset('frontend/assets/img/team-2.jpg')}}" alt="">
                    <div class="team-overlay">
                        <small class="mb-2">Web Developer</small>
                        <h4 class="lh-base text-light">Priya Verma</h4>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Member 3 -->
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{asset('frontend/assets/img/team-3.jpg')}}" alt="">
                    <div class="team-overlay">
                        <small class="mb-2">SEO Manager</small>
                        <h4 class="lh-base text-light">Amit Singh</h4>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Member 4 -->
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{asset('frontend/assets/img/team-4.jpg')}}" alt="">
                    <div class="team-overlay">
                        <small class="mb-2">Graphics Designer</small>
                        <h4 class="lh-base text-light">Neha Kapoor</h4>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
    <!-- Team End -->


    <!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9">
                <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.2s">

                    <!-- Testimonial 1 -->
                    <div class="testimonial-item">
                        <div class="row g-5 align-items-center">
                            <div class="col-md-6">
                                <div class="testimonial-img">
                                    <img class="img-fluid" src="{{asset('frontend/assets/img/testimonial-1.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="testimonial-text pb-5 pb-md-0">
                                    <h3>Professional Website Development</h3>
                                    <p>
                                        The team delivered a fast, responsive, and modern website for our business.
                                        Our online presence improved significantly, and customer engagement increased.
                                    </p>
                                    <h5 class="mb-0">Rahul Mehta</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="testimonial-item">
                        <div class="row g-5 align-items-center">
                            <div class="col-md-6">
                                <div class="testimonial-img">
                                    <img class="img-fluid" src="{{asset('frontend/assets/img/testimonial-2.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="testimonial-text pb-5 pb-md-0">
                                    <h3>Creative Logo Design</h3>
                                    <p>
                                        We received a unique and professional logo that perfectly represents our brand.
                                        The design process was smooth and exceeded our expectations.
                                    </p>
                                    <h5 class="mb-0">Priya Sharma</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="testimonial-item">
                        <div class="row g-5 align-items-center">
                            <div class="col-md-6">
                                <div class="testimonial-img">
                                    <img class="img-fluid" src="{{asset('frontend/assets/img/testimonial-3.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="testimonial-text pb-5 pb-md-0">
                                    <h3>SEO & Digital Growth</h3>
                                    <p>
                                        Their SEO services helped us rank higher on search engines and bring in more traffic.
                                        We saw real growth in leads within a few months.
                                    </p>
                                    <h5 class="mb-0">Amit Verma</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Testimonial End -->


    <!-- Newsletter Start -->
    <div class="container-fluid bg-primary newsletter p-0">
        <div class="container p-0">
            <div class="row g-0 align-items-center">
                <div class="col-md-5 ps-lg-0 text-start wow fadeIn" data-wow-delay="0.2s">
                    <img class="img-fluid w-100" src="{{asset('frontend/assets/img/newsletter.jpg')}}" alt="">
                </div>
                <div class="col-md-7 py-5 newsletter-text wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-5">
                        <h1 class="mb-5">Subscribe the <span class="text-uppercase text-primary bg-white px-2">Newsletter</span></h1>
                        <div class="position-relative w-100 mb-2">
                            <input class="form-control border-0 w-100 ps-4 pe-5" type="text"
                                placeholder="Enter Your Email" style="height: 60px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-2 me-2"><i
                                    class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                        {{-- <p class="mb-0">Diam sed sed dolor stet amet eirmod</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->
@endsection