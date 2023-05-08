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
                <span>Danh sách đơn hàng</span>
            </h1>
            <div class="row gx-lg-5 gy-lg-0 gy-5">
                <div class="col-md-3">
                    <div class="info__dashboard-sidebar">
                        <ul>
                            <li class="active"><a href="#">Danh sách đơn hàng</a></li>
                            <li><a href="#">Ví voucher</a></li>
                            <li><a href="#">Thông tin cá nhân</a></li>
                            <li><a href="#">Đánh giá, khiếu nại</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 col-md-9">
                    <div class="info__dashboard-content">
                        <div class="order__item">
                            <div
                                class="order__item-code d-flex justify-content-between align-items-center">
                                <div class="code">
                                    <strong>Mã đơn hàng:</strong> <span>ABC843874</span>
                                </div>
                                <div class="status">
                                    Chờ xác nhận
                                </div>
                            </div>
                            <div class="order__item-content">
                                <h3 class="title-order">
                                    Order summary
                                </h3>
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
                                                        <button type="button"
                                                            class="minus">-</button>
                                                        <input type="number" class="qty" id=""
                                                            value="1" min="1" max="100000">
                                                        <button type="button"
                                                            class="plus">+</button>
                                                    </div>

                                                </form>

                                                <div
                                                    class="item__info-price d-flex align-items-center">
                                                    <span class="price">
                                                        $80.00
                                                    </span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php 
                                     } 
                                    ?>
                                </div>
                                <div class="mini__cart-total">
                                    <table>
                                        <tr class="coupon">
                                            <td>
                                                <span>Nerman10</span>
                                            </td>
                                            <td class="text-green">
                                                -$8.00 <a href="javascript:void">[Remove]</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Shipping
                                            </td>
                                            <td>
                                                Free
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Subtotal
                                            </td>
                                            <td>
                                                $80.00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Total</strong>
                                            </td>
                                            <td>
                                                <strong>$72.00</strong>
                                            </td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="order__item">
                            <div
                                class="order__item-code d-flex justify-content-between align-items-center">
                                <div class="code">
                                    <strong>Mã đơn hàng:</strong> <span>ABC843874</span>
                                </div>
                                <div class="status complete">
                                Đã xác nhận
                                </div>
                            </div>
                            <div class="order__item-content">
                                <h3 class="title-order">
                                    Order summary
                                </h3>
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
                                                        <button type="button"
                                                            class="minus">-</button>
                                                        <input type="number" class="qty" id=""
                                                            value="1" min="1" max="100000">
                                                        <button type="button"
                                                            class="plus">+</button>
                                                    </div>

                                                </form>

                                                <div
                                                    class="item__info-price d-flex align-items-center">
                                                    <span class="price">
                                                        $80.00
                                                    </span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php 
                                     } 
                                    ?>
                                </div>
                                <div class="mini__cart-total">
                                    <table>
                                        <tr class="coupon">
                                            <td>
                                                <span>Nerman10</span>
                                            </td>
                                            <td class="text-green">
                                                -$8.00 <a href="javascript:void">[Remove]</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Shipping
                                            </td>
                                            <td>
                                                Free
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Subtotal
                                            </td>
                                            <td>
                                                $80.00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Total</strong>
                                            </td>
                                            <td>
                                                <strong>$72.00</strong>
                                            </td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                </div>
            </div>
        </div>
    </section>
</main>