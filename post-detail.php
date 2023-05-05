<?php
include "header.php";
?>

<main>
    <section class="post__heading">
        <div class="container">
            <p class="post-category">
                Fashion
            </p>
            <h1 class="post-title">
                This summer fashion trends
            </h1>
            <div class="post__info">
                <span class="post__info-author">
                    Danny Roman
                </span>
                <span class="post__info-time">
                    Today 11:43pm
                </span>
            </div>
        </div>
    </section>
    <section class="post__content">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-9">
                    <div class="post__content-detail">
                        <div class="post__content-img">
                            <img src="./assets/images/post.png" alt="">
                        </div>
                        <div class="post__content-desc ws-sgct">
                            <p>
                                Nayzak, everyone in my team works towards the samegoal. This enabled
                                our teams to ship new ideas and feel more capable. Podcasting
                                operational — change management inside of workflows. Completely
                                synergize.
                            </p>
                            <p>
                                But I must explain to you how all this mistaken idea of denouncing
                                pleasure and praising pain was born and I will give you a complete
                                account of the system, and expound the actual teachings of the great
                                explorer of the truth, the master-builder of human happiness. No one
                                rejects, dislikes, or avoids pleasure itself
                            </p>
                            <p>
                                On the other hand, we denounce with righteous indignation and
                                dislike men who are so beguiled and demoralized by the charms of
                                pleasure of the moment, so blinded by desire, that they cannot
                                foresee the pain and trouble that are bound to ensue; and equal
                                blame belongs to those who fail in their duty through weakness of
                                will, which is the same as saying through.
                            </p>
                            <blockquote>
                                Nayzak, everyone in my team works towards the samegoal. This enabled
                                our teams to ship new ideas and feel more capable. Podcasting
                                operational
                                <p>
                                    — Carl Sagan
                                </p>
                            </blockquote>
                            <h3>
                                Keep your everyday on trend
                            </h3>
                            <p>
                                Nayzak, everyone in my team works towards the samegoal. This enabled
                                our teams to ship new ideas and feel more capable. Podcasting
                                operational — change management inside of workflows. Completely
                                synergize.
                            </p>
                            <p>
                                But I must explain to you how all this mistaken idea of denouncing
                                pleasure and praising pain was born and I will give you a complete
                                account of the system, and expound the actual teachings of the great
                                explorer of the truth, the master-builder of human happiness. No one
                                rejects, dislikes, or avoids pleasure itself
                            </p>
                            <figure>
                                <img src="./assets/images/post2.png" alt="">
                                <figcaption>
                                    Nayza’s Figma builder — Design your next ecommerce project
                                    instantly
                                </figcaption>
                            </figure>
                            <p>
                                Nayzak, everyone in my team works towards the samegoal. This enabled
                                our teams to ship new ideas and feel more capable. Podcasting
                                operational — change management inside of workflows. Completely
                                synergize.
                            </p>
                            <p>
                                But I must explain to you how all this mistaken idea of denouncing
                                pleasure and praising pain was born and I will give you a complete
                                account of the system, and expound the actual teachings of the great
                                explorer of the truth, the master-builder of human happiness. No one
                                rejects, dislikes, or avoids pleasure itself
                            </p>
                        </div>
                        <div class="post__content-bottom">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="post__content-tag">
                                        <strong>Tags: </strong>
                                        <!-- list tags -->
                                        <a href="">Fashion </a>,
                                        <a href="">Summer</a>,
                                        <a href="">Trending</a>,
                                        <a href="">Featured</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="post__content-share">
                                        <strong>Share:</strong>
                                        <ul class="d-flex justify-content-lg-end">
                                            <li class="fb">
                                                <a href="#">
                                                    <?php echo svg('facebook', '18','18') ?></a>
                                            </li>
                                            <li class="ins">
                                                <a href="#">
                                                    <?php echo svg('instagram', '18','18') ?></a>
                                            </li>
                                            <li class="tw">
                                                <a href="#">
                                                    <?php echo svg('twitter', '18','18') ?></a>
                                            </li>
                                            <li class="mail">
                                                <a href="mailto:demo@gmail.com">
                                                    <?php echo svg('email', '18','18') ?></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="post__control">
                                <div class="row">
                                    <div class="col-lg-4 col-5">
                                        <div class="post__control-item left">
                                            <a href="">
                                                <p class="left-arr arr">
                                                    Previous
                                                </p>
                                                <div class="post-item">
                                                    <div class="img">
                                                        <img src="./assets/images/post3.png" alt="">
                                                    </div>
                                                    <div class="desc">
                                                        <div class="desc-ct">
                                                            This summer’s greatest fashion trends
                                                            This summer’s greatest
                                                        </div>

                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-2">

                                    </div>
                                    <div class="col-lg-4 col-5">
                                        <div class="post__control-item right">
                                            <a href="">
                                                <p class="right-arr arr">
                                                    Next
                                                </p>
                                                <div class="post-item">
                                                    <div class="img">
                                                        <img src="./assets/images/post4.png" alt="">
                                                    </div>
                                                    <div class="desc">
                                                        <div class="desc-ct">
                                                            This summer’s greatest fashion trends
                                                            This summer’s greatest
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="article__alsolike">
                        <h2 class="article-heading text-start">
                            You might also like...
                        </h2>
                        <div
                            class="article__list mb-5 row row-cols-lg-3 row-cols-md-2 row-cols-1 g-5">
                            <?php 
                 for ($i = 0; $i < 3; $i++) {
                 ?>
                            <div class="article__item col">
                                <div class="article__item-img">
                                    <a href="" class="c-img scale-hover">
                                        <img src="./assets/images/post-img.png" alt="">
                                    </a>
                                </div>
                                <div class="article__item-desc">
                                    <div class="date">
                                        October 12, 2024
                                    </div>
                                    <h3 class="article__item-name">
                                        <a href="">
                                            3 Instagram-Inspired Interior Design Trends to Buy,
                                            Like,
                                            Immediately
                                        </a>
                                    </h3>
                                    <a href="#" class="read-more">Read more</a>
                                </div>
                            </div>

                            <?php 
                 } 
                ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="post__content-sidebar">
                        <div class="table-of-content">
                            <h2 class="title-sidebar">
                                Table Of Content
                            </h2>
                            <ul>
                                <li>
                                    <a href="">Clothing</a>
                                </li>
                                <li>
                                    <a href="">Home & Garden</a>
                                </li>
                                <li>
                                    <a href="">Accessories</a>
                                </li>
                                <li>
                                    <a href="">Garden</a>
                                </li>
                                <li>
                                    <a href="">Kitchen</a>
                                </li>
                            </ul>
                        </div>

                        <div class="join-newsletter">
                            <h3 class="title-sidebar">
                                Join Newsletter
                            </h3>
                            <div class="sub-title">
                                Enjoy exclusive discounts and offers delivered to your inbox.
                            </div>
                            <form action="">
                                <input type="email" placeholder="Your email">
                                <button type="submit">Subscribe</button>
                            </form>
                        </div>

                        <div class="related__post">
                            <h3 class="title-sidebar">
                                Related Posts
                            </h3>
                            <div class="related__post-list">
                                <?php 
                                 for ($i = 0; $i < 4; $i++) {
                                 ?>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="" class="c-img scale-hover">
                                                <img src="./assets/images/post2.png" alt="">
                                            </a>
                                        </div>
                                        <div class="col-8">
                                            <div class="name">
                                                <a href="">
                                                    This summer’s greatest fashion trends
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <?php 
                                 } 
                                ?>

                            </div>
                        </div>

                        <div class="sidebar-tags">
                            <h3 class="title-sidebar">
                                Tags
                            </h3>
                            <a href="">Fashion</a>
                            <a href="">Beauty</a><a href="">Accessories</a><a href="">New</a><a
                                href="">On Sale</a><a href="">Trending</a><a href="">Summer</a><a
                                href="">Winter</a><a href="">Streetwear</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<?php
include "footer.php";
?>