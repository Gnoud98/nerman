<?php
include "header.php";
?>

<main>
    <section class="info__dashboard">
        <div class="container position-relative">
            <div class="btn-back position-absolute">
                <a href="">
                    <img src="./assets/images/back.png" alt="">
                </a>
            </div>
            <h1 class="title text-center">
                <span>Thông tin cá nhân</span>
            </h1>
            <div class="row gx-lg-5 gy-lg-0 gy-5">
                <div class="col-md-3">
                    <div class="info__dashboard-sidebar">
                        <ul>
                            <li><a href="#">Danh sách đơn hàng</a></li>
                            <li><a href="#">Ví voucher</a></li>
                            <li class="active"><a href="#">Thông tin cá nhân</a></li>
                            <li><a href="#">Đánh giá, khiếu nại</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 col-md-9">
                    <div class="info__dashboard-content">
                        <form action="">
                            <div class="info__dashboard-box">
                                <h3 class="title text-uppercase">
                                    Thông tin cá nhân
                                </h3>
                                <div class="row g-5">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>
                                                Họ tên
                                            </label>
                                            <input type="text" placeholder="Họ tên"
                                                value="Nguyễn Văn A">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>
                                                Số điện thoại
                                            </label>
                                            <input type="text" placeholder="Số điện thoại"
                                                value="0944867799">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>
                                                Ngày sinh
                                            </label>
                                            <input type="text"
                                                placeholder="Thêm thông tin ngày sinh">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>
                                                Email
                                            </label>
                                            <input type="email" placeholder="Thêm thông tin email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="info__dashboard-box">
                                <h3 class="title text-uppercase">
                                    Địa chỉ nhận hàng
                                </h3>
                                <div class="form-group">
                                    <label>
                                        Địa chỉ
                                    </label>
                                    <input type="text"
                                        placeholder="Số nhà - tên đường - phường, xã">
                                </div>
                                <div class="form-group">
                                    <label>
                                        Tỉnh
                                    </label>
                                    <select>
                                        <option value="">Nhập tên tỉnh</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>
                                        Huyện / Thành phố
                                    </label>
                                    <select>
                                        <option value="">Nhập tên huyện/ thành phố</option>
                                    </select>
                                </div>
                            </div>
                            <div class="info__dashboard-box">
                                <h3 class="title text-uppercase">
                                    thông tin đăng nhập
                                </h3>
                                <div class="form-group">
                                    <label>
                                        Mật khẩu
                                    </label>
                                    <input type="text" placeholder="Nhập mật khẩu cũ">
                                    <button type="submit" class="mt-2">
                                        Đổi mật khẩu
                                    </button>
                                </div>
                            </div>
                            <div class="info__dashboard-box">
                                <h3 class="title text-uppercase">
                                    thông tin thanh toán
                                </h3>
                                <div class="row row-cols-md-4 row-cols-2 g-5">
                                    <div class="col">
                                        <div class="payment__item">
                                            <div class="payment__item-img">
                                                <img src="./assets/images/pay.png" alt="">
                                            </div>
                                            <div class="payment__item-select">
                                                <input type="radio" name="payment" id="vnpay">
                                                <label for="vnpay">Lựa chọn</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="payment__item">
                                            <div class="payment__item-img">
                                                <img src="./assets/images/mo.png" alt="">
                                            </div>
                                            <div class="payment__item-select">
                                                <input type="radio" name="payment" id="momo">
                                                <label for="momo">Lựa chọn</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="payment__item">
                                            <div class="payment__item-img">
                                                <img src="./assets/images/fun.png" alt="">
                                                <p>
                                                Trả góp
                                                </p>
                                            </div>
                                            <div class="payment__item-select">
                                                <input type="radio" name="payment" id="fundiin">
                                                <label for="fundiin">Lựa chọn</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="payment__item">
                                            <div class="payment__item-img">
                                                <img src="./assets/images/code.png" alt="">
                                                <p>
                                                Thanh toán COD
                                                </p>
                                            </div>
                                            <div class="payment__item-select">
                                                <input type="radio" name="payment" id="cod">
                                                <label for="cod">Lựa chọn</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit">
                                    Lưu thay đổi
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2">
                </div>
            </div>
        </div>
    </section>
</main>