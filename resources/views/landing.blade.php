<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Digity Agency Digital</title>
    <link rel="icon" type="favicon.ico" href="/images/favicon.ico" />
    <link rel="stylesheet" href="/assets/css/styles.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.1/dist/cdn.min.js"></script>
</head>

<body>
    <!-- start navbar -->
    <nav id="navbar">
        <div class="navbar container" style="font-weight: bold;">
            <div class="web-icon">
                Digity
            </div>
            <div class="nav-menu">
                <a href="#hero">Home</a>
                <a href="#products">Products</a>
                <a href="#testimonials">Testimonials</a>
                <a href="#services">Services</a>
                <span>|</span>
                <a href="#" data-bs-toggle="modal" data-bs-target="#signUpModal">Login</a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#signUpModal">SignUp</a>
            </div>
            <div class="menu">
                <i data-feather="menu"></i>
            </div>
        </div>
    </nav>
    <!-- end navbar -->
    {{-- Modal Sign Up --}}
    <div class="modal fade " id="signUpModal" tabindex="-1" aria-labelledby="signUpModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable ro">
            <div class="modal-content  " style="border-radius:2rem;">


                <div x-data="{ register: true }" class="modal-body text-center">
                    <h3 class="modal-title text-center fw-bolder mb-3" id="signUpModalLabel">
                        <span x-show="register">Sign Up</span>
                        <span x-show="!register">Login</span>
                    </h3>
                    <form x-show="register" class="mx-3">
                        @csrf
                        <div class="mb-4 mt-1">

                            <input type="text" class="form-control rounded-pill"
                                style="filter: drop-shadow(0 -2px 1px rgba(0, 0, 0, 0.3))" id="name"
                                aria-describedby="nameHelp" placeholder="Name">
                        </div>
                        <div class="mb-4 mt-1">
                            <input type="email" class="form-control rounded-pill"
                                style="filter: drop-shadow(0 -2px 1px rgba(0, 0, 0, 0.3))" id="email"
                                aria-describedby="emailHelp" placeholder="Email">
                        </div>
                        <div class="mb-4 mt-1">
                            <input type="password" class="form-control rounded-pill"
                                style="filter: drop-shadow(0 -2px 1px rgba(0, 0, 0, 0.3))" id="password"
                                placeholder="Password">
                        </div>
                        <div class="d-grid mt-3 mb-4">

                            <button type="button" class="btn rounded-pill text-white fw-bold "
                                style="background-color: rgb(123, 0, 255);">Sign Up</button>
                        </div>
                    </form>
                    <form x-show="!register" class="mx-3">
                        @csrf
                        <div class="mb-4 mt-1">
                            <input type="email" class="form-control rounded-pill"
                                style="filter: drop-shadow(0 -2px 1px rgba(0, 0, 0, 0.3))" id="email"
                                aria-describedby="emailHelp" placeholder="Email">
                        </div>
                        <div class="mb-4 mt-1">
                            <input type="password" class="form-control rounded-pill"
                                style="filter: drop-shadow(0 -2px 1px rgba(0, 0, 0, 0.3))" id="password"
                                placeholder="Password">
                        </div>
                        <div class="d-grid mt-3 mb-4">

                            <button type="button" class="btn rounded-pill text-white fw-bold "
                                style="background-color: rgb(123, 0, 255);">Sign Up</button>
                        </div>
                    </form>
                    <small>Already have an account? <button type="button" @click="register = !register"> <u> Login
                            </u></button type="button"> </small>
                </div>
            </div>
        </div>

    </div>
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
                <button class="text-tiny">Contact Us</button>
                <div class="watch-button">
                    <img src="assets/img/Button.svg" alt="button" />
                    <p class="text-tiny">Watch our introduction video</p>
                </div>
            </div>
        </div>
        <div class="hero-image d-flex justify-content-center " data-aos="fade-left" data-aos-duration="2000">
            <img src="assets/img/figma.svg" class="i-figma" alt="figma" />
            <img src="assets/img/xd.svg" class="i-xd" alt="xd" />
            <img src="assets/img/sketch.svg" class="i-sketch" alt="xd" />
            <img class="rounded-circle" src="assets/img/aqmal-duyung.png" alt="hero-image" />
        </div>
    </section>
    <!-- end hero Section -->

    <!-- start partnership -->
    <section id="partnership" data-aos="fade-up" data-aos-duration="2000">
        <h3 class="text-subtitle">Trusted by greatest companies</h3>
        <div class="partnership-logo">
            <img src="assets/img/google.svg" alt="google-icon" />
            <img src="assets/img/airbnb.svg" alt="airbnb-icon" />
            <img src="assets/img/creative market.svg" alt="creative market-icon" />
            <img src="assets/img/shopify.svg" alt="shopify-icon" />
            <img src="assets/img/amazon.svg" alt="amazon-icon" />
        </div>
    </section>
    <!-- end partnership -->

    <!-- start example products -->
    <section id="products" class="container product">
        <div class="product-title" data-aos="fade-right" data-aos-duration="1000">
            <h2 class="text-title">We create world-class digital products</h2>
            <p class="text-paraghraph">
                By information about design the world to the best instructors, heatc
                helping By information
            </p>
        </div>
        <div class="products">
            <div class="main-product" data-aos="fade-right" data-aos-duration="2000">
                <img src="assets/img/main-product.png" alt="produtcs" />
                <p class="text-paraghraph">App Design - June 20, 2022</p>
                <h3 class="text-subtitle">App Redesign</h3>
                <p class="text-tiny">
                    By information about design the world to the best instructors, heatc
                    helping By information about design the world to the best
                    instructors, heatc helping
                </p>
            </div>
            <div class="other-product">
                <div class="card" data-aos="fade-up" data-aos-duration="2000">
                    <img src="assets/img/other-png01.png" alt="produtcs" />
                    <p class="text-tiny">App Design - June 20, 2022</p>
                    <h3>Redesign channel website landing page</h3>
                </div>
                <div class="card" data-aos="fade-up" data-aos-duration="3000">
                    <img src="assets/img/other-png02.png" alt="produtcs" />
                    <p class="text-tiny">App Design - June 20, 2022</p>
                    <h3>New Locator App For a New Company</h3>
                </div>
                <div class="card" data-aos="fade-up" data-aos-duration="2000">
                    <img src="assets/img/other-png03.png" alt="produtcs" />
                    <p class="text-tiny">App Design - June 20, 2022</p>
                    <h3>Rental Rooms Web App Platform</h3>
                </div>
                <div class="card" data-aos="fade-up" data-aos-duration="3000">
                    <img src="assets/img/other-png04.png" alt="produtcs" />
                    <p class="text-tiny">App Design - June 20, 2022</p>
                    <h3>Calendar App for Big SASS Company</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- end example products -->

    <!-- start testimonials -->
    <section id="testimonials" class="container testimonials">
        <img src="assets/img/peoperty.svg" class="property-1" alt="property" />
        <img src="assets/img/peoperty.svg" class="property-2" alt="property" />
        <div class="testimonial-text">
            <div data-aos="fade-up" data-aos-duration="2000">
                <h2 class="text-title">Let’s hear</h2>
                <h2 class="text-title">What they says</h2>
            </div>
            <div class="comment" data-aos="fade-up" data-aos-duration="2000">
                <h1 class="petik-left" data-aos="fade-right" data-aos-duration="2000">
                    "
                </h1>
                <h1 class="petik-right" data-aos="fade-left" data-aos-duration="2000">
                    "
                </h1>
                <p class="paraghraph">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Risus vel
                    lobortis tincidunt fames quisque mauris at diam. Nullam morbi ipsum
                    turpis amet id posuere torto quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                    dolor in reprehenderit in voluptate velit esse cillum dolore.
                </p>
            </div>
            <div class="people-image" data-aos="fade-down" data-aos-duration="2000">
                <div class="image-container">
                    <img src="assets/img/people01.png" alt="testimonials-picture" />
                </div>
                <div class="image-container">
                    <img src="assets/img/people02.png" alt="testimonials-picture" />
                </div>
                <div class="image-container-main">
                    <img src="assets/img/people03.png" alt="testimonials-picture" />
                </div>
                <div class="image-container">
                    <img src="assets/img/people04.png" alt="testimonials-picture" />
                </div>
                <div class="image-container">
                    <img src="assets/img/people05.png" alt="testimonials-picture" />
                </div>
            </div>
            <div class="people-name" data-aos="fade-up" data-aos-duration="2000">
                <h3 class="text-paraghraph">
                    Jane Huston
                </h3>
                <p class="text-tiny">Founder of Vabrilio</p>
            </div>
        </div>
    </section>
    <!-- end testimonials -->

    <!-- start services -->
    <section id="services" class="container">
        <div class="newsletter" data-aos="fade-right" data-aos-duration="2000">
            <h1 class="text-subtitle">
                How We Can Help You
            </h1>
            <p class="text-tiny">
                Follow our newsletter. We will regulary update our latest project and
                availability.
            </p>
            <div class="email">
                <i data-feather="mail" class="text-tiny"></i>
                <input type="text" placeholder="Enter your email address" />
                <button class="text-tiny">Subscribe</button>
            </div>
        </div>
        <div class="services">
            <div class="service" data-aos="fade-up" data-aos-duration="2000">
                <div class="card">
                    <img src="assets/img/ux.svg" alt="services-logo" />
                    <h3 class="text-paraghraph">UI/UX Design</h3>
                    <p class="text-tiny">
                        Sometimes features require a short description
                    </p>
                </div>
            </div>
            <div class="service" data-aos="fade-up" data-aos-duration="3000">
                <div class="card">
                    <img src="assets/img/logo-branding.svg" alt="services-logo" />
                    <h3 class="text-paraghraph">Logo Branding</h3>
                    <p class="text-tiny">
                        Sometimes features require a short description
                    </p>
                </div>
            </div>
            <div class="service" data-aos="fade-up" data-aos-duration="2000">
                <div class="card">
                    <img src="assets/img/app design.svg" alt="services-logo" />
                    <h3 class="text-paraghraph">App Design</h3>
                    <p class="text-tiny">
                        Sometimes features require a short description
                    </p>
                </div>
            </div>
            <div class="service" data-aos="fade-up" data-aos-duration="3000">
                <div class="card">
                    <img src="assets/img/web design.svg" alt="services-logo" />
                    <h3 class="text-paraghraph">Website Design</h3>
                    <p class="text-tiny">
                        Sometimes features require a short description
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end services -->

    <!-- start footer -->
    <footer>
        <div class="container">
            <div class="socials-media">
                <div class="logo-company">
                    <span style="font-weight: bold;">Digity</span>
                </div>
                <div class="socmed-icon">
                    <div class="icon-container">
                        <img src="assets/img/instagram.svg" alt="socmed-icon" />
                    </div>
                    <div class="icon-container">
                        <img src="assets/img/facebook.svg" alt="socmed-icon" />
                    </div>
                    <div class="icon-container">
                        <img src="assets/img/twitter.svg" alt="socmed-icon" />
                    </div>
                    <div class="icon-container">
                        <img src="assets/img/github.svg" alt="socmed-icon" />
                    </div>
                </div>
            </div>
            <hr />
            <div class="links">
                <ul class="list text-tiny">
                    <li><a class="text-tiny" href="#">Press</a></li>
                    <li><a class="text-tiny" href="#">Investors</a></li>
                    <li><a class="text-tiny" href="#">Events</a></li>
                    <li><a class="text-tiny" href="#">Term of use</a></li>
                    <li><a class="text-tiny" href="#">Privacy policy</a></li>
                </ul>
                <button class="text-tiny">Contact Us</button>
            </div>
            <div class="copyright">
                <p>&copy;2023 - All Right Reserved</p>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    <script>
        feather.replace()
        AOS.init()
    </script>
    <script src="/assets/js/app.js"></script>
</body>

</html>
