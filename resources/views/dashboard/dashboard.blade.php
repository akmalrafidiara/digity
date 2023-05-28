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
            </div>
        </section>
    </div>

    <script src="https://kit.fontawesome.com/9f2df5a5e8.js" crossorigin="anonymous"></script>
</body>

</html>
