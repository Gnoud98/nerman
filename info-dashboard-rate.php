<?php
include "header.php";
?>

<main>
    <section class="info__dashboard mb-5">
        <div class="container position-relative">
            <div class="btn-back position-absolute">
                <a href="">
                    <img src="./assets/images/back.png" alt="">
                </a>
            </div>
            <h1 class="title text-center text-uppercase">
                <span>đánh giá, khiếu nại</span>
            </h1>
            <div class="row gx-lg-5 gy-lg-0 gy-5">
                <div class="col-md-3">
                    <div class="info__dashboard-sidebar">
                        <ul>
                            <li><a href="#">Danh sách đơn hàng</a></li>
                            <li><a href="#">Ví voucher</a></li>
                            <li><a href="#">Thông tin cá nhân</a></li>
                            <li class="active"><a href="#">Đánh giá, khiếu nại</a></li>
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

                                </div>
                            </div>
                            <div class="info__dashboard-box">
                                <h3 class="title text-uppercase">
                                    Đánh giá sản phẩm dịch vụ Nerman
                                </h3>
                                <div class="form-group">
                                    <label>
                                        Sản phẩm, dịch vụ cần đánh giá/khiếu nại
                                    </label>
                                    <select>
                                        <option value="">Chọn sản phẩm/dịch vụ</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>
                                        Đánh giá/ Khiếu nại
                                    </label>
                                    <textarea
                                        placeholder="Bạn vui lòng mô tả chi tiết nội dung bạn cần gửi tới Nerman tại đây nhé !"></textarea>
                                </div>
                            </div>
                            <div class="info__dashboard-rating">
                                <p class="text-uppercase text-center">
                                    Chấm điểm tổng thể
                                </p>
                                <div class="rating">
                                    <input type="radio" id="star5" name="rating" value="5" />
                                    <label class="star" for="star5" title="Awesome"
                                        aria-hidden="true"></label>
                                    <input type="radio" id="star4" name="rating" value="4" />
                                    <label class="star" for="star4" title="Great"
                                        aria-hidden="true"></label>
                                    <input type="radio" id="star3" name="rating" value="3" />
                                    <label class="star" for="star3" title="Very good"
                                        aria-hidden="true"></label>
                                    <input type="radio" id="star2" name="rating" value="2" />
                                    <label class="star" for="star2" title="Good"
                                        aria-hidden="true"></label>
                                    <input type="radio" id="star1" name="rating" value="1" />
                                    <label class="star" for="star1" title="Bad"
                                        aria-hidden="true"></label>
                                </div>
                            </div>
                            <button type="submit" class="btn-rate">
                            Gửi đi
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2">
                </div>
            </div>
        </div>
    </section>
</main>