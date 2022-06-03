@extends('fonend.nav')
@section('content')
    <div class="container-xxl bg-white p-0">
        <!-- Category Start -->
        <div class="container-xxl py-5">
            <div class="container">




                <h1>Thành phố</h1>



                <div class="row g-4">
                    @foreach ($cities as $city)
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <a class="cat-item d-block bg-light text-center rounded p-3"
                                href="{{ route('home.city', $city->id) }}">
                                <div class="rounded p-4">
                                    <div class="icon mb-3">
                                        <img class="img-fluid" src="{{ asset('home/img/icon-apartment.png') }}"
                                            alt="Icon">
                                    </div>
                                    <h6>{{ $city->name }}</h6>
                                    <span>123 Properties</span>
                                </div>
                            </a>
                        </div>
                    @endforeach


                    <h1>Thể Loại</h1>
                    @foreach ($categories as $category)
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <a class="cat-item d-block bg-light text-center rounded p-3"
                                href="{{ route('home.category', $category->id) }}">
                                <div class="rounded p-4">
                                    <div class="icon mb-3">
                                        <img class="img-fluid" src="{{ asset('home/img/icon-building.png') }}"
                                            alt="Icon">
                                    </div>
                                    <h6>{{ $category->name }}</h6>
                                    <span>123 Properties</span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    <!-- Category End -->


                    <!-- About Start -->
                    <div class="container-xxl py-5">
                        <div class="container">
                            <div class="row g-5 align-items-center">
                                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                                        <img class="img-fluid w-100" src="{{ asset('home/img/about.jpg') }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                    <h1 class="mb-4">#1 Place To Find The Perfect Property</h1>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                                        Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
                                        clita duo justo magna dolore erat amet</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Tempor erat elitr rebum at clita</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Aliqu diam amet diam et eos</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Clita duo justo magna dolore erat amet
                                    </p>
                                    <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- About End -->

                    <!-- Call to Action Start -->
                    <div class="container-xxl py-5">
                        <div class="container">
                            <div class="bg-light rounded p-3">
                                <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                                    <div class="row g-5 align-items-center">
                                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                            <img class="img-fluid rounded w-100"
                                                src="{{ asset('home/img/call-to-action.jpg') }}" alt="">
                                        </div>
                                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                            <div class="mb-4">
                                                <h1 class="mb-3">Contact With Our Certified Agent</h1>
                                                <p>Eirmod sed ipsum dolor sit rebum magna erat. Tempor lorem kasd vero ipsum
                                                    sit sit diam justo sed vero dolor duo.</p>
                                            </div>
                                            <a href="" class="btn btn-primary py-3 px-4 me-2"><i
                                                    class="fa fa-phone-alt me-2"></i>Make A Call</a>
                                            <a href="" class="btn btn-dark py-3 px-4"><i
                                                    class="fa fa-calendar-alt me-2"></i>Get Appoinment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <h1 class="m-0">@yield("title","List")</h1> --}}
                            {{-- @yield('content') --}}
                        </div>
                    </div>
                    <!-- Call to Action End -->

                    {{-- <section class="content">
            <div class="container-fluid">

            </div>
        </section> --}}

                    <!-- Team Start -->
                    <div class="container-xxl py-5">
                        <div class="container">
                            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                                style="max-width: 600px;">
                                <h1 class="mb-3">Property Agents</h1>
                                <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero
                                    ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
                            </div>
                            <div class="row g-4">
                                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="team-item rounded overflow-hidden">
                                        <div class="position-relative">
                                            <img class="img-fluid" src="{{ asset('home/img/team-1.jpg') }}" alt="">
                                            <div
                                                class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class="text-center p-4 mt-3">
                                            <h5 class="fw-bold mb-0">Full Name</h5>
                                            <small>Designation</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="team-item rounded overflow-hidden">
                                        <div class="position-relative">
                                            <img class="img-fluid" src="{{ asset('home/img/team-2.jpg') }}" alt="">
                                            <div
                                                class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class="text-center p-4 mt-3">
                                            <h5 class="fw-bold mb-0">Full Name</h5>
                                            <small>Designation</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="team-item rounded overflow-hidden">
                                        <div class="position-relative">
                                            <img class="img-fluid" src="{{ asset('home/img/team-3.jpg') }}" alt="">
                                            <div
                                                class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class="text-center p-4 mt-3">
                                            <h5 class="fw-bold mb-0">Full Name</h5>
                                            <small>Designation</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                                    <div class="team-item rounded overflow-hidden">
                                        <div class="position-relative">
                                            <img class="img-fluid" src="{{ asset('home/img/team-4.jpg') }}" alt="">
                                            <div
                                                class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class="text-center p-4 mt-3">
                                            <h5 class="fw-bold mb-0">Full Name</h5>
                                            <small>Designation</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Team End -->


                    <!-- Testimonial Start -->
                    <div class="container-xxl py-5">
                        <div class="container">
                            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                                style="max-width: 600px;">
                                <h1 class="mb-3">Our Clients Say!</h1>
                                <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero
                                    ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
                            </div>
                            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                                <div class="testimonial-item bg-light rounded p-3">
                                    <div class="bg-white border rounded p-4">
                                        <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet
                                            dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid flex-shrink-0 rounded"
                                                src="{{ asset('home/img/testimonial-1.jpg') }}"
                                                style="width: 45px; height: 45px;">
                                            <div class="ps-3">
                                                <h6 class="fw-bold mb-1">Client Name</h6>
                                                <small>Profession</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item bg-light rounded p-3">
                                    <div class="bg-white border rounded p-4">
                                        <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet
                                            dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid flex-shrink-0 rounded"
                                                src="{{ asset('home/img/testimonial-2.jpg') }}"
                                                style="width: 45px; height: 45px;">
                                            <div class="ps-3">
                                                <h6 class="fw-bold mb-1">Client Name</h6>
                                                <small>Profession</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item bg-light rounded p-3">
                                    <div class="bg-white border rounded p-4">
                                        <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet
                                            dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid flex-shrink-0 rounded"
                                                src="{{ asset('home/img/testimonial-3.jpg') }}"
                                                style="width: 45px; height: 45px;">
                                            <div class="ps-3">
                                                <h6 class="fw-bold mb-1">Client Name</h6>
                                                <small>Profession</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial End -->


                    <!-- Footer Start -->
                    <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
                        <div class="container py-5">
                            <div class="row g-5">
                                <div class="col-lg-3 col-md-6">
                                    <h5 class="text-white mb-4">Get In Touch</h5>
                                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New
                                        York, USA</p>
                                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                                    <div class="d-flex pt-2">
                                        <a class="btn btn-outline-light btn-social" href=""><i
                                                class="fab fa-twitter"></i></a>
                                        <a class="btn btn-outline-light btn-social" href=""><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-outline-light btn-social" href=""><i
                                                class="fab fa-youtube"></i></a>
                                        <a class="btn btn-outline-light btn-social" href=""><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <h5 class="text-white mb-4">Quick Links</h5>
                                    <a class="btn btn-link text-white-50" href="">About Us</a>
                                    <a class="btn btn-link text-white-50" href="">Contact Us</a>
                                    <a class="btn btn-link text-white-50" href="">Our Services</a>
                                    <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                                    <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <h5 class="text-white mb-4">Photo Gallery</h5>
                                    <div class="row g-2 pt-2">
                                        <div class="col-4">
                                            <img class="img-fluid rounded bg-light p-1"
                                                src="{{ asset('home/img/property-1.jpg') }}" alt="">
                                        </div>
                                        <div class="col-4">
                                            <img class="img-fluid rounded bg-light p-1"
                                                src="{{ asset('home/img/property-2.jpg') }}" alt="">
                                        </div>
                                        <div class="col-4">
                                            <img class="img-fluid rounded bg-light p-1"
                                                src="{{ asset('home/img/property-3.jpg') }}" alt="">
                                        </div>
                                        <div class="col-4">
                                            <img class="img-fluid rounded bg-light p-1"
                                                src="{{ asset('home/img/property-4.jpg') }}" alt="">
                                        </div>
                                        <div class="col-4">
                                            <img class="img-fluid rounded bg-light p-1"
                                                src="{{ asset('home/img/property-5.jpg') }}" alt="">
                                        </div>
                                        <div class="col-4">
                                            <img class="img-fluid rounded bg-light p-1"
                                                src="{{ asset('home/img/property-6.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <h5 class="text-white mb-4">Newsletter</h5>
                                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                                    <div class="position-relative mx-auto" style="max-width: 400px;">
                                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                                            placeholder="Your email">
                                        <button type="button"
                                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="copyright">
                                <div class="row">
                                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                        &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                                    </div>
                                    <div class="col-md-6 text-center text-md-end">
                                        <div class="footer-menu">
                                            <a href="">Home</a>
                                            <a href="">Cookies</a>
                                            <a href="">Help</a>
                                            <a href="">FQAs</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Footer End -->
                </div>
            </div>
        </div>
    </div>
@endsection
