<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,600&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,400;1,500&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous" />
    <link rel="stylesheet" href="view/layout/assets/css/detal.css" />
    <link rel="stylesheet" href="view/layout/assets/css/style.css" />
    <link rel="stylesheet" href="view/layout/assets/css/main.css" />
    <link rel="stylesheet" href="view/layout/assets/css/shop.css" />
    <link rel="stylesheet" href="view/layout/assets/css/cart.css" />
    <!-- <link rel="stylesheet" href="view/layout/assets/css/detal.css" /> -->
    <!-- <link rel="stylesheet" href="./css/grid.css" /> -->
    <title>Main</title>
</head>

<body>
    <div class="app">
        <!-- header -->
        <header class="header">
            <div class="header-main grid">
                <a href="./index.html" class="header__logo">
                    <img src="view/layout/img/logo.png" alt="" class="header__logo-img" />
                </a>

                <!-- icon list -->
                <nav class="header__nav">
                    <ul class="header__nav-ul">
                        <li class="header__nav-li">
                            <a href="index.php" class="header__nav-item">Trang chủ</a>
                        </li>
                        <li class="header__nav-li">
                            <a href="index.php?pg=colection" class="header__nav-item">Sản phẩm</a>
                        </li>
                        <li class="header__nav-li">
                            <a href="index.php?pg=service" class="header__nav-item">Dịch vụ</a>
                        </li>
                        <li class="header__nav-li">
                            <a href="index.php?pg=contact" class="header__nav-item">Liên hệ</a>
                        </li>
                        <li class="header__nav-li">
                            <a href="index.php?pg=about" class="header__nav-item">Bộ sưu tầm
                            </a>
                        </li>
                    </ul>
                </nav>

                <div class="header__right">
                    <!-- icon list -->
                    <div class="menu__nav_list">
                        <i class="menu__nav_list-icon bi bi-list"></i>
                    </div>
                    <div class="header__right-user">
                        <a href="#">
                            <i class="header__right-icon bi bi-person-circle"></i></a>
                    </div>
                    <div class="header__right-cart">
                        <a href="#">
                            <i class="header__right-icon bi bi-cart-check-fill" onclick="showCart()"></i>
                            <!-- <span id="countsp">0</span> -->
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <div class="content__header">
            <span class="content__header-span">
                <h3 class="content__header-h3">FREE DELIVERY</h3>
                in orders over $400 - Buy with confidence: Free Return and
                cashback
            </span>
        </div>