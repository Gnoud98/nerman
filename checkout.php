<?php
include "header.php";
?>

<main>
    <section class="checkout">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="checkout__shipping">
                        <h1 class="title">
                            Shipping information
                        </h1>
                        <div class="checkout__shipping-form">
                            <form action="">
                                <div class="form-group">
                                    <div class="row gx-5">
                                        <div class="col-6">
                                            <label for="">First name</label>
                                            <input type="text" placeholder="First name">
                                        </div>
                                        <div class="col-6">
                                            <label for="">Last name</label>
                                            <input type="text" placeholder="Last name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Phone No.</label>
                                    <input type="phone" placeholder="Phone No.">
                                </div>
                                <div class="form-group">
                                    <label for="">Address</label>
                                    <input type="text" placeholder=" Your address">
                                </div>

                                <div class="form-group">
                                    <div class="row gx-5">
                                        <div class="col-6">
                                            <label for="">Province/City</label>
                                            <select name="" id="">
                                                <option value="">City</option>
                                                <option value="">Ha Noi</option>
                                                <option value="">HCM</option>
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <label for="">Select District</label>
                                            <select name="" id="">
                                                <option value="">District</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Additional Note</label>
                                    <textarea placeholder="Add additional Notes"></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="checkout__payment">
                        <h3 class="title">
                            Payment
                        </h3>
                        <form action="">
                            <div class="form-group">
                                <div class="left">
                                    <input type="radio" name="payment" id="cash">
                                    <label for="cash">Cash on delivery (COD)</label>
                                </div>
                                <span class="price">
                                    $0.00
                                </span>
                            </div>
                            <div class="form-group">
                                <div class="left">
                                    <input type="radio" name="payment" id="momo">
                                    <label for="momo">Payment MOMO</label>
                                </div>
                                <span class="price">
                                    $+15.00
                                </span>
                            </div>
                            <div class="form-group">
                                <div class="left">
                                    <input type="radio" name="payment" id="vnpay">
                                    <label for="vnpay">VN Pay</label>
                                </div>
                                <span class="price">
                                    $+15.00
                                </span>
                            </div>
                            <div class="form-group">
                                <div class="left">
                                    <input type="radio" name="payment" id="mastercard">
                                    <label for="mastercard">MAster card</label>
                                </div>
                                <span class="price">
                                    $+15.00
                                </span>
                            </div>
                            <div class="form-group">
                                <div class="left">
                                    <input type="radio" name="payment" id="visa">
                                    <label for="visa">Payment Visa</label>
                                </div>
                                <span class="price">
                                    $+15.00
                                </span>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="checkout__summary">
                        <h3 class="title">
                            Order summary
                        </h3>
                        <div class="mini__cart-list">
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
                                                <button type="button" class="minus">-</button>
                                                <input type="number" class="qty" id="" value="1"
                                                    min="1" max="100000">
                                                <button type="button" class="plus">+</button>
                                            </div>

                                        </form>

                                        <div class="item__info-price d-flex align-items-center">
                                            <span class="price">
                                                $80.00
                                            </span>
                                            <a href="javascript:void(0)" class="item-remove"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkout-coupon">
                            <form action="">
                                <input type="text" placeholder="INPUT">
                                <button type="submit">Apply</button>
                            </form>
                        </div>
                        <div class="list-available-coupon">
                            <h4 class="coupon-title w-100">
                                Available Coupons
                            </h4>
                            <?php 
                             for ($i = 0; $i < 3; $i++) {
                             ?>
                            <div class="product-coupon">
                                <div class="coupon-item">
                                    <p>
                                        Claim
                                    </p>
                                    <p>
                                        50% OFF
                                    </p>
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
                                    <td>
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
                        <div class="checkout__summary-bottom">
                            <div class="checkout__summary-desc">
                            Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="#">privacy policy</a>. 
                            </div>
                            <button type="submit">
                            Place order
                            </button>
                        </div>
                    </div>
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

<?php
include "footer.php";
?>