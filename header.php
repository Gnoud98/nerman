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
                <a href="index.php">
                    <img src="./assets/images/logo.png" alt="">
                </a>
            </div>
            <div class="header__main-nav d-lg-block d-none">
                <ul>
                    <li class="menu-item-has-children"><a href="#">Trang chủ</a>
                        <ul class="sub-menu">
                            <li><a href="about-us.php">About Us</a></li>
                            <li><a href="store-page.php">Store Page</a></li>
                            <li><a href="product-detail.php">Product Detail</a></li>
                            <li><a href="checkout.php">Check out</a></li>
                            <li><a href="promotion.php">Promotion</a></li>
                            <li><a href="post-category.php">Blog</a></li>
                            <li><a href="post-detail.php">Blog detail</a></li>
                        </ul>
                    </li>
                    <li><a href="store-page.php">Cửa hàng</a>

                    </li>
                    <li class="menu-item-has-children"><a href="product-detail.php">Sản phẩm</a>
                        <ul class="sub-menu">
                            <li><a href="product-detail.php">Product Detail</a></li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="post-category.php">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="post-detail.php">Blog Detail</a></li>

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
                        <a href="dang-nhap.php">
                            <?php echo svg('user', '26','26') ?>
                        </a>
                    </li>
                    <li class="cart-icon">
                        <a href="javascript:void(0)">
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
                <li class="menu-item-has-children"><a href="#">Trang chủ</a>
                    <ul class="sub-menu">
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="store-page.php">Store Page</a></li>
                        <li><a href="product-detail.php">Product Detail</a></li>
                        <li><a href="checkout.php">Check out</a></li>
                        <li><a href="promotion.php">Promotion</a></li>
                        <li><a href="post-category.php">Blog</a></li>
                        <li><a href="post-detail.php">Blog detail</a></li>
                    </ul>
                </li>
                <li><a href="store-page.php">Cửa hàng</a>

                </li>
                <li class="menu-item-has-children"><a href="product-detail.php">Sản phẩm</a>
                    <ul class="sub-menu">
                        <li><a href="product-detail.php">Product Detail</a></li>

                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="post-category.php">Blog</a>
                    <ul class="sub-menu">
                        <li><a href="post-detail.php">Blog Detail</a></li>

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
    <div class="mini__cart">
        <div class="mini__cart-inner">
            <div class="mini__cart-steps">
                <div class="mini__cart-steps-title">
                    <strong>₫6</strong> from free economy shipping
                </div>
                <ul>
                    <li class="active">
                        <span>
                            Economy
                        </span>
                    </li>
                    <li>
                        <span>
                            2-4 days
                        </span>
                    </li>
                    <li>

                    </li>
                </ul>
            </div>
            <div class="mini__cart-content">
                <div class="mini__cart-title">
                    Giỏ hàng <span>(2)</span>
                </div>
                <div class="mini__cart-list">
                    <?php 
                     for ($i = 0; $i < 3; $i++) {
                     ?>
                    <div class="mini__cart-item d-flex">
                        <a href="" class="item__image">
                            <img src="./assets/images/quickview1.png" alt="">
                        </a>
                        <div class="item__info">
                            <p class="item__info-name">
                                <a href="#">Luxury Kanzo Shoes</a>
                            </p>
                            <div class="item__info-swatch">
                                <span>Size: 2XL</span>, <span>Color: Green</span>
                            </div>
                            <div
                                class="item__info-bottom d-flex justify-content-between align-items-center flex-wrap">
                                <form action="" method="post">

                                    <div class="quantity d-flex align-items-center">
                                        <button type="button" class="minus">-</button>
                                        <input type="number" class="qty" id="" value="1" min="1"
                                            max="100000">
                                        <button type="button" class="plus">+</button>
                                    </div>

                                </form>

                                <div class="item__info-price d-flex align-items-center">
                                    <span class="price">
                                        $80.00
                                    </span>
                                    <a href="javascript:void(0)" class="item-remove"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php 
                     } 
                    ?>
                </div>
                <div class="mini__cart-coupon">
                    <form action="">
                        <input type="text" placeholder="INPUT">
                        <button type="submit">Apply</button>
                    </form>
                </div>
                <div class="mini__cart-total">
                    <table>
                        <tr>
                            <td>
                                Giá gốc
                            </td>
                            <td>
                                $160.00
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Khuyến mãi
                            </td>
                            <td>
                                $60.00
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Phí ship
                            </td>
                            <td>
                                $12.00
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Tổng</strong>
                            </td>
                            <td>
                                <strong>$222.00</strong>
                            </td>
                        </tr>
                        <tr class="action">
                            <td>
                                <button>
                                    Mua tiếp
                                </button>
                            </td>
                            <td>
                                <button type="submit">
                                    Thanh toán
                                </button>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="mini__cart-related">
                    <h4 class="title">
                        Buy more for better deal
                    </h4>
                    <div class="mini__cart-list-product"
                        data-flickity='{ "draggable": true,"wrapAround": true,"imagesLoaded": true,"prevNextButtons": false, "pageDots": false, "cellAlign": "left","contain": true, "autoPlay":false}'>
                        <?php 
                       for ($i = 0; $i < 4; $i++) {
                       ?>
                        <div class="col w-50">
                            <div class="product-item">
                                <a href="#">
                                    <div class="product-img c-img">
                                        <img src="./assets/images/pro2.png" alt="">
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-name">
                                            Saralla Shirt
                                        </div>
                                        <div class="product-price">
                                            <ins>$47.00</ins>
                                            <del>$99.00</del>
                                        </div>
                                    </div>
                                </a>


                            </div>
                        </div>

                        <?php 
                       } 
                      ?>
                    </div>
                </div>
            </div>
        </div>
        <span class="close-cart-btn"></span>
    </div>
    <div class="overlay"></div>
</header>