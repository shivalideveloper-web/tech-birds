@extends('frontend.layouts.app')
@section('content')


    <!-- Hero Start -->
    <div class="container-fluid pb-5 bg-primary hero-header">
        <div class="container py-5">
            <div class="row g-3 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-1 mb-0 animated slideInLeft">About</h1>
                </div>
                <div class="col-lg-6 animated slideInRight">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                            <li class="breadcrumb-item"><a class="text-primary" href="#">Home</a></li>
                            {{-- <li class="breadcrumb-item"><a class="text-primary" href="#">Pages</a></li> --}}
                            <li class="breadcrumb-item text-secondary active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
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
                        {{-- <a class="btn btn-primary px-4 me-2" href="">Read More</a> --}}
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