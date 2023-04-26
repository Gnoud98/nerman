<?php
include "header.php";
?>

<main>
    <section class="product__detail">
        <div class="container">
            <div class="row row-cols-lg-2 row-cols-1">
                <div class="col">
                    <div class="product__detail-thumbnail">
                        <span class="product-discount d-lg-inline-block d-none">
                            -50%
                        </span>
                        <div class="product__detail-main"
                            data-flickity='{ "draggable": true,"wrapAround": true,"imagesLoaded": true,"prevNextButtons": false, "pageDots": false, "cellAlign": "left","contain": true, "autoPlay":false}'>
                            <?php 
                             for ($i = 0; $i < 6; $i++) {
                             ?>
                            <div class="product__detail-img w-100">
                                <a href="./assets/images/thumb1.png" data-fancybox="image-product"
                                    class="c-img">
                                    <img src="./assets/images/thumb1.png" alt="">
                                </a>
                            </div>
                            <?php 
                             } 
                            ?>
                        </div>
                        <div class="product__detail-nav"
                            data-flickity='{ "asNavFor": ".product__detail-main","draggable": true,"imagesLoaded": true,"prevNextButtons": false, "pageDots": false, "cellAlign": "left","contain": true}'>
                            <?php 
                             for ($i = 0; $i < 6; $i++) {
                             ?>
                            <div class="product__detail-img w-25">
                                <div class="c-img">
                                    <img src="./assets/images/thumb1.png" alt="">
                                </div>
                            </div>
                            <?php 
                             } 
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product__detail-info">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Face Care</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Huishō Pijama
                                </li>
                            </ol>
                        </nav>
                        <h1 class="product__detail-name">
                            Huishō Pijama
                        </h1>
                        <div class="product__detail-desc">
                            It is a long established fact that a reader will be distracted by the
                            readable content of a page when looking at its layout. The point of
                            using Lorem Ipsum is that it has a more-or-less normal distribution of
                            letters, as opposed to using 'Content here, content here', making it
                            look like readable English. Many desktop publishing packages and web
                            page editors now use Lorem Ipsum as their default model text, and a
                            search for 'lorem ipsum' will uncover many web sites still in their
                            infancy. Various versions have evolved over the years,
                        </div>
                        <div class="product__detail-review ">
                            <span class="star">
                                <?php 
                                 for ($i = 0; $i < 5; $i++) {
                                 ?>
                                <?php echo svg('star', '17','17') ?>
                                <?php 
                                 } 
                                ?>
                            </span>
                            <span class="number-review">23 Reviews</span>
                        </div>
                        <div class="product__detail-price">
                            <ins>₫699.00</ins>
                            <del>₫999.00</del>
                        </div>
                        <div class="product__detail-viewed">
                            <span>32</span> people are looking at this product
                        </div>
                        <div class="product__detail-coupon product-coupon">
                            <div class="coupon-title">
                                Coupon
                            </div>
                            <div class="coupon-item">
                                <p>
                                    Claim
                                </p>
                                <p>
                                    50% OFF
                                </p>
                            </div>
                        </div>
                        <div class="product__detail-delivery">
                            Free Delivery
                        </div>
                        <div class="product__detail-instock">
                            673 IN STOCK
                        </div>
                        <form class="product__detail-addtocart" action="" method="post">

                            <div class="quantity">
                                <button type="button" class="minus">-</button>

                                <input type="number" id="" value="1" min="1" max="100000">

                                <button type="button" class="plus">+</button>
                            </div>
                            <button type="submit" class="single_add_to_cart_button button">Add to
                                Cart</button>
                        </form>
                        <div class="product__detail-bottom">
                            <p class="ask-question" data-bs-toggle="modal"
                                data-bs-target="#ask-question">
                                Ask question
                            </p>
                            <p class="share" data-bs-toggle="modal" data-bs-target="#share-social">
                                Share
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="product__sticky ">
        <div class="container">
            <div class="product__sticky-content">

                <div class="product__sticky-info">
                    <div class="product__sticky-img">
                        <img src="./assets/images/sticky-img.png" alt="">
                    </div>
                    <div class="product__sticky-desc">
                        <h2 class="title">
                            Kensho Pants
                        </h2>
                        <div class="product__detail-review mb-0">
                            <span class="star">
                                <?php 
                                     for ($i = 0; $i < 5; $i++) {
                                     ?>
                                <?php echo svg('star', '17','17') ?>
                                <?php 
                                     } 
                                    ?>
                            </span>
                            <span class="number-review">23 Reviews</span>
                        </div>

                    </div>
                </div>
                <div class="product__sticky-price">
                    <p>
                        Price
                    </p>
                    <div class="price">
                        <ins>₫699.00</ins>
                        <del>₫999.00</del>
                    </div>
                </div>
                <form class="product__sticky-addtocart" action="" method="post">

                    <div class="quantity">
                        <button type="button" class="minus">-</button>
                        <input type="number" class="qty" id="" value="1" min="1" max="100000">
                        <button type="button" class="plus">+</button>
                    </div>
                    <button type="submit" class="single_add_to_cart_button button">Add to
                        Cart</button>
                </form>
            </div>
        </div>
    </div>

    <section class="product__description">
        <div class="container">
            <h2 class="title">
                Product Specifications
            </h2>
            <div class="row row-cols-lg-4 row-cols-md-2 row-cols-1">
                <?php 
                 for ($i = 0; $i < 4; $i++) {
                 ?>
                <div class="col">
                    <ul>
                        <li>
                            Fabric: Denim
                        </li>
                        <li>
                            Fit type: Loose fit
                        </li>
                        <li>
                            Feature: Adjustable straps
                        </li>
                        <li>
                            Front and back pockets
                        </li>
                    </ul>
                </div>
                <?php 
                 } 
                ?>

            </div>
            <div class="image-desc">
                <img src="./assets/images/desc.png" alt="">
            </div>
            <div class="main-desc ws-sgct">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus a odio
                    repudiandae possimus. Reiciendis magni aliquid quam possimus, praesentium
                    debitis temporibus eligendi eum ipsum! Delectus labore odit recusandae eveniet
                    enim?
                </p>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione necessitatibus
                    maxime suscipit iusto ut quas reiciendis deserunt cum repellendus at! Amet
                    soluta quis, ex magnam ab provident nesciunt suscipit rerum.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat asperiores odit
                    pariatur, quae corrupti consequuntur nesciunt quibusdam est sapiente voluptatem
                    quam nam, ipsam minus necessitatibus! Esse quo sed mollitia sit?
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus a odio
                    repudiandae possimus. Reiciendis magni aliquid quam possimus, praesentium
                    debitis temporibus eligendi eum ipsum! Delectus labore odit recusandae eveniet
                    enim?
                </p>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione necessitatibus
                    maxime suscipit iusto ut quas reiciendis deserunt cum repellendus at! Amet
                    soluta quis, ex magnam ab provident nesciunt suscipit rerum.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat asperiores odit
                    pariatur, quae corrupti consequuntur nesciunt quibusdam est sapiente voluptatem
                    quam nam, ipsam minus necessitatibus! Esse quo sed mollitia sit?
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus a odio
                    repudiandae possimus. Reiciendis magni aliquid quam possimus, praesentium
                    debitis temporibus eligendi eum ipsum! Delectus labore odit recusandae eveniet
                    enim?
                </p>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione necessitatibus
                    maxime suscipit iusto ut quas reiciendis deserunt cum repellendus at! Amet
                    soluta quis, ex magnam ab provident nesciunt suscipit rerum.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat asperiores odit
                    pariatur, quae corrupti consequuntur nesciunt quibusdam est sapiente voluptatem
                    quam nam, ipsam minus necessitatibus! Esse quo sed mollitia sit?
                </p>
            </div>
            <div class="view-more">
                <span>
                    View Description
                </span>
            </div>
        </div>
    </section>
    <section class="customer__review">
        <div class="container">
            <h2 class="title">
                Customer Reviews
            </h2>
            <div class="customer__review-box">
                <img src="./assets/images/review.png" alt="">
            </div>
            <div class="customer__review-content">
                <div class="content">
                    <img src="./assets/images/rv2.png" alt="">
                </div>
                <div class="list-product-related">
                    <h3 class="title">
                        Related Products
                    </h3>
                    <div class="row g-5">
                        <?php 
                                 for ($i = 0; $i < 3; $i++) {
                                 ?>
                        <div class="col-12">
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

                        <?php 
                                 } 
                                ?>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="new_product">
        <div class="container">
            <div class="d-flex justify-content-between align-items-lg-center">
                <div class="d-flex align-items-lg-center flex-wrap wow fadeInUp"
                    data-wow-delay="0.2s">
                    <h2 class="heading-title">
                        HÀNG MỚI VỀ.
                    </h2>
                    <div class="box-count-down">
                        <span class='hours'>18</span>
                        <span class='minutes'>24</span>
                        <span class='seconds'>00</span>
                    </div>
                </div>
                <a href="#" class="btn-viewmore wow fadeInUp" data-wow-delay="0.4s">
                    Xem tất cả
                </a>
            </div>
            <div class="new_product-list wow fadeInUp" data-wow-delay="0.6s"
                data-flickity='{ "draggable": true,"wrapAround": false,"imagesLoaded": true,"prevNextButtons": true, "pageDots": false, "cellAlign": "left","contain": true, "autoPlay":false}'>

                <div class="col-lg-3 col-6 item">
                    <a class="new_product-item d-flex flex-column " href="#">
                        <div class="new_product-top">
                            <div class="inner">
                                <div class="new_product-img">
                                    <img src="./assets/images/pro-img1.png" alt="">
                                </div>

                                <span class="discount">
                                    GIẢM GIÁ 44%
                                </span>
                                <div class="promotion d-flex">
                                    <span class="date">
                                        15.03
                                    </span>
                                    <span class="text">
                                        FREE DELIVERY
                                    </span>
                                </div>
                            </div>

                        </div>
                        <div class="new_product-bottom mt-auto">
                            <div class="price">
                                ₫699.00
                            </div>
                            <div class="product-sold">
                                <!-- lấy width theo sản phẩm bán đc / tổng sản phẩm -->
                                <div style="width:80%" class="sold">
                                    <span>
                                        10
                                    </span>
                                    <span>
                                        Đã bán
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-6 item">
                    <a class="new_product-item d-flex flex-column " href="#">
                        <div class="new_product-top">
                            <div class="inner">
                                <div class="new_product-img">
                                    <img src="./assets/images/pro-img2.png" alt="">
                                </div>

                                <span class="discount">
                                    GIẢM GIÁ 44%
                                </span>
                                <div class="promotion d-flex">
                                    <span class="date">
                                        15.03
                                    </span>
                                    <span class="text">
                                        FREE DELIVERY
                                    </span>
                                </div>
                            </div>

                        </div>
                        <div class="new_product-bottom mt-auto">
                            <div class="price">
                                ₫699.00
                            </div>
                            <div class="product-sold">
                                <!-- lấy width theo sản phẩm bán đc / tổng sản phẩm -->
                                <div style="width:80%" class="sold">
                                    <span>
                                        10
                                    </span>
                                    <span>
                                        Đã bán
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-6 item">
                    <a class="new_product-item d-flex flex-column " href="#">
                        <div class="new_product-top">
                            <div class="inner">
                                <div class="new_product-img">
                                    <img src="./assets/images/pro-img1.png" alt="">
                                </div>

                                <span class="discount">
                                    GIẢM GIÁ 44%
                                </span>
                                <div class="promotion d-flex">
                                    <span class="date">
                                        15.03
                                    </span>
                                    <span class="text">
                                        FREE DELIVERY
                                    </span>
                                </div>
                            </div>

                        </div>
                        <div class="new_product-bottom mt-auto">
                            <div class="price">
                                ₫699.00
                            </div>
                            <div class="product-sold">
                                <!-- lấy width theo sản phẩm bán đc / tổng sản phẩm -->
                                <div style="width:80%" class="sold">
                                    <span>
                                        10
                                    </span>
                                    <span>
                                        Đã bán
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-6 item">
                    <a class="new_product-item d-flex flex-column " href="#">
                        <div class="new_product-top">
                            <div class="inner">
                                <div class="new_product-img">
                                    <img src="./assets/images/pro-img2.png" alt="">
                                </div>

                                <span class="discount">
                                    GIẢM GIÁ 44%
                                </span>
                                <div class="promotion d-flex">
                                    <span class="date">
                                        15.03
                                    </span>
                                    <span class="text">
                                        FREE DELIVERY
                                    </span>
                                </div>
                            </div>

                        </div>
                        <div class="new_product-bottom mt-auto">
                            <div class="price">
                                ₫699.00
                            </div>
                            <div class="product-sold">
                                <!-- lấy width theo sản phẩm bán đc / tổng sản phẩm -->
                                <div style="width:80%" class="sold">
                                    <span>
                                        10
                                    </span>
                                    <span>
                                        Đã bán
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-6 item">
                    <a class="new_product-item d-flex flex-column " href="#">
                        <div class="new_product-top">
                            <div class="inner">
                                <div class="new_product-img">
                                    <img src="./assets/images/pro-img1.png" alt="">
                                </div>

                                <span class="discount">
                                    GIẢM GIÁ 44%
                                </span>
                                <div class="promotion d-flex">
                                    <span class="date">
                                        15.03
                                    </span>
                                    <span class="text">
                                        FREE DELIVERY
                                    </span>
                                </div>
                            </div>

                        </div>
                        <div class="new_product-bottom mt-auto">
                            <div class="price">
                                ₫699.00
                            </div>
                            <div class="product-sold">
                                <!-- lấy width theo sản phẩm bán đc / tổng sản phẩm -->
                                <div style="width:80%" class="sold">
                                    <span>
                                        10
                                    </span>
                                    <span>
                                        Đã bán
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-6 item">
                    <a class="new_product-item d-flex flex-column " href="#">
                        <div class="new_product-top">
                            <div class="inner">
                                <div class="new_product-img">
                                    <img src="./assets/images/pro-img2.png" alt="">
                                </div>

                                <span class="discount">
                                    GIẢM GIÁ 44%
                                </span>
                                <div class="promotion d-flex">
                                    <span class="date">
                                        15.03
                                    </span>
                                    <span class="text">
                                        FREE DELIVERY
                                    </span>
                                </div>
                            </div>

                        </div>
                        <div class="new_product-bottom mt-auto">
                            <div class="price">
                                ₫699.00
                            </div>
                            <div class="product-sold">
                                <!-- lấy width theo sản phẩm bán đc / tổng sản phẩm -->
                                <div style="width:80%" class="sold">
                                    <span>
                                        10
                                    </span>
                                    <span>
                                        Đã bán
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

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
</main>

<div class="modal fade modal-product" id="ask-question" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ask Questions</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="">Your Name</label>
                        <input type="text" placeholder="Enter Your Name">
                    </div>
                    <div class="form-group">
                        <label for="">Your Phone No.</label>
                        <input type="text" placeholder="Enter Your Phone">
                    </div>
                    <div class="form-group">
                        <label for="">Your Question</label>
                        <textarea name="" placeholder="Ask your question"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit">
                            Comment
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<div class="modal fade modal-product" id="share-social" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Share on social Media</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="list-share">
                    <li class="fb"><a href="#" target="_blank">
                            <?php echo svg('fb', '40','40') ?></a></li>
                    <li class="tw"><a href="#"
                            target="_blank"><?php echo svg('tw', '40','40') ?></a></li>
                    <li class="ins"><a href="#"
                            target="_blank"><?php echo svg('ins', '40','40') ?></a></li>
                    <li class="ytb"><a href="#"
                            target="_blank"><?php echo svg('ytb', '40','40') ?></a></li>
                    <li class="tiktok"><a href="#"
                            target="_blank"><?php echo svg('tt', '40','40') ?></a></li>
                </ul>
            </div>

        </div>
    </div>
</div>



<?php
include "footer.php";
?>