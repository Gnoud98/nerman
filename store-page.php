<?php
include "header.php";
?>
<main>
    <section class="list-category-mb d-md-none d-block">
        <!-- add class "current-menu-item" for active menu -->
        <ul>
            <li>
                <a href="">Face care</a>
            </li>
            <li>
                <a href="">Body Care</a>
            </li>
            <li class="current-menu-item">
                <a href="">Hair Care</a>
            </li>
            <li>
                <a href="">Shaving Care</a>
            </li>
        </ul>
    </section>
    <section class="banner__store text-white"
        style="background-image:url(./assets/images/bg-store.png)">
        <div class="container">
            <div class="inner">

                <h1 class="main-title text-uppercase fw-bold wow fadeInUp">
                    Body Care
                </h1>
                <div class="category-desc fw-light wow fadeInUp" data-wow-delay="0.2s">
                    It is a long established fact that a reader will be distracted by the readable
                    content of a page when looking at its layout. The point of using Lorem Ipsum is
                    that
                    it has a more-or-less normal distribution of letters, as opposed to using
                    'Content
                    here, content here
                </div>
            </div>
        </div>
    </section>
    <section class="store__property wow fadeInUp" data-wow-delay='0.4s'>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="item">
                        <div class="item-img">
                            <img src="./assets/images/skin.png" alt="">
                        </div>
                        <div class="item-desc">
                            Hoàn toàn tự nhiên <br>
                            Thành phần
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="item">
                        <div class="item-img">
                            <img src="./assets/images/skin2.png" alt="">
                        </div>
                        <div class="item-desc">
                            Bản chất của tiếng Pháp <br>
                            nước hoa

                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="item">
                        <div class="item-img">
                            <img src="./assets/images/skin3.png" alt="">
                        </div>
                        <div class="item-desc">
                            Kiểm soát chất lượng <br>
                            nghiêm ngặt Đo
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="store__category">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center flex-wrap">
                <h2 class="heading-title wow fadeInUp">
                    Body Care Latest Arrivals
                </h2>
                <div class="toolbar__box d-lg-flex wow fadeInUp text-md-start text-end"
                    data-wow-delay='0.2s'>
                    <div class="toolbar__box-filter">
                        <div class="box-filter-chosen">
                            Sort by
                        </div>
                        <ul class="box-filter-list">
                            <li data-filter='1'>
                                Sort by name
                            </li>
                            <li data-filter='2'>
                                Sort by price
                            </li>
                            <li data-filter='3'>
                                Sort by popularity
                            </li>
                        </ul>
                    </div>
                    <div class="toolbar__box-layout d-lg-block d-none">
                        <ul class="d-flex">
                            <li class="5-col">
                                <?php echo svg('5columns', '24','24') ?>
                            </li>
                            <li class="active 4-col">
                                <?php echo svg('4columns', '24','24') ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="list__product wow fadeInUp" data-wow-delay='0.4s'>
                <div class="row row-cols-lg-4 row-cols-md-3 row-cols-1 g-5">
                    <!-- product-banner -->
                    <div class="col">
                        <div class="product__banner">
                            <div class="product__banner-img c-img">
                                <img src="./assets/images/pro-banner.png" alt="">
                            </div>
                            <h2 class="product__banner-text">
                                Body Care
                            </h2>
                        </div>
                    </div>
                    <!-- product-item -->
                    <?php 
                     for ($i = 0; $i < 4; $i++) {
                     ?>
                    <div class="col">
                        <div class="product-item">
                            <a href="#">
                                <div class="product-img c-img">
                                    <img src="./assets/images/pro1.png" alt="">
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
                    <div class="col">
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
                    <div class="col">
                        <div class="product-item">
                            <a href="#">
                                <div class="product-img c-img">
                                    <img src="./assets/images/pro3.png" alt="">
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

                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                 <?php echo svg('left', '15','15') ?>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                            <?php echo svg('right', '15','15') ?>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
    </section>
    <section class="get-started text-center bg-black text-white">
        <div class="container">
            <h3 class="title wow fadeInUp">
                Try for yourself. <br>
                get everything you need.
            </h3>
            <a href="" class="btn-start wow fadeInUp" data-wow-delay="0.2s">
            Get Started Now
            </a>
        </div>
    </section>

    <div class="loader-wrapper">
        <div class="loader"></div>
    </div>
</main>

<?php
include "footer.php";
?>