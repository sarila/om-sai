<?php
/* Template Name: blog */
?>
​
<?php get_header(); ?>
​
​
​
​
​
​
<div class="blog-page">
    <!-- Page Banner -->
    <div class="page-banner" style="background: linear-gradient(to right, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(<?php echo the_post_thumbnail_url(); ?>); background-size: cover; background-repeat: no-repeat; background-position: center center;  padding: 68px 0;">
        <div class="container">
            <h1 class="page-title lg-title">Blog</h1>
            <div class="bread-crumbs">
                <ul class="list-none d-flex justify-content-end">
                    <li class="xs-title"><a href="<?php echo home_url('/'); ?>" class="d-inline-block text-white">Home</a></li>
                    <span class="seperator px-2 text-white"> > </span>
                    <li class="xs-title active"> Blog </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End of Page Banner -->
    <section class="blog-section bg-light py-5">
        <div class="container">
            <div class="row">
​
                <?php
                $args = array(
                    'post_type'  => 'post',
                    'post_per_page'  => 15,
                    'orderby' => 'title',
                    'order' => 'ASC'
                );
                $blogs = new WP_Query($args);
                while ($blogs->have_posts()) : $blogs->the_post();
                    ?>
                    <!-- Col -->
​
​
                    <div class="col-lg-4 col-md-12 col-12 mb-3">
                        <div class="holder p-3 bg-white box-shadow-1">
                            <div class="img-holder mb-3">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="content">
                                <div class="posted-on mb-2"><i class="ls-title text-main far fa-calendar-alt mr-3"></i><?php echo get_the_date(); ?> </div>
                                <a href="<?php the_permalink(); ?>" class="text-black title mb-3 d-inline-block"><?php the_title(); ?></a>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                            <div class="btn-wrapper">
                                <a href="<?php the_permalink(); ?>" class="button-one">ReadMore</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata(); ?>
​
            </div>
        </div>
    </section>
</div>
​
<?php get_footer(); ?>