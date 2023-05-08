<?php
include "header.php";
?>

<main>
    <section class="account sign-up">
        <div class="container position-relative">
            <div class="btn-back position-absolute">
                <a href="">
                    <img src="./assets/images/back.png" alt="">
                </a>
            </div>
            <h1 class="title text-center">
                Đăng ký tài khoản
            </h1>
            <div class="account-form">
                <form action="">
                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input type="text" placeholder="Nhập số điện thoại">
                    </div>
                    <div class="form-group">
                        <label>OTP</label>
                        <input type="password" placeholder="Điền mã số OTP được gửi trong tin nhắn">
                    </div>
                    <div class="text-center">
                        <a href="#" class="text-decoration-underline">
                            Nhận OTP ngay
                        </a>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="mt-5">
                            Xác nhận
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </section>
</main>