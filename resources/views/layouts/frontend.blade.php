<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }}</title>
    <link rel="icon" type="favicon.ico" href="/images/favicon.ico" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.1/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="/assets/css/styles.css" />
</head>

<body>
    <!-- start navbar -->
    <nav id="navbar">
        <div class="navbar container" style="font-weight: bold;">
            <div class="web-icon">
                <img src="/assets/img/digity-pentool.svg" alt="">
                Digity
            </div>
            <div class="nav-menu">
                <a href="/#hero">Home</a>
                <a href="/products">Products</a>
                <a href="/services">Services</a>
                <a href="/#about">About Us</a>
                <span>|</span>
                {{-- <a href="#" data-bs-toggle="modal" data-bs-target="#signUpModal" class="signup">Sign Up</a> --}}
                @if (Auth::check())
                    <a href="/dashboard" class="signup">Dashboard</a>
                @else
                    <a class="btn signup" data-bs-toggle="modal" data-bs-target="#signUpModal">Sign Up</a>
                @endif

            </div>
            <div class="menu">
                <i data-feather="menu"></i>
            </div>
        </div>
    </nav>
    <!-- end navbar -->
    {{-- Modal Sign Up --}}
    <div class="modal " id="signUpModal" tabindex="-1" aria-labelledby="signUpModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable ro">
            <div class="modal-content  " style="border-radius:2rem;">
                <div x-data="{ register: true }" class="modal-body text-center custom-modal-signin"
                    @click.outside="register=true">

                    <h3 class="modal-title text-center fw-bolder mb-3" id="signUpModalLabel">
                        <span x-show="register">Sign Up</span>
                        <span x-show="!register">Login</span>
                    </h3>
                    <form action="{{ route('register') }}" method="POST" x-show="register" class="mx-3">
                        @csrf
                        <div class="mb-4 mt-1">
                            <img src="/assets/img/profile-avatar.svg" alt="" class="icon-svg">
                            <input name="name" type="text" class="form-control rounded-pill" id="nameRegister"
                                aria-describedby="nameHelp" placeholder="Name">
                        </div>
                        <div class="mb-4 mt-1">
                            <img src="/assets/img/email.svg" alt="" class="icon-svg">
                            <input name="email" type="email" class="form-control rounded-pill" id="emailRegister"
                                aria-describedby="emailHelp" placeholder="Email">
                        </div>
                        <div class="mb-4 mt-1">
                            <img src="/assets/img/lock.svg" alt="" class="icon-svg">
                            <input name="password" type="password" class="form-control rounded-pill" id="password"
                                placeholder="Password">
                        </div>
                        <div class="d-grid mt-3 mb-4">

                            <button type="submit" class="btn rounded-pill text-white fw-bold "
                                style="background-color: #706fe5;">Sign Up</button>
                        </div>
                    </form>
                    <form action="{{ route('login') }}" method="POST" x-show="!register" class="mx-3">
                        @csrf
                        <div class="mb-4 mt-1">
                            <img src="/assets/img/email.svg" alt="" class="icon-svg">
                            <input name="email" type="email" class="form-control rounded-pill" id="emailLogin"
                                aria-describedby="emailHelp" placeholder="Email">
                        </div>
                        <div class="mb-4 mt-1">
                            <img src="/assets/img/lock.svg" alt="" class="icon-svg">
                            <input name="password" type="password" class="form-control rounded-pill"
                                id="passwordLogin" placeholder="Password">
                        </div>
                        <div class="d-grid mt-3 mb-4">
                            <button type="submit" class="btn rounded-pill text-white fw-bold "
                                style="background-color: #706fe5;">Log in</button>
                        </div>
                    </form>
                    <small x-show="register">Already have an account? <a type="button"
                            style="background-color: transparent; border: none;" @click="register = !register">
                            <u style="font-size: 16px;"> Login</u></a type="button"> </small>
                    <small x-show="!register">Don't have an account? <button type="button"
                            style="background-color: transparent; border: none;" @click="register = !register">
                            <u style="font-size: 16px;"> Sign Up </u></button type="button"> </small>


                </div>
            </div>
        </div>

    </div>

    {{-- Main --}}
    @yield('content')

    <!-- start footer -->
    <footer>
        <div class="container">
            <div class="socials-media">
                <div class="logo-company" style="display:flex; flex-direction: column; gap: 10;">
                    <span style="font-weight: bold; color: #fff;">Digity</span>
                    <span style="color: #fff;">info.digitalentity@gmail.com</span>
                </div>
                <div class="socmed-icon">
                    <div class="icon-container">
                        <img src="/assets/img/instagram.svg" alt="socmed-icon" />
                    </div>
                    <div class="icon-container">
                        <img src="/assets/img/facebook.svg" alt="socmed-icon" />
                    </div>
                    <div class="icon-container">
                        <img src="/assets/img/twitter.svg" alt="socmed-icon" />
                    </div>
                    <div class="icon-container">
                        <img src="/assets/img/github.svg" alt="socmed-icon" />
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
    <script src="https://kit.fontawesome.com/9f2df5a5e8.js" crossorigin="anonymous"></script>
</body>

</html>
