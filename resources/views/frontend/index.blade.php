@php
    $page = 'home';
    $title = 'Digital Entity';
@endphp
@extends('layouts.frontend')
@section('content')
    <!-- start hero Section -->
    <section id="hero" class="container">
        <div class="hero-text" data-aos="fade-right" data-aos-duration="2000">
            <h1 class="text-super">
                We Design Your Business
                <span>
                    Grow Up
                </span>
            </h1>
            <p class="text-paraghraph">
                Help find solutions with intitutive and in accordance with client
                business goals. we provide a high-quality services.
            </p>
            <div class="hero-button">
                @if (Auth::check())
                    <a href="/dashboard" class="btn btn-digity">Dashboard</a>
                @else
                    <a class="btn btn-digity" data-bs-toggle="modal" data-bs-target="#signUpModal">Start Now</a>
                @endif
            </div>
        </div>
        <div class="hero-image d-flex justify-content-center " data-aos="fade-left" data-aos-duration="2000">
            <img src="assets/img/figma.svg" class="i-figma" alt="figma" />
            <img src="assets/img/xd.svg" class="i-xd" alt="xd" />
            <img src="assets/img/sketch.svg" class="i-sketch" alt="xd" />
            {{-- <img class="rounded-circle" src="assets/img/aqmal-duyung.png" alt="hero-image" /> --}}
            {{-- <img src="assets/img/hero-image.png" alt="hero-image" /> --}}
            <img src="assets/img/main-digity-700.svg" alt="hero-image" />
        </div>
    </section>
    <!-- end hero Section -->

    <!-- start partnership -->
    <section id="partnership" data-aos="fade-up" data-aos-duration="2000">
        <h3 class="text-subtitle">Why we're worth your consideration</h3>
        <div class="why-us container">
            <div class="why-us-card">
                <i class="fa-solid fa-rocket"></i>
                <h3 class="text-paraghraph">Flexibility and Collaboration</h3>
                <p class="text-tiny">
                    We will listen to your needs and preferences, and provide expert advice to produce the perfect
                    design.
                </p>
            </div>
            <div class="why-us-card">
                <i class="fa-solid fa-paintbrush"></i>
                <h3 class="text-paraghraph">Comprehensive Design Solutions</h3>
                <p class="text-tiny">
                    Whatever type of design you need, we are ready to provide the appropriate solutions.
                </p>
            </div>
            <div class="why-us-card">
                <i class="fa-solid fa-medal"></i>
                <h3 class="text-paraghraph">High Quality in a Short Timeframe</h3>
                <p class="text-tiny">
                    We value your time and are committed to delivering high-quality design results in the shortest
                    possible time.
                </p>
            </div>
            <div class="why-us-card">
                <i class="fa-solid fa-address-card"></i>
                <h3 class="text-paraghraph">Experienced Professional Team</h3>
                <p class="text-tiny">
                    We prioritize customer satisfaction and always strive to deliver the best results.
                </p>
            </div>
        </div>
        {{-- <div class="partnership-logo">
            <img src="assets/img/google.svg" alt="google-icon" />
            <img src="assets/img/airbnb.svg" alt="airbnb-icon" />
            <img src="assets/img/creative market.svg" alt="creative market-icon" />
            <img src="assets/img/shopify.svg" alt="shopify-icon" />
            <img src="assets/img/amazon.svg" alt="amazon-icon" />
        </div> --}}
    </section>
    <!-- end partnership -->

    <!-- start example products -->
    <section id="products" class="container product">
        <div class="product-title" data-aos="fade-right" data-aos-duration="1000">
            <h2 class="text-title">We create creative-interactive digital products</h2>
            <p class="text-paraghraph">
                Our product can assist your business in appearing more appealing and interactive
            </p>
        </div>
        <div class="products">
            <div class="main-product" data-aos="fade-right" data-aos-duration="2000">
                <img src="assets/img/prod-1.png" alt="produtcs" />
                <p class="text-paraghraph">Social Media Design - June 1, 2023</p>
                <h3 class="text-subtitle">Instagram Feed Design</h3>
                <p class="text-tiny">
                    Enhance your Instagram aesthetics with our premium Social Media Design. Engage your audience and
                    make a lasting impression with captivating visuals and a cohesive layout that reflects your brand's
                    unique identity.
                </p>
                <a href="" class="btn btn-digity">See More</a>
            </div>
            <div class="other-product">
                <div class="other-product-card" data-aos="fade-up" data-aos-duration="2000">
                    <img src="assets/img/other-png01.png" alt="produtcs" />
                    <p class="text-tiny">App Design - June 20, 2022</p>
                    <h3>Redesign channel website landing page</h3>
                </div>
                <div class="other-product-card" data-aos="fade-up" data-aos-duration="3000">
                    <img src="assets/img/other-png02.png" alt="produtcs" />
                    <p class="text-tiny">App Design - June 20, 2022</p>
                    <h3>New Locator App For a New Company</h3>
                </div>
                <div class="other-product-card" data-aos="fade-up" data-aos-duration="2000">
                    <img src="assets/img/other-png03.png" alt="produtcs" />
                    <p class="text-tiny">App Design - June 20, 2022</p>
                    <h3>Rental Rooms Web App Platform</h3>
                </div>
                <div class="other-product-card" data-aos="fade-up" data-aos-duration="3000">
                    <img src="assets/img/other-png04.png" alt="produtcs" />
                    <p class="text-tiny">App Design - June 20, 2022</p>
                    <h3>Calendar App for Big SASS Company</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- end example products -->

    <!-- start services -->
    <section id="services" class="container">
        <div class="newsletter" data-aos="fade-right" data-aos-duration="2000">
            <h1 class="text-subtitle">
                How We Can Help You
            </h1>
            <p class="text-tiny">
                Unlocking possibilities, delivering excellence. See all our service provide for you.
            </p>
            <a href="/services" class="btn btn-digity">See All Service</a>
        </div>
        <div class="services">
            <div class="service" data-aos="fade-up" data-aos-duration="2000">
                <div class="service-card">
                    <img src="assets/img/ux.svg" alt="services-logo" />
                    <h3 class="text-paraghraph">Social Media Design</h3>
                    <p class="text-tiny">
                        Sometimes features require a short description
                    </p>
                </div>
            </div>
            <div class="service" data-aos="fade-up" data-aos-duration="3000">
                <div class="service-card">
                    <img src="assets/img/logo-branding.svg" alt="services-logo" />
                    <h3 class="text-paraghraph">Logo Branding</h3>
                    <p class="text-tiny">
                        Sometimes features require a short description
                    </p>
                </div>
            </div>
            <div class="service" data-aos="fade-up" data-aos-duration="2000">
                <div class="service-card">
                    <img src="assets/img/app design.svg" alt="services-logo" />
                    <h3 class="text-paraghraph">Social Media Manage</h3>
                    <p class="text-tiny">
                        Sometimes features require a short description
                    </p>
                </div>
            </div>
            <div class="service" data-aos="fade-up" data-aos-duration="3000">
                <div class="service-card">
                    <img src="assets/img/web design.svg" alt="services-logo" />
                    <h3 class="text-paraghraph">Custom Design</h3>
                    <p class="text-tiny">
                        Sometimes features require a short description
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end services -->

    <!-- start about -->
    <section id="about" class="container about">
        <img src="assets/img/peoperty.svg" class="property-1" alt="property" />
        <img src="assets/img/peoperty.svg" class="property-2" alt="property" />
        <div class="testimonial-text">
            <div data-aos="fade-up" data-aos-duration="2000">
                <h2 class="text-title">About Us</h2>
                <h2 class="text-title">Discover our story and join our journey today.</h2>
            </div>
            <div class="comment" data-aos="fade-up" data-aos-duration="2000">
                <h1 class="petik-left" data-aos="fade-right" data-aos-duration="2000">
                    "
                </h1>
                <h1 class="petik-right" data-aos="fade-left" data-aos-duration="2000">
                    "
                </h1>
                <p class="paraghraph">
                    DIGITY (Digital Entity) is a dynamic venture specializing in design and social media management
                    services. With a talented team of professionals, we cater to diverse industries, helping businesses
                    establish and elevate their online presence. From creating visually stunning designs to crafting
                    effective social media strategies, DIGITY is dedicated to delivering exceptional results that drive
                    brand growth and engagement in the digital landscape.
                </p>
            </div>
        </div>
    </section>
    <!-- end about -->
@endsection
