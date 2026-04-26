@extends('frontend.layouts.app')
@section('content')



    <!-- Hero Start -->
    <div class="container-fluid pb-5 bg-primary hero-header">
        <div class="container py-5">
            <div class="row g-3 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-1 mb-0 animated slideInLeft">Services</h1>
                </div>
                <div class="col-lg-6 animated slideInRight">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                            <li class="breadcrumb-item"><a class="text-primary" href="#">Home</a></li>
                            {{-- <li class="breadcrumb-item"><a class="text-primary" href="#">Pages</a></li> --}}
                            <li class="breadcrumb-item text-secondary active" aria-current="page">Services</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


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