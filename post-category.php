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
            <div class="article__new-list">
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
</main>

<?php
include "footer.php";
?>