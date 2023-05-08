<?php
include "header.php";
?>

<main>
    <section class="info__dashboard info__dashboard-list">
        <div class="container position-relative">
            <div class="btn-back position-absolute">
                <a href="">
                    <img src="./assets/images/back.png" alt="">
                </a>
            </div>
            <h1 class="title text-center">
                <span>Thông tin tài khoản của bạn</span>
            </h1>
        </div>
        <div class="container-fluid p-0 info__dashboard-list">
            <div class="row row-cols-md-2 row-cols-1 g-0">
                <div class="col">
                    <div class="info__dashboard-item text-center">
                        <div class="info__dashboard-img">
                            <?php echo svg('info1') ?>
                        </div>
                        <h3 class="name text-uppercase">
                            Danh sách đơn hàng
                        </h3>
                        <div class="sub-title">
                            Giữ phong cách hàng ngày của bạn sang trọng và bắt kịp xu hướng với hơn
                            20 kiểu lựa chọn của chúng tôi để bạn lựa chọn.
                        </div>
                        <div class="text-center mt-auto">
                            <a href="#">
                                Xem thêm
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="info__dashboard-item text-center">
                        <div class="info__dashboard-img">
                            <?php echo svg('info2') ?>
                        </div>
                        <h3 class="name text-uppercase">
                        Ví Voucher
                        </h3>
                        <div class="sub-title">
                        Giữ phong cách hàng ngày của bạn sang trọng và bắt kịp xu hướng với hơn 20 kiểu lựa chọn của chúng tôi để bạn lựa chọn.
                        </div>
                        <div class="text-center mt-auto">
                            <a href="#">
                            mua ngay
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="info__dashboard-item text-center">
                        <div class="info__dashboard-img">
                            <?php echo svg('info3') ?>
                        </div>
                        <h3 class="name text-uppercase">
                        Thông tin cá nhân
                        </h3>
                        <div class="sub-title">
                        Giữ phong cách hàng ngày của bạn sang trọng và bắt kịp xu hướng với hơn 20 kiểu lựa chọn của chúng tôi để bạn lựa chọn.
                        </div>
                        <div class="text-center mt-auto">
                            <a href="#">
                            Xem thêm
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="info__dashboard-item text-center">
                        <div class="info__dashboard-img">
                            <?php echo svg('info4') ?>
                        </div>
                        <h3 class="name text-uppercase">
                        đánh giá, khiếu nại
                        </h3>
                        <div class="sub-title">
                        Giữ phong cách hàng ngày của bạn sang trọng và bắt kịp xu hướng với hơn 20 kiểu lựa chọn của chúng tôi để bạn lựa chọn.
                        </div>
                        <div class="text-center mt-auto">
                            <a href="#">
                            Gửi đánh giá
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>