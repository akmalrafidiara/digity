<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="/assets/css/dashboard.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
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
                    <a href="/dashboard" class="@if ($page == 'dashboard') active @endif"><i
                            class="fa-solid fa-gauge"></i>Dashboard</a>
                    <a href="/dashboard/product" class="@if ($page == 'product') active @endif"><i
                            class="fa-solid fa-box"></i>Product</a>
                    <a href="/dashboard/transaction" class="@if ($page == 'transaction') active @endif"><i
                            class="fa-solid fa-money-check-dollar"></i>Transaction</a>
                    <a href="/dashboard/user" class="@if ($page == 'user') active @endif"><i
                            class="fa-regular fa-user"></i>User</a>
                    <a href="/dashboard/task" class="@if ($page == 'task') active @endif"><i
                            class="fa-solid fa-bars-progress"></i>Task</a>
                    <a href="/dashboard/order"><i class="fa-solid fa-cart-shopping"></i>Order</a>
                    <a href="/dashboard/wishlist"><i class="fa-regular fa-heart"></i>Wishlist</a>
                    <a href="/dashboard/history"><i class="fa-solid fa-clock-rotate-left"></i>History</a>
                </div>
                <div class="botmenu">
                    <a href="/dashboard/product"><i class="fa-solid fa-gear"></i>Setting</a>
                    <a href="/"><i class="fa-solid fa-home"></i>Go To Home</a>
                    <a href="/dashboard/product" class="logout"><i class="fa-solid fa-right-from-bracket"></i>Log
                        Out</a>
                </div>
            </div>
        </section>
        <section id="mainbar">
            <nav>
                <div class="burger">
                    <i class="fa-solid fa-bars"></i>
                </div>
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
                @yield('content')
            </div>
        </section>
    </div>

    <script src="https://kit.fontawesome.com/9f2df5a5e8.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="/assets/js/dashboard.js"></script>
</body>

</html>
