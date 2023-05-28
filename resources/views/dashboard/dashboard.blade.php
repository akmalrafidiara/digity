<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/dashboard.css" />
</head>

<body>
    <div class="container">
        <section id="sidebar">
            <div class="web-icon">
                <img src="/assets/img/digity-pentool.svg" alt="">
                Digity
            </div>
            <div class="menu">
                <div class="mainmenu">
                    <a href="#" class="active"><i class="fa-solid fa-gauge"></i>Dashboard</a>
                    <a href="#"><i class="fa-solid fa-cart-shopping"></i>Order</a>
                    <a href="#"><i class="fa-regular fa-heart"></i>Wishlist</a>
                    <a href="#"><i class="fa-solid fa-clock-rotate-left"></i>History</a>
                </div>
                <div class="botmenu">
                    <a href="#"><i class="fa-solid fa-gear"></i>Setting</a>
                    <a href="/"><i class="fa-solid fa-home"></i>Go To Home</a>
                    <a href="#"><i class="fa-solid fa-right-from-bracket"></i>Log Out</a>
                </div>
            </div>
        </section>
        <section id="mainbar">
            <nav>
                <div class="user">
                    <div class="user-img">
                        {{-- <img src="/assets/img/user.png" alt=""> --}}
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="user-name">
                        <p>Hi, <strong>Akmal Rafi</strong></p>
                    </div>
                </div>
            </nav>
            <div id="content">
                <div class="page-title">
                    <h1>Dashboard</h1>
                    <p>Hi, Welcome to Digital Entity</p>
                </div>
                <div class="status-process">
                    <div class="card">
                        <div class="card-title">
                            <h3>Order Compleate</h3>
                        </div>
                        <div class="card-body">
                            <h1>10<span>/18</span></h1>
                            <div class="progress">
                                <div class="progress-bar" style="width: 55%;">55%</div>
                            </div>
                        </div>
                        <a href=""><i class="fa-solid fa-arrow-right"></i> Details</a>
                    </div>

                    <div class="card">
                        <div class="card-title">
                            <h3>Waiting for Revision</h3>
                        </div>
                        <div class="card-body">
                            <h1>2</h1>
                            <div class="progress">
                                <div class="progress-bar" style="width: 100%; background-color:#FFEE57 ;">100%</div>
                            </div>
                        </div>
                        <a href=""><i class="fa-solid fa-arrow-right"></i> Details</a>
                    </div>

                    <div class="card">
                        <div class="card-title">
                            <h3>Success</h3>
                        </div>
                        <div class="card-body">
                            <h1>8<span>/10</span></h1>
                            <div class="progress">
                                <div class="progress-bar" style="width: 100%; background-color:#73FF9A ;">100%</div>
                            </div>
                        </div>
                        <a href=""><i class="fa-solid fa-arrow-right"></i> Details </a>
                    </div>
                </div>


        </section>
    </div>

    <script src="https://kit.fontawesome.com/9f2df5a5e8.js" crossorigin="anonymous"></script>
</body>

</html>
