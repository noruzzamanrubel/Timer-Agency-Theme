<!--
==================================================
Portfolio Section Start
================================================== -->
<section id="works" class="works">
    <div class="container">
        <div class="section-heading">
            <h1 id="latest_head" class="title wow fadeInDown" data-wow-delay=".3s"><?php echo esc_html(get_theme_mod('timer_Latest_work')); ?></h1>
            <p id="latest_p" class="wow fadeInDown" data-wow-delay=".5s">
                <?php echo wp_kses_post(get_theme_mod('timer_Latest_work_tta')); ?>
            </p>
        </div>
        <div class="row">
            <?php
            global $post;
            $args = array( 'posts_per_page' => 6, 'post_type'=> 'portfolio', 'orderby' => 'menu_order', 'order' => 'ASC' );
            $myposts = get_posts( $args );
            foreach( $myposts as $post ) : setup_postdata($post); ?>

            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                    <div class="img-wrapper">
                        <?php the_post_thumbnail('custom') ?>
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/item-1.jpg">Demo</a>
                                <a target="_blank" href="#">Details</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                    <h4>
                    <a href="#">
                        <?php the_title(); ?>
                    </a>
                    </h4>
                    <?php the_excerpt(); ?>
                    </figcaption>
                </figure>
            </div>            

            <?php endforeach; wp_reset_query(); ?>

        </div>
    </div>
</section> <!-- #works -->