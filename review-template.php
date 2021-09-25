<?php
/*
* Template Name: Review Template
* Template Post Type: book-review
*/

$pluginPath ="/wp-content/plugins/nextgoodbook-plugin";
$pluginImgPath = $pluginPath."/assets/img";
$pluginJsPath = $pluginPath."/assets/js";

get_header() ?>
<main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div id="entry-inner-wrap">
        <header class="entry-header">
                <div class="post-date">AUG 29</div>
                <h1 class='entry-title'><?php the_title(); ?><span class="author">By Laura Dave</span></h1>
                <div class="page-num">303 pages</div>
                <div class="rating-stars-wrap">
                    <figure id="rating-stars">
                        <div class="rating-star div-star-full">
                            <img src="<?=$pluginImgPath?>/rating-star-full.svg" alt="">
                        </div>
                        <div class="rating-star div-star-full">
                            <img src="<?=$pluginImgPath?>/rating-star-full.svg" alt="">
                        </div>
                        <div class="rating-star div-star-full">
                            <img src="<?=$pluginImgPath?>/rating-star-full.svg" alt="">
                        </div>
                        <div class="rating-star div-star-full">
                            <img src="<?=$pluginImgPath?>/rating-star-full.svg" alt="">
                        </div>
                        <div class="rating-star div-star-full">
                            <img src="<?=$pluginImgPath?>/rating-star-full.svg" alt="">
                        </div>
                        <div class="rating-star div-star-full">
                            <img src="<?=$pluginImgPath?>/rating-star-full.svg" alt="">
                        </div>
                        <div class="rating-star div-star-full">
                            <img src="<?=$pluginImgPath?>/rating-star-full.svg" alt="">
                        </div>
                        <div class="rating-star div-star-full">
                            <img src="<?=$pluginImgPath?>/rating-star-full.svg" alt="">
                        </div>
                        <div class="rating-star div-star-half">
                            <img src="<?=$pluginImgPath?>/rating-star-half.svg" alt="">
                        </div>
                        <div class="rating-star div-star-empty">
                            <img src="<?=$pluginImgPath?>/rating-star-empty.svg" alt="">
                        </div>
                        <figcaption class="sr-only">8.5 stars</figcaption>
                    </figure>
                </div>

        </header><!-- .entry-header -->

        <div class="entry-content">
            <div class="entry-content-inner">
            <?php
            the_content();
            ?>
            </div>

            <div class="entry-content-social">
                <div class="social-box-ig">
                    <a href="https://instagram.com"><i class="fa fa-instagram"></i></a>
                </div>
                <div class="social-box-fb">
                    <a href="https://facebook.com"><i class="fa fa-facebook"></i></a>
                </div>
                <div class="social-box-twitter">
                    <a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
                </div>
            </div>
        </div><!-- .entry-content -->
        <div class="book-cover-img">
            <?php
            the_post_thumbnail('large');
            ?>
        </div>

        <div class="post-navigation">
            <p><?php posts_nav_link("","&#129044; PREVIOUS", "NEXT &#10132;"); ?></p>
        </div>
    </div>
</main><!-- #post-<?php the_ID(); ?> -->


<?php
get_footer();
?>
