<?php
include "header.php";
?>
<main>

    <section class="banner__page banner__article"
        style="background-image:url(./assets/images/bg-about.png)">
        <div class="container text-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog
                    </li>
                </ol>
            </nav>
            <h1 class="page-title wow fadeInUp">
                New & Guides
            </h1>
            <div class="sub-title wow fadeInUp" data-wow-delay="0.3s">
                At vero eos et accusamus et iusto odio dignissimos qui blanditiis praesentium
                voluptatum deleniti.
            </div>

            <div class="news-search wow fadeInUp" data-wow-delay="0.5s">
                <form action="">
                    <input type="text" placeholder="Search">
                    <button type="submit"> <?php echo svg('search', '20','20') ?></button>
                </form>
            </div>
        </div>
    </section>
    <section class="article__new">
        <div class="container">
            <h2 class="article-heading">
                New Articles
            </h2>
            <div class="article__list"
                data-flickity='{ "draggable": true,"wrapAround": true,"imagesLoaded": true,"prevNextButtons": false, "pageDots": true, "cellAlign": "left","contain": true, "autoPlay":false,"watchCSS": true}'>
                <?php 
                 for ($i = 0; $i < 5; $i++) {
                 ?>
                <div class="article__item">
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
                                3 Instagram-Inspired Interior Design Trends to Buy, Like,
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
    </section>
    <section class="article__fashion list-on-mb">
        <div class="container">
            <h2 class="article-heading">
                Fashion Articles
            </h2>
            <div class="article__list">
                <?php 
                 for ($i = 0; $i < 5; $i++) {
                 ?>
                <div class="article__item">
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
                                3 Instagram-Inspired Interior Design Trends to Buy, Like,
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
    </section>
    <section class="article__alsolike list-on-mb mb-5">
        <div class="container">
            <h2 class="article-heading">
                You might also like...
            </h2>
            <div class="article__list mb-5 row row-cols-lg-4 row-cols-md-2 row-cols-1 g-5">
                <?php 
                 for ($i = 0; $i < 12; $i++) {
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
                                3 Instagram-Inspired Interior Design Trends to Buy, Like,
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
            <div class="see-more-btn">
                <a href="">
                See More
                </a>
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