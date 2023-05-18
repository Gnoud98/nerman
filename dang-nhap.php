<?php
include "header.php";
?>
<main>
    <section class="account sign-in">
        <div class="container position-relative">
            <div class="btn-back position-absolute">
                <a href="">
                <img src="./assets/images/back.png" alt="">
                </a>
            </div>
            <h1 class="title text-center">
                Đăng nhập
            </h1>
            <div class="account-form">
                <form action="">
                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input type="text" placeholder="Nhập số điện thoại">
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input type="password" placeholder="Nhập mật khẩu">
                    </div>
                    <div class="form-group text-center">
                        <button type="submit">
                            Đăng nhập
                        </button>
                    </div>
                </form>
                <div class="account-other">
                    <div class="account-other-title text-center">
                        <span>Hoặc</span>
                    </div>
                    <div class="account-other-button">
                        <div class="row gx-md-5 gy-lg-0 gy-4">
                            <div class="col-md-6">
                                <div class="account-google account-btn">
                                    <a href="">
                                        <span>
                                            Đăng nhập bằng
                                        </span>
                                        <?php echo svg('google') ?>
                                    </a>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="account-fb account-btn">
                                    <a href="">
                                        <span>
                                            Đăng nhập bằng
                                        </span>
                                        <?php echo svg('facebook-logo') ?>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <p class="sub-title text-center">
                        Nếu bạn chưa có tài khoản hoặc quên mật khẩu
                    </p>
                    <div class="account-bottom">
                        <div class="row">
                            <div class="col-6">
                                <a href="reset-password-1.php">
                                    Quên mật khẩu
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="dang-ky.php">
                                    Đăng ký ngay
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>