<?php
include "header.php";
?>

<main>
    <section class="contact">
        <div class="container">
                <h1 class="heading-title fs-40 d-lg-block d-none">
                    thông tin liên hệ
                </h1>

                <div class="row row-cols-lg-2 row-cols-1 g-5">
                    <div class="col">
                        <div class="contact__form">
                            <h1 class="heading-title fs-40 d-lg-none">
                                thông tin liên hệ
                            </h1>
                            <div class="sub-title d-lg-none">
                                Nếu có bất kỳ câu hỏi hoặc khúc mắc, quý khách hàng
                                có thể gửi cho chúng tôi trực tiếp qua biểu mẫu bên dưới.
                            </div>
                            <form action="">
                                <div class="contact__form-inner">
                                    <h2 class="contact__title d-lg-block d-none mb-5">
                                        Gửi phản hồi
                                    </h2>
                                    <div class="form-group">
                                        <label>Họ và Tên</label>
                                        <input type="text" placeholder="Họ và Tên">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" placeholder=" Your address">
                                    </div>
                                    <div class="form-group">
                                        <label>Số điện thoại</label>
                                        <input type="tel" placeholder="Số điện thoại">
                                    </div>
                                    <div class="form-group">
                                        <label>Để lại lời nhắn</label>
                                        <textarea placeholder="Add additional Notes"></textarea>
                                    </div>
                                </div>

                                <div class="form-group text-lg-end mt-lg-4 mt-5">
                                    <button type="submit">Sumbit</button>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="col">
                        <div class="contact__info">
                            <div class="contact__info-item contact-phone">
                                <h3 class="contact__title">
                                    hotline
                                </h3>
                                <div class="contact__info-desc">
                                    Số điện thoại tư vấn khách hàng
                                    và xử lý khiếu nại. Hoạt động từ thứ 2 đến thứ 7
                                    (8h-18h)
                                </div>
                                <div class="contact__info-main">
                                    <a href="tel:+84973151492">+84 973 151 492</a>
                                </div>
                            </div>
                            <div class="contact__info-item contact-zalo">
                                <h3 class="contact__title">
                                zalo
                                </h3>
                                <div class="contact__info-desc">
                                    Số điện thoại tư vấn khách hàng
                                    và xử lý khiếu nại. Hoạt động từ thứ 2 đến thứ 7
                                    (8h-18h)
                                </div>
                                <div class="contact__info-main">
                                    <a href="tel:+84973151492">+84 973 151 492</a>
                                </div>
                            </div>
                            <div class="contact__info-item contact-mail">
                                <h3 class="contact__title">
                                Email
                                </h3>
                                <div class="contact__info-desc">
                                    Số điện thoại tư vấn khách hàng
                                    và xử lý khiếu nại. Hoạt động từ thứ 2 đến thứ 7
                                    (8h-18h)
                                </div>
                                <div class="contact__info-main">
                                    <a href="mailto:demo@gmail.com">demo@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </section>
    <section class="contact__map">
        <div class="container">
            <div class="container__map-box">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14897.270886685072!2d105.8399351!3d21.0199695!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9926e7bd67%3A0x580e078874d5df1e!2sTemple%20Of%20Literature!5e0!3m2!1sen!2s!4v1684381378096!5m2!1sen!2s"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <section class="contact__faq">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="contact__faq-title text-uppercase">
                        <p class="sup-title ">
                            FAQ
                        </p>
                        <h3 class="title fw-bold">
                            Câu hỏi thường gặp
                        </h3>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact__faq-list">
                        <?php 
                         for ($i = 0; $i < 5; $i++) {
                         ?>
                        <div class="contact__faq-item">
                            <h3 class="contact__faq-name">
                                Top Fans
                            </h3>
                            <div class="desc ws-sgct">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                    enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                    nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                    sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                                <p>
                                    But I must explain to you how all this mistaken idea of
                                    denouncing pleasure and praising pain was born and I will give
                                    you a complete account of the system, and expound the actual
                                    teachings of the great explorer of the truth, the master-builder
                                    of human happiness. No one rejects, dislikes
                                </p>
                                <p>
                                    Nor again is there anyone who loves or pursues or desires to
                                    obtain pain of itself, because it is pain, but because
                                    occasionally circumstances occur in which toil and pain can
                                    procure him some great pleasure. To take a trivial example,
                                    which of us ever undertakes laborious physical exercise,
                                </p>
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