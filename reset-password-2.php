<?php
include "header.php";
?>

<main>
    <section class="account reset-pass">
        <div class="container position-relative">
            <div class="btn-back position-absolute">
                <a href="">
                    <img src="./assets/images/back.png" alt="">
                </a>
            </div>
            <h1 class="title text-center">
            Đặt lại mật khẩu
            </h1>
            <div class="account-form">
                <form action="">
                    <div class="form-group">
                        <label>Mật khẩu mới</label>
                        <input type="text" placeholder="Nhập mật khẩu">
                    </div>
                    <div class="form-group">
                        <label>Nhập lại mật khẩu</label>
                        <input type="password" placeholder="Nhập lại mật khẩu như trên">
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