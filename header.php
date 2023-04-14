<?php
include "libs/header-css.php";
?>


<header>
    <!-- only show header top on home page -->
    <div class="header__top">
        <div class="container">
            <div class="header__top-content">
                <span>
                    Miễn phí vận chuyển cho đơn hàng từ 200k
                </span>

            </div>
        </div>
    </div>
    <div class="header__main">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="header__main-logo">
                <a href="">
                    <img src="./assets/images/logo.png" alt="">
                </a>
            </div>
            <div class="header__main-nav d-lg-block d-none">
                <ul>
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Cửa hàng</a></li>
                    <li><a href="#">Sản phẩm</a></li>
                    <li class="menu-item-has-children">
                        <a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="">test</a>
                            </li>
                            <li>
                                <a href="">test</a>
                            </li>
                            <li>
                                <a href="">test</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="header__main-right">
                <ul>
                    <li class="search-icon d-lg-block d-none">
                        <?php echo svg('search', '26','26') ?>
                    </li>
                    <li class="user-icon d-lg-block d-none">
                        <a href="">
                            <?php echo svg('user', '26','26') ?>
                        </a>
                    </li>
                    <li class="cart-icon">
                        <a href="">
                            <?php echo svg('cart', '28','28') ?>
                        </a>
                    </li>
                    <li class="bar__mb d-lg-none m-0">
                        <?php echo svg('menu', '24','24') ?>
                    </li>
                    <li class="shoppee-icon d-lg-block d-none">
                        <a href="">
                            <?php echo svg('shopee', '28','28') ?>
                        </a>
                    </li>
                    <li class="tiktok-icon d-lg-block d-none">
                        <a href="">
                            <?php echo svg('tiktok', '26','26') ?>
                        </a>
                    </li>
                </ul>
                <div class="box-search" id="box-search">
                            <form action="" class="d-flex align-items-center">
                                <button type="submit">
                                    <?php echo svg('search', '28','28') ?></button>
                                <input type="text" placeholder="Search">
                            </form>
                        </div>
            </div>
        </div>
    </div>
    <div class="header__bottom d-lg-block d-none">
        <div class="container">
            <div class="header__bottom-content">
                <ul>
                    <li><a href="">perspiciatis</a></li>
                    <li><a href="">architecto</a></li>
                    <li><a href="">dolorem</a></li>
                    <li><a href="">voluptatem</a></li>
                    <li><a href="">voluptatem</a></li>
                    <li><a href="">voluptatem</a></li>
                    <li><a href="">voluptatem</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="menu-mobile d-lg-none d-flex flex-column">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div class="title-menu">
                MENU
            </div>
            <div class="menu-mobile-close">
                <?php echo svg('close', '24','24') ?>
            </div>
        </div>
        <div class="box-search">
            <form action="" class="d-flex align-items-center">
                <button type="submit"> <?php echo svg('search', '28','28') ?></button>
                <input type="text" placeholder="Search">
            </form>
        </div>
        <div class="main-menu">
            <ul>
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Cửa hàng</a></li>
                <li><a href="#">Sản phẩm</a></li>
                <li class="menu-item-has-children">
                    <a href="#">Blog</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="">test</a>
                        </li>
                        <li>
                            <a href="">test</a>
                        </li>
                        <li>
                            <a href="">test</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="menu__bottom mt-auto">
            <div class="box-customer">
                <div class="btn-login">
                    <a href="#">
                        Login
                    </a>
                </div>
                <div class="btn-reg">
                    <a href="#" class=" btn-user">
                        Register
                    </a>
                </div>

            </div>
            <div class="box-social mt-4">
                <ul class="d-flex justify-content-center align-items-center">
                    <li class="shoppee-icon me-3">
                        <a href="">
                            <?php echo svg('shopee', '39','39') ?>
                        </a>
                    </li>
                    <li class="tiktok-icon">
                        <a href="">
                            <?php echo svg('tiktok', '39','39') ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="overlay"></div>
</header>