<?php
include "libs/header-css.php";
?>


<header>
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
            <div class="header__main-nav">
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
                    <li class="search-icon">
                        <?php echo svg('search', '26','26') ?>
                    </li>
                    <li class="user-icon">
                        <a href="">
                            <?php echo svg('user', '26','26') ?>
                        </a>
                    </li>
                    <li class="cart-icon">
                        <a href="">
                            <?php echo svg('cart', '28','28') ?>
                        </a>
                    </li>
                    <li class="shoppee-icon">
                        <a href="">
                            <?php echo svg('shopee', '22','22') ?>
                        </a>
                    </li>
                    <li class="tiktok-icon">
                        <a href="">
                            <?php echo svg('tiktok', '26','26') ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header__bottom">
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
    <div class="overlay"></div>
</header>