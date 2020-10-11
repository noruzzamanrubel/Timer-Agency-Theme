<?php get_header(); ?>
<?php

if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>

==================================================
Global Page Section Start
================================================== -->
<section class="global-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2><?php the_title();?></h2>
                    <div class="portfolio-meta">
                        <span><?php the_time( 'F j, Y' ) ;?></span>
                        <span> Category : <?php the_category(',') ;?> </span>
                        <span> Tags : <a href="<?php the_permalink( );?>"> <?php the_tags('');?></a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/#Page header-->

<section class="portfolio-single">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="portfolio-single-img">
                    <?php the_post_thumbnail('full', array('class'=>'img-responsive')); ?>
                </div>
                <div class="portfolio-content">
                    <?php the_content(); ?>
                </div>
             
            </div>
        </div>
    </div>
</section>

<section class="works works-fit">
    <div class="container">
        <h2 id="portfolio_title" class="subtitle"><?php echo esc_html(get_theme_mod('timer_portfolio_ttl')); ?></h2>
            <p id="postfolio_sub_title" class="subtitle-des">
                <?php echo wp_kses_post(get_theme_mod('timer_portfolio_sub_head_tta'))  ?>
            </p>
        <div class="row">
            <?php
                global $post;
                $args = array( 'posts_per_page' => 4, 'post_type'=> 'portfolio', 'orderby' => 'menu_order', 'order' => 'ASC' );
                $myposts = get_posts( $args );
                foreach( $myposts as $post ) : setup_postdata($post); ?>
            <div class="col-sm-3">
                 <figure class="wow fadeInLeft animated portfolio-item animated" data-wow-duration="300ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 0ms; -webkit-animation-delay: 0ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                    <div class="img-wrapper">
                        <?php the_post_thumbnail('custom',array('class'=> 'img-responsive')); ?>
                        <div class="overlay">
                            <div class="buttons">
                            <a rel="gallery" class="fancybox" href="<?php 
                                 $att_id=get_post_thumbnail_id();
                                 echo wp_get_attachment_image_url($att_id,'full');
                                  
                                ?>">Demo</a>
                                <a target="_blank" href="<?php the_permalink();?>">Details</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="<?php the_permalink();?>">
                                <?php the_title(); ?>   
                            </a>
                        </h4>
                        <?php the_excerpt() ?>
                    </figcaption>
                </figure>
            </div>
        <?php endforeach; wp_reset_query(); ?>
        </div>
    </div>
</section>   

<?php endwhile; endif; ?>

<?php get_footer(); ?>