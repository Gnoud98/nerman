<?php
include "header.php";
?>
<main>
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
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="heading-title">
                    Body Care Latest Arrivals
                </h2>
                <div class="toolbar__box d-flex">
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
                            <li>
                                <?php echo svg('5columns', '24','24') ?>
                            </li>
                            <li class="active">
                                <?php echo svg('4columns', '24','24') ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
include "footer.php";
?>